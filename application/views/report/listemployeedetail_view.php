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
					Detail Employee
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
								<span class="caption-subject font-blue-sharp bold uppercase">Report Employee Detail List</span>
							</div>							
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-hover">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th width="10%">N I K</th>								
								<th>Employee Name</th>
								<th width="5%">Age</th>
								<th width="5%">YoS</th>
								<th width="15%">Department</th>
								<th width="15%">Position</th>
								<th width="10%">Status</th>
								<th width="10%">Action</th>				
							</tr>
							</thead>
							<tbody>
							<?php
								$no = 1; 
								foreach($daftarlist as $r) {									
							?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $r->emp_nik; ?></td>								
								<td><?php echo $r->emp_name; ?></td>
								<td><?php echo age($r->emp_birthdate); ?></td>
								<td><?php echo age($r->emp_start_join); ?></td>
								<td><?php echo $r->department_name; ?></td>
								<td><?php echo $r->position_name; ?></td>
								<td><?php echo $r->status_name; ?></td>
								<td align="center">
									<a href="<?php echo site_url('report/listemployeedetail/preview/'.$r->emp_id); ?>"><button class="btn btn-danger btn-xs" title="Edit Data"><i class="icon-printer"></i> Print</button></a>
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