<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Record_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
			
	function select_all() {
		$this->db->select('r.*, e.emp_name, d.department_name, p.position_name, a.absent_name, a.absent_color');
		$this->db->from('hrd_record r'); // record
		$this->db->join('hrd_employee e', 'r.emp_id = e.emp_id'); // Employee		
		$this->db->join('hrd_department d', 'e.department_id = d.department_id'); // Department 
		$this->db->join('hrd_position p', 'e.position_id = p.position_id'); // Position	
		$this->db->join('hrd_absent a', 'r.absent_id = a.absent_id'); // Position		
		$this->db->order_by('r.record_id','desc');
		
		return $this->db->get();
	}

	function select_record_employee($employee_id) {
		$this->db->select('r.*, a.absent_name, a.absent_color');
		$this->db->from('hrd_record r');
		$this->db->join('hrd_absent a', 'r.absent_id=a.absent_id');
		$this->db->where('r.emp_id', $employee_id);
		$this->db->order_by('r.record_date','desc');
		
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

	function select_absent() {
		$this->db->select('*');
		$this->db->from('hrd_absent');		
		$this->db->order_by('absent_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		// Date
		$tanggal 	= trim($this->input->post('date_record'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0];
		$date_record= $thn1.'-'.$bln1.'-'.$tgl1;

		$data = array(				
    			'emp_id' 				=> trim($this->input->post('lstEmployee')),
    			'absent_id'				=> trim($this->input->post('lstInfo')),
    			'record_date'			=> $date_record,    			
    			'record_desc'			=> trim($this->input->post('desc')),    			
    			'record_date_update'	=> date('Y-m-d'),
	    		'record_time_update'	=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);
		
		$this->db->insert('hrd_record', $data);
	}

	function select_by_id($record_id) {
		$this->db->select('r.*, e.emp_nik, e.emp_name, d.department_name, p.position_name');
		$this->db->from('hrd_record r');
		$this->db->join('hrd_employee e', 'r.emp_id=e.emp_id');
		$this->db->join('hrd_department d', 'e.department_id=d.department_id');
		$this->db->join('hrd_position p', 'e.position_id=p.position_id');		
		$this->db->where('r.record_id', $record_id);
		
		return $this->db->get();
	}	

	function update_data() {
		$record_id = $this->input->post('id');
		
		// Date
		$tanggal 	= trim($this->input->post('date_record'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0];
		$date_record= $thn1.'-'.$bln1.'-'.$tgl1;

		$data = array(
				'absent_id'				=> trim($this->input->post('lstInfo')),    			
    			'record_date'			=> $date_record,    			
    			'record_desc'			=> trim($this->input->post('desc')),    			
    			'record_date_update'	=> date('Y-m-d'),
	    		'record_time_update'	=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);

		$this->db->where('record_id', $record_id);
		$this->db->update('hrd_record', $data);
	}

	function delete_data($record_id) {
		$this->db->where('record_id', $record_id);
		$this->db->delete('hrd_record');		
	}		
}
/* Location: ./application/model/emp/Record_model.php */