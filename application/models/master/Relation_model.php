<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relation_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_relation');		
		$this->db->order_by('relation_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		$data = array(    			
    			'relation_name' => strtoupper(trim($this->input->post('name')))
				);
		
		$this->db->insert('hrd_relation', $data);
	}
	
	function select_by_id($relation_id) {
		$this->db->select('*');
		$this->db->from('hrd_relation');
		$this->db->where('relation_id', $relation_id);
		
		return $this->db->get();
	}

	function update_data() {
		$relation_id     = $this->input->post('id');
		
		$data = array(
    			'relation_name' => strtoupper(trim($this->input->post('name')))
				);

		$this->db->where('relation_id', $relation_id);
		$this->db->update('hrd_relation', $data);
	}

	function delete_data($kode) {
		//$kode = $this->security->xss_clean($this->uri->segment(3));
		$this->db->where('relation_id', $kode);
		$this->db->delete('hrd_relation');
	}		
}
/* Location: ./application/model/master/Relation_model.php */