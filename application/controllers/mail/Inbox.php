<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('mail/inbox_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->inbox_model->select_all()->result();
			$this->template->display('mail/inbox_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$data['companylist'] = $this->inbox_model->select_company()->result();
		$this->template->display('mail/inbox_add_view', $data);
	}
	
	public function savedata() {
		$this->form_validation->set_rules('lstCompany','<b>Company</b>','trim|required');
		$this->form_validation->set_rules('mail_no','<b>Mail No</b>','trim|required|is_unique[hrd_mail_inbox.inbox_no]');
		$this->form_validation->set_rules('title','<b>Title</b>','trim|required');		
		$this->form_validation->set_rules('date_mail','<b>Date</b>','trim|required');
		$this->form_validation->set_rules('desc','<b>Description</b>','trim|required');		

		if ($this->form_validation->run() == FALSE) {
			$data['companylist'] = $this->inbox_model->select_company()->result();
			$this->template->display('mail/inbox_add_view', $data);
		} else {
			$this->inbox_model->insert_data();
 			redirect(site_url('mail/inbox'));
		}
	}
	
	public function editdata($inbox_id) {
		$data['companylist'] 	= $this->inbox_model->select_company()->result();		
		$data['detail'] 		= $this->inbox_model->select_by_id($inbox_id)->row();
		$this->template->display('mail/inbox_edit_view', $data);
	}
	
	public function updatedata() {		
		$this->inbox_model->update_data();
 		redirect(site_url('mail/inbox'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('mail/inbox'));
		} else {
			$this->inbox_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."mail/inbox\">";
		}
	}	
}
/* Location: ./application/controller/mail/Inbox.php */