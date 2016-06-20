<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/sweetalert2.css">
<script src="<?php echo base_url(); ?>js/sweetalert2.min.js"></script>
<script>
    function hapusData(student_id) {
        var id = student_id;
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
            window.location.href="<?php echo site_url('practice/student/deletedata'); ?>"+"/"+id
        });
    }
</script>

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
				<li class="active">
					 Student
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
								<i class="fa fa-user font-blue-sharp"></i>
								<span class="caption-subject font-blue-sharp bold uppercase">Student List</span>
							</div>							
							<div class="tools">
							</div>
						</div>
						<a href="<?php echo site_url('practice/student/adddata'); ?>">
							<button type="submit" class="btn btn-primary">
							<i class="icon-plus"></i> Add Data</button>
						</a>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th width="5%">No</th>								
								<th width="15%">Name</th>
								<th width="15%">School Name</th>
								<th>Address</th>
								<th width="18%">Start - End</th>
								<th width="10%">Phone</th>
								<th width="13%">Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
								$no = 1; 
								foreach($daftarlist as $r) { 
									$student_id  = $r->student_id;
									$tanggal1  	 = $r->student_start; 				                           
				                    if (!empty($tanggal1)) {
				                        $xtanggal 	= explode("-",$tanggal1);
				                        $thn1 		= $xtanggal[0];
				                        $bln1 		= $xtanggal[1];
				                        $tgl1 		= $xtanggal[2];

				                        $start 		= $tgl1.'-'.$bln1.'-'.$thn1;
				                    } else { 
				                    	$start 		= '';
				                    }

				                    $tanggal2  	 = $r->student_end; 				                           
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
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $r->student_name; ?></td>
								<td><?php echo $r->school_name; ?></td>
								<td><?php echo $r->student_address; ?></td>
								<td><?php echo $start.' <b>to</b> '.$end; ?></td>
								<td><?php echo $r->student_phone; ?></td>
								<td>
									<a href="<?php echo site_url('practice/student/editdata/'.$r->student_id); ?>"><button class="btn btn-primary btn-xs" title="Edit Data"><i class="icon-pencil"></i> Edit</button></a>
	                        		<a onclick="hapusData(<?php echo $student_id; ?>)"><button class="btn btn-danger btn-xs" title="Delete Data"><i class="icon-trash"></i> Delete</button></a>
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
					<!-- END EXAMPLE TABLE PORTLET-->				
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>