<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resign_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('r.*, e.emp_name, d.department_name, p.position_name');
		$this->db->from('hrd_resign r'); // Resign
		$this->db->join('hrd_employee e', 'r.emp_id = e.emp_id'); // Employee		
		$this->db->join('hrd_department d', 'e.department_id = d.department_id'); // Department 
		$this->db->join('hrd_position p', 'e.position_id = p.position_id'); // Position		
		$this->db->order_by('r.resign_id','desc');
		
		return $this->db->get();
	}

	function select_employee() {
		$this->db->select('e.*, d.department_name, p.position_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->order_by('e.emp_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		// Date
		$tanggal 	= trim($this->input->post('date_resign'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0];
		$date_resign= $thn1.'-'.$bln1.'-'.$tgl1;

		$data = array(				
    			'emp_id' 				=> trim($this->input->post('lstEmployee')),
    			'resign_date'			=> $date_resign,    			
    			'resign_desc'			=> trim($this->input->post('reason')),    			
    			'resign_date_update'	=> date('Y-m-d'),
	    		'resign_time_update'	=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);
		
		$this->db->insert('hrd_resign', $data);
	}

	function update_data_employee() {
		$emp_id = trim($this->input->post('lstEmployee'));
	
		$data = array(				
    			'emp_status'			=> 'NON-ACTIVE',    			
    			'emp_date_update'		=> date('Y-m-d'),
	    		'emp_time_update'		=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);

		$this->db->where('emp_id', $emp_id);
		$this->db->update('hrd_employee', $data);
	}

	function select_by_id($resign_id) {
		$this->db->select('r.*, e.emp_nik, e.emp_name, d.department_name, p.position_name');
		$this->db->from('hrd_resign r');
		$this->db->join('hrd_employee e', 'r.emp_id=e.emp_id');
		$this->db->join('hrd_department d', 'e.department_id=d.department_id');
		$this->db->join('hrd_position p', 'e.position_id=p.position_id');		
		$this->db->where('r.resign_id', $resign_id);
		
		return $this->db->get();
	}	

	function update_data() {
		$resign_id = $this->input->post('id');
		
		// Date
		$tanggal 	= trim($this->input->post('date_resign'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0];
		$date_resign= $thn1.'-'.$bln1.'-'.$tgl1;

		$data = array(    			
    			'resign_date'			=> $date_resign,    			
    			'resign_desc'			=> trim($this->input->post('reason')),    			
    			'resign_date_update'	=> date('Y-m-d'),
	    		'resign_time_update'	=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);

		$this->db->where('resign_id', $resign_id);
		$this->db->update('hrd_resign', $data);
	}

	function delete_data($resign_id) {
		$this->db->where('resign_id', $resign_id);
		$this->db->delete('hrd_resign');		
	}

	function update_status_employee($emp_id) {
		$data = array(				
    			'emp_status'			=> 'ACTIVE',    			
    			'emp_date_update'		=> date('Y-m-d'),
	    		'emp_time_update'		=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);

		$this->db->where('emp_id', $emp_id);
		$this->db->update('hrd_employee', $data);
	}		
}
/* Location: ./application/model/emp/Resign_model.php */