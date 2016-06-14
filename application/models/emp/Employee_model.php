<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('e.*, d.department_name, p.position_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->order_by('e.emp_name','asc');
		
		return $this->db->get();
	}
	
	function select_province() {
		$this->db->select('*');
		$this->db->from('hrd_province');
		$this->db->order_by('province_name', 'asc');
		
		return $this->db->get();
	}

	function select_country() {
		$this->db->select('*');
		$this->db->from('hrd_country');
		$this->db->order_by('country_name', 'asc');
		
		return $this->db->get();
	}

	function select_marriage() {
		$this->db->select('*');
		$this->db->from('hrd_marriage');
		$this->db->order_by('marriage_name', 'asc');
		
		return $this->db->get();
	}

	function select_religion() {
		$this->db->select('*');
		$this->db->from('hrd_religion');
		$this->db->order_by('religion_name', 'asc');
		
		return $this->db->get();
	}

	function select_education() {
		$this->db->select('*');
		$this->db->from('hrd_education');
		$this->db->order_by('education_name', 'asc');
		
		return $this->db->get();
	}

	function select_blood() {
		$this->db->select('*');
		$this->db->from('hrd_blood');
		$this->db->order_by('blood_name', 'asc');
		
		return $this->db->get();
	}

	function select_department() {
		$this->db->select('*');
		$this->db->from('hrd_department');
		$this->db->order_by('department_name', 'asc');
		
		return $this->db->get();
	}

	function select_position() {
		$this->db->select('*');
		$this->db->from('hrd_position');
		$this->db->order_by('position_name', 'asc');
		
		return $this->db->get();
	}

	function select_status() {
		$this->db->select('*');
		$this->db->from('hrd_status');
		$this->db->order_by('status_name', 'asc');
		
		return $this->db->get();
	}

	function insert_data() {
		// Tanggal Lahir
		$tgllahir 	= trim($this->input->post('tgl_lahir'));
		$xtg1lahir	= explode("-",$tgllahir);
		$thn1 		= $xtg1lahir[2];
		$bln1 		= $xtg1lahir[1];
		$tgl1 		= $xtg1lahir[0];
		$tanggallhr	= $thn1.'-'.$bln1.'-'.$tgl1;

		// Tanggal Join Kesehatan
		$tglsehat 	= trim($this->input->post('tgl_join_h'));
		if (!empty($tglsehat)) {
			$xtg1sehat	= explode("-",$tglsehat);
			$thns 		= $xtg1sehat[2];
			$blns 		= $xtg1sehat[1];
			$tgls 		= $xtg1sehat[0];
			$tanggalsht	= $thns.'-'.$blns.'-'.$tgls;
		} else {
			$tanggalsht = '';
		}

		// Tanggal Join Ketenagakerjaan
		$tglkerja 	= trim($this->input->post('tgl_join_e'));
		if (!empty($tglkerja)) {
			$xtg1kerja	= explode("-",$tglkerja);
			$thnk 		= $xtg1kerja[2];
			$blnk 		= $xtg1kerja[1];
			$tglk 		= $xtg1kerja[0];
			$tanggalkrj	= $thnk.'-'.$blnk.'-'.$tglk;
		} else {
			$tanggalkrj	= '';
		}
		// Tanggal Start Join
		$tgljoin 	= trim($this->input->post('tgl_start_join'));
		if (!empty($tgljoin)) {
			$xtg1join	= explode("-",$tgljoin);
			$thnj 		= $xtg1join[2];
			$blnj 		= $xtg1join[1];
			$tglj 		= $xtg1join[0];
			$tanggaljoin= $thnj.'-'.$blnj.'-'.$tglj;
		} else {
			$tanggaljoin='';
		}

		// Tanggal Start Contract
		$tglscontract 	= trim($this->input->post('tgl_start_contract'));
		if (!empty($tglscontract)) {
			$xtg1scontract	= explode("-",$tglscontract);
			$thnsc 			= $xtg1scontract[2];
			$blnsc			= $xtg1scontract[1];
			$tglsc 			= $xtg1scontract[0];
			$tanggal_start_contract	= $thnsc.'-'.$blnsc.'-'.$tglsc;
		} else {
			$tanggal_start_contract	= '';
		}

		// Tanggal End Contract
		$tglecontract 	= trim($this->input->post('tgl_end_contract'));
		if (!empty($tglscontract)) {
			$xtg1econtract	= explode("-",$tglecontract);
			$thnec 			= $xtg1econtract[2];
			$blnec 			= $xtg1econtract[1];
			$tglec 			= $xtg1econtract[0];
			$tanggal_end_contract = $thnec.'-'.$blnec.'-'.$tglec;
		} else {
			$tanggal_end_contract = '';
		}

		if (!empty($_FILES['userfile']['name'])) {
			$data = array(
					'emp_nik' 			=> trim($this->input->post('nik')),
					'emp_finger' 		=> trim($this->input->post('finger')),
	    			'emp_name' 			=> strtoupper(trim($this->input->post('name'))),
	    			'emp_birthdate' 	=> $tanggallhr,
	    			'emp_birthplace' 	=> strtoupper(trim($this->input->post('birthplace'))),
	    			'emp_gender' 		=> $this->input->post('lstGender'),
	    			'emp_address' 		=> trim($this->input->post('address')),
	    			'province_id' 		=> trim($this->input->post('lstProvince')),
	    			'country_id' 		=> trim($this->input->post('lstCountry')),
	    			'education_id' 		=> trim($this->input->post('lstEducation')),
	    			'marriage_id' 		=> trim($this->input->post('lstMarriage')),
	    			'religion_id' 		=> trim($this->input->post('lstReligion')),
	    			'blood_id' 			=> trim($this->input->post('lstBlood')),
	    			'department_id' 	=> trim($this->input->post('lstDepartment')),
	    			'emp_district' 		=> trim($this->input->post('district')),
	    			'emp_zipcode' 		=> trim($this->input->post('postcode')),
	    			'emp_ktp_id' 		=> trim($this->input->post('ktpid')),
	    			'emp_phone' 		=> trim($this->input->post('phone')),
	    			'emp_email' 		=> trim($this->input->post('email')),
	    			'emp_tb' 			=> trim($this->input->post('height')),
	    			'emp_bb' 			=> trim($this->input->post('weight')),
	    			'emp_bpjs_h_id' 	=> trim($this->input->post('healthy')),
	    			'emp_join_date_h' 	=> $tanggalsht,
	    			'emp_bpjs_k_id' 	=> trim($this->input->post('employ')),
	    			'emp_join_date_k' 	=> $tanggalkrj,
	    			'emp_bank' 			=> strtoupper(trim($this->input->post('bank_name'))),
	    			'emp_no_account' 	=> trim($this->input->post('account_no')),
	    			'emp_name_account' 	=> strtoupper(trim($this->input->post('account_name'))),
	    			'position_id' 		=> trim($this->input->post('lstPosition')),
	    			'emp_worktype' 		=> trim($this->input->post('lstWorktype')),
	    			'status_id' 		=> trim($this->input->post('lstStatus')),
	    			'emp_first_salary' 	=> trim($this->input->post('salary')),
	    			'emp_photo' 		=> $this->upload->file_name,
	    			'emp_start_join' 	=> $tanggaljoin,
	    			'emp_start_contract'=> $tanggal_start_contract,
	    			'emp_end_contract' 	=> $tanggal_end_contract,
	    			'emp_date_update' 	=> date('Y-m-d'),
	    			'emp_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 	=> trim($this->session->userdata('username'))
					);
		} else {
			$data = array(
					'emp_nik' 			=> trim($this->input->post('nik')),
					'emp_finger' 		=> trim($this->input->post('finger')),
	    			'emp_name' 			=> strtoupper(trim($this->input->post('name'))),
	    			'emp_birthdate' 	=> $tanggallhr,
	    			'emp_birthplace' 	=> strtoupper(trim($this->input->post('birthplace'))),
	    			'emp_gender' 		=> $this->input->post('lstGender'),
	    			'emp_address' 		=> trim($this->input->post('address')),
	    			'province_id' 		=> trim($this->input->post('lstProvince')),
	    			'country_id' 		=> trim($this->input->post('lstCountry')),
	    			'education_id' 		=> trim($this->input->post('lstEducation')),
	    			'marriage_id' 		=> trim($this->input->post('lstMarriage')),
	    			'religion_id' 		=> trim($this->input->post('lstReligion')),
	    			'blood_id' 			=> trim($this->input->post('lstBlood')),
	    			'department_id' 	=> trim($this->input->post('lstDepartment')),
	    			'emp_district' 		=> trim($this->input->post('district')),
	    			'emp_zipcode' 		=> trim($this->input->post('postcode')),
	    			'emp_ktp_id' 		=> trim($this->input->post('ktpid')),
	    			'emp_phone' 		=> trim($this->input->post('phone')),
	    			'emp_email' 		=> trim($this->input->post('email')),
	    			'emp_tb' 			=> trim($this->input->post('height')),
	    			'emp_bb' 			=> trim($this->input->post('weight')),
	    			'emp_bpjs_h_id' 	=> trim($this->input->post('healthy')),
	    			'emp_join_date_h' 	=> $tanggalsht,
	    			'emp_bpjs_k_id' 	=> trim($this->input->post('employ')),
	    			'emp_join_date_k' 	=> $tanggalkrj,
	    			'emp_bank' 			=> strtoupper(trim($this->input->post('bank_name'))),
	    			'emp_no_account' 	=> trim($this->input->post('account_no')),
	    			'emp_name_account' 	=> strtoupper(trim($this->input->post('account_name'))),
	    			'position_id' 		=> trim($this->input->post('lstPosition')),
	    			'emp_worktype' 		=> trim($this->input->post('lstWorktype')),
	    			'status_id' 		=> trim($this->input->post('lstStatus')),
	    			'emp_first_salary' 	=> trim($this->input->post('salary')),	    			
	    			'emp_start_join' 	=> $tanggaljoin,
	    			'emp_start_contract'=> $tanggal_start_contract,
	    			'emp_end_contract' 	=> $tanggal_end_contract,
	    			'emp_date_update' 	=> date('Y-m-d'),
	    			'emp_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 	=> trim($this->session->userdata('username'))
					);
		}
		
		$this->db->insert('hrd_employee', $data);
	}
	
	function select_by_id($employee_id) {
		$this->db->select('*');
		$this->db->from('hrd_employee');
		$this->db->where('emp_id', $employee_id);
		
		return $this->db->get();
	}

	function update_data() {
		$employee_id     = $this->input->post('emp_id');
		
		// Tanggal Lahir
		$tgllahir 	= trim($this->input->post('tgl_lahir'));
		$xtg1lahir	= explode("-",$tgllahir);
		$thn1 		= $xtg1lahir[2];
		$bln1 		= $xtg1lahir[1];
		$tgl1 		= $xtg1lahir[0];
		$tanggallhr	= $thn1.'-'.$bln1.'-'.$tgl1;

		// Tanggal Join Kesehatan
		$tglsehat 	= trim($this->input->post('tgl_join_h'));
		if (!empty($tglsehat)) {
			$xtg1sehat	= explode("-",$tglsehat);
			$thns 		= $xtg1sehat[2];
			$blns 		= $xtg1sehat[1];
			$tgls 		= $xtg1sehat[0];
			$tanggalsht	= $thns.'-'.$blns.'-'.$tgls;
		} else {
			$tanggalsht = '';
		}

		// Tanggal Join Ketenagakerjaan
		$tglkerja 	= trim($this->input->post('tgl_join_e'));
		if (!empty($tglkerja)) {
			$xtg1kerja	= explode("-",$tglkerja);
			$thnk 		= $xtg1kerja[2];
			$blnk 		= $xtg1kerja[1];
			$tglk 		= $xtg1kerja[0];
			$tanggalkrj	= $thnk.'-'.$blnk.'-'.$tglk;
		} else {
			$tanggalkrj	= '';
		}
		// Tanggal Start Join
		$tgljoin 	= trim($this->input->post('tgl_start_join'));
		if (!empty($tgljoin)) {
			$xtg1join	= explode("-",$tgljoin);
			$thnj 		= $xtg1join[2];
			$blnj 		= $xtg1join[1];
			$tglj 		= $xtg1join[0];
			$tanggaljoin= $thnj.'-'.$blnj.'-'.$tglj;
		} else {
			$tanggaljoin='';
		}

		// Tanggal Start Contract
		$tglscontract 	= trim($this->input->post('tgl_start_contract'));
		if (!empty($tglscontract)) {
			$xtg1scontract	= explode("-",$tglscontract);
			$thnsc 			= $xtg1scontract[2];
			$blnsc			= $xtg1scontract[1];
			$tglsc 			= $xtg1scontract[0];
			$tanggal_start_contract	= $thnsc.'-'.$blnsc.'-'.$tglsc;
		} else {
			$tanggal_start_contract	= '';
		}

		// Tanggal End Contract
		$tglecontract 	= trim($this->input->post('tgl_end_contract'));
		if (!empty($tglscontract)) {
			$xtg1econtract	= explode("-",$tglecontract);
			$thnec 			= $xtg1econtract[2];
			$blnec 			= $xtg1econtract[1];
			$tglec 			= $xtg1econtract[0];
			$tanggal_end_contract = $thnec.'-'.$blnec.'-'.$tglec;
		} else {
			$tanggal_end_contract = '';
		}
		
		if (!empty($_FILES['userfile']['name'])) {
			$data = array(
					'emp_nik' 			=> trim($this->input->post('nik')),
					'emp_finger' 		=> trim($this->input->post('finger')),
	    			'emp_name' 			=> strtoupper(trim($this->input->post('name'))),
	    			'emp_birthdate' 	=> $tanggallhr,
	    			'emp_birthplace' 	=> strtoupper(trim($this->input->post('birthplace'))),
	    			'emp_gender' 		=> $this->input->post('lstGender'),
	    			'emp_address' 		=> trim($this->input->post('address')),
	    			'province_id' 		=> trim($this->input->post('lstProvince')),
	    			'country_id' 		=> trim($this->input->post('lstCountry')),
	    			'education_id' 		=> trim($this->input->post('lstEducation')),
	    			'marriage_id' 		=> trim($this->input->post('lstMarriage')),
	    			'religion_id' 		=> trim($this->input->post('lstReligion')),
	    			'blood_id' 			=> trim($this->input->post('lstBlood')),
	    			'department_id' 	=> trim($this->input->post('lstDepartment')),
	    			'emp_district' 		=> trim($this->input->post('district')),
	    			'emp_zipcode' 		=> trim($this->input->post('postcode')),
	    			'emp_ktp_id' 		=> trim($this->input->post('ktpid')),
	    			'emp_phone' 		=> trim($this->input->post('phone')),
	    			'emp_email' 		=> trim($this->input->post('email')),
	    			'emp_tb' 			=> trim($this->input->post('height')),
	    			'emp_bb' 			=> trim($this->input->post('weight')),
	    			'emp_bpjs_h_id' 	=> trim($this->input->post('healthy')),
	    			'emp_join_date_h' 	=> $tanggalsht,
	    			'emp_bpjs_k_id' 	=> trim($this->input->post('employ')),
	    			'emp_join_date_k' 	=> $tanggalkrj,
	    			'emp_bank' 			=> strtoupper(trim($this->input->post('bank_name'))),
	    			'emp_no_account' 	=> trim($this->input->post('account_no')),
	    			'emp_name_account' 	=> strtoupper(trim($this->input->post('account_name'))),
	    			'position_id' 		=> trim($this->input->post('lstPosition')),
	    			'emp_worktype' 		=> trim($this->input->post('lstWorktype')),
	    			'status_id' 		=> trim($this->input->post('lstStatus')),
	    			'emp_first_salary' 	=> trim($this->input->post('salary')),
	    			'emp_photo' 		=> $this->upload->file_name,
	    			'emp_start_join' 	=> $tanggaljoin,
	    			'emp_start_contract'=> $tanggal_start_contract,
	    			'emp_end_contract' 	=> $tanggal_end_contract,
	    			'emp_date_update' 	=> date('Y-m-d'),
	    			'emp_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 	=> trim($this->session->userdata('username'))
					);
		} else {
			$data = array(
					'emp_nik' 			=> trim($this->input->post('nik')),
					'emp_finger' 		=> trim($this->input->post('finger')),
	    			'emp_name' 			=> strtoupper(trim($this->input->post('name'))),
	    			'emp_birthdate' 	=> $tanggallhr,
	    			'emp_birthplace' 	=> strtoupper(trim($this->input->post('birthplace'))),
	    			'emp_gender' 		=> $this->input->post('lstGender'),
	    			'emp_address' 		=> trim($this->input->post('address')),
	    			'province_id' 		=> trim($this->input->post('lstProvince')),
	    			'country_id' 		=> trim($this->input->post('lstCountry')),
	    			'education_id' 		=> trim($this->input->post('lstEducation')),
	    			'marriage_id' 		=> trim($this->input->post('lstMarriage')),
	    			'religion_id' 		=> trim($this->input->post('lstReligion')),
	    			'blood_id' 			=> trim($this->input->post('lstBlood')),
	    			'department_id' 	=> trim($this->input->post('lstDepartment')),
	    			'emp_district' 		=> trim($this->input->post('district')),
	    			'emp_zipcode' 		=> trim($this->input->post('postcode')),
	    			'emp_ktp_id' 		=> trim($this->input->post('ktpid')),
	    			'emp_phone' 		=> trim($this->input->post('phone')),
	    			'emp_email' 		=> trim($this->input->post('email')),
	    			'emp_tb' 			=> trim($this->input->post('height')),
	    			'emp_bb' 			=> trim($this->input->post('weight')),
	    			'emp_bpjs_h_id' 	=> trim($this->input->post('healthy')),
	    			'emp_join_date_h' 	=> $tanggalsht,
	    			'emp_bpjs_k_id' 	=> trim($this->input->post('employ')),
	    			'emp_join_date_k' 	=> $tanggalkrj,
	    			'emp_bank' 			=> strtoupper(trim($this->input->post('bank_name'))),
	    			'emp_no_account' 	=> trim($this->input->post('account_no')),
	    			'emp_name_account' 	=> strtoupper(trim($this->input->post('account_name'))),
	    			'position_id' 		=> trim($this->input->post('lstPosition')),
	    			'emp_worktype' 		=> trim($this->input->post('lstWorktype')),
	    			'status_id' 		=> trim($this->input->post('lstStatus')),
	    			'emp_first_salary' 	=> trim($this->input->post('salary')),	    			
	    			'emp_start_join' 	=> $tanggaljoin,
	    			'emp_start_contract'=> $tanggal_start_contract,
	    			'emp_end_contract' 	=> $tanggal_end_contract,
	    			'emp_date_update' 	=> date('Y-m-d'),
	    			'emp_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 	=> trim($this->session->userdata('username'))
					);
		}

		$this->db->where('emp_id', $employee_id);
		$this->db->update('hrd_employee', $data);
	}

	function delete_data($kode) {
		$this->db->where('employee_id', $kode);
		$this->db->delete('hrd_employee');		
	}		
}
/* Location: ./application/model/emp/Employee_model.php */