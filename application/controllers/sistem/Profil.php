<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('sistem/profil_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$user_username = trim($this->session->userdata('username'));
			$data['detail'] = $this->profil_model->select_by_id($user_username)->row();
			$this->template->display('sistem/profil_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}
	
	public function updatedata() {	
		$this->profil_model->update_data_name();
		$this->session->set_flashdata('notification','Update Data Success.');
 		redirect(site_url('sistem/profil'));
	}

	public function updateavatar() {
		if (!empty($_FILES['userfile']['name'])) {
			$jam 	= time();
			$kode 	= strtolower($this->session->userdata('username'));
					
			$config['file_name']    = 'Avatar_'.$kode.'_'.$jam.'.jpg';
			$config['upload_path'] = './icon/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';		
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->do_upload('userfile');
			$config['image_library'] = 'gd2';
			$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			$config['maintain_ratio'] = TRUE;
											
			$config['width'] = 500;
			$config['height'] = 500;
			$this->load->library('image_lib',$config);
			 
			$this->image_lib->resize();
		} elseif (empty($_FILES['userfile']['name'])){
			$config['file_name'] = '';
		}		
		
		$this->profil_model->update_data_avatar();
		$this->session->set_flashdata('notification','Update Avatar Success.');
 		redirect(site_url('sistem/profil'));
	}

	public function updatepassword() {	
		$this->profil_model->update_data_password();
		$this->session->set_flashdata('notification','Update Password Success.');
 		redirect(site_url('sistem/profil'));
	}
}
/* Location: ./application/controller/sistem/Profil.php */