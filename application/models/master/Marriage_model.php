<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marriage_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_marriage');		
		$this->db->order_by('marriage_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		$data = array(    			
    			'marriage_name' => strtoupper(trim($this->input->post('name')))
				);
		
		$this->db->insert('hrd_marriage', $data);
	}
	
	function select_by_id($marriage_id) {
		$this->db->select('*');
		$this->db->from('hrd_marriage');
		$this->db->where('marriage_id', $marriage_id);
		
		return $this->db->get();
	}

	function update_data() {
		$marriage_id     = $this->input->post('id');
		
		$data = array(
    			'marriage_name' => strtoupper(trim($this->input->post('name')))
				);

		$this->db->where('marriage_id', $marriage_id);
		$this->db->update('hrd_marriage', $data);
	}

	function delete_data($kode) {		
		$this->db->where('marriage_id', $kode);
		$this->db->delete('hrd_marriage');		
	}		
}
/* Location: ./application/model/master/Marriage_model.php */