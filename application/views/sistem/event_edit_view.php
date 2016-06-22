<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>System <small>Calendar Event</small></h1>
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
					<a href="<?php echo site_url('sistem/event'); ?>">Calendar Event List</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					Edit Calendar Event
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Form Edit Calendar Event
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
							<form action="<?php echo site_url('sistem/event/updatedata'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<input type="hidden" name="id" value="<?php echo $detail->event_id; ?>" />

								<div class="form-body">									
									<div class="form-group">
										<label class="control-label col-md-3">Event Name</label>
										<div class="col-md-9 has-error">
											<input type="text" class="form-control" placeholder="Enter Event Name" name="name" value="<?php echo $detail->event_name; ?>" autocomplete="off" required autofocus>											
										</div>
									</div>
									<?php
			                        $tanggal 	= $detail->event_start_date; 
			                            
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
									<div class="form-group">
										<label class="control-label col-md-3">Start Time</label>
										<div class="col-md-3 has-error">
											<div class="input-group">
												<input type="text" class="form-control timepicker timepicker-24" name="start_time" value="<?php echo $detail->event_start_time; ?>" required>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-clock-o"></i></button>
												</span>												
											</div>											
										</div>
									</div>
									<?php
			                        $tanggal1 	= $detail->event_end_date; 
			                            
			                        if (!empty($tanggal1)) {
			                            $xtanggal1 	= explode("-",$tanggal1);
			                            $thn2 		= $xtanggal1[0];
			                            $bln2 		= $xtanggal1[1];
			                            $tgl2 		= $xtanggal1[2];

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
									<div class="form-group">
										<label class="control-label col-md-3">End Time</label>
										<div class="col-md-3 has-error">
											<div class="input-group">
												<input type="text" class="form-control timepicker timepicker-24" name="end_time" value="<?php echo $detail->event_end_time; ?>" required>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-clock-o"></i></button>
												</span>
											</div>											
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Label Color</label>
										<div class="col-md-3 has-error">
										<select class="form-control" name="lstColor" required>
											<option value="">- Choose Label Color -</option>
											<option value="grey" <?php if ($detail->event_color=='grey') { echo 'selected'; } ?>>Grey</option>
											<option value="red" <?php if ($detail->event_color=='red') { echo 'selected'; } ?>>Red</option>
											<option value="yellow" <?php if ($detail->event_color=='yellow') { echo 'selected'; } ?>>Yellow</option>
											<option value="green" <?php if ($detail->event_color=='green') { echo 'selected'; } ?>>Green</option>
											<option value="purple" <?php if ($detail->event_color=='purple') { echo 'selected'; } ?>>Purple</option>
										</select>										
										</div>
									</div>									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
											<a href="<?php echo site_url('sistem/event'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Cancel</a>
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