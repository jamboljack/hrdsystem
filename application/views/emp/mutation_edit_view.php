<script language="JavaScript" type="text/JavaScript">
function myEmployee() {	
	var x = document.getElementById("lstEmployee"); 
	var Nik = x.options[(x.selectedIndex)].getAttribute('data-nik');
	var Department = x.options[(x.selectedIndex)].getAttribute('data-department');
	var Position = x.options[(x.selectedIndex)].getAttribute('data-position');
	var Dep_id = x.options[(x.selectedIndex)].getAttribute('data-dep_id');
	var Pos_id = x.options[(x.selectedIndex)].getAttribute('data-pos_id');
	document.getElementById("nik").value = Nik;
	document.getElementById("department").value = Department;
	document.getElementById("position").value = Position;
	document.getElementById("dep_id").value = Dep_id;
	document.getElementById("pos_id").value = Pos_id;	
}
</script>

<script language="JavaScript" type="text/JavaScript">
function myMail() {	
	var x = document.getElementById("lstMail"); 
	var Title = x.options[(x.selectedIndex)].getAttribute('data-title');	
	document.getElementById("title").value = Title;
}
</script>
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Employee <small>Mutation</small></h1>
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
					<a href="<?php echo site_url('emp/mutation'); ?>">Mutation</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Edit Mutation
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Form Edit Mutation Employee
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
							<form action="<?php echo site_url('emp/mutation/updatedata'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<input type="hidden" name="id" value="<?php echo $detail->mutation_id; ?>" />
							<input type="hidden" name="dep_id" id="dep_id" />
							<input type="hidden" name="pos_id" id="pos_id" />

								<div class="form-body">
									<div class="alert alert-danger">
                                        <strong>ATTENTION !</strong> If you are Editing this DATA, then the data Department and Employee Positions will be changed and This DATA too.
                                    </div>
                                    
									<h3 class="form-section">Employee Detail</h3>
									<div class="form-group">
										<label class="control-label col-md-3">Employee Name</label>
										<div class="col-md-6 has-error">
											<input type="text" class="form-control" placeholder="Name" name="name" id="name" autocomplete="off" value="<?php echo $detail->emp_name; ?>" readonly>									
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">N I K</label>
										<div class="col-md-3 has-error">
											<input type="text" class="form-control" placeholder="N I K" name="nik" id="nik" autocomplete="off" value="<?php echo $detail->emp_nik; ?>" readonly>									
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Department</label>
										<div class="col-md-4 has-error">
											<input type="text" class="form-control" placeholder="Department" name="department" id="department" value="<?php echo $detail->department_name; ?>" autocomplete="off" readonly>				
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Position</label>
										<div class="col-md-4 has-error">
											<input type="text" class="form-control" placeholder="Position" name="position" id="position" value="<?php echo $detail->position_name; ?>" autocomplete="off" readonly>									
										</div>
									</div>
									<h3 class="form-section">Decree Mail Detail</h3>
									<div class="form-group">
										<label class="control-label col-md-3">Decree Mail No.</label>
										<div class="col-md-6 has-error">
										<select class="select2_category form-control" data-placeholder="Choose Mail" name="lstMail" id="lstMail" onchange="myMail()" required autofocus>
											<option value="">- Choose Mail No. -</option>
											<?php 
											foreach($decreelist as $m) {
												if ($detail->decree_id==$m->decree_id) {
											?>
												<option value="<?php echo $m->decree_id; ?>" <?php echo set_select('lstMail', $m->decree_id); ?> data-title="<? echo $m->decree_title; ?>" selected><?php echo $m->decree_no.' - '.$m->decree_title; ?></option>
											<?php } else { ?>
												<option value="<?php echo $m->decree_id; ?>" <?php echo set_select('lstMail', $m->decree_id); ?> data-title="<? echo $m->decree_title; ?>"><?php echo $m->decree_no.' - '.$m->decree_title; ?></option>
											<?php
												}
											} 
											?>
										</select>										
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Title</label>
										<div class="col-md-6 has-error">
											<input type="text" class="form-control" placeholder="Enter Title" name="title" id="title" value="<?php echo $detail->decree_title; ?>" autocomplete="off" readonly>											
										</div>
									</div>
									<h3 class="form-section">Mutation Detail</h3>
									<?php
			                        $tanggal 	= $detail->mutation_date; 
			                            
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
									<div class="form-group">
										<label class="control-label col-md-3">Date</label>
										<div class="col-md-9 has-error">
											<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="date_mutation" value="<?php echo $date; ?>" placeholder="DD-MM-YYYY" autocomplete="off" required />											
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">To Department</label>
										<div class="col-md-6 has-error">
										<select class="select2_category form-control" data-placeholder="Choose Department" name="lstDepartment" required>
											<option value="">- Choose Department -</option>
											<?php 
											foreach($departmentlist as $d) {
												if ($detail->department_id2==$d->department_id) {
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
									<div class="form-group">
										<label class="control-label col-md-3">To Position</label>
										<div class="col-md-6 has-error">
										<select class="select2_category form-control" data-placeholder="Choose Position" name="lstPosition" required>
											<option value="">- Choose Position -</option>
											<?php 
											foreach($positionlist as $p) {
												if ($detail->position_id2==$p->position_id) {
											?>
												<option value="<?php echo $p->position_id; ?>" <?php echo set_select('lstPosition', $p->position_id); ?> selected><?php echo $p->position_name; ?></option>
											<?php } else { ?>
												<option value="<?php echo $p->position_id; ?>" <?php echo set_select('lstPosition', $p->position_id); ?>><?php echo $p->position_name; ?></option>
											<?php
												}
											} 
											?>
										</select>										
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
											<a href="<?php echo site_url('emp/mutation'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Cancel</a>
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