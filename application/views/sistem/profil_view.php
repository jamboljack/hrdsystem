<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/sweetalert2.css">
<script src="<?php echo base_url(); ?>js/sweetalert2.min.js"></script>

<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>My Profile</h1>
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
				<li class="active">
					My Profile					
				</li>				
			</ul>
			<!-- END PAGE BREADCRUMB -->

			<!-- CONTENT -->
			<div class="row margin-top-10">
				<div class="col-md-12">
					<!-- BEGIN PROFILE SIDEBAR -->
					<div class="profile-sidebar" style="width: 250px;">
						<!-- PORTLET MAIN -->
						<div class="portlet light profile-sidebar-portlet">
							<!-- SIDEBAR USERPIC -->
							<div class="profile-userpic">
								<img src="<?php echo base_url(); ?>icon/<?php echo $this->session->userdata('avatar'); ?>" class="img-responsive" alt="">
							</div>
							<!-- END SIDEBAR USERPIC -->
							<!-- SIDEBAR USER TITLE -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									 <?php echo $this->session->userdata('nama'); ?>
								</div>
								<div class="profile-usertitle-job">
									 <?php echo $this->session->userdata('level'); ?>
								</div>
							</div>
							<!-- END SIDEBAR USER TITLE -->							
							<!-- SIDEBAR MENU -->
							<div class="profile-usermenu">
								<ul class="nav">
									<li class="active">
										<a href="#">
										<i class="icon-settings"></i>
										Account Settings </a>
									</li>									
								</ul>
							</div>
							<!-- END MENU -->
						</div>
						<!-- END PORTLET MAIN -->						
					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-12">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_1" data-toggle="tab">Personal Info</a>
											</li>
											<li>
												<a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
											</li>
											<li>
												<a href="#tab_1_3" data-toggle="tab">Change Password</a>
											</li>											
										</ul>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											<!-- PERSONAL INFO TAB -->
											<div class="tab-pane active" id="tab_1_1">
												<form role="form" action="<?php echo site_url('sistem/profil/updatedata'); ?>" method="post">
												<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
													<div class="form-group">
														<label class="control-label">Name</label>
														<input type="text" placeholder="Name" class="form-control" name="name" value="<?php echo $detail->user_name; ?>" required />
													</div>													
													<div class="margiv-top-10">
														<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
													</div>
												</form>
											</div>
											<!-- END PERSONAL INFO TAB -->
											<!-- CHANGE AVATAR TAB -->
											<div class="tab-pane" id="tab_1_2">
												<p>Change your Avatar Picture</p>
												<form action="<?php echo site_url('sistem/profil/updateavatar'); ?>" role="form" method="post" enctype="multipart/form-data">
												<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
													<div class="form-group">
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
													<div class="margin-top-10">
														<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Change Avatar</button>
													</div>
												</form>
											</div>
											<!-- END CHANGE AVATAR TAB -->
											<!-- CHANGE PASSWORD TAB -->
											<div class="tab-pane" id="tab_1_3">
												<form action="<?php echo site_url('sistem/profil/updatepassword'); ?>" method="post">
												<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">			
													<div class="form-group">
														<label class="control-label">New Password</label>
														<input type="password" class="form-control" name="password" required />
													</div>													
													<div class="margin-top-10">
														<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Change Password</button>
													</div>
												</form>
											</div>
											<!-- END CHANGE PASSWORD TAB -->											
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php 
				        if ($this->session->flashdata('notification')) { ?>
				        	<script>
		                        swal({
		                            title: "Done",
		                            text: "<?php echo $this->session->flashdata('notification'); ?>",
		                            timer: 2500,
		                            showConfirmButton: false,
		                            type: 'success'
		                        });
		                    </script>
				        <? } ?>
					</div>
					<!-- END PROFILE CONTENT -->					
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->		


			
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>