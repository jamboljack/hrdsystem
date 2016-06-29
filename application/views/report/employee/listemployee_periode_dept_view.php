<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Report <small>Employee - Data Employee</small></h1>
			</div>
			<!-- END PAGE TITLE -->				
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="<?php echo base_url(); ?>">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Report</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Employee</a>
					<i class="fa fa-circle"></i>
				</li>				
				<li>
					<a href="#">Data Employee</a>
					<i class="fa fa-circle"></i>
				</li>				
				<li class="active">
					<a href="<?php echo site_url('report/listemployee'); ?>">Report Employee List</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					Preview Report
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->

			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">			
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-book font-blue-sharp"></i>
								<?php
								$OptBy		= $this->input->post('OptBy');
								if ($OptBy == 'startjoin') {
									$title = 'Start Join';
								} elseif ($OptBy == 'startcontract') {
									$title = 'Start Contract';
								} elseif ($OptBy == 'endcontract') {
									$title = 'End Contract';
								}
								?>
								<span class="caption-subject font-blue-sharp bold uppercase">Employee List Preview - <?php echo $detail->department_name.' '.$title.' '.$this->input->post('tgl1').' s/d '.$this->input->post('tgl2'); ?></span>
							</div>							
							<div class="tools">
							</div>
						</div>
						<a href="<?php echo site_url('report/listemployee/'); ?>/print_report/<?php echo $Report['Dept'].'/'.$Report['By'].'/'.$Report['Tgl1'].'/'.$Report['Tgl2']; ?>" class="btn btn-primary" target="_blank"><span class="glyphicon glyphicon-print"></span> Print Preview</a>
						<a href="<?php echo site_url('report/listemployee/'); ?>/print_report_pdf/<?php echo $Report['Dept'].'/'.$Report['By'].'/'.$Report['Tgl1'].'/'.$Report['Tgl2']; ?>" class="btn btn-danger" target="_blank"><span class="glyphicon glyphicon-download-alt"></span> PDF</a>
						<a href="<?php echo site_url('report/listemployee'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
						
						<div class="portlet-body">							
							<table class="table table-hover">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th width="10%">N I K</th>
								<th>Name</th>
								<th width="10%">BirthDate</th>
								<?php								
								if ($OptBy == 'startjoin') {
									echo '<th width="10%">Join</th>';
								} elseif ($OptBy == 'startcontract') {
									echo '<th width="10%">Start</th>';								
								} 
								?>
								<th width="10%">End</th>								
								<th width="5%">YoS</th>								
								<th width="15%">Position</th>
								<th width="10%">Status</th>
							</tr>
							</thead>
							<tbody>							
							<?php
								$department_id = $detail->department_id;								
								if ($OptBy == 'startjoin') {									
									$daftarlist = $this->listemployee_model->select_employee_start_join($department_id)->result();
								} elseif ($OptBy == 'startcontract') {
									$daftarlist = $this->listemployee_model->select_employee_start_contract($department_id)->result();
								} elseif ($OptBy == 'endcontract') {
									$daftarlist = $this->listemployee_model->select_employee_end_contract($department_id)->result();
								}

								$no = 1; 
								foreach($daftarlist as $r) {									
									$tgllahir  	 = $r->emp_birthdate; 				                           
				                    if (!empty($tgllahir)) {
				                        $xtgllahir 	= explode("-",$tgllahir);
				                        $thn 		= $xtgllahir[0];
				                        $bln 		= $xtgllahir[1];
				                        $tgl 		= $xtgllahir[2];

				                        $lahir 		= $tgl.'-'.$bln.'-'.$thn;
				                    } else { 
				                    	$lahir 		= '';
				                    }

				                    $tgljoin  	 = $r->emp_start_join; 				                           
				                    if (!empty($tgljoin)) {
				                        $xtgljoin 	= explode("-",$tgljoin);
				                        $thn1 		= $xtgljoin[0];
				                        $bln1 		= $xtgljoin[1];
				                        $tgl1 		= $xtgljoin[2];

				                        $join 		= $tgl1.'-'.$bln1.'-'.$thn1;
				                    } else { 
				                    	$join 		= '';
				                    }

				                    $tglstart  	 = $r->emp_start_contract; 				                           
				                    if (!empty($tglstart)) {
				                        $xtglstart 	= explode("-",$tglstart);
				                        $thn3 		= $xtglstart[0];
				                        $bln3 		= $xtglstart[1];
				                        $tgl3 		= $xtglstart[2];

				                        $start 		= $tgl3.'-'.$bln3.'-'.$thn3;
				                    } else { 
				                    	$start 		= '';
				                    }

				                    $tglend  	 = $r->emp_end_contract; 				                           
				                    if (!empty($tglend)) {
				                        $xtglend 	= explode("-",$tglend);
				                        $thn2 		= $xtglend[0];
				                        $bln2 		= $xtglend[1];
				                        $tgl2 		= $xtglend[2];

				                        $end 		= $tgl2.'-'.$bln2.'-'.$thn2;
				                    } else { 
				                    	$end 		= '';
				                    }
							?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $r->emp_nik; ?></td>								
								<td><?php echo $r->emp_name; ?></td>
								<td><?php echo $lahir; ?></td>
								<?php
								if ($OptBy == 'startjoin') {
									echo '<td>'.$join.'</td>';
								} elseif ($OptBy == 'startcontract') {
									echo '<td>'.$start.'</td>';
								}
								?>
								<td><?php echo $end; ?></td>								
								<td><?php echo age($r->emp_start_join); ?></td>								
								<td><?php echo $r->position_name; ?></td>
								<td><?php echo $r->status_name; ?></td>
							</tr>
							<?php 
									$no++; 
							}
							?>
							</tbody>
							</table>
						</div>						
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->				
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>