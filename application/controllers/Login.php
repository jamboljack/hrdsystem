<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();		
		$this->load->model('login_model');	
	}

	public function index()
	{
		$session = $this->session->userdata('logged_in_hrd');		
		if ($session == FALSE) {
			$this->load->view('login_view');
		} 
		else 
		{			
			if ($this->session->userdata('level') == 'Admin') {
				redirect(site_url('home'));
			}			
		}
	}

	public function validasi() 
	{
		$username = $this->input->post('username', 'true');
		$password = $this->input->post('password', 'true');	
		
		$temp_user = $this->login_model->get_user($username)->row();
		$num_user = count($temp_user);
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('login_view');
		} 
		else 
		{
			if ($num_user == 0) 
			{ // Username Tidak Terdaftar
				$this->session->set_flashdata('notification','Username Anda tidak Terdaftar, Hubungi Administrator !');
				redirect(site_url('login'));
				echo '1';
			} elseif ($num_user > 0) 
			{ // Username Terdaftar				
				$temp_account = $this->login_model->check_user_account($username, sha1($password))->row();
				$num_account = count($temp_account);
		
				if ($num_account > 0) 
				{	
					$array_item = array('username' 	=> $temp_account->user_username, 
										'nama' 		=> $temp_account->user_name,
										'level' 	=> $temp_account->user_level,										
										'logged_in_hrd' => TRUE
										);
					
					$this->session->set_userdata($array_item);													
					if ($this->session->userdata('level') == 'Admin') // Admin
					{
						redirect(site_url('home'));
					}					
				}
				else 
				{
					$this->session->set_flashdata('notification','LOGIN GAGAL !!, Username and Password Anda Salah.');
					redirect(site_url('login'));					
				}				
			}
		}		
	}	

	public function logout() {
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . 'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-chace');
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
/* Location: ./application/controller/Login.php */