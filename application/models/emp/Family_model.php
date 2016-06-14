<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Family_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all($employee_id) {
		$this->db->select('f.*, r.relation_name');
		$this->db->from('hrd_family f');
		$this->db->join('hrd_relation r', 'f.relation_id = r.relation_id');
		$this->db->where('f.emp_id', $employee_id);
		$this->db->order_by('f.family_id','asc');
		
		return $this->db->get();
	}

	function select_relation() {
		$this->db->select('*');		
		$this->db->from('hrd_relation');		
		$this->db->order_by('relation_id','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		$data = array(
				'emp_id' 			=> $this->uri->segment(4),
    			'family_name' 		=> strtoupper(trim($this->input->post('name'))),
    			'family_address'	=> trim($this->input->post('address')),    			
    			'relation_id'		=> trim($this->input->post('lstRelation')),    			
    			'family_phone'		=> trim($this->input->post('phone')),
    			'family_work'		=> trim($this->input->post('work')),
    			'family_status'		=> trim($this->input->post('lstStatus')),
    			'family_date_update'=> date('Y-m-d'),
	    		'family_time_update'=> date('Y-m-d H:i:s'),
	    		'user_username' 	=> trim($this->session->userdata('username'))
				);
		
		$this->db->insert('hrd_family', $data);
	}

	function update_data() {
		$family_id     = $this->input->post('id');
		$data = array(				
    			'family_name' 		=> strtoupper(trim($this->input->post('name'))),
    			'family_address'	=> trim($this->input->post('address')),    			
    			'relation_id'		=> trim($this->input->post('lstRelation')),    			
    			'family_phone'		=> trim($this->input->post('phone')),
    			'family_work'		=> trim($this->input->post('work')),
    			'family_status'		=> trim($this->input->post('lstStatus')),
    			'family_date_update'=> date('Y-m-d'),
	    		'family_time_update'=> date('Y-m-d H:i:s'),
	    		'user_username' 	=> trim($this->session->userdata('username'))
				);

		$this->db->where('family_id', $family_id);
		$this->db->update('hrd_family', $data);
	}

	function delete_data($kode) {
		$this->db->where('family_id', $kode);
		$this->db->delete('hrd_family');
	}		
}
/* Location: ./application/model/emp/Family_model.php */