<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('practice/school_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->school_model->select_all()->result();
			$this->template->display('practice/school_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {		
		$this->template->display('practice/school_add_view');
	}
	
	public function savedata() {
		$this->form_validation->set_rules('name','<b>Name</b>','trim|required|is_unique[hrd_practice_school.school_name]');
		$this->form_validation->set_rules('address','<b>Address</b>','trim|required');		
		$this->form_validation->set_rules('phone','<b>Phone</b>','trim|required');
		$this->form_validation->set_rules('email','<b>Email</b>','trim|required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->template->display('practice/users_add_view');
		} else {
			$this->school_model->insert_data();
	 		redirect(site_url('practice/school'));
 		}
	}
	
	public function editdata($users_id) {		
		$data['detail'] 		= $this->school_model->select_by_id($users_id)->row();
		$this->template->display('practice/school_edit_view', $data);
	}

	public function updatedata() {
		$this->school_model->update_data();
 		redirect(site_url('practice/school'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));

		if ($kode == null) {
			redirect(site_url('practice/school'));
		} else {
			$this->school_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."practice/school\">";
		}
	}
}
/* Location: ./application/controller/practice/School.php */