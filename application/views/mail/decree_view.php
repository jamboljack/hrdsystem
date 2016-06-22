<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/sweetalert2.css">
<script src="<?php echo base_url(); ?>js/sweetalert2.min.js"></script>
<script>
    function hapusData(decree_id) {
        var id = decree_id;
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
            window.location.href="<?php echo site_url('mail/decree/deletedata'); ?>"+"/"+id
        });
    }
</script>

<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Mail Administration <small>Internal Mail</small></h1>
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
					<a href="#">Mail Administration</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Internal Mail</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Decree Mail
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
								<i class="fa fa-envelope font-blue-sharp"></i>
								<span class="caption-subject font-blue-sharp bold uppercase">Decree Mail List</span>
							</div>							
							<div class="tools">
							</div>
						</div>
						<a href="<?php echo site_url('mail/decree/adddata'); ?>">
							<button type="submit" class="btn btn-primary">
							<i class="icon-plus"></i> Add Data</button>
						</a>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th width="20%">Mail No.</th>
								<th width="10%">Date</th>
								<th>Title</th>
								<th width="15%">Mail Sign</th>
								<th width="13%">Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
								$no = 1; 
								foreach($daftarlist as $r) { 
									$decree_id = $r->decree_id;
									$tanggal   = $r->decree_date; 				                           
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
								<td><?php echo $r->decree_no; ?></td>								
								<td><?php echo $date; ?></td>
								<td><?php echo $r->decree_title; ?></td>
								<td><?php echo $r->decree_sign; ?></td>								
								<td>
									<a href="<?php echo site_url('mail/decree/editdata/'.$r->decree_id); ?>"><button class="btn btn-primary btn-xs" title="Edit Data"><i class="icon-pencil"></i> Edit</button></a>
	                        		<a onclick="hapusData(<?php echo $decree_id; ?>)"><button class="btn btn-danger btn-xs" title="Delete Data"><i class="icon-trash"></i> Delete</button></a>
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