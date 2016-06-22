<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('sistem/users_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->users_model->select_all()->result();
			$this->template->display('sistem/users_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {		
		$this->template->display('sistem/users_add_view');
	}
	
	public function savedata() {										
		$this->form_validation->set_rules('username','<b>Username</b>','trim|required|is_unique[hrd_users.user_username]');
		$this->form_validation->set_rules('password','<b>Password</b>','trim|required');		
		$this->form_validation->set_rules('name','<b>Name</b>','trim|required');
		$this->form_validation->set_rules('lstLevel','<b>Level</b>','trim|required');		

		if ($this->form_validation->run() == FALSE) {
			$this->template->display('sistem/users_add_view');
		} else {
			if (!empty($_FILES['userfile']['name'])) {
				$jam 	= time();
				$kode 	= strtolower($this->input->post('user_username'));
					
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

			$this->users_model->insert_data();
 			redirect(site_url('sistem/users'));
		}
	}
	
	public function editdata($users_id) {		
		$data['detail'] 		= $this->users_model->select_by_id($users_id)->row();
		$this->template->display('sistem/users_edit_view', $data);
	}
	
	public function updatedata() {
		if (!empty($_FILES['userfile']['name'])) {
			$jam 	= time();
			$kode 	= strtolower($this->input->post('user_username'));
					
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
		
		$this->users_model->update_data();
 		redirect(site_url('sistem/users'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(3));
		
		if ($kode == null) {
			redirect(site_url('sistem/users'));
		} else {
			$this->users_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."sistem/users\">";
		}
	}	
}
/* Location: ./application/controller/sistem/Users.php */