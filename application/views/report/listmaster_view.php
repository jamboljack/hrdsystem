<!-- BEGIN PAGE CONTAINER -->
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
					Report Master
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-book"></i> Report Master
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
							<form action="<?php echo site_url('report/listmaster/preview'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

								<div class="form-body">									
									<div class="form-group">
										<label class="control-label col-md-3">Choose Master</label>
										<div class="col-md-3 has-error">
											<select class="select2_category form-control" data-placeholder="- Choose Master -" name="lstMaster" required autofocus>
												<option value="">- Choose Master -</option>
												<option value="blood" <?php echo set_select('blood', 'lstMaster'); ?>>Blood</option>
												<option value="marriage" <?php echo set_select('marriage', 'lstMaster'); ?>>Marriage</option>
												<option value="religion" <?php echo set_select('religion', 'lstMaster'); ?>>Religion</option>
												<option value="education" <?php echo set_select('education', 'lstMaster'); ?>>Education</option>
												<option value="relation" <?php echo set_select('relation', 'lstMaster'); ?>>Relation</option>
												<option value="status" <?php echo set_select('status', 'lstMaster'); ?>>Status</option>
												<option value="deparment" <?php echo set_select('deparment', 'lstMaster'); ?>>Department</option>
												<option value="position" <?php echo set_select('position', 'lstMaster'); ?>>Position</option>
												<option value="absent" <?php echo set_select('position', 'lstMaster'); ?>>Absent</option>
											</select>										
										</div>									
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span> Preview</button>											
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