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
				<li>
					<a href="#">Data Employee</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="<?php echo site_url('emp/healthy_insurance'); ?>">Healthy Insurance</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					Healthy Insurance Detail
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">																	
					
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Detail Healthy Insurance Employee
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
							<form action="#" class="form-horizontal" method="post" enctype="multipart/form-data">
								<div class="form-body">                                   
									<h3 class="form-section">Employee Info</h3>
									<div class="row">
                                    	<div class="col-md-6">
                                        	<div class="form-group">
                                            	<label class="control-label col-md-3">N I K :</label>
                                                <div class="col-md-9">
                                                	<p class="form-control-static"> <?php echo $detail->emp_nik; ?></p>
                                                </div>
											</div>
                                        </div>                                        
										<div class="col-md-6">
											<div class="form-group">
	                                            <label class="control-label col-md-3">Name :</label>
	                                            <div class="col-md-9">
                                            		<p class="form-control-static"> <?php echo $detail->emp_name ; ?></p>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="row">
                                    	<div class="col-md-6">
                                        	<div class="form-group">
                                            	<label class="control-label col-md-3">Department :</label>
                                                <div class="col-md-9">
                                                	<p class="form-control-static"> <?php echo $detail->department_name; ?></p>
                                                </div>
											</div>
                                        </div>                                        
										<div class="col-md-6">
											<div class="form-group">
	                                            <label class="control-label col-md-3">Position :</label>
	                                            <div class="col-md-9">
                                            		<p class="form-control-static"> <?php echo $detail->position_name ; ?></p>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <h3 class="form-section">Insurance Info</h3>
									<div class="row">
                                    	<div class="col-md-6">
                                        	<div class="form-group">
                                            	<label class="control-label col-md-3">No. Insurance :</label>
                                                <div class="col-md-9">
                                                	<p class="form-control-static"> <?php echo $detail->emp_bpjs_h_id; ?></p>
                                                </div>
											</div>
                                        </div>
                                        <?php
				                        $tanggal 	= $detail->emp_join_date_h; 
				                            
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
										<div class="col-md-6">
											<div class="form-group">
	                                            <label class="control-label col-md-3">Join Date :</label>
	                                            <div class="col-md-9">
                                            		<p class="form-control-static"> <?php echo $date; ?></p>
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
											<a href="<?php echo site_url('emp/healthy_insurance'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
											</div>
											</div>
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