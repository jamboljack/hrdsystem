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
	body{font-family: "Calibri"; font-size:14px}	
	h1{font-size:15px}	
</style>

</head>

<body>

<div class="page">
  <?php
    $OptBy    = $this->uri->segment(5);
    if ($OptBy == 'startjoin') {
      $title = 'Start Join';
    } elseif ($OptBy == 'startcontract') {
      $title = 'Start Contract';
    } elseif ($OptBy == 'endcontract') {
      $title = 'End Contract';
    }

    $Tgl1    = $this->uri->segment(6);
    $xtgl1    = explode("-",$Tgl1);
    $thn      = $xtgl1[2];
    $bln      = $xtgl1[1];
    $tgl      = $xtgl1[0];
    $TGL1     = $thn.'-'.$bln.'-'.$tgl;

    $Tgl2    = $this->uri->segment(7);
    $xtgl2  = explode("-",$Tgl2);
    $thn1   = $xtgl2[2];
    $bln1   = $xtgl2[1];
    $tgl1   = $xtgl2[0];
    $TGL2   = $thn1.'-'.$bln1.'-'.$tgl1;
  ?>
  <div align="left"><img src="<?php echo base_url(); ?>img/logo-home.png"></div>
  <div align="center">LAPORAN HRD</div>  
  <div align="center">EMPLOYEE LIST</div>  
  <div align="center"><?php echo $title.' : '.$TGL1.' s/d '.$TGL2; ?></div>  
  <br>
  <br>

  <table align="center">
    <tr>
      <th width="5%">No</th>
      <th width="10%">N I K</th>
      <th>Name</th>
      <th width="10%">BirthDate</th>
      <?php               
      if ($OptBy == 'startjoin') {
        echo '<th width="10%">Join</th>';
      } elseif ($OptBy == 'startcontract') {
        echo '<th width="10%">Start</th>';                
      } 
      ?>
      <th width="10%">End</th>      
      <th width="5%">YoS</th>      
      <th width="15%">Position</th>     
      <th width="10%">Status</th>
    </tr>
    <?php
    foreach($daftardepartment as $d) {
      $department_id  = $d->department_id;

      if ($OptBy == 'startjoin') {        
        $cek_dept     = $this->listemployee_model->select_check_department_join_report($department_id)->result();
      } elseif ($OptBy == 'startcontract') {
        $cek_dept     = $this->listemployee_model->select_check_department_start_report($department_id)->result();
      } elseif ($OptBy == 'endcontract') {
        $cek_dept     = $this->listemployee_model->select_check_department_end_report($department_id)->result();
      }
            
      $hasil      = count($cek_dept);
      if ($hasil > 0) {
    ?>
    <tr>
      <td colspan='9'><b>Department : <?php echo $d->department_name; ?></b></td>
    </tr>
    <?php      
      if ($OptBy == 'startjoin') {
        $daftarlist = $this->listemployee_model->select_employee_start_join_report($department_id)->result();
      } elseif ($OptBy == 'startcontract') {
        $daftarlist = $this->listemployee_model->select_employee_start_contract_report($department_id)->result();
      } elseif ($OptBy == 'endcontract') {
        $daftarlist = $this->listemployee_model->select_employee_end_contract_report($department_id)->result();
      }

    	$no = 1; 
    	foreach($daftarlist as $r) {
        $tgllahir    = $r->emp_birthdate;                                    
        if (!empty($tgllahir)) {
          $xtgllahir  = explode("-",$tgllahir);
          $thn    = $xtgllahir[0];
          $bln    = $xtgllahir[1];
          $tgl    = $xtgllahir[2];

          $lahir    = $tgl.'-'.$bln.'-'.$thn;
        } else { 
          $lahir    = '';
        }

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

        $tglstart    = $r->emp_start_contract;                                   
        if (!empty($tglstart)) {
          $xtglstart  = explode("-",$tglstart);
          $thn3       = $xtglstart[0];
          $bln3       = $xtglstart[1];
          $tgl3       = $xtglstart[2];

          $start      = $tgl3.'-'.$bln3.'-'.$thn3;
        } else { 
          $start      = '';
        }

        $tglend    = $r->emp_end_contract;                                   
        if (!empty($tglend)) {
          $xtglend  = explode("-",$tglend);
          $thn2     = $xtglend[0];
          $bln2     = $xtglend[1];
          $tgl2     = $xtglend[2];

          $end    = $tgl2.'-'.$bln2.'-'.$thn2;
        } else { 
          $end    = '';
        } 
    ?>
    <tr>
      <td align="center"><?php echo $no; ?></td>
      <td align="center"><?php echo $r->emp_nik; ?></td>               
      <td><?php echo $r->emp_name; ?></td>
      <td align="center"><?php echo $lahir; ?></td>      
      <?php
      if ($OptBy == 'startjoin') {
        echo '<td>'.$join.'</td>';
      } elseif ($OptBy == 'startcontract') {
        echo '<td>'.$start.'</td>';
      }
      ?>
      <td align="center"><?php echo $end; ?></td>      
      <td align="center"><?php echo age($r->emp_start_join); ?></td>      
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