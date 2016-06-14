<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Religion_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_religion');		
		$this->db->order_by('religion_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		$data = array(    			
    			'religion_name' => strtoupper(trim($this->input->post('name')))
				);
		
		$this->db->insert('hrd_religion', $data);
	}
	
	function select_by_id($religion_id) {
		$this->db->select('*');
		$this->db->from('hrd_religion');
		$this->db->where('religion_id', $religion_id);
		
		return $this->db->get();
	}

	function update_data() {
		$religion_id     = $this->input->post('id');
		
		$data = array(
    			'religion_name' => strtoupper(trim($this->input->post('name')))
				);

		$this->db->where('religion_id', $religion_id);
		$this->db->update('hrd_religion', $data);
	}

	function delete_data($kode) {
		//$kode = $this->security->xss_clean($this->uri->segment(3));
		$this->db->where('religion_id', $kode);
		$this->db->delete('hrd_religion');		
	}		
}
/* Location: ./application/model/master/Religion_model.php */