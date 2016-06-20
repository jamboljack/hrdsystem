<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class School_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_practice_school');		
		$this->db->order_by('school_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {		
		$data = array(				
    			'school_name' 		=> strtoupper(trim($this->input->post('name'))),
    			'school_address'	=> trim($this->input->post('address')),
    			'school_phone'		=> trim($this->input->post('phone')),
    			'school_email'		=> trim($this->input->post('email')),
    			'school_web'		=> trim($this->input->post('website')),
    			'school_chief'		=> trim($this->input->post('chief')),
    			'school_date_update'=> date('Y-m-d'),
	    		'school_time_update'=> date('Y-m-d H:i:s'),
	    		'user_username' 	=> trim($this->session->userdata('username'))
				);
		
		$this->db->insert('hrd_practice_school', $data);
	}

	function select_by_id($school_id) {
		$this->db->select('*');
		$this->db->from('hrd_practice_school');		
		$this->db->where('school_id', $school_id);
		
		return $this->db->get();
	}

	function update_data() {
		$school_id     = $this->input->post('id');

		$data = array(				
    			'school_name' 		=> strtoupper(trim($this->input->post('name'))),
    			'school_address'	=> trim($this->input->post('address')),
    			'school_phone'		=> trim($this->input->post('phone')),
    			'school_email'		=> trim($this->input->post('email')),
    			'school_web'		=> trim($this->input->post('website')),
    			'school_chief'		=> trim($this->input->post('chief')),
    			'school_date_update'=> date('Y-m-d'),
	    		'school_time_update'=> date('Y-m-d H:i:s'),
	    		'user_username' 	=> trim($this->session->userdata('username'))
				);

		$this->db->where('school_id', $school_id);
		$this->db->update('hrd_practice_school', $data);
	}

	function delete_data($kode) {
		$this->db->where('school_id', $kode);
		$this->db->delete('hrd_practice_school');		
	}		
}
/* Location: ./application/model/practice/School_model.php */