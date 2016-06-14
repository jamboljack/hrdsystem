<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Position_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_position');		
		$this->db->order_by('position_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		$data = array(    			
    			'position_name' => strtoupper(trim($this->input->post('name')))
				);
		
		$this->db->insert('hrd_position', $data);
	}
	
	function select_by_id($position_id) {
		$this->db->select('*');
		$this->db->from('hrd_position');
		$this->db->where('position_id', $position_id);
		
		return $this->db->get();
	}

	function update_data() {
		$position_id     = $this->input->post('id');
		
		$data = array(
    			'position_name' => strtoupper(trim($this->input->post('name')))
				);

		$this->db->where('position_id', $position_id);
		$this->db->update('hrd_position', $data);
	}

	function delete_data($kode) {
		$this->db->where('position_id', $kode);
		$this->db->delete('hrd_position');		
	}		
}
/* Location: ./application/model/master/Position_model.php */