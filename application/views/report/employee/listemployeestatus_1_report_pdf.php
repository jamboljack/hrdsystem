<?php
$Dept       = $this->uri->segment(4);
$Status     = $this->uri->segment(5);

if (($Dept == 'all') && ($Status == 'all')) {
    $title = 'All Department & All Status';
    $NamaStatus = 'All Status';
}
$name   = $this->listemployeestatus_model->select_status_name_report()->row(); // Status Name
$total  = $this->listemployeestatus_model->select_total_emp_report()->row()->total; // Total Employee
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>img/icon.png" />
<title>Print Employee List</title>
<style type="text/css">
table {
    border: 1px solid #ccccb3;    	
    width: 100%;
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

h4 {
    text-decoration: underline;
    line-height: 0.5px;   
}	
</style>

<style type="text/css">
body{
    font-family: "Calibri"; 
    font-size: 14px
}

h1  {
    font-size:15px
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
    <div align="center">ALL DEPARTEMEN & <?php echo $name->status_name; ?></div>
    <div align="center">TOTAL : <b><?php echo $total; ?> EMPLOYEE</b></div>  
    <br>
    <br>

    <table align="center">
        <tr>
            <th width="5%">No</th>
            <th width="13%">N I K</th>
            <th>Name</th>
            <th width="13%">Join</th>            
            <th width="25%">Position</th>     
            <th width="17%">Status</th>
        </tr>
        <?php
        foreach($daftardepartment as $d) {
            $department_id = $d->department_id;

            $cek_dept   = $this->listemployeestatus_model->select_check_department_status_report($department_id)->result();
            $hasil      = count($cek_dept);                             
            if ($hasil > 0) {
        ?>
        <tr>
            <td colspan='9'><b>Department : <?php echo $d->department_name; ?></b></td>
        </tr>
        <?php
            $no = 1;
            $daftarlist = $this->listemployeestatus_model->select_employee_by_status_report($department_id)->result();
    	    foreach($daftarlist as $r) {
                $tgljoin     = $r->emp_start_join;                                   
                
                if (!empty($tgljoin)) {
                    $xtgljoin   = explode("-",$tgljoin);
                    $thn1     = $xtgljoin[0];
                    $bln1     = $xtgljoin[1];
                    $tgl1     = $xtgljoin[2];

                    $join     = $tgl1.'-'.$bln1.'-'.$thn1;
                } else { 
                    $join     = '';
                }
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $r->emp_nik; ?></td>               
            <td><?php echo $r->emp_name; ?></td>
            <td align="center"><?php echo $join; ?></td>            
            <td><?php echo $r->position_name; ?></td>
            <td><?php echo $r->status_name; ?></td>     
        </tr>
        <?php 
            $no++; 
            }
            } 
        }
        ?>
    </table>
</div>

</body>
</html>