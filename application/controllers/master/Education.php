<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('home_model');		
		$this->load->model('master/education_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->education_model->select_all()->result();
			$this->template->display('master/education_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$this->template->display('master/education_add_view');
	}
	
	public function savedata() {
		$this->education_model->insert_data();
		$this->session->set_flashdata('notification','Save Data Success.');
 		redirect(site_url('master/education'));		
	}
	
	public function editdata($education_id) {
		$data['detail'] = $this->education_model->select_by_id($education_id)->row();
		$this->template->display('master/education_edit_view', $data);
	}
	
	public function updatedata() {
		$this->education_model->update_data();
		$this->session->set_flashdata('notification','Update Data Success.');
 		redirect(site_url('master/education'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('master/education'));
		} else {
			$this->education_model->delete_data($kode);
			$this->session->set_flashdata('notification','Delete Data Success.');
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."master/education\">";
		}
	}	
}
/* Location: ./application/controller/master/Education.php */