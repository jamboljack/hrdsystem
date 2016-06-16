<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Mail Administration <small>Internal Mail</small></h1>
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
					<a href="#">Internal Mail</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="<?php echo site_url('mail/decree'); ?>">Decree Mail</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Add Decree Mail
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-plus-circle"></i>Form Add Decree Mail
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
							<form action="<?php echo site_url('mail/decree/savedata'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

								<div class="form-body">
									<h3 class="form-section">Mail Detail</h3>
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
									<div class="form-group">
										<label class="control-label col-md-3">Sign</label>
										<div class="col-md-5 has-error">
											<input type="text" class="form-control" placeholder="Enter Sign" name="sign" value="<?php echo set_value('sign'); ?>" autocomplete="off" required>
											<?php echo form_error('sign', '<span class="help-block has-error">','</span>'); ?>									
										</div>
									</div>
									<h3 class="form-section">Scan File</h3>
									<div class="form-group">
										<label class="control-label col-md-3">File</label>
										<div class="col-md-5 has-error">
											<div class="fileupload fileupload-new" data-provides="fileupload">
							                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
							                    <img src="<?php echo base_url(); ?>img/no_image.gif" alt="" />
							                </div>
						                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;">
						                    </div>
							                <div>
							                    <span class="btn btn-blue btn-file">
								                <span class="fileupload-new"><i class="icon-paper-clip"></i> Browse</span>
								                <span class="fileupload-exists"><i class="icon-undo"></i> Ganti</span>
								                <input type="file" class="default" name="userfile" />
							                    </span>                                             
						                    </div>
						                    </div>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
											<a href="<?php echo site_url('mail/decree'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Cancel</a>
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