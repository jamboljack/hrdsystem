<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all($employee_id) {
		$this->db->select('*');
		$this->db->from('hrd_company');		
		$this->db->where('emp_id', $employee_id);
		$this->db->order_by('company_id','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		// From
		$from 		= trim($this->input->post('from'));
		$xfrom		= explode("-",$from);
		$thn1 		= $xfrom[2];
		$bln1 		= $xfrom[1];
		$tgl1 		= $xfrom[0];
		$tanggalfrom	= $thn1.'-'.$bln1.'-'.$tgl1;

		// To
		$to 		= trim($this->input->post('to'));
		$xto		= explode("-",$to);
		$thn2 		= $xto[2];
		$bln2 		= $xto[1];
		$tgl2 		= $xto[0];
		$tanggalto	= $thn2.'-'.$bln2.'-'.$tgl2;

		$data = array(
				'emp_id' 				=> $this->uri->segment(4),
    			'company_name' 			=> strtoupper(trim($this->input->post('name'))),
    			'company_address'		=> trim($this->input->post('address')),
    			'company_date_join'		=> $tanggalfrom,
    			'company_date_resign'	=> $tanggalto,    		
    			'company_phone'			=> trim($this->input->post('phone')),
    			'company_email'			=> trim($this->input->post('email')),
    			'company_web'			=> trim($this->input->post('website')),
    			'company_type'			=> strtoupper(trim($this->input->post('type'))),
    			'company_position'		=> strtoupper(trim($this->input->post('position'))),
    			'company_salary'		=> trim($this->input->post('salary')),
    			'company_manager'		=> trim($this->input->post('manager')),
    			'company_job_desc'		=> trim($this->input->post('job')),
    			'company_date_update'	=> date('Y-m-d'),
	    		'company_time_update'	=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);
		
		$this->db->insert('hrd_company', $data);
	}

	function update_data() {
		$company_id = $this->input->post('id');
		
		// From
		$from 		= trim($this->input->post('from'));
		$xfrom		= explode("-",$from);
		$thn1 		= $xfrom[2];
		$bln1 		= $xfrom[1];
		$tgl1 		= $xfrom[0];
		$tanggalfrom	= $thn1.'-'.$bln1.'-'.$tgl1;

		// To
		$to 		= trim($this->input->post('to'));
		$xto		= explode("-",$to);
		$thn2 		= $xto[2];
		$bln2 		= $xto[1];
		$tgl2 		= $xto[0];
		$tanggalto	= $thn2.'-'.$bln2.'-'.$tgl2;

		$data = array(				
    			'company_name' 			=> strtoupper(trim($this->input->post('name'))),
    			'company_address'		=> trim($this->input->post('address')),
    			'company_date_join'		=> $tanggalfrom,
    			'company_date_resign'	=> $tanggalto,    		
    			'company_phone'			=> trim($this->input->post('phone')),
    			'company_email'			=> trim($this->input->post('email')),
    			'company_web'			=> trim($this->input->post('website')),
    			'company_type'			=> strtoupper(trim($this->input->post('type'))),
    			'company_position'		=> strtoupper(trim($this->input->post('position'))),
    			'company_salary'		=> trim($this->input->post('salary')),
    			'company_manager'		=> trim($this->input->post('manager')),
    			'company_job_desc'		=> trim($this->input->post('job')),
    			'company_date_update'	=> date('Y-m-d'),
	    		'company_time_update'	=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);

		$this->db->where('company_id', $company_id);
		$this->db->update('hrd_company', $data);
	}

	function delete_data($kode) {
		$this->db->where('company_id', $kode);
		$this->db->delete('hrd_company');		
	}		
}
/* Location: ./application/model/emp/Company_model.php */