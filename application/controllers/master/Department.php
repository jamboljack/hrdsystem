<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('home_model');
		$this->load->model('master/department_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->department_model->select_all()->result();
			$this->template->display('master/department_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$this->template->display('master/department_add_view');
	}
	
	public function savedata() {
		$this->department_model->insert_data();
		$this->session->set_flashdata('notification','Save Data Success.');
 		redirect(site_url('master/department'));		
	}
	
	public function editdata($department_id) {
		$data['detail'] = $this->department_model->select_by_id($department_id)->row();
		$this->template->display('master/department_edit_view', $data);
	}
	
	public function updatedata() {
		$this->department_model->update_data();
		$this->session->set_flashdata('notification','Update Data Success.');
 		redirect(site_url('master/department'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('master/department'));
		} else {
			$this->department_model->delete_data($kode);
			$this->session->set_flashdata('notification','Delete Data Success.');
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."department\">";
		}
	}	
}
/* Location: ./application/controller/master/Department.php */