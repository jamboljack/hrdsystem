<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Mail Administration <small>Inbox & Outbox</small></h1>
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
					<a href="#">Mail Administration</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Inbox & Outbox</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="<?php echo site_url('mail/inbox'); ?>">Inbox Mail</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Add Inbox Mail
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-plus-circle"></i>Form Add Inbox Mail
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
							<form action="<?php echo site_url('mail/inbox/savedata'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">From Company Name</label>
										<div class="col-md-5 has-error">
										<select class="select2_category form-control" data-placeholder="Choose Company Name" name="lstCompany" required autofocus>
											<option value="">- Choose Company Name -</option>
											<?php 
											foreach($companylist as $c) { 
											?>
											<option value="<?php echo $c->company_id; ?>" <?php echo set_select('lstCompany', $c->company_id); ?>><?php echo $c->company_name; ?></option>
											<?php 
											}
											?>
										</select>
										<?php echo form_error('lstCompany', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Mail No.</label>
										<div class="col-md-5 has-error">
											<input type="text" class="form-control" placeholder="Enter Mail No." name="mail_no" value="<?php echo set_value('mail_no'); ?>" autocomplete="off" required>
											<?php echo form_error('mail_no', '<span class="help-block has-error">','</span>'); ?>									
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Title</label>
										<div class="col-md-9 has-error">
											<input type="text" class="form-control" placeholder="Enter Title" name="title" value="<?php echo set_value('title'); ?>" autocomplete="off" required>
											<?php echo form_error('title', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">To</label>
										<div class="col-md-5 has-error">
											<input type="text" class="form-control" placeholder="Enter To" name="to" value="<?php echo set_value('to'); ?>" autocomplete="off" required>
											<?php echo form_error('to', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Date</label>
										<div class="col-md-9 has-error">
											<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="date_mail" value="<?php echo set_value('date_mail'); ?>" placeholder="DD-MM-YYYY" autocomplete="off" required />
											<?php echo form_error('date_mail', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Description</label>
										<div class="col-md-9 has-error">											
											<textarea class="form-control ckeditor" name="desc" rows="6"><?php echo set_value('desc'); ?></textarea>
										</div>
										<?php echo form_error('desc', '<span class="help-block has-error">','</span>'); ?>
									</div>									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
											<a href="<?php echo site_url('mail/inbox'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Cancel</a>
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