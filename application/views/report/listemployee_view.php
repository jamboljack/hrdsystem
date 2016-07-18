<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/sweetalert2.css">
<script src="<?php echo base_url(); ?>js/sweetalert2.min.js"></script>

<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Report <small>Employee - Data Employee</small></h1>
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
					<a href="#">Report</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Employee</a>
					<i class="fa fa-circle"></i>
				</li>				
				<li>
					<a href="#">Data Employee</a>
					<i class="fa fa-circle"></i>
				</li>				
				<li class="active">
					List of Employee
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-book"></i> Report List of Employee
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<?php 
				        if ($this->session->flashdata('notification')) { ?>
				        	<script>
		                        swal({
		                            title: "Warning !",
		                            text: "<?php echo $this->session->flashdata('notification'); ?>",
		                            timer: 2000,
		                            showConfirmButton: false,
		                            type: 'warning'
		                        });
		                    </script>
				        <? } ?>
						<div class="portlet-body form">							
							<form action="<?php echo site_url('report/listemployee/preview'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

								<div class="form-body">									
									<div class="form-group">
										<label class="control-label col-md-3">Department</label>
										<div class="col-md-4 has-error">
										<select class="select2_category form-control" data-placeholder="- Choose Department -" name="lstDept" required>
											<option value="">- Choose Department -</option>
											<option value="all">All Department</option>
											<?php 
											foreach($daftardepartment as $d) { 
											?>
											<option value="<?php echo $d->department_id; ?>"><?php echo $d->department_name; ?></option>
											<?php 
											}
											?>
										</select>											
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">By</label>
										<div class="col-md-9 radio-list">
											<label class="radio-inline">
												<input type="radio" name="OptBy" id="OptBy" value="all" checked> All
											</label>
											<label class="radio-inline">
												<input type="radio" name="OptBy" id="OptBy" value="startjoin"> Start Join
											</label>
											<label class="radio-inline">
												<input type="radio" name="OptBy" id="OptBy" value="startcontract"> Start Contract
											</label>
											<label class="radio-inline">
												<input type="radio" name="OptBy" id="OptBy" value="endcontract"> End Contract
											</label>
										</div>
									</div>
									<div class="form-group">
					                    <label class="control-label col-md-3">Periode</label>
					                    <div class="col-md-4 has-error">                                
					                        <div class="input-group input-large" data-date="<? echo date('Y-m-d'); ?>" data-date-format="yyyy-mm-dd">
					                            <input type="text" class="form-control default-date-picker" id="tgl1" name="tgl1" placeholder="DD-MM-YYYY">
					                            <span class="input-group-addon">s/d</span>
					                            <input type="text" class="form-control default-date-picker" id="tgl2" name="tgl2" placeholder="DD-MM-YYYY">
					                        </div>
					                        <span class="help-block"><em>Empty = All Periode</em></span>
					                    </div>                   
					                </div> 									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span> Preview</button>											
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