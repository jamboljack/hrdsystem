<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Department_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_department');		
		$this->db->order_by('department_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		$data = array(    			
    			'department_name' => strtoupper(trim($this->input->post('name')))
				);
		
		$this->db->insert('hrd_department', $data);
	}
	
	function select_by_id($department_id) {
		$this->db->select('*');
		$this->db->from('hrd_department');
		$this->db->where('department_id', $department_id);
		
		return $this->db->get();
	}

	function update_data() {
		$department_id     = $this->input->post('id');
		
		$data = array(
    			'department_name' => strtoupper(trim($this->input->post('name')))
				);

		$this->db->where('department_id', $department_id);
		$this->db->update('hrd_department', $data);
	}

	function delete_data($kode) {		
		$this->db->where('department_id', $kode);
		$this->db->delete('hrd_department');		
	}		
}
/* Location: ./application/model/master/Department_model.php */