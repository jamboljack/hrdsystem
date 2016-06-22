<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>System <small>Calendar Event</small></h1>
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
				<li>
					<a href="<?php echo site_url('sistem/event'); ?>">Calendar Event List</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					Add Calendar Event
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-plus-circle"></i>Form Add Calendar Event
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
							<form action="<?php echo site_url('sistem/event/savedata'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

								<div class="form-body">									
									<div class="form-group">
										<label class="control-label col-md-3">Event Name</label>
										<div class="col-md-9 has-error">
											<input type="text" class="form-control" placeholder="Enter Event Name" name="name" value="<?php echo set_value('name'); ?>" autocomplete="off" required autofocus>
											<?php echo form_error('name', '<span class="help-block has-error">','</span>'); ?>									
										</div>
									</div>									
									<div class="form-group">
										<label class="control-label col-md-3">Start Date</label>
										<div class="col-md-9 has-error">
											<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="start_date" value="<?php echo set_value('start_date'); ?>" placeholder="DD-MM-YYYY" autocomplete="off" required />
											<?php echo form_error('start_date', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Start Time</label>
										<div class="col-md-3 has-error">
											<div class="input-group">
												<input type="text" class="form-control timepicker timepicker-24" name="start_time" value="<?php echo set_value('start_time'); ?>" required>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-clock-o"></i></button>
												</span>												
											</div>
											<?php echo form_error('start_time', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">End Date</label>
										<div class="col-md-9 has-error">
											<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="end_date" value="<?php echo set_value('end_date'); ?>" placeholder="DD-MM-YYYY" autocomplete="off" required />
											<?php echo form_error('end_date', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">End Time</label>
										<div class="col-md-3 has-error">
											<div class="input-group">
												<input type="text" class="form-control timepicker timepicker-24" name="end_time" value="<?php echo set_value('end_time'); ?>" required>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-clock-o"></i></button>
												</span>
											</div>
											<?php echo form_error('end_time', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Label Color</label>
										<div class="col-md-3 has-error">
										<select class="form-control" name="lstColor" required>
											<option value="">- Choose Label Color -</option>
											<option value="grey" <?php echo set_select('grey', 'lstColor'); ?>>Grey</option>
											<option value="red" <?php echo set_select('red', 'lstColor'); ?>>Red</option>
											<option value="yellow" <?php echo set_select('yellow', 'lstColor'); ?>>Yellow</option>
											<option value="green" <?php echo set_select('green', 'lstColor'); ?>>Green</option>
											<option value="purple" <?php echo set_select('purple', 'lstColor'); ?>>Purple</option>
										</select>
										<?php echo form_error('lstColor', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
											<a href="<?php echo site_url('sistem/event'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Cancel</a>
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