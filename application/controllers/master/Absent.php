<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absent extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('master/absent_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->absent_model->select_all()->result();			
			$this->template->display('master/absent_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$this->template->display('master/absent_add_view');
	}
	
	public function savedata() {
		$this->absent_model->insert_data();
		$this->session->set_flashdata('notification','Save Data Success.');
 		redirect(site_url('master/absent'));		
	}
	
	public function editdata($absent_id) {
		$data['detail'] = $this->absent_model->select_by_id($blood_id)->row();
		$this->template->display('master/absent_edit_view', $data);
	}
	
	public function updatedata() {
		$this->absent_model->update_data();
		$this->session->set_flashdata('notification','Update Data Success.');
 		redirect(site_url('master/absent'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('master/absent'));
		} else {
			$this->absent_model->delete_data($kode);
			$this->session->set_flashdata('notification','Delete Data Success.');
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."master/absent\">";
		}
	}	
}
/* Location: ./application/controller/master/Absent.php */