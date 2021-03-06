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
					<a href="<?php echo site_url('emp/record'); ?>">Record Employee</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Add Data Record Employee
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-plus-circle"></i>Form Add Record Employee
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
							<form action="<?php echo site_url('emp/record/savedata'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

								<div class="form-body">                                   
									<h3 class="form-section">Employee Detail</h3>
									<div class="form-group">
										<label class="control-label col-md-3">Employee</label>
										<div class="col-md-6 has-error">
										<select class="select2_category form-control" data-placeholder="Choose Employee" name="lstEmployee" id="lstEmployee" onchange="myEmployee()" required autofocus>
											<option value="">- Choose Employee -</option>
											<?php 
											foreach($employeelist as $e) {
											?>
											<option value="<?php echo $e->emp_id; ?>" <?php echo set_select('lstEmployee', $e->emp_id); ?> data-nik="<? echo $e->emp_nik; ?>" data-department="<? echo $e->department_name; ?>" data-position="<? echo $e->position_name; ?>" data-dep_id="<? echo $e->department_id; ?>" data-pos_id="<? echo $e->position_id; ?>"><?php echo $e->emp_name; ?></option>
											<?php
											} 
											?>
										</select>
										<?php echo form_error('lstEmployee', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">N I K</label>
										<div class="col-md-3 has-error">
											<input type="text" class="form-control" placeholder="N I K" name="nik" id="nik" autocomplete="off" value="<?php echo set_value('nik'); ?>" readonly>									
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Department</label>
										<div class="col-md-4 has-error">
											<input type="text" class="form-control" placeholder="Department" name="department" id="department" value="<?php echo set_value('department'); ?>" autocomplete="off" readonly>				
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Position</label>
										<div class="col-md-4 has-error">
											<input type="text" class="form-control" placeholder="Position" name="position" id="position" value="<?php echo set_value('position'); ?>" autocomplete="off" readonly>									
										</div>
									</div>									
									<h3 class="form-section">Record Detail</h3>
									<div class="form-group">
										<label class="control-label col-md-3">Information</label>
										<div class="col-md-3 has-error">
										<select class="select2_category form-control" data-placeholder="Choose Information" name="lstInfo" required />
											<option value="">- Choose Information -</option>
											<?php 
											foreach($absentlist as $a) {
											?>
											<option value="<?php echo $a->absent_id; ?>" <?php echo set_select('lstInfo', $a->absent_id); ?>><?php echo $a->absent_name; ?></option>
											<?php
											} 
											?>
										</select>
										<?php echo form_error('lstInfo', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Date</label>
										<div class="col-md-9 has-error">
											<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="date_record" value="<?php echo set_value('date_record'); ?>" placeholder="DD-MM-YYYY" autocomplete="off" required />
											<?php echo form_error('date_record', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Description</label>
										<div class="col-md-9 has-error">											
											<textarea class="form-control" name="desc" rows="6"><?php echo set_value('desc'); ?></textarea>
										</div>
										<?php echo form_error('desc', '<span class="help-block has-error">','</span>'); ?>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
											<a href="<?php echo site_url('emp/record'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Cancel</a>
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