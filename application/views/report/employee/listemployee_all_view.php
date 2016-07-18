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
					<a href="<?php echo site_url('report/listemployee'); ?>">Report List of Employee</a>
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
								<span class="caption-subject font-blue-sharp bold uppercase">Employee List Preview - All</span>
							</div>							
							<div class="tools">
							</div>
						</div>
						<a href="<?php echo site_url('report/listemployee/'); ?>/print_report/all" class="btn btn-primary" target="_blank"><span class="glyphicon glyphicon-print"></span> Print Preview</a>
						<a href="<?php echo site_url('report/listemployee/'); ?>/print_report_pdf/all" class="btn btn-danger" target="_blank"><span class="glyphicon glyphicon-download-alt"></span> PDF</a>
						<a href="<?php echo site_url('report/listemployee'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>

						<div class="portlet-body">							
							<table class="table table-hover">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th width="10%">N I K</th>
								<th>Name</th>
								<th width="10%">BirthDate</th>
								<th width="10%">Join</th>
								<th width="10%">End</th>								
								<th width="5%">YoS</th>								
								<th width="15%">Position</th>
								<th width="10%">Status</th>
							</tr>
							</thead>
							<tbody>
							<?php
							foreach($daftardepartment as $d) {
								$department_id = $d->department_id;
							?>
							<tr>
								<td colspan='9'><b>Department : <?php echo $d->department_name; ?></b></td>
							</tr>
							<?php 
								$daftarlist = $this->listemployee_model->select_all_employee($department_id)->result();
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
								<td><?php echo $join; ?></td>
								<td><?php echo $end; ?></td>								
								<td><?php echo age($r->emp_start_join); ?></td>								
								<td><?php echo $r->position_name; ?></td>
								<td><?php echo $r->status_name; ?></td>
							</tr>
							<?php 
									$no++; 
								}
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