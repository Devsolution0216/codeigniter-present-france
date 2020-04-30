<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    require ('fpdf.php');

    class Auth extends CI_Controller
    {
        public function __construct(){
            parent:: __construct();
            ob_start();
            $this->load->helper('security');
            $this->load->helper('date');
            $this->load->helper('url', 'form');
        }

        public function index(){
            $this->load->view('login');
        }

        public function login(){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = do_hash($password);
            $query = $this->db->query("SELECT * FROM users WHERE pd = '$password' AND users = '$username' ");
            if ($query->num_rows() == 1){
                $this->session->set_userdata('ccs', $username);
                $data = 'success';
                echo json_encode($data);
            } else {
                $data = 'fail';
                echo json_encode($data);
            }
        }

        public function logout(){
            $this->session->sess_destroy();
            ob_clean();
            redirect('');
        }

        public function punch() {
            $ccs = $_POST['ccs'];
            $ip = $this->get_client_ip();
            $user = $_SESSION['ccs'];
            date_default_timezone_set("Asia/Jerusalem");
            $datetime = date("Y-m-d h:i:sa");

            if ($ccs == 'punch_in') {
                $query = $this->db->query("INSERT INTO attendance(user,begin_date,begin_ip) VALUES('$user','$datetime','$ip')");
                if ($query == 'true'){
                    echo 'success';
                } else {
                    echo 'fail';
                }
            } elseif($ccs == 'punch_out') {
                $query = $this->db->query("UPDATE attendance SET end_date = '$datetime', end_ip = '$ip' WHERE user = '$user'");
                if($query = 'true'){
                    echo 'success';
                } else {
                    echo 'fail';
                }
            }

        }

        public function validate_do(){
            $user = $_SESSION['ccs'];
            $begin_date = $_POST['begin_date'];
            $end_date = $_POST['end_date'];
            $ab_motive = $_POST['ab_motive'];
            $query = $this->db->query("INSERT INTO absence(user,begin_date,end_date,motive) VALUE('$user','$begin_date','$end_date','$ab_motive')");
            if($query == 'true'){
                $data = 'success';
                echo json_encode($data);
            } else {
                $data = 'fail';
                echo json_encode($data);
            }
        }

        public function Do_upload() {
            $user = $_SESSION['ccs'];
            $date = $_POST['expense_date'];
            $amount = $_POST['expense_amount'];
            $motive = $_POST['expense_motive'];
            if ($_FILES['file']['name'] == ""){
                echo "Please select file to Upload";exit;
            } elseif ($date == "" || $amount == "" || $motive == ""){
                echo "Please confirm fields";exit;
            }
            $query = $this->db->query("INSERT INTO expense(user,date,amount,motive) VALUE('$user','$date','$amount','$motive')");
            $query_id = $this->db->insert_id();
            $convert_date = str_replace("/", "_",$date);
            $receipt_name = preg_split("/\./",$_FILES['file']['name']);
            $receipt_name['0'] =$user."_"."doc"."_".$query_id;
            $expense_date = preg_split("/\_/",$convert_date);
            $file_path = 'Receipts/'.$expense_date['0']."_".$expense_date['1'];
            $destinationFilePath = $file_path.'/'.$receipt_name['0'].".pdf";
            $query_second = $this->db->query("UPDATE expense SET url = '$destinationFilePath' WHERE id = $query_id");
            $file = $_FILES['file']['tmp_name'];
            $pdf = new FPDF();
            $pdf ->AddPage();
            if(!is_dir($file_path)){
                mkdir($file_path, 0777, true);
            }
            if ($query == 'true' || $query_second == 'true') {
                if ($receipt_name['1'] == "jpg") {
                    $pdf->Image($file, 20, 20, 170, 170, 'jpg');
                    $pdf->Output($destinationFilePath, 'F');
                    redirect('/home');
                } else if ($receipt_name['1'] == "png") {
                    $pdf->Image($file, 20, 20, 170, 170, 'png');
                    $pdf->Output($destinationFilePath, 'F');
                    redirect('/home');

                } else {
                    move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath);
                    redirect('/home');

                }
            } else{
                echo "fail";
            }

        }


        public function get_client_ip() {
            $ipaddress = '';
            if (getenv('HTTP_CLIENT_IP'))
                $ipaddress = getenv('HTTP_CLIENT_IP');
            else if(getenv('HTTP_X_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            else if(getenv('HTTP_X_FORWARDED'))
                $ipaddress = getenv('HTTP_X_FORWARDED');
            else if(getenv('HTTP_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            else if(getenv('HTTP_FORWARDED'))
                $ipaddress = getenv('HTTP_FORWARDED');
            else if(getenv('REMOTE_ADDR'))
                $ipaddress = getenv('REMOTE_ADDR');
            else
                $ipaddress = '';
            return $ipaddress;
        }


    }