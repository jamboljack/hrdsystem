<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sender extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('mail/sender_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->sender_model->select_all()->result();
			$this->template->display('mail/sender_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}
	
	public function savedata() {
		$this->sender_model->insert_data();
 		redirect(site_url('mail/sender'));	
	}

	public function updatedata() {
		$this->sender_model->update_data();
 		redirect(site_url('mail/sender'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('mail/sender'));
		} else {
			$this->sender_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."mail/sender\">";
		}
	}	
}
/* Location: ./application/controller/mail/Sender.php */