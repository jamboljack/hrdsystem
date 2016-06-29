<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listemployee extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('report/listemployee_model');	
	}
	
	public function index(){
		if($this->session->userdata('logged_in_hrd')) {
			$data['daftardepartment']	= $this->listemployee_model->select_department()->result();
			$this->template->display('report/listemployee_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}	
	
	public function preview($lstDept = '', $OptBy = '', $Tgl1 = '', $Tgl2 = '') {  
		$lstDept  	= trim($this->input->post('lstDept'));
		$OptBy		= $this->input->post('OptBy');
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

		if ($lstDept == 'all' && $OptBy == 'all' && $Tgl1 == '' && $Tgl2 == '') {
		// Jika All Data
			$data['daftardepartment'] = $this->listemployee_model->select_department()->result();
			$this->template->display('report/employee/listemployee_all_view', $data);
		}
		elseif ($lstDept == 'all' && $OptBy <> 'all' && $Tgl1 == '' && $Tgl2 == '') 
		// Jika All Dept. By <> All dan Periode = Empty
		{
			$this->session->set_flashdata('notification','Periode is Empty, Please Insert...');
			redirect(site_url('report/listemployee'));
		}
		elseif ($lstDept == 'all' && $OptBy <> 'all' && $Tgl1 <> '' && $Tgl2 <> '') 
		// Jika All Dept. By <> All dan Periode <> Empty
		{
			$data = array(
				'Dept' 	=> trim($this->input->post('lstDept')),
				'By' 	=> trim($this->input->post('OptBy')),
				'Tgl1' 	=> $TGL1,
				'Tgl2' 	=> $TGL2
			);
			
			$data['daftardepartment'] = $this->listemployee_model->select_department()->result();
			$data['Report'] 		  = $data;
			$this->template->display('report/employee/listemployee_periode_view', $data);
		}
		elseif ($lstDept <> 'all' && $OptBy == 'all' && $Tgl1 == '' && $Tgl2 == '') 
		// Jika Dept. <> All, By <> All, dan Periode <> Empty
		{
			$department_id = trim($this->input->post('lstDept'));
			$data = array(
				'Dept' => trim($this->input->post('lstDept'))
			);
			
			$data['detail'] = $this->listemployee_model->select_dept_by_id($department_id)->row();
			$data['daftarlist'] = $this->listemployee_model->select_all_employee($department_id)->result();
			$data['Report'] = $data;
			$this->template->display('report/employee/listemployee_all_dept_view', $data);	
		}
		elseif ($lstDept <> 'all' && $OptBy <> 'all' && $Tgl1 <> '' && $Tgl2 <> '') 
		// Jika Dept. <> All, By <> All, dan Periode <> Empty
		{
			$department_id = trim($this->input->post('lstDept'));
			$data = array(
				'Dept' 	=> trim($this->input->post('lstDept')),
				'By' 	=> trim($this->input->post('OptBy')),
				'Tgl1' 	=> $TGL1,
				'Tgl2' 	=> $TGL2
			);
		
			$data['detail'] = $this->listemployee_model->select_dept_by_id($department_id)->row();
			$data['Report'] = $data;
			$this->template->display('report/employee/listemployee_periode_dept_view', $data);	
		}	
	}
	
	public function print_report($lstDept = '', $OptBy = '', $Tgl1 = '', $Tgl2 = '') {		
		$lstDept 	= trim($this->uri->segment(4));
		$OptBy		= trim($this->uri->segment(5));
		$Tgl1 		= trim($this->uri->segment(6));
		$Tgl2 		= trim($this->uri->segment(7));
		
		if ($lstDept == 'all' && $OptBy == '' && $Tgl1 == '' && $Tgl2 == '') {
			$data['daftardepartment'] = $this->listemployee_model->select_department()->result();
			$this->load->view('report/employee/listemployee_all_report', $data);
		}
		elseif ($lstDept == 'all' && $OptBy <> 'all' && $Tgl1 <> '' && $Tgl2 <> '') 		
		{
			$data['daftardepartment'] = $this->listemployee_model->select_department()->result();			
			$this->load->view('report/employee/listemployee_periode_report', $data);
		}
		elseif ($lstDept <> 'all' && $OptBy == '' && $Tgl1 == '' && $Tgl2 == '') 		
		{
			$department_id 	= trim($this->uri->segment(4));
			$data['detail'] = $this->listemployee_model->select_dept_by_id($department_id)->row();
			$data['daftarlist'] = $this->listemployee_model->select_all_employee($department_id)->result();			
			$this->load->view('report/employee/listemployee_all_dept_report', $data);
		}
		elseif ($lstDept <> 'all' && $OptBy <> 'all' && $Tgl1 <> '' && $Tgl2 <> '')
		{
			$department_id 	= trim($this->uri->segment(4));			
			$data['detail'] = $this->listemployee_model->select_dept_by_id($department_id)->row();			
			$this->load->view('report/employee/listemployee_periode_dept_report', $data);	
		}
	}

	public function print_report_pdf($lstDept = '', $OptBy = '', $Tgl1 = '', $Tgl2 = '') {
		$lstDept 	= trim($this->uri->segment(4));
		$OptBy		= trim($this->uri->segment(5));
		$Tgl1 		= trim($this->uri->segment(6));
		$Tgl2 		= trim($this->uri->segment(7));		

		$time = time();
		$filename = 'Report_Employee_PDF_'.$lstDept.'_'.$time;
		$pdfFilePath = FCPATH."download/$filename.pdf";
			
		if (file_exists($pdfFilePath) == FALSE){
			ini_set('memory_limit','50M');

			if ($lstDept == 'all' && $OptBy == '' && $Tgl1 == '' && $Tgl2 == '') {			    
			    $data['daftardepartment'] = $this->listemployee_model->select_department()->result();
			    $html = $this->load->view('report/employee/listemployee_all_report_pdf', $data, true);
			}
			elseif ($lstDept == 'all' && $OptBy <> 'all' && $Tgl1 <> '' && $Tgl2 <> '') 		
			{
				$data['daftardepartment'] = $this->listemployee_model->select_department()->result();
			    $html = $this->load->view('report/employee/listemployee_periode_report_pdf', $data, true);
			}
			elseif ($lstDept <> 'all' && $OptBy == '' && $Tgl1 == '' && $Tgl2 == '') 		
			{
				$department_id 	= trim($this->uri->segment(4));
				$data['detail'] = $this->listemployee_model->select_dept_by_id($department_id)->row();
				$data['daftarlist'] = $this->listemployee_model->select_all_employee($department_id)->result();
				$html = $this->load->view('report/employee/listemployee_all_dept_report_pdf', $data, true);
			}
			elseif ($lstDept <> 'all' && $OptBy <> 'all' && $Tgl1 <> '' && $Tgl2 <> '')
			{
				$department_id 	= trim($this->uri->segment(4));			
				$data['detail'] = $this->listemployee_model->select_dept_by_id($department_id)->row();
				$html = $this->load->view('report/employee/listemployee_periode_dept_report_pdf', $data, true);
			}

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
/* Location: ./application/controllers/report/Listemployee.php */