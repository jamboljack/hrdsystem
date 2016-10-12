<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Employee <small>Data Employee</small></h1>
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
					<a href="#">Data Employee</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					 <a href="<?php echo site_url('emp/employee'); ?>">All Employee</a>
					 <i class="fa fa-circle"></i>
				</li>				
				<li class="active">
					 Add Employee
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-plus-circle"></i>Form Add Employee
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body form">						
							<form action="<?php echo site_url('emp/employee/savedata'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

								<div class="form-body">									
									<h3 class="form-section">General</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">N I K</label>
												<div class="col-md-5 has-error">
													<input type="text" class="form-control" placeholder="Enter NIK" value="<?php echo set_value('nik'); ?>" name='nik' autocomplete="off" required autofocus>
													<?php echo form_error('nik', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>									
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">ID Finger</label>
												<div class="col-md-5 has-error">
													<input type="text" class="form-control" placeholder="Enter ID Finger" value="<?php echo set_value('finger'); ?>" name='finger' pattern="^[0-9]+" title="Hanya ANGKA" autocomplete="off" required>
													<?php echo form_error('finger', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>									
									</div>
									<!--/row-->
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Name</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" placeholder="Enter Name" value="<?php echo set_value('name'); ?>" name='name' autocomplete="off" required>
													<?php echo form_error('name', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>									
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Gender</label>
												<div class="col-md-5 has-error">
													<select class="form-control" name="lstGender" required >
														<option value="">- Choose Gender -</option>
														<option value="Male" <?php echo set_select('lstGender', 'Male'); ?>>Male</option>
														<option value="Female" <?php echo set_select('lstGender', 'Female'); ?>>Female</option>
													</select>
													<?php echo form_error('lstGender', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>								
									</div>
									<!--/row-->
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Birth Place</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" placeholder="Enter Birth Place" value="<?php echo set_value('birthplace'); ?>" name='birthplace' autocomplete="off" required>
													<?php echo form_error('birthplace', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>									
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Birth Date</label>
												<div class="col-md-9 has-error">
													<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="tgl_lahir" value="<?php echo set_value('tgl_lahir'); ?>" placeholder="Click Birth Date" autocomplete="off" required />
													<?php echo form_error('tgl_lahir', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>									
									</div>
									<!--/row-->																			
									<h3 class="form-section">Address</h3>
									<!--/row-->
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Address</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="address" value="<?php echo set_value('address'); ?>" placeholder="Enter Address" autocomplete="off" required>
													<?php echo form_error('address', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Province</label>
												<div class="col-md-9 has-error">
													<select class="select2_category form-control" data-placeholder="- Choose Province -" name="lstProvince" required>
														<option value="">- Choose Province -</option>
														<?php foreach($daftarprovinsi as $p) { ?>
															<option value="<?php echo $p->province_id; ?>" <?php echo set_select('lstProvince', $p->province_id); ?>><?php echo ucwords(strtolower($p->province_name)); ?></option>
														<?php } ?>
													</select>
													<?php echo form_error('lstProvince', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Country</label>
												<div class="col-md-9 has-error">
													<select class="select2_category form-control" data-placeholder="Choose Country" name="lstCountry" required>
														<option value="">- Choose Country -</option>
														<?php foreach($daftarkabupaten as $c) { ?>
															<option value="<?php echo $c->country_id; ?>" <?php echo set_select('lstCountry', $c->country_id); ?>><?php echo ucwords(strtolower($c->country_name)); ?></option>
														<?php } ?>
													</select>
													<?php echo form_error('lstCountry', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<!--/span-->
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">District</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="district" value="<?php echo set_value('district'); ?>" placeholder="Enter District" autocomplete="off" required>
													<?php echo form_error('district', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<!--/span-->
									</div>
									<!--/row-->
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Post Code</label>
												<div class="col-md-4 has-error">
													<input type="text" class="form-control" name="postcode" value="<?php echo set_value('postcode'); ?>" maxlength="5" placeholder="Enter Post Code" autocomplete="off" >
													<?php echo form_error('postcode', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<!--/span-->										
									</div>
									<!--/row-->
									<h3 class="form-section">Detail</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">KTP/SIM No.</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="ktpid" value="<?php echo set_value('ktpid'); ?>" placeholder="Enter KTP/SIM No." pattern="^[0-9]+" title="Hanya ANGKA" autocomplete="off" required>
													<?php echo form_error('ktpid', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Phone</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="phone" value="<?php echo set_value('phone'); ?>" placeholder="Enter Phone" autocomplete="off">
													<?php echo form_error('phone', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Marriage Status</label>
												<div class="col-md-9 has-error">
													<select class="form-control" name="lstMarriage" required >
														<option value="">- Choose Marriage Status -</option>
														<?php foreach($daftarmarriage as $m) { ?>
															<option value="<?php echo $m->marriage_id; ?>" <?php echo set_select('lstMarriage', $m->marriage_id); ?>><?php echo ucwords(strtolower($m->marriage_name)); ?></option>
														<?php } ?>
													</select>
													<?php echo form_error('lstMarriage', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Religion</label>
												<div class="col-md-9 has-error">
													<select class="form-control" name="lstReligion" required >
														<option value="">- Choose Religion -</option>
														<?php foreach($daftarreligion as $r) { ?>
															<option value="<?php echo $r->religion_id; ?>" <?php echo set_select('lstReligion', $r->religion_id); ?>><?php echo ucwords(strtolower($r->religion_name)); ?></option>
														<?php } ?>
													</select>
													<?php echo form_error('lstReligion', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Education</label>
												<div class="col-md-9 has-error">
													<select class="form-control" name="lstEducation" required >
														<option value="">- Choose Education -</option>
														<?php foreach($daftareducation as $e) { ?>
															<option value="<?php echo $e->education_id; ?>" <?php echo set_select('lstEducation', $e->education_id); ?>><?php echo $e->education_name; ?></option>
														<?php } ?>
													</select>
													<?php echo form_error('lstEducation', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Blood Type</label>
												<div class="col-md-9 has-error">
													<select class="form-control" name="lstBlood" required >
														<option value="">- Choose Blood Type -</option>
														<?php foreach($daftarblood as $b) { ?>
															<option value="<?php echo $b->blood_id; ?>" <?php echo set_select('lstBlood', $b->blood_id); ?>><?php echo $b->blood_name; ?></option>
														<?php } ?>
													</select>
													<?php echo form_error('lstBlood', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Email</label>
												<div class="col-md-9 has-error">
													<input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="Enter Email" autocomplete="off">
													<?php echo form_error('email', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>										
									</div>
									<h3 class="form-section">Height & Weight</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Height <em>(Cm)</em></label>
												<div class="col-md-4 has-error">
													<input type="text" class="form-control" name="height" value="<?php echo set_value('height', 0); ?>" placeholder="Enter Height" autocomplete="off" >
													<?php echo form_error('height', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Weight <em>(Kg)</em></label>
												<div class="col-md-4 has-error">
													<input type="text" class="form-control" name="weight" value="<?php echo set_value('weight', 0); ?>" placeholder="Enter Weight" autocomplete="off">
													<?php echo form_error('weight', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>										
									</div>
									<h3 class="form-section">Healthy & Employement Insurance</h3>
									<div class="row">									
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Healthy Ins. ID</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="healthy" value="<?php echo set_value('healthy'); ?>" placeholder="Enter Healthy Ins. ID" autocomplete="off" >
													<?php echo form_error('healthy', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Join Date</label>
												<div class="col-md-9 has-error">
													<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="tgl_join_h" value="<?php echo set_value('tgl_join_h'); ?>" placeholder="Click Join Date" autocomplete="off" />
													<?php echo form_error('tgl_join_h', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>										
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Employ. Ins. ID</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="employ" value="<?php echo set_value('employ'); ?>" placeholder="Enter Employ. Ins. ID" autocomplete="off">
													<?php echo form_error('employ', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Join Date</label>
												<div class="col-md-9 has-error">
													<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="tgl_join_e" value="<?php echo set_value('tgl_join_e'); ?>" placeholder="Click Join Date" autocomplete="off" />
													<?php echo form_error('tgl_join_e', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>										
									</div>
									<h3 class="form-section">Bank Account</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Account No.</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="account_no" value="<?php echo set_value('account_no'); ?>" placeholder="Enter Account No." autocomplete="off" >
													<?php echo form_error('account_no', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Bank Name</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="bank_name" value="<?php echo set_value('bank_name'); ?>" placeholder="Enter Bank Name" autocomplete="off">
													<?php echo form_error('bank_name', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Account Name</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="account_name" value="<?php echo set_value('account_name'); ?>" placeholder="Enter Account Name" autocomplete="off" >
													<?php echo form_error('account_name', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
									</div>
									<h3 class="form-section">Department & Position</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Department</label>
												<div class="col-md-9 has-error">
													<select class="select2_category form-control" data-placeholder="- Choose Department -" name="lstDepartment" required>
														<option value="">- Choose Department -</option>
														<?php foreach($daftardepartment as $d) { ?>
														<option value="<?php echo $d->department_id; ?>" <?php echo set_select('lstDepartment', $d->department_id); ?>><?php echo $d->department_name; ?></option>
														<?php } ?>
													</select>
													<?php echo form_error('lstDepartment', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Position</label>
												<div class="col-md-9 has-error">
													<select class="select2_category form-control" data-placeholder="- Choose Position -" name="lstPosition" required>
														<option value="">- Choose Position -</option>
														<?php foreach($daftarposition as $s) { ?>
														<option value="<?php echo $s->position_id; ?>" <?php echo set_select('lstPosition', $s->position_id); ?>><?php echo $s->position_name; ?></option>
														<?php } ?>
													</select>
													<?php echo form_error('lstPosition', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Status</label>
												<div class="col-md-9 has-error">
													<select class="select2_category form-control" data-placeholder="- Choose Status -" name="lstStatus" required>
														<option value="">- Choose Status -</option>
														<?php foreach($daftarstatus as $t) { ?>
														<option value="<?php echo $t->status_id; ?>" <?php echo set_select('lstStatus', $t->status_id); ?>><?php echo $t->status_name; ?></option>
														<?php } ?>
													</select>
													<?php echo form_error('lstStatus', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Worktype</label>
												<div class="col-md-9 has-error">
													<select class="form-control" name="lstWorktype" required >
														<option value="">- Choose Worktype -</option>
														<option value="Daily" <?php echo set_select('lstWorktype', 'Daily'); ?>>Daily</option>
														<option value="Monthly" <?php echo set_select('lstWorktype', 'Monthly'); ?>>Monthly</option>
													</select>
													<?php echo form_error('lstWorktype', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">First Salary <em>(Rp.)</em></label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="salary" value="<?php echo set_value('salary', 0); ?>" placeholder="Enter First Salary" autocomplete="off">
													<?php echo form_error('salary', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
									</div>
									<h3 class="form-section">Contract</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Start Join</label>
												<div class="col-md-9 has-error">
													<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="tgl_start_join" value="<?php echo set_value('tgl_start_join'); ?>" placeholder="Click Start Join" autocomplete="off" required/>
													<?php echo form_error('tgl_start_join', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Start Contract</label>
												<div class="col-md-9 has-error">
													<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="tgl_start_contract" value="<?php echo set_value('tgl_start_contract'); ?>" placeholder="Click Start Contract" autocomplete="off" />
													<?php echo form_error('tgl_start_contract', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">End Contract</label>
												<div class="col-md-9 has-error">
													<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="tgl_end_contract" value="<?php echo set_value('tgl_end_contract'); ?>" placeholder="Click End Contract" autocomplete="off" />
													<?php echo form_error('tgl_end_contract', '<span class="help-block has-error">','</span>'); ?>
												</div>
											</div>
										</div>										
									</div>
									<h3 class="form-section">Photo</h3>
									<div class="row">										
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Photo</label>
												<div class="col-md-5 has-error">
													<div class="fileupload fileupload-new" data-provides="fileupload">
							                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
							                                <img src="<?php echo base_url(); ?>img/no_image.gif" alt="" />
							                            </div>
						                                        
						                            	<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
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
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-offset-3 col-md-9">
													<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
													<a href="<?php echo site_url('emp/employee'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Cancel</a>
												</div>
											</div>
										</div>
										<div class="col-md-6">
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