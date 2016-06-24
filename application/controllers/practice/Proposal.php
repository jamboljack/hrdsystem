<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposal extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('practice/proposal_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->proposal_model->select_all()->result();
			$this->template->display('practice/proposal_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$data['schoollist']	=  $this->proposal_model->select_school()->result();
		$this->template->display('practice/proposal_add_view', $data);
	}
	
	public function savedata() {
		$this->form_validation->set_rules('lstSchool','<b>School Name</b>','trim|required');
		$this->form_validation->set_rules('title','<b>Title</b>','trim|required');
		$this->form_validation->set_rules('date_mail','<b>Date</b>','trim|required');
		$this->form_validation->set_rules('month','<b>Month</b>','trim|required');		
		$this->form_validation->set_rules('desc','<b>Description</b>','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['schoollist']	=  $this->proposal_model->select_school()->result();
			$this->template->display('practice/proposal_add_view', $data);
		} else {
			if (!empty($_FILES['userfile']['name'])) {
				$jam 	= time();
				$kode 	= seo_title(strtolower($this->input->post('title')));
					
				$config['file_name']    = 'Proposal_'.$kode.'_'.$jam.'.jpg';
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

			$this->proposal_model->insert_data();
	 		redirect(site_url('practice/proposal'));
 		}
	}
	
	public function editdata($proposal_id) {
		$data['schoollist']		=  $this->proposal_model->select_school()->result();		
		$data['detail'] 		= $this->proposal_model->select_by_id($proposal_id)->row();
		$this->template->display('practice/proposal_edit_view', $data);
	}

	public function updatedata() {
		if (!empty($_FILES['userfile']['name'])) {
			$jam 	= time();
			$kode 	= seo_title(strtolower($this->input->post('title')));
				
			$config['file_name']    = 'Proposal_'.$kode.'_'.$jam.'.jpg';
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

		$this->proposal_model->update_data();
 		redirect(site_url('practice/proposal'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));

		if ($kode == null) {
			redirect(site_url('practice/proposal'));
		} else {
			$this->proposal_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."practice/proposal\">";
		}
	}
}
/* Location: ./application/controller/practice/Proposal.php */