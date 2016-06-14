<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Employee <small>Master Data & Data Employee</small></h1>
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
					<a href="#">Master Data</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="<?php echo site_url('blood'); ?>">Blood</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Edit Blood
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Form Edit Blood
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
						<!-- BEGIN FORM-->
						<form action="<?php echo site_url('blood/updatedata'); ?>" class="form-horizontal" method="post">
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						<input type="hidden" name="blood_id" value="<?php echo $detail->blood_id; ?>" />

							<div class="form-body">								
								<div class="form-group">
									<label class="col-md-3 control-label">Blood Name</label>
									<div class="col-md-8 has-error">
										<input type="text" class="form-control" placeholder="Enter Blood Name" name="name" value="<?php echo $detail->blood_name; ?>" autocomplete="off" required autofocus>
										<?php echo form_error('name', '<span class="help-block has-error">','</span>'); ?>
									</div>
								</div>								
							</div>
							<div class="form-actions fluid">
								<div class="row">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
										<a href="<?php echo site_url('blood'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Cancel</a>
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