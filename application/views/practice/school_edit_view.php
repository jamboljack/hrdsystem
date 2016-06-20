<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Practical Work <small>School</small></h1>
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
					<a href="#">Practical Work</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="<?php echo site_url('practice/school'); ?>">School</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Edit School
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Form Edit School
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>								
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">						
							<form action="<?php echo site_url('practice/school/updatedata'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<input type="hidden" name="id" value="<?php echo $detail->school_id; ?>" />

								<div class="form-body">									
									<div class="form-group">
										<label class="control-label col-md-3">Name</label>
										<div class="col-md-5 has-error">
											<input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $detail->school_name; ?>" autocomplete="off" required autofocus />
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Address</label>
										<div class="col-md-9 has-error">
											<input type="text" class="form-control" placeholder="Enter Address" name="address" value="<?php echo $detail->school_address; ?>" autocomplete="off" required>
										</div>
									</div>									
									<div class="form-group">
										<label class="control-label col-md-3">Phone</label>
										<div class="col-md-4 has-error">
											<input type="text" class="form-control" placeholder="Enter Phone" name="phone" value="<?php echo $detail->school_phone; ?>" autocomplete="off" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Email</label>
										<div class="col-md-4 has-error">
											<input type="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo $detail->school_email; ?>" autocomplete="off" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Website</label>
										<div class="col-md-4 has-error">
											<input type="text" class="form-control" placeholder="Enter Website" name="website" value="<?php echo $detail->school_web; ?>" autocomplete="off">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Chief School</label>
										<div class="col-md-5 has-error">
											<input type="text" class="form-control" placeholder="Enter Chief School" name="chief" value="<?php echo $detail->school_chief; ?>" autocomplete="off">
										</div>
									</div>									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
											<a href="<?php echo site_url('practice/school'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Cancel</a>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->						
						
						</div>
					</div>
											
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>