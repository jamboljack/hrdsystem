<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/sweetalert2.css">
<script src="<?php echo base_url(); ?>js/sweetalert2.min.js"></script>
<script>
    function hapusData(mutation_id) {
        var id = mutation_id;
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
            window.location.href="<?php echo site_url('emp/mutation/deletedata'); ?>"+"/"+id
        });
    }
</script>

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
				<li class="active">
					 Mutation
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
								<i class="fa fa-random font-blue-sharp"></i>
								<span class="caption-subject font-blue-sharp bold uppercase">Mutation List</span>
							</div>							
							<div class="tools">
							</div>
						</div>
						<a href="<?php echo site_url('emp/mutation/adddata'); ?>">
							<button type="submit" class="btn btn-primary">
							<i class="icon-plus"></i> Add Data</button>
						</a>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th width="10%">Date</th>
								<th width="15%">Mail No</th>								
								<th>Employee Name</th>								
								<th width="20%">To Department</th>
								<th width="15%">To Position</th>
								<th width="13%">Action</th>							
							</tr>
							</thead>
							<tbody>
							<?php
								$no = 1; 
								foreach($daftarlist as $r) { 
									$mutation_id = $r->mutation_id;
									$tanggal  	 = $r->mutation_date; 				                           
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
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $date; ?></td>
								<td><?php echo $r->decree_no; ?></td>								
								<td><?php echo $r->emp_name; ?></td>								
								<td><?php echo $r->to_dep; ?></td>								
								<td><?php echo $r->to_pos; ?></td>
								<td>
									<a href="<?php echo site_url('emp/mutation/editdata/'.$r->mutation_id); ?>"><button class="btn btn-primary btn-xs" title="Edit Data"><i class="icon-pencil"></i> Edit</button></a>
	                        		<a onclick="hapusData(<?php echo $mutation_id; ?>)"><button class="btn btn-danger btn-xs" title="Delete Data"><i class="icon-trash"></i> Delete</button></a>
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