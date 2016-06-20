<!-- BEGIN PAGE CONTAINER -->
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
				<li>
					<a href="<?php echo site_url('mail/users'); ?>">Users</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Edit Users
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Form Edit Users
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
							<form action="<?php echo site_url('users/updatedata'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<input type="hidden" name="id" value="<?php echo $detail->user_username; ?>" />

								<div class="form-body">
									<h3 class="form-section">Users Detail</h3>
									<div class="form-group">
										<label class="control-label col-md-3">Username</label>
										<div class="col-md-5 has-error">
											<input type="text" class="form-control" placeholder="Enter Username" name="username" value="<?php echo $detail->user_username; ?>" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" title='Jangan Gunakan SPASI.' autocomplete="off" readonly />											
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Password</label>
										<div class="col-md-5 has-error">
											<input type="password" class="form-control" placeholder="Enter Password" name="password" value="<?php echo set_value('password'); ?>" autocomplete="off" autofocus />
											<span class="help-block">Isi Password jika di Ganti.</span>
											<?php echo form_error('password', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Name</label>
										<div class="col-md-5 has-error">
											<input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $detail->user_name; ?>" autocomplete="off" required />
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Level</label>
										<div class="col-md-5 has-error">
										<select class="form-control" name="lstLevel" required>
											<option value="">- Choose Level -</option>
											<option value="Admin" <?php if ($detail->user_level=='Admin') { echo 'selected'; } ?>>Admin</option>
											<option value="User" <?php if ($detail->user_level=='User') { echo 'selected'; } ?>>User</option>
										</select>										
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Status</label>
										<div class="col-md-5 has-error">
										<select class="form-control" name="lstStatus" required>
											<option value="">- Choose lstStatus -</option>
											<option value="Active" <?php if ($detail->user_status=='Active') { echo 'selected'; } ?>>Active</option>
											<option value="Non Active" <?php if ($detail->user_status=='Non Active') { echo 'selected'; } ?>>Non Active</option>
										</select>										
										</div>
									</div>
									<h3 class="form-section">Avatar File</h3>
									<div class="form-group">
										<label class="control-label col-md-3">File</label>
										<div class="col-md-5 has-error">
										<?php if (empty($detail->user_image)) { ?>
											<img src="<?php echo base_url(); ?>img/no_image.gif" alt="" />
										<?php } else { ?>
											<img alt="" style="width: 200px; height: 200px;" src="<?php echo base_url(); ?>icon/<?php echo $detail->user_image; ?>" />
										<?php } ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Change File</label>
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
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
											<a href="<?php echo site_url('users'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Cancel</a>
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