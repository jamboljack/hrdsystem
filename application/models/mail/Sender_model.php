<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sender_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_mail_sender');		
		$this->db->order_by('sender_id','desc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		$data = array(    			
	    		'sender_name' 			=> strtoupper(trim($this->input->post('name'))),
	    		'sender_address' 		=> trim($this->input->post('address')),
	    		'sender_phone' 			=> trim($this->input->post('phone')),
	    		'sender_email' 			=> trim($this->input->post('email')),	    		
	    		'sender_date_update' 	=> date('Y-m-d'),
	    		'sender_time_update' 	=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);		
		
		$this->db->insert('hrd_mail_sender', $data);
	}
	
	function select_by_id($sender_id) {
		$this->db->select('*');
		$this->db->from('hrd_mail_sender');		
		$this->db->where('sender_id', $sender_id);
		
		return $this->db->get();
	}

	function update_data() {
		$sender_id   = $this->input->post('id');
		
		$data = array(    			
	    		'sender_name' 			=> strtoupper(trim($this->input->post('name'))),
	    		'sender_address' 		=> trim($this->input->post('address')),
	    		'sender_phone' 			=> trim($this->input->post('phone')),
	    		'sender_email' 			=> trim($this->input->post('email')),	    		
	    		'sender_date_update' 	=> date('Y-m-d'),
	    		'sender_time_update' 	=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);

		$this->db->where('sender_id', $sender_id);
		$this->db->update('hrd_mail_sender', $data);
	}

	function delete_data($kode) {
		$this->db->where('sender_id', $kode);
		$this->db->delete('hrd_mail_sender');		
	}		
}
/* Location: ./application/model/mail/Sender_model.php */