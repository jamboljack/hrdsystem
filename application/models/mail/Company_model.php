<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_mail_company');		
		$this->db->order_by('company_id','desc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		$data = array(    			
	    		'company_name' 			=> strtoupper(trim($this->input->post('name'))),
	    		'company_address' 		=> trim($this->input->post('address')),
	    		'company_phone' 			=> trim($this->input->post('phone')),
	    		'company_email' 			=> trim($this->input->post('email')),	    		
	    		'company_date_update' 	=> date('Y-m-d'),
	    		'company_time_update' 	=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);		
		
		$this->db->insert('hrd_mail_company', $data);
	}
	
	function select_by_id($company_id) {
		$this->db->select('*');
		$this->db->from('hrd_mail_company');		
		$this->db->where('company_id', $company_id);
		
		return $this->db->get();
	}

	function update_data() {
		$company_id   = $this->input->post('id');
		
		$data = array(    			
	    		'company_name' 			=> strtoupper(trim($this->input->post('name'))),
	    		'company_address' 		=> trim($this->input->post('address')),
	    		'company_phone' 			=> trim($this->input->post('phone')),
	    		'company_email' 			=> trim($this->input->post('email')),	    		
	    		'company_date_update' 	=> date('Y-m-d'),
	    		'company_time_update' 	=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);

		$this->db->where('company_id', $company_id);
		$this->db->update('hrd_mail_company', $data);
	}

	function delete_data($kode) {
		$this->db->where('company_id', $kode);
		$this->db->delete('hrd_mail_company');		
	}		
}
/* Location: ./application/model/mail/Company_model.php */