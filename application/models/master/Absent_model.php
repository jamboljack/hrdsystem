<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Absent_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_absent');		
		$this->db->order_by('absent_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		$data = array(    			
    			'absent_name' 	=> strtoupper(trim($this->input->post('name'))),
    			'absent_color' 	=> trim($this->input->post('lstColor'))
				);
		
		$this->db->insert('hrd_absent', $data);
	}
	
	function select_by_id($absent_id) {
		$this->db->select('*');
		$this->db->from('hrd_absent');
		$this->db->where('absent_id', $absent_id);
		
		return $this->db->get();
	}

	function update_data() {
		$absent_id     = $this->input->post('id');
		
		$data = array(
    			'absent_name' 	=> strtoupper(trim($this->input->post('name'))),
    			'absent_color' 	=> trim($this->input->post('lstColor'))
				);

		$this->db->where('absent_id', $absent_id);
		$this->db->update('hrd_absent', $data);
	}

	function delete_data($kode) {		
		$this->db->where('absent_id', $kode);
		$this->db->delete('hrd_absent');		
	}		
}
/* Location: ./application/model/master/Absent_model.php */