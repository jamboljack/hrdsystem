<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listinsurance extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('home_model');
		$this->load->model('report/listinsurance_model');	
	}
	
	public function index(){
		if($this->session->userdata('logged_in_hrd')) {			
			$this->template->display('report/listinsurance_view');
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}	
	
	public function preview($lstType = '', $Tgl1= '', $Tgl2 = '') {  
		$lstType  	= trim($this->input->post('lstType'));		
		$Tgl1 		= $this->input->post('tgl1');
		$Tgl2 		= $this->input->post('tgl2');

		if (!empty($this->input->post('tgl1') && !empty($this->input->post('tgl2')))) { 			
			$xtgl1 		= explode("-",$Tgl1);
			$thn 		= $xtgl1[2];
			$bln 		= $xtgl1[1];
			$tgl 		= $xtgl1[0];
			$TGL1 		= $thn.'-'.$bln.'-'.$tgl; // Tgl 1
			
			$xtgl2 		= explode("-",$Tgl2);
			$thn1 		= $xtgl2[2];
			$bln1 		= $xtgl2[1];
			$tgl1 		= $xtgl2[0];
			$TGL2 		= $thn1.'-'.$bln1.'-'.$tgl1; // Tgl 2
		}
		
		if ($lstType == 'kesehatan' && $Tgl1 == '' && $Tgl2 == '') { // All Kesehatan
			$data['daftarinsurance'] 	= $this->listinsurance_model->select_all_healthy_insurance()->result();
		} elseif ($lstType == 'tenagakerja' && $Tgl1 == '' && $Tgl2 == '') { // All Tenaga Kerja
			$data['daftarinsurance'] 	= $this->listinsurance_model->select_all_employ_insurance()->result();
		} elseif ($lstType == 'kesehatan' && $Tgl1 <> '' && $Tgl2 <> '') { // Kesehatan by Periode
			$data = array(
				'Type' 	=> trim($this->input->post('lstType')),				
				'Tgl1' 	=> $TGL1,
				'Tgl2' 	=> $TGL2
			);

			$data['Report'] 		  	= $data;
			$data['daftarinsurance']	= $this->listinsurance_model->select_periode_healthy_insurance()->result();
		} elseif ($lstType == 'tenagakerja' && $Tgl1 <> '' && $Tgl2 <> '') { // Tenaga Kerja by Periode
			$data = array(
				'Type' 	=> trim($this->input->post('lstType')),				
				'Tgl1' 	=> $TGL1,
				'Tgl2' 	=> $TGL2
			);

			$data['Report'] 		  	= $data;
			$data['daftarinsurance']	= $this->listinsurance_model->select_periode_employ_insurance()->result();
		}

		$this->template->display('report/employee/listinsurance_preview_view', $data);
	}
	
	public function print_report($emp_id = '') {		
		$emp_id 	= trim($this->uri->segment(4));		
		// Detail Karyawan
		$data['detail'] 	= $this->listemployeedetail_model->select_detail_employee($emp_id)->row();
		// School
		$data['schoollist'] = $this->listemployeedetail_model->select_school($emp_id)->result();
		// Work
		$data['worklist'] 	= $this->listemployeedetail_model->select_work($emp_id)->result();
		// Family
		$data['familylist'] = $this->listemployeedetail_model->select_family($emp_id)->result();
		// Reward
		$data['rewardlist'] = $this->listemployeedetail_model->select_reward($emp_id)->result();
		// Punishment
		$data['punishmentlist'] = $this->listemployeedetail_model->select_punishment($emp_id)->result();
		// Record
		$data['recordlist'] = $this->listemployeedetail_model->select_record($emp_id)->result();

		$this->load->view('report/employee/listdetailemployeepreview_report', $data);
	}

	public function print_report_pdf($emp_id = '') {
		$emp_id 	= trim($this->uri->segment(4));
		
		$time = time();
		$filename = 'Report_Employee_Detail_PDF_'.$lstDept.'_'.$time;
		$pdfFilePath = FCPATH."download/$filename.pdf";
			
		if (file_exists($pdfFilePath) == FALSE){
			ini_set('memory_limit','50M');
						
			// Detail Karyawan
			$data['detail'] 	= $this->listemployeedetail_model->select_detail_employee($emp_id)->row();
			// School
			$data['schoollist'] = $this->listemployeedetail_model->select_school($emp_id)->result();
			// Work
			$data['worklist'] 	= $this->listemployeedetail_model->select_work($emp_id)->result();
			// Family
			$data['familylist'] = $this->listemployeedetail_model->select_family($emp_id)->result();
			// Reward
			$data['rewardlist'] = $this->listemployeedetail_model->select_reward($emp_id)->result();
			// Punishment
			$data['punishmentlist'] = $this->listemployeedetail_model->select_punishment($emp_id)->result();
			// Record
			$data['recordlist'] = $this->listemployeedetail_model->select_record($emp_id)->result();
			$html = $this->load->view('report/employee/listdetailemployeepreview_report_pdf', $data, true);

			$this->load->library('pdf');
			$param = '"en-GB-x","A4-L","","",10,10,10,10,6,3';			
			$pdf = $this->pdf->load($param);
			$pdf->SetHeader(''); 
			$pdf->SetFooter('');
			$pdf->WriteHTML($html); // write the HTML into the PDF
			$pdf->Output($pdfFilePath, 'F'); // save to file because we can
		}
		redirect("download/$filename.pdf");			
	}	
}
/* Location: ./application/controllers/report/Listinsurance.php */