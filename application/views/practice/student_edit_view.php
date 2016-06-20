<script language="JavaScript" type="text/JavaScript">
function mySchool() {	
	var x = document.getElementById("lstSchool"); 
	var Address = x.options[(x.selectedIndex)].getAttribute('data-address');	
	document.getElementById("address").value = Address;
}
</script>

<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Practical Work <small>Student</small></h1>
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
					<a href="<?php echo site_url('practice/student'); ?>">Student</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Edit Student
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Form Edit Student
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
							<form action="<?php echo site_url('practice/student/updatedata'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<input type="hidden" name="id" value="<?php echo $detail->student_id; ?>" />

								<div class="form-body">
									<h3 class="form-section">School Detail</h3>
									<div class="form-group">
										<label class="control-label col-md-3">School Name</label>
										<div class="col-md-5 has-error">
										<select class="select2_category form-control" data-placeholder="Choose School Name" name="lstSchool" id="lstSchool" onchange="mySchool()" required autofocus>
											<option value="">- Choose School Name -</option>
											<?php 
											foreach($schoollist as $s) {
												if ($detail->school_id == $s->school_id) {
											?>
												<option selected value="<?php echo $s->school_id; ?>" data-address="<? echo $s->school_address; ?>"><?php echo $s->school_name; ?></option>
											<?php } else { ?>
												<option value="<?php echo $s->school_id; ?>" <?php echo set_select('lstSchool', $s->school_id); ?> data-address="<? echo $s->school_address; ?>"><?php echo $s->school_name; ?></option>
											<?php
												}
											}
											?>
										</select>										
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">School Address</label>
										<div class="col-md-6 has-error">
											<input type="text" class="form-control" placeholder="Address" name="address" id="address" value="<?php echo $detail->school_address; ?>" autocomplete="off" readonly>
										</div>
									</div>
									<h3 class="form-section">Student Detail</h3>
									<div class="form-group">
										<label class="control-label col-md-3">Name</label>
										<div class="col-md-6 has-error">
											<input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $detail->student_name; ?>" autocomplete="off" required />
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Address</label>
										<div class="col-md-9 has-error">
											<input type="text" class="form-control" placeholder="Enter Address" name="address" value="<?php echo $detail->student_address; ?>" autocomplete="off" required />
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Phone</label>
										<div class="col-md-4 has-error">
											<input type="text" class="form-control" placeholder="Enter Phone" name="phone" value="<?php echo $detail->student_phone; ?>" autocomplete="off" required />
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Department</label>
										<div class="col-md-4 has-error">
											<input type="text" class="form-control" placeholder="Enter Department" name="department" value="<?php echo $detail->student_dept; ?>" autocomplete="off" required />											
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Teacher Guide</label>
										<div class="col-md-6 has-error">
											<input type="text" class="form-control" placeholder="Enter Teacher Guide" name="teacher" value="<?php echo $detail->student_teacher; ?>" autocomplete="off" required />
										</div>
									</div>
									<?php
			                        $tanggal 	= $detail->student_start; 
			                            
			                        if (!empty($tanggal)) {
			                            $xtanggal 	= explode("-",$tanggal);
			                            $thn1 		= $xtanggal[0];
			                            $bln1 		= $xtanggal[1];
			                            $tgl1 		= $xtanggal[2];

			                            $start 		= $tgl1.'-'.$bln1.'-'.$thn1;
			                        } else { 
			                        	$start 		= '';
			                        }
			                        ?>
									<div class="form-group">
										<label class="control-label col-md-3">Start Date</label>
										<div class="col-md-9 has-error">
											<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="start_date" value="<?php echo $start; ?>" placeholder="DD-MM-YYYY" autocomplete="off" required />
										</div>
									</div>
									<?php
			                        $tanggal2 	= $detail->student_end; 
			                            
			                        if (!empty($tanggal2)) {
			                            $mtanggal 	= explode("-",$tanggal2);
			                            $thn2 		= $mtanggal[0];
			                            $bln2 		= $mtanggal[1];
			                            $tgl2 		= $mtanggal[2];

			                            $end 		= $tgl2.'-'.$bln2.'-'.$thn2;
			                        } else { 
			                        	$end 		= '';
			                        }
			                        ?>
									<div class="form-group">
										<label class="control-label col-md-3">End Date</label>
										<div class="col-md-9 has-error">
											<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="end_date" value="<?php echo $end; ?>" placeholder="DD-MM-YYYY" autocomplete="off" required />											
										</div>
									</div>
									<h3 class="form-section">Photo</h3>
									<div class="form-group">
										<label class="control-label col-md-3">Photo</label>
										<div class="col-md-5 has-error">
										<?php if (empty($detail->student_photo)) { ?>
											<img src="<?php echo base_url(); ?>img/no_image.gif" alt="" />
										<?php } else { ?>
											<img src="<?php echo base_url(); ?>photo/student/<?php echo $detail->student_photo; ?>" alt="" />
										<?php } ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Change Photo</label>
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
											<a href="<?php echo site_url('practice/student'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Cancel</a>
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