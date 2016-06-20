<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>System <small>Users</small></h1>
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
					<a href="#">System</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					Users
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
								<i class="fa fa-users font-blue-sharp"></i>
								<span class="caption-subject font-blue-sharp bold uppercase">Users List</span>
							</div>							
							<div class="tools">
							</div>
						</div>
						<a href="<?php echo site_url('users/adddata'); ?>">
							<button type="submit" class="btn btn-primary">
							<i class="icon-plus"></i> Add Data</button>
						</a>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th width="15%">Username</th>
								<th>Name</th>								
								<th width="10%">Level</th>
								<th width="10%">Status</th>								
								<th width="8%">Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
								$no = 1; 
								foreach($daftarlist as $r) { 
									$user_username = $r->user_username;									
							?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $r->user_username; ?></td>								
								<td><?php echo $r->user_name; ?></td>
								<td><?php echo $r->user_level; ?></td>
								<td>
									<?php if ($r->user_status=='Active') { ?>
										<span class="label label-sm label-success"><?php echo $r->user_status; ?></span>
									<?php } else { ?>
										<span class="label label-sm label-danger"><?php echo $r->user_status; ?></span>
									<?php } ?>
								</td>
								<td>
									<a href="<?php echo site_url('users/editdata/'.$r->user_username); ?>"><button class="btn btn-primary btn-xs" title="Edit Data"><i class="icon-pencil"></i> Edit</button></a>	                        		
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