<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{   $user = $_SESSION['ccs'];
	    if ($user != true || empty($user)){
            $this->session->set_flashdata('error', 'Session has Expired');
	        redirect('');
        }

	    $data = array(
        "user" => $user,
	    "sub_title" => "INSERT",
        "content_view" => "form",
        "content" => "Please insert your data"
        );
		$this->load->view('home', $data);
	}

	public function table() {
        $user = $_SESSION['ccs'];
        if ($user != true || empty($user)){
            $this->session->set_flashdata('error', 'Session has Expired');
            redirect('');
        }
	    $ccs_x = '';
	    $ccs_xx = '';
	    $ccs_xxx = '';
	    $query_attendance = $this->db->query("SELECT begin_date,begin_ip,end_date,end_ip FROM attendance WHERE user = '$user'");
	    $query_absence = $this->db->query("SELECT begin_date,end_date,motive,status FROM absence WHERE user = '$user'");
	    $query_expense = $this->db->query("SELECT date,amount,motive,url FROM expense WHERE user = '$user'");
	    $ccs_one = $query_attendance->result_array();
	    $ccs_two = $query_absence->result_array();
	    $ccs_three = $query_expense->result_array();

	    foreach ($ccs_one as $ccs){
	        $ccs_x .= '<tr>
                       <td>'.$ccs["begin_date"].'</td>
                       <td>'.$ccs["begin_ip"].'</td>
                       <td>'.$ccs["end_date"].'</td>
                       <td>'.$ccs["end_ip"].'</td>
                       </tr>';

        };

	    foreach ($ccs_two as $ccs){
	      $ccs_xx .='<tr>
                        <td>'.$ccs["begin_date"].'</td>
                        <td>'.$ccs["end_date"].'</td>
                        <td>'.$ccs["motive"].'</td>
                        <td>'.$ccs["status"].'</td>
                     </tr>';
        };

        foreach ($ccs_three as $ccs){
            $ccs_xxx .='<tr>
                        <td>'.$ccs["date"].'</td>
                        <td>'.$ccs["amount"].'</td>
                        <td>'.$ccs["motive"].'</td>     
                        <td><a target="_blank" href="'.$ccs["url"].'">'.$ccs["url"].'</a></td>                    
                     </tr>';
        };

	    $data = array("sub_title" => "LIST",
            "user" => $user,
            "content_view" => "list",
            "content" => "please see all your attendance, absence, expense",
            "tbl_attendance" => $ccs_x,
            "tbl_absence" => $ccs_xx,
            "tbl_expense" => $ccs_xxx,
        );
	    $this->load->view('home', $data);
    }




}
