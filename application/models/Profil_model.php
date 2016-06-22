<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}

	function select_by_id($user_username) {
		$this->db->select('*');
		$this->db->from('hrd_users');		
		$this->db->where('user_username', $user_username);
		
		return $this->db->get();
	}

	function update_data_name() {
		$user_username  = trim($this->session->userdata('username'));
		
		$data = array(		    			
		    		'user_name' 			=> trim($this->input->post('name')),		    		
		    		'user_date_update' 		=> date('Y-m-d'),
		    		'user_time_update' 		=> date('Y-m-d H:i:s')
					);		

		$this->db->where('user_username', $user_username);
		$this->db->update('hrd_users', $data);
	}

	function update_data_avatar() {
		$user_username  = trim($this->session->userdata('username'));		
		
		if (!empty($_FILES['userfile']['name'])) {
			$data = array(		   			
		   			'user_image' 			=> $this->upload->file_name,
		   			'user_date_update' 		=> date('Y-m-d'),
		   			'user_time_update' 		=> date('Y-m-d H:i:s')
					);
		}		

		$this->db->where('user_username', $user_username);
		$this->db->update('hrd_users', $data);
	}

	function update_data_password() {
		$user_username  = trim($this->session->userdata('username'));		
		$password 		= trim($this->input->post('password'));
		
		if (!empty($password)) { // Jika Password Diisi / Change Password			
			$data = array(
		    		'user_password' 		=> sha1(trim($this->input->post('password'))),
		    		'user_date_update' 		=> date('Y-m-d'),
		    		'user_time_update' 		=> date('Y-m-d H:i:s')  			
				);
		}		

		$this->db->where('user_username', $user_username);
		$this->db->update('hrd_users', $data);
	}		
}
/* Location: ./application/model/Profil_model.php */