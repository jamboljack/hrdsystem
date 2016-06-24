<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/sweetalert2.css">
<script src="<?php echo base_url(); ?>js/sweetalert2.min.js"></script>
<script>
    function hapusData(emp_id) {
        var id = emp_id;
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
            window.location.href="<?php echo site_url('emp/employee/deletedata'); ?>"+"/"+id
        });
    }
</script>

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
				<li class="active">
					All Employee
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
								<i class="fa fa-users font-blue-sharp"></i>
								<span class="caption-subject font-blue-sharp bold uppercase">Employee List</span>
							</div>							
							<div class="tools">
							</div>
						</div>
						<a href="<?php echo site_url('emp/employee/adddata'); ?>">
							<button type="submit" class="btn btn-primary">
							<i class="icon-plus"></i> Add Data</button>
						</a>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th width="10%">N I K</th>
								<th width="5%">ID Finger</th>								
								<th>Employee Name</th>
								<th width="5%">Age</th>
								<th width="5%">YoS</th>
								<th width="15%">Department</th>
								<th width="15%">Position</th>
								<th width="6%">Status</th>
								<th width="13%">Action</th>				
							</tr>
							</thead>
							<tbody>
							<?php
								$no = 1; 
								foreach($daftarlist as $r) { 
									$emp_id = $r->emp_id;
							?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $r->emp_nik; ?></td>
								<td><?php echo $r->emp_finger; ?></td>
								<td><?php echo $r->emp_name; ?></td>
								<td><?php echo age($r->emp_birthdate); ?></td>
								<td><?php echo age($r->emp_start_join); ?></td>
								<td><?php echo $r->department_name; ?></td>
								<td><?php echo $r->position_name; ?></td>
								<td>
									<?php if ($r->emp_status=='ACTIVE') { ?>
										<span class="label label-sm label-success"><?php echo $r->emp_status; ?></span>
									<?php } else { ?>
										<span class="label label-sm label-danger"><?php echo $r->emp_status; ?></span>
									<?php } ?>
								</td>
								<td>
									<a href="<?php echo site_url('emp/employee/editdata/'.$r->emp_id); ?>"><button class="btn btn-primary btn-xs" title="Edit Data"><i class="icon-pencil"></i> Edit</button></a>
	                        		<a onclick="hapusData(<?php echo $emp_id; ?>)"><button class="btn btn-danger btn-xs" title="Delete Data"><i class="icon-trash"></i> Delete</button></a>
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