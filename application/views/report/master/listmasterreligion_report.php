<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>img/icon.png" />
<title>Print Master</title>
<style type="text/css">
	table {
    	border: 1px solid #ccccb3;    	
    	width: 80%;
	}
	th {
    	height: 30px;
	}
	th {
    	height: 20px;
    	background-color: #eff3f8;
    	color: black;
	}
	th, td {
	    padding: 5px;
	    border-bottom: 1px solid #ddd;	
	}	
</style>

<style type="text/css">
	body{font-family: "Calibri"; font-size:14px}
	
	h1{font-size:15px}

	.page {
		width: 21cm;
		min-height: 29.7cm;
		padding: 0cm;
		margin: 0.1cm auto;
		border: 0.3px #D3D3D3 none;
		border-radius: 2px;
		background: white;
	}
</style>

<style>
@media print{
	#comments_controls,
	#print-link{
		display:none;
	}
}
</style>
</head>

<body>
<a href="#Print">
<img src="<?php echo base_url(); ?>img/print_icon.gif" height="36" width="32" title="Print" id="print-link" onClick="window.print(); return false;" />
</a>
<div class="page">
<div align="left"><img src="<?php echo base_url(); ?>img/logo-home.png"></div>
  <div align="center">LAPORAN HRD</div>  
  <div align="center">MASTER RELIGION</div>  
  <br>
  <br>
  <table align="center">
    <tr>
      <th width="5%">No</th>
      <th>Religion Name</th>      
    </tr>    
    <?php 
    	$no = 1; 
    	foreach($daftarlist as $r) { 
    ?>
    <tr>
      <td align="center"><? echo $no; ?></td>
      <td align="center"><? echo $r->religion_name; ?></td>      
    </tr>
    <?php $no++; } ?>
  </table>
</div>

</body>
</html>