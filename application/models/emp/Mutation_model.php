<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mutation_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('m.*, e.emp_name, d.decree_no, t.department_name as from_dep, 
			p.position_name as from_pos, de.department_name as to_dep, po.position_name as to_pos');
		$this->db->from('hrd_mutation m'); // Mutation
		$this->db->join('hrd_employee e', 'm.emp_id = e.emp_id'); // Employee
		$this->db->join('hrd_mail_decree d', 'm.decree_id = d.decree_id'); // Decree
		$this->db->join('hrd_department t', 'm.department_id = t.department_id'); // From Department 
		$this->db->join('hrd_position p', 'm.position_id = p.position_id'); // From Position
		$this->db->join('hrd_department de', 'm.department_id2 = de.department_id'); // To Department
		$this->db->join('hrd_position po', 'm.position_id2 = po.position_id'); // To Position
		$this->db->order_by('m.mutation_id','desc');
		
		return $this->db->get();
	}

	function select_department() {
		$this->db->select('*');
		$this->db->from('hrd_department');				
		$this->db->order_by('department_name','asc');
		
		return $this->db->get();
	}

	function select_position() {
		$this->db->select('*');
		$this->db->from('hrd_position');				
		$this->db->order_by('position_name','asc');
		
		return $this->db->get();
	}

	function select_decree_mail() {
		$this->db->select('*');
		$this->db->from('hrd_mail_decree');				
		$this->db->order_by('decree_date','desc');
		
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
		$tanggal 	= trim($this->input->post('date_mutation'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0];
		$date_mut	= $thn1.'-'.$bln1.'-'.$tgl1;

		$data = array(
				'decree_id'				=> trim($this->input->post('lstMail')),
    			'emp_id' 				=> trim($this->input->post('lstEmployee')),
    			'mutation_date'			=> $date_mut,
    			'department_id'			=> trim($this->input->post('dep_id')),
    			'position_id'			=> trim($this->input->post('pos_id')),
    			'department_id2'		=> trim($this->input->post('lstDepartment')),
    			'position_id2'			=> trim($this->input->post('lstPosition')),    			
    			'mutation_date_update'	=> date('Y-m-d'),
	    		'mutation_time_update'	=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);
		
		$this->db->insert('hrd_mutation', $data);
	}

	function update_data_employee() {
		$emp_id = trim($this->input->post('lstEmployee'));
	
		$data = array(				
    			'department_id'			=> trim($this->input->post('lstDepartment')),
    			'position_id'			=> trim($this->input->post('lstPosition')),
    			'emp_date_update'		=> date('Y-m-d'),
	    		'emp_time_update'		=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);

		$this->db->where('emp_id', $emp_id);
		$this->db->update('hrd_employee', $data);
	}

	function select_by_id($mutation_id) {
		$this->db->select('m.*, e.emp_nik, e.emp_name, d.department_name, p.position_name, c.decree_title');
		$this->db->from('hrd_mutation m');
		$this->db->join('hrd_employee e', 'm.emp_id=e.emp_id');
		$this->db->join('hrd_department d', 'm.department_id=d.department_id');
		$this->db->join('hrd_position p', 'm.position_id=p.position_id');
		$this->db->join('hrd_mail_decree c', 'm.decree_id=c.decree_id');
		$this->db->where('m.mutation_id', $mutation_id);
		
		return $this->db->get();
	}

	function update_data() {
		$mutation_id = $this->input->post('id');
		
		// Date
		$tanggal 	= trim($this->input->post('date_mutation'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0];
		$date_mut	= $thn1.'-'.$bln1.'-'.$tgl1;

		$data = array(
				'decree_id'				=> trim($this->input->post('lstMail')),    			
    			'mutation_date'			=> $date_mut,    			
    			'department_id2'		=> trim($this->input->post('lstDepartment')),
    			'position_id2'			=> trim($this->input->post('lstPosition')),    			
    			'mutation_date_update'	=> date('Y-m-d'),
	    		'mutation_time_update'	=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);

		$this->db->where('mutation_id', $mutation_id);
		$this->db->update('hrd_mutation', $data);
	}

	function delete_data($kode) {
		$this->db->where('mutation_id', $kode);
		$this->db->delete('hrd_mutation');		
	}		
}
/* Location: ./application/model/emp/Mutation_model.php */