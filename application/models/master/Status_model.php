<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_status');		
		$this->db->order_by('status_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		$data = array(    			
    			'status_name' => strtoupper(trim($this->input->post('name')))
				);
		
		$this->db->insert('hrd_status', $data);
	}
	
	function select_by_id($status_id) {
		$this->db->select('*');
		$this->db->from('hrd_status');
		$this->db->where('status_id', $status_id);
		
		return $this->db->get();
	}

	function update_data() {
		$status_id     = $this->input->post('id');
		
		$data = array(
    			'status_name' => strtoupper(trim($this->input->post('name')))
				);

		$this->db->where('status_id', $status_id);
		$this->db->update('hrd_status', $data);
	}

	function delete_data($kode) {
		$this->db->where('status_id', $kode);
		$this->db->delete('hrd_status');		
	}		
}
/* Location: ./application/model/master/Status_model.php */