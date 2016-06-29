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
</style>

</head>

<body>
<div>
  <div align="left"><img src="<?php echo base_url(); ?>img/logo-home.png"></div>
  <div align="center">LAPORAN HRD</div>  
  <div align="center">MASTER RELATION</div>  
  <br>
  <br>
  <table align="center">
    <tr>
      <th width="10%">No</th>
      <th>Relation Name</th>      
    </tr>    
    <?php 
    	$no = 1; 
    	foreach($daftarlist as $r) { 
    ?>
    <tr>
      <td align="center"><? echo $no; ?></td>
      <td align="center"><? echo $r->relation_name; ?></td>      
    </tr>
    <?php $no++; } ?>
  </table>
</div>

</body>
</html>