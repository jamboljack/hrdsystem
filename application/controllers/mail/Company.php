<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('mail/company_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->company_model->select_all()->result();
			$this->template->display('mail/company_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}
	
	public function savedata() {
		$this->company_model->insert_data();
 		redirect(site_url('mail/company'));	
	}

	public function updatedata() {
		$this->company_model->update_data();
 		redirect(site_url('mail/company'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('mail/company'));
		} else {
			$this->company_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."mail/company\">";
		}
	}	
}
/* Location: ./application/controller/mail/Company.php */