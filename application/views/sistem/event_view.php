<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/sweetalert2.css">
<script src="<?php echo base_url(); ?>js/sweetalert2.min.js"></script>
<script>
    function hapusData(event_id) {
        var id = event_id;
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
            window.location.href="<?php echo site_url('sistem/event/deletedata'); ?>"+"/"+id
        });
    }
</script>

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
				<li class="active">
					Calendar Event
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
								<i class="fa fa-calendar font-blue-sharp"></i>
								<span class="caption-subject font-blue-sharp bold uppercase">Calendar Event List</span>
							</div>							
							<div class="tools">
							</div>
						</div>
						<a href="<?php echo site_url('sistem/event/adddata'); ?>">
							<button type="submit" class="btn btn-primary">
							<i class="icon-plus"></i> Add Data</button>
						</a>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th>Event Name</th>
								<th width="20%">Start</th>					
								<th width="20%">End</th>
								<th width="5%">Color</th>								
								<th width="15%">Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
								$no = 1; 
								foreach($daftarlist as $r) { 
									$event_id = $r->event_id;
									$tanggal1 = $r->event_start_date; 				                           
				                    if (!empty($tanggal1)) {
				                        $xtanggal1 	= explode("-",$tanggal1);
				                        $thn1 		= $xtanggal1[0];
				                        $bln1 		= $xtanggal1[1];
				                        $tgl1 		= $xtanggal1[2];

				                        $start 		= $tgl1.'-'.$bln1.'-'.$thn1;
				                    } else { 
				                    	$start 		= '';
				                    }

				                    $tanggal2 = $r->event_end_date;
				                    if (!empty($tanggal2)) {
				                        $xtanggal2 	= explode("-",$tanggal2);
				                        $thn2 		= $xtanggal2[0];
				                        $bln2 		= $xtanggal2[1];
				                        $tgl2 		= $xtanggal2[2];

				                        $end 		= $tgl2.'-'.$bln2.'-'.$thn2;
				                    } else { 
				                    	$end 		= '';
				                    }									
							?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $r->event_name; ?></td>								
								<td><?php echo $start.' T : '.$r->event_start_time; ?></td>
								<td><?php echo $end.' T : '.$r->event_end_time; ?></td>
								<td>
									<?php if ($r->event_color=='red') { ?>
										<span class="label label-sm label-danger"><?php echo ucwords($r->event_color); ?></span>
									<?php } elseif ($r->event_color=='yellow') { ?>
										<span class="label label-sm label-warning"><?php echo ucwords($r->event_color); ?></span>
									<?php } elseif ($r->event_color=='green') { ?>
										<span class="label label-sm label-success"><?php echo ucwords($r->event_color); ?></span>
									<?php } elseif ($r->event_color=='grey') { ?>
										<span class="label label-sm label-default"><?php echo ucwords($r->event_color); ?></span>
									<?php } elseif ($r->event_color=='purple') { ?>
										<span class="label label-sm label-primary"><?php echo ucwords($r->event_color); ?></span>
									<?php } ?>
								</td>
								<td>
									<a href="<?php echo site_url('sistem/event/editdata/'.$r->event_id); ?>"><button class="btn btn-primary btn-xs" title="Edit Data"><i class="icon-pencil"></i> Edit</button></a>
									<a onclick="hapusData(<?php echo $event_id; ?>)"><button class="btn btn-danger btn-xs" title="Delete Data"><i class="icon-trash"></i> Delete</button>
	                        		</a>	                        		
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