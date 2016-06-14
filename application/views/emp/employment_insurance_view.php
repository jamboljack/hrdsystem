<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Employee <small>Data Employee</small></h1>
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
					<a href="#">Employee</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Data Employee</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					Employment Insurance
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
								<i class="fa fa-medkit font-blue-sharp"></i>
								<span class="caption-subject font-blue-sharp bold uppercase">Employment Insurance List</span>
							</div>							
							<div class="tools">
							</div>
						</div>						
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th width="10%">N I K</th>
								<th>Employee Name</th>
								<th width="20%">Department / Position</th>
								<th width="15%">No. BPJS</th>
								<th width="10%">Join Date</th>
								<th width="10%">Action</th>				
							</tr>
							</thead>
							<tbody>
							<?php
								$no = 1; 
								foreach($daftarlist as $r) {
									$tanggal 	= $r->emp_join_date_k; 				                           
				                    if (!empty($tanggal)) {
				                        $xtanggal 	= explode("-",$tanggal);
				                        $thn1 		= $xtanggal[0];
				                        $bln1 		= $xtanggal[1];
				                        $tgl1 		= $xtanggal[2];

				                        $date 		= $tgl1.'-'.$bln1.'-'.$thn1;
				                    } else { 
				                    	$date 		= '';
				                    }									
							?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $r->emp_nik; ?></td>								
								<td><?php echo $r->emp_name; ?></td>
								<td><?php echo $r->department_name.' / '.$r->position_name; ?></td>
								<td><?php echo $r->emp_bpjs_k_id; ?></td>
								<td><?php echo $date; ?></td>
								<td>
									<a href="<?php echo site_url('emp/employment_insurance/detaildata/'.$r->emp_id); ?>"><button class="btn btn-primary btn-xs" title="Edit Data"><i class="icon-pencil"></i> Detail</button></a>	                        		
								</td>							
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