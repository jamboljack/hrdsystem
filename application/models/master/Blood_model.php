<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blood_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_blood');		
		$this->db->order_by('blood_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		$data = array(    			
    			'blood_name' => strtoupper(trim($this->input->post('name')))
				);
		
		$this->db->insert('hrd_blood', $data);
	}
	
	function select_by_id($blood_id) {
		$this->db->select('*');
		$this->db->from('hrd_blood');
		$this->db->where('blood_id', $blood_id);
		
		return $this->db->get();
	}

	function update_data() {
		$blood_id     = $this->input->post('id');
		
		$data = array(
    			'blood_name' => strtoupper(trim($this->input->post('name')))
				);

		$this->db->where('blood_id', $blood_id);
		$this->db->update('hrd_blood', $data);
	}

	function delete_data($kode) {
		//$kode = $this->security->xss_clean($this->uri->segment(3));
		$this->db->where('blood_id', $kode);
		$this->db->delete('hrd_blood');		
	}		
}
/* Location: ./application/model/master/Blood_model.php */