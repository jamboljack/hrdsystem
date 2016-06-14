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
				<h1>Employee <small>Resign</small></h1>
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
					<a href="<?php echo site_url('emp/resign'); ?>">Resign</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Add Data Resign
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-plus-circle"></i>Form Add Resign Employee
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
							<form action="<?php echo site_url('emp/resign/savedata'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<input type="hidden" name="dep_id" id="dep_id" />
							<input type="hidden" name="pos_id" id="pos_id" />

								<div class="form-body">
									<div class="alert alert-danger">
                                        <strong>ATTENTION !</strong> If you are adding new DATA, then the data Employee Status will be changed to <b>NON-ACTIVE</b>.
                                    </div>
                                    
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
									<h3 class="form-section">Resign Detail</h3>	
									<div class="form-group">
										<label class="control-label col-md-3">Date</label>
										<div class="col-md-9 has-error">
											<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="date_resign" value="<?php echo set_value('date_resign'); ?>" placeholder="DD-MM-YYYY" autocomplete="off" required />
											<?php echo form_error('date_resign', '<span class="help-block has-error">','</span>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Reason</label>
										<div class="col-md-9 has-error">											
											<textarea id="summernote_1" name="reason"><?php echo set_value('reason'); ?></textarea>
										</div>
										<?php echo form_error('reason', '<span class="help-block has-error">','</span>'); ?>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
											<a href="<?php echo site_url('emp/resign'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Cancel</a>
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