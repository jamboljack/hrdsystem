<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->model('emp/company_model');	
	}

	public function index()
	{
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
	}
	
	public function savedata() {
		$this->company_model->insert_data();
 		redirect(site_url('emp/employee/editdata/'.$this->uri->segment(4)));
	}
	
	public function updatedata() {
		$this->company_model->update_data();
 		redirect(site_url('emp/employee/editdata/'.$this->uri->segment(4)));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(5));
		
		if ($kode == null) {
			redirect(site_url('emp/employee/editdata/'.$this->uri->segment(4)));
		} else {
			$this->company_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."emp/employee/editdata/".$this->uri->segment(4)."\">";
		}
	}	
}
/* Location: ./application/controller/emp/Company.php */