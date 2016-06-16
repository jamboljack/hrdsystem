<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outbox extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('mail/outbox_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->outbox_model->select_all()->result();
			$this->template->display('mail/outbox_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$data['companylist'] = $this->outbox_model->select_company()->result();
		$this->template->display('mail/outbox_add_view', $data);
	}
	
	public function savedata() {
		$this->form_validation->set_rules('lstCompany','<b>Company</b>','trim|required');
		$this->form_validation->set_rules('mail_no','<b>Mail No</b>','trim|required|is_unique[hrd_mail_outbox.outbox_no]');
		$this->form_validation->set_rules('title','<b>Title</b>','trim|required');		
		$this->form_validation->set_rules('date_mail','<b>Date</b>','trim|required');
		$this->form_validation->set_rules('desc','<b>Description</b>','trim|required');		

		if ($this->form_validation->run() == FALSE) {
			$data['companylist'] = $this->outbox_model->select_company()->result();
			$this->template->display('mail/outbox_add_view', $data);
		} else {
			$this->outbox_model->insert_data();
 			redirect(site_url('mail/outbox'));
		}
	}
	
	public function editdata($outbox_id) {
		$data['companylist'] 	= $this->outbox_model->select_company()->result();		
		$data['detail'] 		= $this->outbox_model->select_by_id($outbox_id)->row();
		$this->template->display('mail/outbox_edit_view', $data);
	}
	
	public function updatedata() {		
		$this->outbox_model->update_data();
 		redirect(site_url('mail/outbox'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('mail/outbox'));
		} else {
			$this->outbox_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."mail/outbox\">";
		}
	}	
}
/* Location: ./application/controller/mail/Outbox.php */