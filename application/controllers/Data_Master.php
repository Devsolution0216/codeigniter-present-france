<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Master extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('DataMaster_Mahasiswa');
		$this->md_mhs = $this->DataMaster_Mahasiswa;

		$this->load->model('DataMaster_MataKuliah');
		$this->md_mk = $this->DataMaster_MataKuliah;

		$this->load->model('DataMaster_Nilai');
		$this->md_nilai = $this->DataMaster_Nilai;
	}

	public function index()
	{
		redirect( base_url() );
	}

	public function mahasiswa()
	{
		$data['list_mhs'] = $this->md_mhs->list_all();
		$this->load->view('datamaster_mahasiswa', $data);
	}

	public function matakuliah()
	{
		$data['list_mk'] = $this->md_mk->list_all();
		$this->load->view('datamaster_matakuliah', $data);
	}

	public function nilai()
	{
		$data['list_nilai'] = $this->md_nilai->list_all();
		$this->load->view('datamaster_nilai', $data);
	}

	public function add_new() {

		if( empty($this->uri->segment('3'))) {
			redirect( base_url() );
		}

		$name=$this->uri->segment('3');
			
		switch ($name) {
			case 'mhs':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$nama_mahasiswa= $this->security->xss_clean( $this->input->post('nama_mahasiswa') );
					// validasi
					$this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert', 'Gagal membuat data mahasiswa baru');
						redirect( base_url('data_master/add_new/' . $name) );
					}
					// to-do
					$this->md_mhs->add_new($nama_mahasiswa);
					redirect( base_url('data_master/mahasiswa') );
				}
				break;
			case 'mk':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$nama_matakuliah= $this->security->xss_clean( $this->input->post('nama_matakuliah') );
					// validasi
					$this->form_validation->set_rules('nama_matakuliah', 'Nama Mata Kuliah', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert', 'Gagal membuat data mata kuliah baru');
						redirect( base_url('data_master/add_new/' . $name) );
					}
					// to-do
					$this->md_mk->add_new($nama_matakuliah);
					redirect( base_url('data_master/matakuliah') );
				}
				break;
			case 'nilai':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$id_mahasiswa= $this->security->xss_clean( $this->input->post('id_mahasiswa') );
					$id_matakuliah= $this->security->xss_clean( $this->input->post('id_matakuliah') );
					$nilai= $this->security->xss_clean( $this->input->post('nilai') );
					// validasi
					$this->form_validation->set_rules('id_mahasiswa', 'ID Mahasiswa', 'required');
					$this->form_validation->set_rules('id_matakuliah', 'ID Mata Kuliah', 'required');
					$this->form_validation->set_rules('nilai', 'Nilai', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert', 'Gagal membuat data nilai mata kuliah');
						redirect( base_url('data_master/add_new/' . $name) );
					}
					// to-do
					$this->md_nilai->add_new($id_mahasiswa,$id_matakuliah,$nilai);
					redirect( base_url('data_master/nilai') );
				}
				$data['list_mhs'] = $this->md_mhs->list_all();
				$data['list_mk'] = $this->md_mk->list_all();
				break;
			
			default:
				redirect( base_url() );
				break;
		}

		$data['name'] = $name;

		$this->load->view('datamaster_addnew', $data);

	}

	public function edit() {

		if( empty($this->uri->segment('3'))) {
			redirect( base_url() );
		}

		if( empty($this->uri->segment('4'))) {
			redirect( base_url() );
		}

		$name=$this->uri->segment('3');
		$id=$this->uri->segment('4');
		
		switch ($name) {
			case 'mhs':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$id_mahasiswa= $this->security->xss_clean( $this->input->post('id_mahasiswa') );
					$nama_mahasiswa= $this->security->xss_clean( $this->input->post('nama_mahasiswa') );
					// validasi
					$this->form_validation->set_rules('id_mahasiswa', 'ID Mahasiswa', 'required');
					$this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert', 'Gagal mengubah data mahasiswa');
						redirect( base_url('data_master/edit/'.$name.'/' . $id) );
					}
					// to-do
					$this->md_mhs->update($id_mahasiswa,$nama_mahasiswa);
					redirect( base_url('data_master/mahasiswa') );
				}
				$data['id_mahasiswa'] = $this->md_mhs->get_data($id)->id_mahasiswa;
				$data['nama_mahasiswa'] = $this->md_mhs->get_data($id)->nama_mahasiswa;
				break;
			case 'mk':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$id_matakuliah= $this->security->xss_clean( $this->input->post('id_matakuliah') );
					$nama_matakuliah= $this->security->xss_clean( $this->input->post('nama_matakuliah') );
					// validasi
					$this->form_validation->set_rules('id_matakuliah', 'ID Mata Kuliah', 'required');
					$this->form_validation->set_rules('nama_matakuliah', 'Nama Mata Kuliah', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert', 'Gagal mengubah data mata kuliah');
						redirect( base_url('data_master/edit/'.$name.'/' . $id) );
					}
					// to-do
					$this->md_mk->update($id_matakuliah,$nama_matakuliah);
					redirect( base_url('data_master/matakuliah') );
				}
				$data['id_matakuliah'] = $this->md_mk->get_data($id)->id_matakuliah;
				$data['nama_matakuliah'] = $this->md_mk->get_data($id)->nama_matakuliah;
				break;
			case 'nilai':
				if( $_SERVER['REQUEST_METHOD'] == 'POST') {
					$id_nilai= $this->security->xss_clean( $this->input->post('id_nilai') );
					$id_mahasiswa= $this->security->xss_clean( $this->input->post('id_mahasiswa') );
					$id_matakuliah= $this->security->xss_clean( $this->input->post('id_matakuliah') );
					$nilai= $this->security->xss_clean( $this->input->post('nilai') );
					// validasi
					$this->form_validation->set_rules('id_nilai', 'ID Nilai', 'required');
					$this->form_validation->set_rules('id_mahasiswa', 'ID Mahasiswa', 'required');
					$this->form_validation->set_rules('id_matakuliah', 'ID Mata Kuliah', 'required');
					$this->form_validation->set_rules('nilai', 'Nilai', 'required');
					if(!$this->form_validation->run()) {
						$this->session->set_flashdata('msg_alert', 'Gagal membuat data nilai mata kuliah');
						redirect( base_url('data_master/edit/'.$name.'/' . $id) );
					}
					// to-do
					$this->md_nilai->update($id_nilai,$id_mahasiswa,$id_matakuliah,$nilai);
					redirect( base_url('data_master/nilai') );
				}
				$data['id_nilai'] = $this->md_nilai->get_data($id)->id_nilai;
				$data['id_mahasiswa'] = $this->md_nilai->get_data($id)->id_mahasiswa;
				$data['id_matakuliah'] = $this->md_nilai->get_data($id)->id_matakuliah;
				$data['nilai'] = $this->md_nilai->get_data($id)->nilai;
				$data['list_mhs'] = $this->md_mhs->list_all();
				$data['list_mk'] = $this->md_mk->list_all();
				break;
			
			default:
				redirect( base_url() );
				break;
		}

		$data['id'] = $id;
		$data['name'] = $name;

		$this->load->view('datamaster_edit', $data);

	}

	public function delete() {

		if( empty($this->uri->segment('3'))) {
			redirect( base_url() );
		}

		if( empty($this->uri->segment('4'))) {
			redirect( base_url() );
		}

		$name=$this->uri->segment('3');
		$id=$this->uri->segment('4');

		switch ($name) {
			case 'mhs':
				$this->md_mhs->delete($id);
				$this->session->set_flashdata('msg_alert', 'Data mahasiswa berhasil dihapus');
				redirect( base_url('data_master/mahasiswa') );
				break;
			case 'mk':
				$this->md_mk->delete($id);
				$this->session->set_flashdata('msg_alert', 'Data mata kuliah berhasil dihapus');
				redirect( base_url('data_master/matakuliah') );
				break;
			case 'nilai':
				$this->md_nilai->delete($id);
				$this->session->set_flashdata('msg_alert', 'Data nilai berhasil dihapus');
				redirect( base_url('data_master/nilai') );
				break;
			
			default:
				redirect( base_url() );
				break;
		}

	}

}

/* End of file Data_Master.php */
/* Location: ./application/controllers/Data_Master.php */