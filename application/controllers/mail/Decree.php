<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Decree extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('home_model');
		$this->load->model('mail/decree_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->decree_model->select_all()->result();
			$this->template->display('mail/decree_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {		
		$this->template->display('mail/decree_add_view');
	}
	
	public function savedata() {										
		$this->form_validation->set_rules('mail_no','<b>Mail No</b>','trim|required|is_unique[hrd_mail_decree.decree_no]');		
		$this->form_validation->set_rules('title','<b>Title</b>','trim|required');		
		$this->form_validation->set_rules('date_mail','<b>Date</b>','trim|required');
		$this->form_validation->set_rules('desc','<b>Description</b>','trim|required');
		$this->form_validation->set_rules('sign','<b>Sign</b>','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->template->display('mail/decree_add_view');
		} else {
			if (!empty($_FILES['userfile']['name'])) {
				$jam 	= time();
				$kode 	= strtolower($this->input->post('mail_no'));
					
				$config['file_name']    = 'Surat_Keputusan_'.$kode.'_'.$jam.'.jpg';
				$config['upload_path'] = './mail_file/';
				$config['allowed_types'] = 'jpg|png|gif|jpeg';		
				$config['overwrite'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->do_upload('userfile');
				$config['image_library'] = 'gd2';
				$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
				$config['maintain_ratio'] = TRUE;
												
				$config['width'] = 200;
				$config['height'] = 350;
				$this->load->library('image_lib',$config);
				 
				$this->image_lib->resize();
			} elseif (empty($_FILES['userfile']['name'])){
				$config['file_name'] = '';
			}

			$this->decree_model->insert_data();
 			redirect(site_url('mail/decree'));
		}
	}
	
	public function editdata($decree_id) {		
		$data['detail'] 		= $this->decree_model->select_by_id($decree_id)->row();
		$this->template->display('mail/decree_edit_view', $data);
	}
	
	public function updatedata() {
		if (!empty($_FILES['userfile']['name'])) {
			$jam 	= time();
			$kode 	= strtolower($this->input->post('mail_no'));
					
			$config['file_name']    = 'Surat_Keputusan_'.$kode.'_'.$jam.'.jpg';
			$config['upload_path'] = './mail_file/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';		
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->do_upload('userfile');
			$config['image_library'] = 'gd2';
			$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			$config['maintain_ratio'] = TRUE;
											
			$config['width'] = 200;
			$config['height'] = 350;
			$this->load->library('image_lib',$config);
			 
			$this->image_lib->resize();
		} elseif (empty($_FILES['userfile']['name'])){
			$config['file_name'] = '';
		}		
		
		$this->decree_model->update_data();
 		redirect(site_url('mail/decree'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('mail/decree'));
		} else {
			$this->decree_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."mail/decree\">";
		}
	}	
}
/* Location: ./application/controller/mail/Decree.php */