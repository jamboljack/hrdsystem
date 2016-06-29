<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Report <small>Employee - Master</small></h1>
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
				<li class="active">
					<a href="<?php echo site_url('report/listmaster'); ?>">Report Master</a>
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
								<span class="caption-subject font-blue-sharp bold uppercase">Marriage List Preview</span>
							</div>							
							<div class="tools">
							</div>
						</div>
						<a href="<?php echo site_url('report/listmaster/'); ?>/print_report/<?php echo $Report['Master']; ?>" class="btn btn-primary" target="_blank"><span class="glyphicon glyphicon-print"></span> Print Preview</a>
						<a href="<?php echo site_url('report/listmaster/'); ?>/print_report_pdf/<?php echo $Report['Master']; ?>" class="btn btn-danger" target="_blank"><span class="glyphicon glyphicon-download-alt"></span> PDF</a>
						<a href="<?php echo site_url('report/listmaster'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
						<div class="portlet-body">
							<table class="table table-hover">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th>Marriage Name</th>								
							</tr>
							</thead>
							<tbody>
							<?php
								$no = 1; 
								foreach($daftarlist as $r) {
							?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $r->marriage_name; ?></td>								
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