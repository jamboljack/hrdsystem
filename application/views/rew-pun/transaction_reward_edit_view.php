<script language="JavaScript" type="text/JavaScript">
function myEmployee() {	
	var x = document.getElementById("lstEmployee"); 
	var Nik = x.options[(x.selectedIndex)].getAttribute('data-nik');
	var Department = x.options[(x.selectedIndex)].getAttribute('data-department');
	var Position = x.options[(x.selectedIndex)].getAttribute('data-position');
	document.getElementById("nik").value = Nik;
	document.getElementById("department").value = Department;
	document.getElementById("position").value = Position;
}
</script>

<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Employee <small>Reward & Punishment</small></h1>
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
					<a href="#">Reward & Punishment</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="<?php echo site_url('transaction_reward'); ?>">Transaction Reward</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Edit Transaction Reward
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Form Edit Transaction Reward
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
							<form action="<?php echo site_url('rew-pun/transaction_reward/updatedata'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<input type="hidden" name="id" value="<?php echo $detail->trans_id; ?>" />

								<div class="form-body">									
									<h3 class="form-section">Employee Data</h3>
									<div class="form-group">
										<label class="control-label col-md-3">Employee</label>
										<div class="col-md-6 has-error">
										<select class="form-control" data-placeholder="Choose Employee" name="lstEmployee" id="lstEmployee" readonly>
											<option value="">- Choose Employee -</option>
											<?php 
											foreach($employeelist as $e) {
												if ($detail->emp_id==$e->emp_id) {
											?>
											<option value="<?php echo $e->emp_id; ?>" data-nik="<? echo $e->emp_nik; ?>" data-department="<? echo $e->department_name; ?>" data-position="<? echo $e->position_name; ?>" selected><?php echo $e->emp_name; ?></option>
											<?php } else { ?>
											<option value="<?php echo $e->emp_id; ?>" <?php echo set_select('lstEmployee', $e->emp_id); ?> data-nik="<? echo $e->emp_nik; ?>" data-department="<? echo $e->department_name; ?>" data-position="<? echo $e->position_name; ?>"><?php echo $e->emp_name; ?></option>
											<?php
												}
											} 
											?>
										</select>										
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">N I K</label>
										<div class="col-md-3 has-error">
											<input type="text" class="form-control" placeholder="Enter NIK" name="nik" id="nik" autocomplete="off" value="<?php echo $detail->emp_nik; ?>" readonly>									
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Department</label>
										<div class="col-md-4 has-error">
											<input type="text" class="form-control" placeholder="Enter Department" name="department" id="department" value="<?php echo $detail->department_name; ?>" autocomplete="off" readonly>				
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Position</label>
										<div class="col-md-4 has-error">
											<input type="text" class="form-control" placeholder="Enter Position" name="position" id="position" value="<?php echo $detail->position_name; ?>" autocomplete="off" readonly>									
										</div>
									</div>
									<h3 class="form-section">Reward</h3>
									<div class="form-group">
										<label class="control-label col-md-3">Reward No.</label>
										<div class="col-md-5 has-error">
											<input type="text" class="form-control" placeholder="Enter Reward No." name="reward_no" value="<?php echo $detail->trans_no; ?>" autocomplete="off" required autofocus>											
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Reward Type</label>
										<div class="col-md-3 has-error">
										<select class="select2_category form-control" data-placeholder="Choose Reward Type" name="lstReward" required>
											<option value="">- Choose Reward Type -</option>
											<?php 
											foreach($rewardlist as $r) {
												if ($detail->reward_id==$r->reward_id) {
											?>
											<option value="<?php echo $r->reward_id; ?>" selected><?php echo $r->reward_name; ?></option>
											<?php } else { ?>
											<option value="<?php echo $r->reward_id; ?>" <?php echo set_select('lstReward', $r->reward_id); ?>><?php echo $r->reward_name; ?></option>
											<?php 
												}
											}
											?>
										</select>										
										</div>
									</div>
									<?php
			                        $tanggal 	= $detail->trans_date; 
			                            
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
											<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="date_reward" value="<?php echo $date; ?>" placeholder="Click Date" autocomplete="off" required />
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Description</label>
										<div class="col-md-9 has-error">											
											<textarea id="summernote_1" name="desc"><?php echo $detail->trans_desc; ?></textarea>
										</div>										
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
											<a href="<?php echo site_url('rew-pun/transaction_reward'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Cancel</a>
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