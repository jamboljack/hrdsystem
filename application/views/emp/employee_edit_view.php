<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/sweetalert2.css">
<script src="<?php echo base_url(); ?>js/sweetalert2.min.js"></script>
<script>
    function hapusDataSchool(school_id) {
        var id = school_id;
        swal({
            title: 'Are You Sure ?',
            text: 'This Data will be Deleted !',type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            closeOnConfirm: true
        }, function() {            
            window.location.href="<?php echo site_url('emp/school/deletedata/'.$this->uri->segment(4)); ?>"+"/"+id
        });
    }
</script>

<script>
    function hapusDataCompany(company_id) {
        var id = company_id;
        swal({
            title: 'Are You Sure ?',
            text: 'This Data will be Deleted !',type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            closeOnConfirm: true
        }, function() {            
            window.location.href="<?php echo site_url('emp/company/deletedata/'.$this->uri->segment(4)); ?>"+"/"+id
        });
    }
</script>

<script>
    function hapusDataFamily(family_id) {
        var id = family_id;
        swal({
            title: 'Are You Sure ?',
            text: 'This Data will be Deleted !',type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            closeOnConfirm: true
        }, function() {            
            window.location.href="<?php echo site_url('emp/family/deletedata/'.$this->uri->segment(4)); ?>"+"/"+id
        });
    }
</script>

<script type="text/javascript">
	$(function() {
		$(document).on("click",'.editschool_button', function(e) {
	        var id   = $(this).data('id');
	        var name = $(this).data('name');
	        var address = $(this).data('address');
	        var department = $(this).data('department');
	        var phone = $(this).data('phone');
	        var email = $(this).data('email');
	        var website = $(this).data('website');
	        var from = $(this).data('from');
	        var fromdate = from.split("-").reverse().join("-");
	        var to = $(this).data('to');
	        var todate = to.split("-").reverse().join("-");
	        var level = $(this).data('level');
	        var emp_id   = $(this).data('emp_id');
	        //console.log(id,name,address,department,phone,email,website,from,to,level,emp_id)	        
	        $(".school_id").val(id);
	        $(".school_name").val(name);
	        $(".school_address").val(address);
	        $(".school_department").val(department);
	        $(".school_phone").val(phone);
	        $(".school_email").val(email);
	        $(".school_website").val(website);
	        $(".school_from").val(fromdate);
	        $(".school_to").val(todate);
	        $(".school_level").val(level);
	        $(".emp_id").val(emp_id);	        
	    })
	});
</script>

<script type="text/javascript">
	$(function() {
		$(document).on("click",'.editcompany_button', function(e) {
	        var id   = $(this).data('id');
	        var name = $(this).data('name');
	        var address = $(this).data('address');
	        var type = $(this).data('type');
	        var phone = $(this).data('phone');
	        var email = $(this).data('email');
	        var website = $(this).data('website');
	        var from = $(this).data('from');
	        var fromdate = from.split("-").reverse().join("-");
	        var to = $(this).data('to');
	        var todate = to.split("-").reverse().join("-");
	        var manager = $(this).data('manager');
	        var position = $(this).data('position');
	        var salary = $(this).data('salary');
	        var job = $(this).data('job');
	        var emp_id   = $(this).data('emp_id');
	        //console.log(id,name,address,type,phone,email,website,fromdate,todate,manager,salary,position,job,emp_id)
	        $(".company_id").val(id);
	        $(".company_name").val(name);
	        $(".company_address").val(address);	        
	        $(".company_phone").val(phone);
	        $(".company_email").val(email);
	        $(".company_web").val(website);
	        $(".company_type").val(type);
	        $(".company_from").val(fromdate);
	        $(".company_to").val(todate);
	        $(".company_manager").val(manager);
	        $(".company_salary").val(salary);
	        $(".company_position").val(position);
	        $(".company_job").val(job);
	        $(".emp_id").val(emp_id);
	    })
	});
</script>

<script type="text/javascript">
	$(function() {
		$(document).on("click",'.editfamily_button', function(e) {
	        var id   = $(this).data('id');
	        var name = $(this).data('name');
	        var address = $(this).data('address');	        
	        var phone = $(this).data('phone');
	        var work = $(this).data('work');	        
	        var relation = $(this).data('relation');
	        var status = $(this).data('status');	        
	        var emp_id   = $(this).data('emp_id');
	        //console.log(id,name,address,phone,work,relation,status,emp_id)
	        $(".family_id").val(id);
	        $(".family_name").val(name);
	        $(".family_address").val(address);	        
	        $(".family_phone").val(phone);
	        $(".family_work").val(work);
	        $(".family_relation").val(relation);
	        $(".family_status").val(status);
	        $(".emp_id").val(emp_id);
	    })
	});
</script>

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
					 Edit Employee
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Form Edit Employee
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
							<form action="<?php echo site_url('emp/employee/updatedata'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<input type="hidden" name="emp_id" value="<?php echo $detail->emp_id; ?>" />

								<div class="form-body">									
									<h3 class="form-section">General</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">N I K</label>
												<div class="col-md-5 has-error">
													<input type="text" class="form-control" placeholder="Enter NIK" value="<?php echo $detail->emp_nik; ?>" name='nik' autocomplete="off" required autofocus>
												</div>
											</div>
										</div>									
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">ID Finger</label>
												<div class="col-md-5 has-error">
													<input type="text" class="form-control" placeholder="Enter ID Finger" value="<?php echo $detail->emp_finger; ?>" name='finger' pattern="^[0-9]+" title="Hanya ANGKA" autocomplete="off" required>
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
													<input type="text" class="form-control" placeholder="Enter Name" value="<?php echo $detail->emp_name; ?>" name='name' autocomplete="off" required>
												</div>
											</div>
										</div>									
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Gender</label>
												<div class="col-md-5 has-error">
													<select class="form-control" name="lstGender" required >
														<option value="">- Choose Gender -</option>
														<option value="Male" <?php if ($detail->emp_gender=='Male') { echo 'selected'; } ?>>Male</option>
														<option value="Female" <?php if ($detail->emp_gender=='Female') {echo 'selected'; } ?>>Female</option>
													</select>													
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
													<input type="text" class="form-control" placeholder="Enter Birth Place" value="<?php echo $detail->emp_birthplace; ?>" name='birthplace' autocomplete="off" required>
												</div>
											</div>
										</div>
										<?php
			                            $tgl_lahir = $detail->emp_birthdate; 
			                            
			                            if (!empty($tgl_lahir)) {
			                                $xtgllahir 	= explode("-",$tgl_lahir);
			                                $thnls 		= $xtgllahir[0];
			                                $blnl 		= $xtgllahir[1];
			                                $tgll 		= $xtgllahir[2];

			                                $tanggal_lahir = $tgll.'-'.$blnl.'-'.$thnls;
			                            } else { 
			                                $tanggal_lahir = '';
			                            }
			                          	?>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Birth Date</label>
												<div class="col-md-9 has-error">
													<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="tgl_lahir" value="<?php echo $tanggal_lahir; ?>" placeholder="Click Birth Date" autocomplete="off" required/>
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
													<input type="text" class="form-control" name="address" value="<?php echo $detail->emp_address; ?>" placeholder="Enter Address" autocomplete="off" required>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Province</label>
												<div class="col-md-9 has-error">
													<select class="select2_category form-control" data-placeholder="- Choose Province -" name="lstProvince" required>
														<option value="">- Choose Province -</option>
														<?php 
														foreach($daftarprovinsi as $p) { 
															if ($detail->province_id == $p->province_id) {
														?>
															<option value="<?php echo $p->province_id; ?>" <?php echo set_select('lstProvince', $p->province_id); ?> selected><?php echo ucwords(strtolower($p->province_name)); ?></option>
														<?php } else { ?>
															<option value="<?php echo $p->province_id; ?>" <?php echo set_select('lstProvince', $p->province_id); ?>><?php echo ucwords(strtolower($p->province_name)); ?></option>
														<?php 
															}
														} 
														?>
													</select>													
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
														<?php 
														foreach($daftarkabupaten as $c) { 
															if ($detail->country_id == $c->country_id) {
														?>
															<option value="<?php echo $c->country_id; ?>" <?php echo set_select('lstCountry', $c->country_id); ?> selected><?php echo ucwords(strtolower($c->country_name)); ?></option>
														<?php } else { ?>
															<option value="<?php echo $c->country_id; ?>" <?php echo set_select('lstCountry', $c->country_id); ?>><?php echo ucwords(strtolower($c->country_name)); ?></option>
														<?php 
															}
														} 
														?>
													</select>													
												</div>
											</div>
										</div>
										<!--/span-->
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">District</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="district" value="<?php echo $detail->emp_district; ?>" placeholder="Enter District" autocomplete="off" required>
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
													<input type="text" class="form-control" name="postcode" value="<?php echo $detail->emp_zipcode; ?>" maxlength="5" placeholder="Enter Post Code" autocomplete="off" >
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
													<input type="text" class="form-control" name="ktpid" value="<?php echo $detail->emp_ktp_id; ?>" placeholder="Enter KTP/SIM No." pattern="^[0-9]+" title="Hanya ANGKA" autocomplete="off" required>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Phone</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="phone" value="<?php echo $detail->emp_phone; ?>" placeholder="Enter Phone" autocomplete="off">
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
														<?php 
														foreach($daftarmarriage as $m) {
															if ($detail->marriage_id==$m->marriage_id) {
														?>
															<option value="<?php echo $m->marriage_id; ?>" <?php echo set_select('lstMarriage', $m->marriage_id); ?> selected><?php echo ucwords(strtolower($m->marriage_name)); ?></option>
														<?php } else { ?>
															<option value="<?php echo $m->marriage_id; ?>" <?php echo set_select('lstMarriage', $m->marriage_id); ?>><?php echo ucwords(strtolower($m->marriage_name)); ?></option>
														<?php 
															}
														} 
														?>
													</select>													
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Religion</label>
												<div class="col-md-9 has-error">
													<select class="form-control" name="lstReligion" required >
														<option value="">- Choose Religion -</option>
														<?php 
														foreach($daftarreligion as $r) { 
															if ($detail->religion_id==$r->religion_id) {
														?>
															<option value="<?php echo $r->religion_id; ?>" <?php echo set_select('lstReligion', $r->religion_id); ?> selected><?php echo ucwords(strtolower($r->religion_name)); ?></option>
														<?php } else { ?>
															<option value="<?php echo $r->religion_id; ?>" <?php echo set_select('lstReligion', $r->religion_id); ?>><?php echo ucwords(strtolower($r->religion_name)); ?></option>
														<?php 
															}
														} 
														?>
													</select>													
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
														<?php 
														foreach($daftareducation as $e) { 
															if ($detail->education_id==$e->education_id) {
														?>
															<option value="<?php echo $e->education_id; ?>" <?php echo set_select('lstEducation', $e->education_id); ?> selected><?php echo $e->education_name; ?></option>
														<?php } else { ?>
															<option value="<?php echo $e->education_id; ?>" <?php echo set_select('lstEducation', $e->education_id); ?>><?php echo $e->education_name; ?></option>
														<?php 
															}
														} 
														?>
													</select>													
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Blood Type</label>
												<div class="col-md-9 has-error">
													<select class="form-control" name="lstBlood" required >
														<option value="">- Choose Blood Type -</option>
														<?php 
														foreach($daftarblood as $b) { 
															if ($detail->blood_id==$b->blood_id) {
														?>
															<option value="<?php echo $b->blood_id; ?>" <?php echo set_select('lstBlood', $b->blood_id); ?> selected><?php echo $b->blood_name; ?></option>
														<?php } else { ?>
															<option value="<?php echo $b->blood_id; ?>" <?php echo set_select('lstBlood', $b->blood_id); ?>><?php echo $b->blood_name; ?></option>
														<?php 
															}
														} 
														?>
													</select>													
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Email</label>
												<div class="col-md-9 has-error">
													<input type="email" class="form-control" name="email" value="<?php echo $detail->emp_email; ?>" placeholder="Enter Email" autocomplete="off">
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
													<input type="text" class="form-control" name="height" value="<?php echo $detail->emp_tb; ?>" placeholder="Enter Height" autocomplete="off" >	
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Weight <em>(Kg)</em></label>
												<div class="col-md-4 has-error">
													<input type="text" class="form-control" name="weight" value="<?php echo $detail->emp_bb; ?>" placeholder="Enter Weight" autocomplete="off">	
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
													<input type="text" class="form-control" name="healthy" value="<?php echo $detail->emp_bpjs_h_id; ?>" placeholder="Enter Healthy Ins. ID" autocomplete="off" >
												</div>
											</div>
										</div>
										<?php
			                            $tgl_join_h = $detail->emp_join_date_h; 
			                            
			                            if (!empty($tgl_join_h)) {
			                                $xtgljoinh 	= explode("-",$tgl_join_h);
			                                $thnlh 		= $xtgljoinh[0];
			                                $blnh 		= $xtgljoinh[1];
			                                $tglh 		= $xtgljoinh[2];

			                                $tanggal_sehat = $tglh.'-'.$blnh.'-'.$thnlh;
			                            } else { 
			                                $tanggal_sehat = '';
			                            }
			                          	?>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Join Date</label>
												<div class="col-md-9 has-error">
													<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="<?php echo $tanggal_sehat; ?>" name="tgl_join_h" placeholder="Click Join Date" autocomplete="off" />
												</div>
											</div>
										</div>										
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Employ. Ins. ID</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="employ" value="<?php echo $detail->emp_bpjs_k_id; ?>" placeholder="Enter Employ. Ins. ID" autocomplete="off">
												</div>
											</div>
										</div>
										<?php
			                            $tgl_join_k = $detail->emp_join_date_k; 
			                            
			                            if (!empty($tgl_join_h)) {
			                                $xtgljoink 	= explode("-",$tgl_join_k);
			                                $thnlk 		= $xtgljoink[0];
			                                $blnk 		= $xtgljoink[1];
			                                $tglk 		= $xtgljoink[2];

			                                $tanggal_tenaga = $tglk.'-'.$blnk.'-'.$thnlk;
			                            } else { 
			                                $tanggal_tenaga = '';
			                            }
			                          	?>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Join Date</label>
												<div class="col-md-9 has-error">
													<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="<?php echo $tanggal_tenaga; ?>" name="tgl_join_e" placeholder="Click Join Date" autocomplete="off" />
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
													<input type="text" class="form-control" name="account_no" value="<?php echo $detail->emp_no_account; ?>" placeholder="Enter Account No." autocomplete="off" >
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Bank Name</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="bank_name" value="<?php echo $detail->emp_bank; ?>" placeholder="Enter Bank Name" autocomplete="off">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Account Name</label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="account_name" value="<?php echo $detail->emp_name_account; ?>" placeholder="Enter Account Name" autocomplete="off" >
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
														<?php 
														foreach($daftardepartment as $d) { 
															if ($detail->department_id==$d->department_id) {
														?>
															<option value="<?php echo $d->department_id; ?>" <?php echo set_select('lstDepartment', $d->department_id); ?> selected><?php echo $d->department_name; ?></option>
														<?php } else { ?>
															<option value="<?php echo $d->department_id; ?>" <?php echo set_select('lstDepartment', $d->department_id); ?>><?php echo $d->department_name; ?></option>
														<?php 
															}
														} 
														?>
													</select>													
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Position</label>
												<div class="col-md-9 has-error">
													<select class="select2_category form-control" data-placeholder="- Choose Position -" name="lstPosition" required>
														<option value="">- Choose Position -</option>
														<?php 
														foreach($daftarposition as $s) { 
															if ($detail->position_id==$s->position_id) {
														?>
															<option value="<?php echo $s->position_id; ?>" <?php echo set_select('lstPosition', $s->position_id); ?> selected><?php echo $s->position_name; ?></option>
														<?php } else { ?>
															<option value="<?php echo $s->position_id; ?>" <?php echo set_select('lstPosition', $s->position_id); ?>><?php echo $s->position_name; ?></option>
														<?php 
															}
														} 
														?>
													</select>													
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
														<?php 
														foreach($daftarstatus as $t) { 
															if ($detail->status_id==$t->status_id) {
														?>
															<option value="<?php echo $t->status_id; ?>" <?php echo set_select('lstStatus', $t->status_id); ?> selected><?php echo $t->status_name; ?></option>
														<?php } else { ?>
															<option value="<?php echo $t->status_id; ?>" <?php echo set_select('lstStatus', $t->status_id); ?>><?php echo $t->status_name; ?></option>
														<?php 
															}
														} 
														?>
													</select>													
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Worktype</label>
												<div class="col-md-9 has-error">
													<select class="form-control" name="lstWorktype" required >
														<option value="">- Choose Worktype -</option>
														<option value="Daily" <?php if ($detail->emp_worktype=='Daily') { echo 'selected'; } ?>>Daily</option>
														<option value="Monthly" <?php if ($detail->emp_worktype=='Monthly') { echo 'selected'; } ?>>Monthly</option>
													</select>													
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">First Salary <em>(Rp.)</em></label>
												<div class="col-md-9 has-error">
													<input type="text" class="form-control" name="salary" value="<?php echo $detail->emp_first_salary; ?>" placeholder="Enter First Salary" autocomplete="off">
												</div>
											</div>
										</div>
									</div>
									<h3 class="form-section">Contract</h3>										
									<div class="row">
										<?php
				                        $tgl_start = $detail->emp_start_join; 
				                            
				                        if (!empty($tgl_start)) {
			                                $xtglstart 	= explode("-",$tgl_start);
			                                $thns 		= $xtglstart[0];
			                                $blns 		= $xtglstart[1];
			                                $tgls 		= $xtglstart[2];

			                                $tanggal_start = $tgls.'-'.$blns.'-'.$thns;
			                            } else { 
			                                $tanggal_start = '';
			                            }
			                          	?>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Start Join</label>
												<div class="col-md-9 has-error">
													<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="tgl_start_join" value="<?php echo $tanggal_start; ?>" placeholder="Click Start Join" autocomplete="off" required/>
												</div>
											</div>
										</div>
										<?php
				                        $tgl_start_c = $detail->emp_start_contract; 
				                            
				                        if (!empty($tgl_start_c)) {
			                                $xtglstartc 	= explode("-",$tgl_start_c);
			                                $thnsc 			= $xtglstartc[0];
			                                $blnsc 			= $xtglstartc[1];
			                                $tglsc 			= $xtglstartc[2];

			                                $tanggal_start_c 	= $tglsc.'-'.$blnsc.'-'.$thnsc;
			                            } else { 
			                                $tanggal_start_c 	= '';
			                            }
			                          	?>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Start Contract</label>
												<div class="col-md-9 has-error">
													<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="tgl_start_contract" value="<?php echo $tanggal_start_c; ?>" placeholder="Click Start Contract" autocomplete="off" />
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<?php
				                        $tgl_end_c = $detail->emp_end_contract; 
				                            
				                        if (!empty($tgl_end_c)) {
			                                $xtglendc 	= explode("-",$tgl_end_c);
			                                $thnse 		= $xtglendc[0];
			                                $blnse 		= $xtglendc[1];
			                                $tglse 		= $xtglendc[2];

			                                $tanggal_end_c 	= $tglse.'-'.$blnse.'-'.$thnse;
			                            } else { 
			                                $tanggal_end_c 	= '';
			                            }
			                          	?>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">End Contract</label>
												<div class="col-md-9 has-error">
													<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="tgl_end_contract" value="<?php echo $tanggal_end_c; ?>" placeholder="Click End Contract" autocomplete="off" />
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
							                        <?php if (empty($detail->emp_photo)) { ?>
							                        	<img src="<?php echo base_url(); ?>img/no_image.gif" alt="" />
							                        <?php } else { ?>
							                        	<img src="<?php echo base_url(); ?>photo/<?php echo $detail->emp_photo; ?>" alt="" style="max-width: 200px; max-height: 150px; line-height: 10px;" />
							                        <?php } ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">Change Photo</label>
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
													<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
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

			<!-- Detail Bawah -->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_0" data-toggle="tab">
								School History </a>
							</li>
							<li>
								<a href="#tab_1" data-toggle="tab">
								Work History </a>
							</li>
							<li>
								<a href="#tab_2" data-toggle="tab">
								Family </a>
							</li>
							<li>
								<a href="#tab_3" data-toggle="tab">
								Reward </a>
							</li>
							<li>
								<a href="#tab_4" data-toggle="tab">
								Punishment </a>
							</li>
							<li>
								<a href="#tab_5" data-toggle="tab">
								Record </a>
							</li>							
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-graduation-cap"></i>School History (<?php echo $detail->emp_name; ?>)
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
									<div class="portlet-body">
										<!-- Modal Form -->
										<div class="modal fade bs-modal-lg" id="addschool" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
												<form action="<?php echo site_url('emp/school/savedata/'.$this->uri->segment(4)); ?>" class="form-horizontal" method="post">
												<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
													
													<div class="modal-header">						
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
														<h4 class="modal-title"><i class="fa fa-plus-circle"></i> Form Add School</h4>
													</div>

													<div class="modal-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Name</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete="off" required autofocus>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Address</label>
																<div class="col-md-9 has-error">
																	<textarea class="form-control" rows="3" placeholder="Enter Address" name="address" required></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">From</label>
																<div class="col-md-9 has-error">
																	<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="from" placeholder="DD-MM-YYYY" autocomplete="off" required/>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">To</label>
																<div class="col-md-9 has-error">
																	<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="to" placeholder="DD-MM-YYYY" autocomplete="off" required/>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Level</label>
																<div class="col-md-9 has-error">
																	<select class="form-control" name="lstEducation" required >
																	<option value="">- Choose Level -</option>
																	<?php foreach($daftareducation as $e) { ?>
																		<option value="<?php echo $e->education_id; ?>" <?php echo set_select('lstEducation', $e->education_id); ?>><?php echo $e->education_name; ?></option>
																	<?php } ?>
																</select>
																</div>
															</div>															
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Department</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control" placeholder="Enter Department" name="department" autocomplete="off">
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Phone</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control" placeholder="Enter Phone" name="phone" autocomplete="off">
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Email</label>
																<div class="col-md-9 has-error">
																	<input type="email" class="form-control" placeholder="Enter Email" name="email" autocomplete="off">
																</div>
															</div>															
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Website</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control" placeholder="Enter Website" name="website" autocomplete="off">
																</div>
															</div>
														</div>
													</div>
													
													</div>
													
													<div class="modal-footer">
														<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
														<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-chevron-left"></span> Close</button>
													</div>
												</form>
												</div>												
											</div>											
										</div>
										<!-- Akhir Modal Form -->
										<!-- Awal Edit School Form -->
										<div class="modal fade bs-modal-lg" id="editschool" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
												<form action="<?php echo site_url('emp/school/updatedata/'.$this->uri->segment(4)); ?>" class="form-horizontal" method="post">
												<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
												<input type="hidden" class="form-control school_id" name="id">
												<input type="hidden" class="form-control emp_id" name="emp_id">
													
													<div class="modal-header">						
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
														<h4 class="modal-title"><i class="fa fa-edit"></i> Form Edit School</h4>
													</div>
													<div class="modal-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Name</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control school_name" placeholder="Enter Name" name="name" autocomplete="off" required autofocus>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Address</label>
																<div class="col-md-9 has-error">
																	<textarea class="form-control school_address" rows="3" placeholder="Enter Address" name="address" required></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">From</label>
																<div class="col-md-9 has-error">
																	<input class="form-control school_from form-control-inline input-medium date-picker" size="16" type="text" name="from" placeholder="DD-MM-YYYY" autocomplete="off" required/>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">To</label>
																<div class="col-md-9 has-error">
																	<input class="form-control school_to form-control-inline input-medium date-picker" size="16" type="text" name="to" placeholder="DD-MM-YYYY" autocomplete="off" required/>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Level</label>
																<div class="col-md-9 has-error">
																	<select class="form-control school_level" name="lstEducation" required >
																	<option value="">- Choose Level -</option>
																	<?php foreach($daftareducation as $e) { ?>
																		<option value="<?php echo $e->education_id; ?>" <?php echo set_select('lstEducation', $e->education_id); ?>><?php echo $e->education_name; ?></option>
																	<?php } ?>
																</select>
																</div>
															</div>															
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Department</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control school_department" placeholder="Enter Department" name="department" autocomplete="off">
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Phone</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control school_phone" placeholder="Enter Phone" name="phone" autocomplete="off">
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Email</label>
																<div class="col-md-9 has-error">
																	<input type="email" class="form-control school_email" placeholder="Enter Email" name="email" autocomplete="off">
																</div>
															</div>															
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Website</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control school_website" placeholder="Enter Website" name="website" autocomplete="off">
																</div>
															</div>
														</div>
													</div>
													
													</div>
													
													<div class="modal-footer">
														<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
														<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-chevron-left"></span> Close</button>
													</div>
												</form>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
										<!-- Akhir Edit School -->

										<a data-toggle="modal" href="#addschool">
											<button type="submit" class="btn btn-primary">
											<i class="icon-plus"></i> Add Data</button>
										</a>
										<!-- Isi Data Tabel -->
										<div class="table-scrollable">
											<table class="table table-hover">
											<thead>
											<tr>
												<th width="5%">No</th>
												<th>School Name</th>
												<th width="20%">Department</th>
												<th width="20%">Periode</th>
												<th width="15%">Level</th>
												<th width="10%">Action</th>
											</tr>
											</thead>
											<tbody>
											<?php 
											$no = 1;
											foreach($schoollist as $s) {
												$school_id = $s->school_id;

			                            		$from = $s->school_periode_1; 			                            
					                            if (!empty($from)) {
					                                $xfrom 		= explode("-",$from);
					                                $thnf 		= $xfrom[0];
					                                $blnf 		= $xfrom[1];
					                                $tglf 		= $xfrom[2];

					                                $tanggalfrom = $tglf.'-'.$blnf.'-'.$thnf;
					                            } else { 
					                                $tanggalfrom = '';
					                            }

					                            $to = $s->school_periode_2; 			                            
					                            if (!empty($to)) {
					                                $xto 		= explode("-",$to);
					                                $thnt 		= $xto[0];
					                                $blnt 		= $xto[1];
					                                $tglt 		= $xto[2];

					                                $tanggalto = $tglt.'-'.$blnt.'-'.$thnt;
					                            } else { 
					                                $tanggalto = '';
					                            }			                          	
											?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $s->school_name; ?></td>
												<td><?php echo $s->school_department; ?></td>
												<td><?php echo $tanggalfrom.' s/d '.$tanggalto; ?></td>
												<td><?php echo $s->education_name; ?></td>
												<td>
													<button type="button" class="btn btn-primary btn-xs editschool_button" data-toggle="modal" data-target="#editschool" data-id="<?php echo $s->school_id; ?>" data-name="<?php echo $s->school_name; ?>" data-address="<?php echo $s->school_address; ?>" data-department="<?php echo $s->school_department; ?>" data-phone="<?php echo $s->school_phone; ?>" data-email="<?php echo $s->school_email; ?>" data-department="<?php echo $s->school_department; ?>" data-phone="<?php echo $s->school_phone; ?>" data-website="<?php echo $s->school_web; ?>" data-from="<?php echo $s->school_periode_1; ?>" data-to="<?php echo $s->school_periode_2; ?>" data-level="<?php echo $s->education_id; ?>" data-emp_id="<?php echo $s->emp_id; ?>"><i class="icon-pencil"></i>
													</button>
	                        						<a onclick="hapusDataSchool(<?php echo $school_id; ?>)"><button class="btn btn-danger btn-xs" title="Delete Data"><i class="icon-trash"></i></button>
	                        						</a>
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
								</div>
							</div>

							<!-- Work History -->
							<div class="tab-pane" id="tab_1">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-suitcase"></i>Work History (<?php echo $detail->emp_name; ?>)
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
									<div class="portlet-body">
										<!-- Modal Form -->
										<div class="modal fade bs-modal-lg" id="addcompany" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
												<form action="<?php echo site_url('emp/company/savedata/'.$this->uri->segment(4)); ?>" class="form-horizontal" method="post">
												<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
													
													<div class="modal-header">						
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
														<h4 class="modal-title"><i class="fa fa-plus-circle"></i> Form Add Company</h4>
													</div>

													<div class="modal-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Name</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete="off" required autofocus>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Address</label>
																<div class="col-md-9 has-error">
																	<textarea class="form-control" rows="3" placeholder="Enter Address" name="address" required></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">From</label>
																<div class="col-md-9 has-error">
																	<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="from" placeholder="DD-MM-YYYY" autocomplete="off" required/>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">To</label>
																<div class="col-md-9 has-error">
																	<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="to" placeholder="DD-MM-YYYY" autocomplete="off" required/>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Type</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control" placeholder="Enter Type" name="type" autocomplete="off">
																</div>
															</div>															
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Position</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control" placeholder="Enter Position" name="position" autocomplete="off">
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Manager</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control" placeholder="Enter Manager" name="manager" autocomplete="off">
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Salary <em>(Rp)</em></label>
																<div class="col-md-6 has-error">
																	<input type="text" class="form-control" placeholder="Enter Salary" name="salary" autocomplete="off">
																</div>
															</div>															
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Phone</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control" placeholder="Enter Phone" name="phone" autocomplete="off">
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Email</label>
																<div class="col-md-9 has-error">
																	<input type="email" class="form-control" placeholder="Enter Email" name="email" autocomplete="off">
																</div>
															</div>															
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Website</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control" placeholder="Enter Website" name="website" autocomplete="off">
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Job Description</label>
																<div class="col-md-9 has-error">
																	<textarea class="form-control" rows="3" placeholder="Enter Job Description" name="job" required></textarea>
																</div>
															</div>
														</div>
													</div>
													
													</div>
													
													<div class="modal-footer">
														<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
														<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-chevron-left"></span> Close</button>
													</div>
												</form>
												</div>												
											</div>											
										</div>
										<!-- Akhir Modal Form -->
										<!-- Awal Edit School Form -->
										<div class="modal fade bs-modal-lg" id="editcompany" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
												<form action="<?php echo site_url('emp/company/updatedata/'.$this->uri->segment(4)); ?>" class="form-horizontal" method="post">
												<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
												<input type="hidden" class="form-control company_id" name="id">
												<input type="hidden" class="form-control emp_id" name="emp_id">
													
													<div class="modal-header">						
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
														<h4 class="modal-title"><i class="fa fa-edit"></i> Form Edit Company</h4>
													</div>
													<div class="modal-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Name</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control company_name" placeholder="Enter Name" name="name" autocomplete="off" required autofocus>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Address</label>
																<div class="col-md-9 has-error">
																	<textarea class="form-control company_address" rows="3" placeholder="Enter Address" name="address" required></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">From</label>
																<div class="col-md-9 has-error">
																	<input class="form-control company_from form-control-inline input-medium date-picker" size="16" type="text" name="from" placeholder="DD-MM-YYYY" autocomplete="off" required/>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">To</label>
																<div class="col-md-9 has-error">
																	<input class="form-control company_to form-control-inline input-medium date-picker" size="16" type="text" name="to" placeholder="DD-MM-YYYY" autocomplete="off" required/>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Type</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control company_type" placeholder="Enter Type" name="type" autocomplete="off">
																</div>
															</div>															
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Position</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control company_position" placeholder="Enter Position" name="position" autocomplete="off">
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Manager</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control company_manager" placeholder="Enter Manager" name="manager" autocomplete="off">
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Salary <em>(Rp)</em></label>
																<div class="col-md-6 has-error">
																	<input type="text" class="form-control company_salary" placeholder="Enter Salary" name="salary" autocomplete="off">
																</div>
															</div>															
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Phone</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control company_phone" placeholder="Enter Phone" name="phone" autocomplete="off">
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Email</label>
																<div class="col-md-9 has-error">
																	<input type="email" class="form-control company_email" placeholder="Enter Email" name="email" autocomplete="off">
																</div>
															</div>															
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Website</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control company_web" placeholder="Enter Website" name="website" autocomplete="off">
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Job Description</label>
																<div class="col-md-9 has-error">
																	<textarea class="form-control company_job" rows="3" placeholder="Enter Job Description" name="job" required></textarea>
																</div>
															</div>
														</div>
													</div>
													
													</div>
													
													<div class="modal-footer">
														<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
														<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-chevron-left"></span> Close</button>
													</div>
												</form>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
										<!-- Akhir Edit School -->

										<a data-toggle="modal" href="#addcompany">
											<button type="submit" class="btn btn-primary">
											<i class="icon-plus"></i> Add Data</button>
										</a>
										<!-- Isi Data Tabel -->
										<div class="table-scrollable">
											<table class="table table-hover">
											<thead>
											<tr>
												<th width="5%">No</th>
												<th>Company Name</th>
												<th width="20%">Type</th>
												<th width="20%">Position</th>
												<th width="20%">Periode</th>
												<th width="10%">Salary</th>
												<th width="10%">Action</th>
											</tr>
											</thead>
											<tbody>
											<?php 
											$no = 1;
											foreach($companylist as $c) {
												$company_id = $c->company_id;

			                            		$from = $c->company_date_join; 			                            
					                            if (!empty($from)) {
					                                $xfrom 		= explode("-",$from);
					                                $thnf 		= $xfrom[0];
					                                $blnf 		= $xfrom[1];
					                                $tglf 		= $xfrom[2];

					                                $tanggalfrom = $tglf.'-'.$blnf.'-'.$thnf;
					                            } else { 
					                                $tanggalfrom = '';
					                            }

					                            $to = $c->company_date_resign; 			                            
					                            if (!empty($to)) {
					                                $xto 		= explode("-",$to);
					                                $thnt 		= $xto[0];
					                                $blnt 		= $xto[1];
					                                $tglt 		= $xto[2];

					                                $tanggalto = $tglt.'-'.$blnt.'-'.$thnt;
					                            } else { 
					                                $tanggalto = '';
					                            }			                          	
											?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $c->company_name; ?></td>
												<td><?php echo $c->company_type; ?></td>
												<td><?php echo $c->company_position; ?></td>
												<td><?php echo $tanggalfrom.' s/d '.$tanggalto; ?></td>
												<td><?php echo number_format($c->company_salary); ?></td>
												<td>
													<button type="button" class="btn btn-primary btn-xs editcompany_button" data-toggle="modal" data-target="#editcompany" data-id="<?php echo $c->company_id; ?>" data-name="<?php echo $c->company_name; ?>" data-address="<?php echo $c->company_address; ?>" data-from="<?php echo $c->company_date_join; ?>" data-to="<?php echo $c->company_date_resign; ?>" data-type="<?php echo $c->company_type; ?>" data-position="<?php echo $c->company_position; ?>" data-manager="<?php echo $c->company_manager; ?>" data-salary="<?php echo $c->company_salary; ?>" data-phone="<?php echo $c->company_phone; ?>" data-email="<?php echo $c->company_email; ?>" data-website="<?php echo $c->company_web; ?>" data-job="<?php echo $c->company_job_desc; ?>" data-emp_id="<?php echo $c->emp_id; ?>"><i class="icon-pencil"></i>
													</button>
	                        						<a onclick="hapusDataCompany(<?php echo $company_id; ?>)"><button class="btn btn-danger btn-xs" title="Delete Data"><i class="icon-trash"></i></button>
	                        						</a>
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
								</div>
							</div>

							<div class="tab-pane" id="tab_2">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-users"></i>Family List (<?php echo $detail->emp_name; ?>)
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
									
									<div class="portlet-body">
										<!-- Modal Form -->
										<div class="modal fade bs-modal-lg" id="addfamily" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
												<form action="<?php echo site_url('emp/family/savedata/'.$this->uri->segment(4)); ?>" class="form-horizontal" method="post">
												<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
													
													<div class="modal-header">						
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
														<h4 class="modal-title"><i class="fa fa-plus-circle"></i> Form Add Family</h4>
													</div>

													<div class="modal-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Name</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete="off" required autofocus>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Address</label>
																<div class="col-md-9 has-error">
																	<textarea class="form-control" rows="3" placeholder="Enter Address" name="address" required></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Phone</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control" placeholder="Enter Phone" name="phone" autocomplete="off">
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Work</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control" placeholder="Enter Work" name="work" autocomplete="off">
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Relationship</label>
																<div class="col-md-9 has-error">
																	<select class="form-control" name="lstRelation" required >
																	<option value="">- Choose Relationship -</option>
																	<?php foreach($relationlist as $l) { ?>
																		<option value="<?php echo $l->relation_id; ?>" <?php echo set_select('lstRelation', $l->relation_id); ?>><?php echo $l->relation_name; ?></option>
																	<?php } ?>
																</select>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Status</label>
																<div class="col-md-9 has-error">
																	<select class="form-control" name="lstStatus" required >
																	<option value="">- Choose Status -</option>
																	<option value="Alive" <?php echo set_select('lstStatus', 'Alive'); ?>>Alive</option>
																	<option value="Dead" <?php echo set_select('lstStatus', 'Dead'); ?>>Dead</option>
																</select>
																</div>
															</div>
														</div>
													</div>
													
													</div>
													
													<div class="modal-footer">
														<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
														<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-chevron-left"></span> Close</button>
													</div>
												</form>
												</div>												
											</div>											
										</div>
										<!-- Akhir Modal Form -->
										<!-- Awal Edit School Form -->
										<div class="modal fade bs-modal-lg" id="editfamily" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
												<form action="<?php echo site_url('emp/family/updatedata/'.$this->uri->segment(4)); ?>" class="form-horizontal" method="post">
												<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
												<input type="hidden" class="form-control family_id" name="id">
												<input type="hidden" class="form-control emp_id" name="emp_id">
													
													<div class="modal-header">						
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
														<h4 class="modal-title"><i class="fa fa-edit"></i> Form Edit Family</h4>
													</div>
													
													<div class="modal-body">
													
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Name</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control family_name" placeholder="Enter Name" name="name" autocomplete="off" required autofocus>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Address</label>
																<div class="col-md-9 has-error">
																	<textarea class="form-control family_address" rows="3" placeholder="Enter Address" name="address" required></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Phone</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control family_phone" placeholder="Enter Phone" name="phone" autocomplete="off">
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Work</label>
																<div class="col-md-9 has-error">
																	<input type="text" class="form-control family_work" placeholder="Enter Position" name="position" autocomplete="off">
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Relationship</label>
																<div class="col-md-9 has-error">
																	<select class="form-control family_relation" name="lstRelation" required >
																	<option value="">- Choose Relationship -</option>
																	<?php foreach($relationlist as $l) { ?>
																		<option value="<?php echo $l->relation_id; ?>" <?php echo set_select('lstRelation', $l->relation_id); ?>><?php echo $l->relation_name; ?></option>
																	<?php } ?>
																</select>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="col-md-3 control-label">Status</label>
																<div class="col-md-9 has-error">
																	<select class="form-control family_status" name="lstStatus" required >
																	<option value="">- Choose Status -</option>
																	<option value="Alive" <?php echo set_select('lstStatus', 'Alive'); ?>>Alive</option>
																	<option value="Dead" <?php echo set_select('lstStatus', 'Dead'); ?>>Dead</option>
																</select>
																</div>
															</div>
														</div>
													</div>
													
													</div>
													
													<div class="modal-footer">
														<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
														<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-chevron-left"></span> Close</button>
													</div>
												</form>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
										<!-- Akhir Edit School -->

										<a data-toggle="modal" href="#addfamily">
											<button type="submit" class="btn btn-primary">
											<i class="icon-plus"></i> Add Data</button>
										</a>
										<!-- Isi Data Tabel -->
										<div class="table-scrollable">
											<table class="table table-hover">
											<thead>
											<tr>
												<th width="5%">No</th>
												<th>Name</th>
												<th width="40%">Address</th>
												<th width="10%">Phone</th>
												<th width="15%">Relation</th>
												<th width="5%">Status</th>
												<th width="10%">Action</th>
											</tr>
											</thead>
											<tbody>
											<?php 
											$no = 1;
											foreach($familylist as $fa) {
												$family_id = $fa->family_id;
											?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $fa->family_name; ?></td>
												<td><?php echo $fa->family_address; ?></td>
												<td><?php echo $fa->family_phone; ?></td>
												<td><?php echo $fa->relation_name; ?></td>
												<td><?php echo $fa->family_status; ?></td>
												<td>
													<button type="button" class="btn btn-primary btn-xs editfamily_button" data-toggle="modal" data-target="#editfamily" data-id="<?php echo $fa->family_id; ?>" data-name="<?php echo $fa->family_name; ?>" data-address="<?php echo $fa->family_address; ?>" data-phone="<?php echo $fa->family_phone; ?>" data-work="<?php echo $fa->family_work; ?>" data-status="<?php echo $fa->family_status; ?>" data-relation="<?php echo $fa->relation_id; ?>" data-emp_id="<?php echo $fa->emp_id; ?>"><i class="icon-pencil"></i>
													</button>
	                        						<a onclick="hapusDataFamily(<?php echo $family_id; ?>)"><button class="btn btn-danger btn-xs" title="Delete Data"><i class="icon-trash"></i></button>
	                        						</a>
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

								</div>
							</div>
							<!-- Reward -->
							<div class="tab-pane" id="tab_3">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-trophy"></i>Reward List (<?php echo $detail->emp_name; ?>)
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
									
									<div class="portlet-body">										
										<!-- Isi Data Tabel -->
										<div class="table-scrollable">
											<table class="table table-hover">
											<thead>
											<tr>
												<th width="5%">No</th>
												<th width="20%">Reward No.</th>
												<th width="10%">Date</th>
												<th width="10%">Reward Type</th>
												<th>Description</th>
											</tr>
											</thead>
											<tbody>
											<?php 
											$no = 1;
											foreach($rewardlist as $re) {
												$tanggal  	 = $re->trans_date;
							                    if (!empty($tanggal)) {
							                        $xtanggal 	= explode("-",$tanggal);
							                        $thn1 		= $xtanggal[0];
							                        $bln1 		= $xtanggal[1];
							                        $tgl1 		= $xtanggal[2];

							                        $date 		= $tgl1.'-'.$bln1.'-'.$thn1;
							                    } else { 
							                    	$date 		= '';
							                    }
											?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $re->trans_no; ?></td>
												<td><?php echo $date; ?></td>
												<td><?php echo $re->reward_name; ?></td>
												<td><?php echo $re->trans_desc; ?></td>
											</tr>
											<?php 
												$no++; 
											} 
											?>											
											</tbody>
											</table>
										</div>
									</div>

								</div>
							</div>
							<!-- Punishment -->
							<div class="tab-pane" id="tab_4">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-trophy"></i>Punishment List (<?php echo $detail->emp_name; ?>)
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
									
									<div class="portlet-body">										
										<!-- Isi Data Tabel -->
										<div class="table-scrollable">
											<table class="table table-hover">
											<thead>
											<tr>
												<th width="5%">No</th>
												<th width="20%">Punishment No.</th>
												<th width="10%">Date</th>
												<th width="10%">Punishment Type</th>
												<th>Description</th>
											</tr>
											</thead>
											<tbody>
											<?php 
											$no = 1;
											foreach($punishmentlist as $p) {
												$tanggal  	 = $p->trans_date;
							                    if (!empty($tanggal)) {
							                        $xtanggal 	= explode("-",$tanggal);
							                        $thn1 		= $xtanggal[0];
							                        $bln1 		= $xtanggal[1];
							                        $tgl1 		= $xtanggal[2];

							                        $date 		= $tgl1.'-'.$bln1.'-'.$thn1;
							                    } else { 
							                    	$date 		= '';
							                    }
											?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $p->trans_no; ?></td>
												<td><?php echo $date; ?></td>
												<td><?php echo $p->punishment_name; ?></td>
												<td><?php echo $p->trans_desc; ?></td>
											</tr>
											<?php 
												$no++; 
											} 
											?>											
											</tbody>
											</table>
										</div>
									</div>

								</div>
							</div>

							<!-- Record -->
							<div class="tab-pane" id="tab_5">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-list"></i>Record List (<?php echo $detail->emp_name; ?>)
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
									
									<div class="portlet-body">										
										<!-- Isi Data Tabel -->
										<div class="table-scrollable">
											<table class="table table-hover">
											<thead>
											<tr>
												<th width="5%">No</th>
												<th width="15%">Information</th>
												<th width="10%">Date</th>												
												<th>Description</th>
											</tr>
											</thead>
											<tbody>
											<?php 
											$no = 1;
											foreach($recordlist as $r) {
												$tanggal  	 = $r->record_date;
							                    if (!empty($tanggal)) {
							                        $xtanggal 	= explode("-",$tanggal);
							                        $thn1 		= $xtanggal[0];
							                        $bln1 		= $xtanggal[1];
							                        $tgl1 		= $xtanggal[2];

							                        $date 		= $tgl1.'-'.$bln1.'-'.$thn1;
							                    } else { 
							                    	$date 		= '';
							                    }
											?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><span class="label label-sm <?php echo $r->absent_color; ?>"><?php echo $r->absent_name; ?></span></td>
												<td><?php echo $date; ?></td>
												<td><?php echo $r->record_desc; ?></td>
											</tr>
											<?php 
												$no++; 
											} 
											?>											
											</tbody>
											</table>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- Akhir Detail -->

		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>