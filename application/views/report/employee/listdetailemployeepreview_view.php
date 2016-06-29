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
					<a href="<?php echo site_url('report/listemployee'); ?>">Report Detail Employee List</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					Preview Report
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->

			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">			
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-book font-blue-sharp"></i>
								<span class="caption-subject font-blue-sharp bold uppercase">Detail Employee Preview</span>
							</div>							
							<div class="tools">
							</div>
						</div>
						<a href="<?php echo site_url('report/listemployeedetail/'); ?>/print_report/<?php echo $this->uri->segment(4); ?>" class="btn btn-primary" target="_blank"><span class="glyphicon glyphicon-print"></span> Print Preview</a>
						<a href="<?php echo site_url('report/listemployeedetail/'); ?>/print_report_pdf/<?php echo $this->uri->segment(4); ?>" class="btn btn-danger" target="_blank"><span class="glyphicon glyphicon-download-alt"></span> PDF</a>
						<a href="<?php echo site_url('report/listemployeedetail'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>

						<!-- Detail -->
						<div class="portlet-body form">
							<form class="form-horizontal">
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
	                                        <label class="control-label col-md-3">BirthPlace :</label>
	                                        <div class="col-md-9">
	                                        	<p class="form-control-static"> <?php echo $detail->emp_birthplace; ?></p>
											</div>
										</div>
                                    </div>
                                    <?php
				                    $tgllhr 	= $detail->emp_birthdate; 
				                            
				                    if (!empty($tgllhr)) {
				                        $xtgllhr 	= explode("-",$tgllhr);
				                    	$thn 		= $xtgllhr[0];
				                        $bln 		= $xtgllhr[1];
				                        $tgl 		= $xtgllhr[2];

				                        $tgllahir	= $tgl.'-'.$bln.'-'.$thn;
				                    } else { 
				                    	$tgllahir	= '';
				                    }
				                    ?>                                        
									<div class="col-md-6">
										<div class="form-group">
		                                	<label class="control-label col-md-3">BirthDate :</label>
		                                    <div class="col-md-9">
	                                        	<p class="form-control-static"> <?php echo $tgllahir; ?></p>
	                                        </div>
                                        </div>
									</div>                                        
								</div>
								<div class="row">
                            		<div class="col-md-6">
                                    	<div class="form-group">
	                                        <label class="control-label col-md-3">Address :</label>
	                                        <div class="col-md-9">
	                                        	<p class="form-control-static"> <?php echo $detail->emp_address; ?></p>
											</div>
										</div>
                                    </div>
									<div class="col-md-6">
										<div class="form-group">
	                                	<label class="control-label col-md-3">Province :</label>
	                                    <div class="col-md-9">
                                        	<p class="form-control-static"> <?php echo $detail->province_name; ?></p>
                                        </div>
                                        </div>
									</div>                                        
								</div>
								<div class="row">
                            		<div class="col-md-6">
                                    	<div class="form-group">
                                        <label class="control-label col-md-3">Country :</label>
                                        <div class="col-md-9">
                                        	<p class="form-control-static"> <?php echo $detail->country_name; ?></p>
										</div>
										</div>
                                    </div>
									<div class="col-md-6">
										<div class="form-group">
	                                	<label class="control-label col-md-3">District :</label>
	                                    <div class="col-md-9">
                                        	<p class="form-control-static"> <?php echo $detail->emp_district; ?></p>
                                        </div>
                                        </div>
									</div>                                        
								</div>
								<div class="row">
                            		<div class="col-md-6">
                                    	<div class="form-group">
                                        <label class="control-label col-md-3">Post Code :</label>
                                        <div class="col-md-9">
                                        	<p class="form-control-static"> <?php echo $detail->emp_zipcode; ?></p>
										</div>
										</div>
                                    </div>
									<div class="col-md-6">
										<div class="form-group">
	                                	<label class="control-label col-md-3">Gender :</label>
	                                    <div class="col-md-9">
                                        	<p class="form-control-static"> <?php echo $detail->emp_gender; ?></p>
                                        </div>
                                        </div>
									</div>                                        
								</div>
								<h3 class="form-section">Detail Info</h3>
                                <div class="row">
									<div class="col-md-6">
                                    	<div class="form-group">
                                        <label class="control-label col-md-3">KTP/SIM No. :</label>
                                        <div class="col-md-9">
                                        	<p class="form-control-static"> <?php echo $detail->emp_ktp_id; ?></p>
										</div>
										</div>
									</div>                                        
									<div class="col-md-6">
										<div class="form-group">
	                                    	<label class="control-label col-md-3">Phone :</label>
	                                        <div class="col-md-9">
                                            <p class="form-control-static"> <?php echo $detail->emp_phone ; ?></p>
                                            </div>
                                        </div>
                                    </div>                                        
								</div>
								<div class="row">
									<div class="col-md-6">
                                    	<div class="form-group">
                                        <label class="control-label col-md-3">Marriage Status :</label>
                                        <div class="col-md-9">
                                        	<p class="form-control-static"> <?php echo $detail->marriage_name; ?></p>
										</div>
										</div>
									</div>                                        
									<div class="col-md-6">
										<div class="form-group">
	                                    	<label class="control-label col-md-3">Religion :</label>
	                                        <div class="col-md-9">
                                            <p class="form-control-static"> <?php echo $detail->religion_name ; ?></p>
                                            </div>
                                        </div>
                                    </div>                                        
								</div>
								<div class="row">
									<div class="col-md-6">
                                    	<div class="form-group">
                                        <label class="control-label col-md-3">Education :</label>
                                        <div class="col-md-9">
                                        	<p class="form-control-static"> <?php echo $detail->education_name; ?></p>
										</div>
										</div>
									</div>                                        
									<div class="col-md-6">
										<div class="form-group">
	                                    	<label class="control-label col-md-3">Blood :</label>
	                                        <div class="col-md-9">
                                            <p class="form-control-static"> <?php echo $detail->blood_name ; ?></p>
                                            </div>
                                        </div>
                                    </div>                                        
								</div>
								<div class="row">
									<div class="col-md-6">
                                    	<div class="form-group">
                                        <label class="control-label col-md-3">Email :</label>
                                        <div class="col-md-9">
                                        	<p class="form-control-static"> <?php echo $detail->emp_email; ?></p>
										</div>
										</div>
									</div>
									<div class="col-md-6">
                                    	<div class="form-group">
                                        <label class="control-label col-md-3">Status :</label>
                                        <div class="col-md-9">
                                        	<p class="form-control-static"> <?php echo $detail->status_name; ?></p>
										</div>
										</div>
									</div>
								</div>
                                <h3 class="form-section">Insurance Info</h3>
								<div class="row">
                                	<div class="col-md-6">
                                    	<div class="form-group">
                                        	<label class="control-label col-md-3">Healthy ID. :</label>
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
                                <div class="row">
                                	<div class="col-md-6">
                                    	<div class="form-group">
                                        	<label class="control-label col-md-3">Employ ID. :</label>
                                            <div class="col-md-9">
                                            	<p class="form-control-static"> <?php echo $detail->emp_bpjs_k_id; ?></p>
                                            </div>
										</div>
                                    </div>
                                    <?php
				                    $tanggalx 	= $detail->emp_join_date_k; 
				                            
				                    if (!empty($tanggalx)) {
				                        $xtanggalx 	= explode("-",$tanggalx);
				                        $thn1 		= $xtanggalx[0];
				                        $bln1 		= $xtanggalx[1];
				                        $tgl1 		= $xtanggalx[2];

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
                                <h3 class="form-section">Department & Position</h3>
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
								</div>                                  
							</div>
							</form>						
						</div>

						<div class="portlet-body">							
							<h3 class="form-section">School</h3>
							<table class="table table-hover">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th>School Name</th>								
								<th width="20%">Department</th>
								<th width="20%">Periode</th>								
								<th width="10%">Level</th>
								<th width="15%">Phone</th>							
							</tr>
							</thead>
							<tbody>
							<?php 								
								$no = 1; 
								foreach($schoollist as $s) {									
									$periode1  	 = $s->school_periode_1;
					                if (!empty($periode1)) {
					                    $xperiode1 	= explode("-",$periode1);
					                    $thn 		= $xperiode1[0];
					                    $bln 		= $xperiode1[1];
					                    $tgl 		= $xperiode1[2];

					                    $periode_1	= $tgl.'-'.$bln.'-'.$thn;
					                } else { 
					                 	$periode_1	= '';
					                }

					                $periode2  	 = $s->school_periode_2;
					                if (!empty($periode2)) {
					                    $xperiode2 	= explode("-",$periode2);
					                    $thn1 		= $xperiode2[0];
					                    $bln1 		= $xperiode2[1];
					                    $tgl1 		= $xperiode2[2];

					                    $periode_2	= $tgl1.'-'.$bln1.'-'.$thn1;
					                } else { 
					                 	$periode_2	= '';
					                }					               
							?>							
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $s->school_name; ?></td>								
								<td><?php echo $s->school_department; ?></td>
								<td><?php echo $periode_1.' s/d '.$periode_2; ?></td>
								<td><?php echo $s->education_name; ?></td>
								<td><?php echo $s->school_phone; ?></td>
							</tr>
							<?php 
								$no++; 
							}
							?>
							</tbody>
							</table>
						</div>

						<div class="portlet-body">							
							<h3 class="form-section">Work</h3>
							<table class="table table-hover">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th>Company Name</th>								
								<th width="20%">Address</th>
								<th width="15%">Type</th>
								<th width="15%">Position</th>								
								<th width="20%">Periode</th>
								<th width="10%">Salary</th>							
							</tr>
							</thead>
							<tbody>
							<?php 								
								$no = 1; 
								foreach($worklist as $w) {									
									$periode1  	 = $w->company_date_join;
					                if (!empty($periode1)) {
					                    $xperiode1 	= explode("-",$periode1);
					                    $thn 		= $xperiode1[0];
					                    $bln 		= $xperiode1[1];
					                    $tgl 		= $xperiode1[2];

					                    $periode_1	= $tgl.'-'.$bln.'-'.$thn;
					                } else { 
					                 	$periode_1	= '';
					                }

					                $periode2  	 = $w->company_date_resign;
					                if (!empty($periode2)) {
					                    $xperiode2 	= explode("-",$periode2);
					                    $thn1 		= $xperiode2[0];
					                    $bln1 		= $xperiode2[1];
					                    $tgl1 		= $xperiode2[2];

					                    $periode_2	= $tgl1.'-'.$bln1.'-'.$thn1;
					                } else { 
					                 	$periode_2	= '';
					                }					               
							?>							
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $w->company_name; ?></td>								
								<td><?php echo $w->company_address; ?></td>
								<td><?php echo $w->company_type; ?></td>
								<td><?php echo $w->company_position; ?></td>
								<td><?php echo $periode_1.' s/d '.$periode_2; ?></td>
								<td><?php echo number_format($w->company_salary); ?></td>
							</tr>
							<?php 
								$no++; 
							}
							?>
							</tbody>
							</table>
						</div>

						<div class="portlet-body">							
							<h3 class="form-section">Family</h3>
							<table class="table table-hover">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th>Name</th>								
								<th width="40%">Address</th>
								<th width="15%">Phone</th>
								<th width="10%">Relation</th>								
								<th width="10%">Status</th>								
							</tr>
							</thead>
							<tbody>
							<?php 								
								$no = 1; 
								foreach($familylist as $f) {
							?>							
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $f->family_name; ?></td>								
								<td><?php echo $f->family_address; ?></td>
								<td><?php echo $f->family_phone; ?></td>
								<td><?php echo $f->relation_name; ?></td>
								<td><?php echo $f->family_status; ?></td>
							</tr>
							<?php 
								$no++; 
							}
							?>
							</tbody>
							</table>
						</div>

						<div class="portlet-body">							
							<h3 class="form-section">Reward</h3>
							<table class="table table-hover">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th width="20%">Reward No.</th>								
								<th width="10%">Date</th>
								<th width="15%">Reward Type</th>
								<th>Desctiption</th>
							</tr>
							</thead>
							<tbody>
							<?php 								
								$no = 1; 
								foreach($rewardlist as $r) {
									$tgl  	 = $r->trans_date;
					                if (!empty($tgl)) {
					                    $xtgl 		= explode("-",$tgl);
					                    $thn 		= $xtgl[0];
					                    $bln 		= $xtgl[1];
					                    $tgl 		= $xtgl[2];

					                    $tanggal	= $tgl.'-'.$bln.'-'.$thn;
					                } else { 
					                 	$tanggal	= '';
					                }
							?>							
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $r->trans_no; ?></td>								
								<td><?php echo $tanggal; ?></td>
								<td><?php echo $r->reward_name; ?></td>								
								<td><?php echo $r->trans_desc; ?></td>
							</tr>
							<?php 
								$no++; 
							}
							?>
							</tbody>
							</table>
						</div>

						<div class="portlet-body">							
							<h3 class="form-section">Punishment</h3>
							<table class="table table-hover">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th width="20%">Punishment No.</th>								
								<th width="10%">Date</th>
								<th width="15%">Punishment Type</th>
								<th>Desctiption</th>
							</tr>
							</thead>
							<tbody>
							<?php 								
								$no = 1; 
								foreach($punishmentlist as $p) {
									$tgl  	 = $p->trans_date;
					                if (!empty($tgl)) {
					                    $xtgl 		= explode("-",$tgl);
					                    $thn 		= $xtgl[0];
					                    $bln 		= $xtgl[1];
					                    $tgl 		= $xtgl[2];

					                    $tanggal	= $tgl.'-'.$bln.'-'.$thn;
					                } else { 
					                 	$tanggal	= '';
					                }
							?>							
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $p->trans_no; ?></td>								
								<td><?php echo $tanggal; ?></td>
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

						<div class="portlet-body">							
							<h3 class="form-section">Record</h3>
							<table class="table table-hover">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th width="20%">Information</th>								
								<th width="10%">Date</th>								
								<th>Desctiption</th>
							</tr>
							</thead>
							<tbody>
							<?php 								
								$no = 1; 
								foreach($recordlist as $c) {
									$tgl  	 = $c->record_date;
					                if (!empty($tgl)) {
					                    $xtgl 		= explode("-",$tgl);
					                    $thn 		= $xtgl[0];
					                    $bln 		= $xtgl[1];
					                    $tgl 		= $xtgl[2];

					                    $tanggal	= $tgl.'-'.$bln.'-'.$thn;
					                } else { 
					                 	$tanggal	= '';
					                }
							?>							
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $c->absent_name; ?></td>								
								<td><?php echo $tanggal; ?></td>								
								<td><?php echo $c->record_desc; ?></td>
							</tr>
							<?php 
								$no++; 
							}
							?>
							</tbody>
							</table>
						</div>
						<!-- Akhir Detail -->

					</div>
					<!-- END EXAMPLE TABLE PORTLET-->				
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>