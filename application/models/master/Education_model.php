<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Education_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_education');		
		$this->db->order_by('education_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		$data = array(    			
    			'education_name' => strtoupper(trim($this->input->post('name')))
				);
		
		$this->db->insert('hrd_education', $data);
	}
	
	function select_by_id($education_id) {
		$this->db->select('*');
		$this->db->from('hrd_education');
		$this->db->where('education_id', $education_id);
		
		return $this->db->get();
	}

	function update_data() {
		$education_id     = $this->input->post('id');
		
		$data = array(
    			'education_name' => strtoupper(trim($this->input->post('name')))
				);

		$this->db->where('education_id', $education_id);
		$this->db->update('hrd_education', $data);
	}

	function delete_data($kode) {
		//$kode = $this->security->xss_clean($this->uri->segment(3));						
		$this->db->where('education_id', $kode);
		$this->db->delete('hrd_education');		
	}		
}
/* Location: ./application/model/master/Education_model.php */