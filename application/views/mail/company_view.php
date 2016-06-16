<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/sweetalert2.css">
<script src="<?php echo base_url(); ?>js/sweetalert2.min.js"></script>
<script>
    function hapusData(company_id) {
        var id = company_id;
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
            window.location.href="<?php echo site_url('mail/company/deletedata'); ?>"+"/"+id
        });
    }
</script>

<script type="text/javascript">
	$(function() {
		$(document).on("click",'.edit_button', function(e) {
	        var id   		= $(this).data('id');
	        var name 		= $(this).data('name');	        
	        var address   	= $(this).data('address');
	        var phone   	= $(this).data('phone');
	        var email   	= $(this).data('email');
	        console.log(id, name, address, phone, email)
	        $(".company_id").val(id);
	        $(".company_name").val(name);
	        $(".company_address").val(address);
	        $(".company_phone").val(phone);
	        $(".company_email").val(email);
	    })
	});
</script>

<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Mail Administration <small>Inbox & Outbox</small></h1>
			</div>
			<!-- END PAGE TITLE -->				
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade bs-modal-lg" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
					<form action="<?php echo site_url('mail/company/savedata'); ?>" class="form-horizontal" method="post">
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						
						<div class="modal-header">						
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title"><i class="fa fa-plus-circle"></i> Form Add Company</h4>
						</div>
						<div class="modal-body">
							 <div class="form-group">
								<label class="col-md-3 control-label">Name</label>
								<div class="col-md-7 has-error">
									<input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete="off" required autofocus>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Address</label>
								<div class="col-md-9 has-error">
									<input type="text" class="form-control" placeholder="Enter Address" name="address" autocomplete="off" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Phone</label>
								<div class="col-md-5 has-error">
									<input type="text" class="form-control" placeholder="Enter Phone" name="phone" autocomplete="off" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Email</label>
								<div class="col-md-5 has-error">
									<input type="email" class="form-control" placeholder="Enter Email" name="email" autocomplete="off">
								</div>
							</div>
						</div>
						
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
							<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-chevron-left"></span> Close</button>
						</div>
					</form>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- Edit -->
			<div class="modal fade bs-modal-lg" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
					<form action="<?php echo site_url('mail/company/updatedata'); ?>" class="form-horizontal" method="post">
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
					<input type="hidden" class="form-control company_id" name="id">
						
						<div class="modal-header">						
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title"><i class="fa fa-edit"></i> Form Edit Company</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="col-md-3 control-label">ID</label>
								<div class="col-md-2 has-error">
									<input type="text" class="form-control company_id" placeholder="" name="id" autocomplete="off" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Name</label>
								<div class="col-md-8 has-error">
									<input type="text" class="form-control company_name" placeholder="Enter Blood Name" name="name" autocomplete="off" required>									
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Address</label>
								<div class="col-md-9 has-error">
									<input type="text" class="form-control company_address" placeholder="Enter Address" name="address" autocomplete="off" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Phone</label>
								<div class="col-md-5 has-error">
									<input type="text" class="form-control company_phone" placeholder="Enter Phone" name="phone" autocomplete="off" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Email</label>
								<div class="col-md-5 has-error">
									<input type="email" class="form-control company_email" placeholder="Enter Email" name="email" autocomplete="off">
								</div>
							</div>
						</div>
						
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
							<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-chevron-left"></span> Close</button>
						</div>
					</form>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>

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
					<a href="#">Inbox & Outbox</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Company
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
								<i class="fa fa-bank font-blue-sharp"></i>
								<span class="caption-subject font-blue-sharp bold uppercase">Company List</span>
							</div>							
							<div class="tools">
							</div>
						</div>
						<a data-toggle="modal" href="#add">
							<button type="submit" class="btn btn-primary">
							<i class="icon-plus"></i> Add Data</button>
						</a>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th width="5%">No</th>
								<th width="25%">Name</th>
								<th>Address</th>
								<th width="15%">Phone</th>
								<th width="13%">Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
								$no = 1; 
								foreach($daftarlist as $r) { 
									$company_id = $r->company_id;									
							?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $r->company_name; ?></td>								
								<td><?php echo $r->company_address; ?></td>
								<td><?php echo $r->company_phone; ?></td>								
								<td>
									<button type="button" class="btn btn-primary btn-xs edit_button" data-toggle="modal" data-target="#edit" data-id="<?php echo $r->company_id; ?>" data-name="<?php echo $r->company_name; ?>" data-address="<?php echo $r->company_address; ?>" data-phone="<?php echo $r->company_phone; ?>" data-email="<?php echo $r->company_email; ?>"><i class="icon-pencil"></i> Edit 
									</button>
	                        		<a onclick="hapusData(<?php echo $company_id; ?>)"><button class="btn btn-danger btn-xs" title="Delete Data"><i class="icon-trash"></i> Delete</button></a>
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