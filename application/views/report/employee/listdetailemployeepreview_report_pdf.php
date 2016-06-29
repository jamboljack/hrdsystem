<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>img/icon.png" />
<title>Print Employee Detail</title>
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
	body {
		font-family: "Calibri"; 
		font-size:14px;
	}	
	h1 {
		font-size:15px;
	}	
</style>
</head>

<body>

<div>
  <div align="left"><img src="<?php echo base_url(); ?>img/logo-home.png"></div>
  <div align="center">LAPORAN HRD</div>  
  <div align="center">DETAIL EMPLOYEE</div>  
  <br>
  <br>
  <table align="center">
    <tr>
      <th colspan="7">General Info</th>
    </tr>
    <tr>
      <td width="14%">NIK</td>
      <td width="1%">:</td>
      <td width="28%"><?php echo $detail->emp_nik; ?></td>
      <td width="14%">Name</td>
      <td width="1%">:</td>
      <td width="28%"><b><?php echo $detail->emp_name; ?></b></td>
      <td width="13%" rowspan="5">
	  	<?php if (empty($detail->emp_photo)) { ?>
      	<img src="<?php echo base_url(); ?>img/no_photo.png" alt="" style="max-width: 200px; max-height: 150px;" />
		<?php } else { ?>
		<img src="<?php echo base_url(); ?>photo/<?php echo $detail->emp_photo; ?>" alt="" style="max-width: 200px; max-height: 150px; line-height: 10px;" />
		<?php } ?>
		</td>
    </tr>
    <tr>
      <td>BirthPlace</td>
      <td>:</td>
      <td><?php echo $detail->emp_birthplace; ?></td>
      <?php
      $tgllhr   = $detail->emp_birthdate; 
      
      if (!empty($tgllhr)) {
        $xtgllhr  = explode("-",$tgllhr);
        $thn      = $xtgllhr[0];
        $bln      = $xtgllhr[1];
        $tgl      = $xtgllhr[2];

        $tgllahir = $tgl.'-'.$bln.'-'.$thn;
      } else { 
        $tgllahir = '';
      }
      ?> 
      <td>BirthDate</td>
      <td>:</td>
      <td><?php echo $tgllahir; ?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td>:</td>
      <td><?php echo $detail->emp_address; ?></td>
      <td>Province</td>
      <td>:</td>
      <td><?php echo $detail->province_name; ?></td>
    </tr>
    <tr>
      <td>Country</td>
      <td>:</td>
      <td><?php echo $detail->country_name; ?></td>
      <td>Disctrict</td>
      <td>:</td>
      <td><?php echo $detail->emp_district; ?></td>
    </tr>
    <tr>
      <td>Post Code</td>
      <td>:</td>
      <td><?php echo $detail->emp_zipcode; ?></td>
      <td>Gender</td>
      <td>:</td>
      <td><?php echo $detail->emp_gender; ?></td>
    </tr>
    <tr>
      <th colspan="7">Detail Info</th>
    </tr>
    <tr>
      <td>KTP/SIM No.</td>
      <td>:</td>
      <td><?php echo $detail->emp_ktp_id; ?></td>
      <td>Phone</td>
      <td>:</td>
      <td><?php echo $detail->emp_phone ; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Marriage Status</td>
      <td>:</td>
      <td><?php echo $detail->marriage_name; ?></td>
      <td>Religion</td>
      <td>:</td>
      <td><?php echo $detail->religion_name ; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Education</td>
      <td>:</td>
      <td><?php echo $detail->education_name; ?></td>
      <td>Blood</td>
      <td>:</td>
      <td><?php echo $detail->blood_name ; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><?php echo $detail->emp_email; ?></td>
      <td>Status</td>
      <td>:</td>
      <td><?php echo $detail->status_name ; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan="7">Insurance Info</th>
    </tr>
    <tr>
      <td>Healthy ID.</td>
      <td>:</td>
      <td><?php echo $detail->emp_bpjs_h_id; ?></td>
      <?php
        $tanggal  = $detail->emp_join_date_h; 
        
        if (!empty($tanggal)) {
          $xtanggal   = explode("-",$tanggal);
          $thn1     = $xtanggal[0];
          $bln1     = $xtanggal[1];
          $tgl1     = $xtanggal[2];

          $date     = $tgl1.'-'.$bln1.'-'.$thn1;
        } else { 
          $date     = '';
        }
      ?>      
      <td>Join Date</td>
      <td>:</td>
      <td><?php echo $date; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Employ ID.</td>
      <td>:</td>
      <td><?php echo $detail->emp_bpjs_k_id; ?></td>
      <?php
        $tanggal  = $detail->emp_join_date_k; 
        
        if (!empty($tanggal)) {
          $xtanggal   = explode("-",$tanggal);
          $thn1     = $xtanggal[0];
          $bln1     = $xtanggal[1];
          $tgl1     = $xtanggal[2];

          $date     = $tgl1.'-'.$bln1.'-'.$thn1;
        } else { 
          $date     = '';
        }
      ?>      
      <td>Join Date</td>
      <td>:</td>
      <td><?php echo $date; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan="7">Department & Position</th>
    </tr>
    <tr>
      <td>Department</td>
      <td>:</td>
      <td><?php echo $detail->department_name; ?></td>
      <td>Position</td>
      <td>:</td>
      <td><?php echo $detail->position_name ; ?></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <br>
  <table align="center">
    <tr>
		<th width="5%">No</th>
		<th>School Name</th>								
		<th width="20%">Department</th>
		<th width="20%">Periode</th>								
		<th width="10%">Level</th>
		<th width="15%">Phone</th>							
	</tr>
  <?php 								
	$no = 1; 
	foreach($schoollist as $s) {									
		$periode1  	 = $s->school_periode_1;
		if (!empty($periode1)) {
			$xperiode1 	= explode("-",$periode1);
			$thn 		= $xperiode1[0];
			$bln 		= $xperiode1[1];
			$tgl 		= $xperiode1[2];

			$periode_1	= $tgl.'-'.$bln.'-'.$thn;
		} else { 
			$periode_1	= '';
		}

		$periode2  	 = $s->school_periode_2;
		if (!empty($periode2)) {
			$xperiode2 	= explode("-",$periode2);
			$thn1 		= $xperiode2[0];
			$bln1 		= $xperiode2[1];
			$tgl1 		= $xperiode2[2];

			$periode_2	= $tgl1.'-'.$bln1.'-'.$thn1;
		} else { 
			$periode_2	= '';
		}					               							    	
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $s->school_name; ?></td>								
			<td><?php echo $s->school_department; ?></td>
			<td><?php echo $periode_1.' s/d '.$periode_2; ?></td>
			<td><?php echo $s->education_name; ?></td>
			<td><?php echo $s->school_phone; ?></td>    
    </tr>
    <?php 
      $no++; 
    }
    ?>
  </table>
  <br>
  <table align="center">
  <tr>
    <th width="5%">No</th>
    <th>Company Name</th>               
    <th width="20%">Address</th>
    <th width="15%">Type</th>
    <th width="15%">Position</th>               
    <th width="20%">Periode</th>
    <th width="10%">Salary</th>              
  </tr>
  <?php                 
  $no = 1; 
  foreach($worklist as $w) {
    $periode1    = $w->company_date_join;
    if (!empty($periode1)) {
      $xperiode1  = explode("-",$periode1);
      $thn    = $xperiode1[0];
      $bln    = $xperiode1[1];
      $tgl    = $xperiode1[2];

      $periode_1  = $tgl.'-'.$bln.'-'.$thn;
    } else { 
      $periode_1  = '';
    }

    $periode2    = $w->company_date_resign;
    if (!empty($periode2)) {
      $xperiode2  = explode("-",$periode2);
      $thn1     = $xperiode2[0];
      $bln1     = $xperiode2[1];
      $tgl1     = $xperiode2[2];

      $periode_2  = $tgl1.'-'.$bln1.'-'.$thn1;
    } else { 
      $periode_2  = '';
    }                                           
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $w->company_name; ?></td>                
      <td><?php echo $w->company_address; ?></td>
      <td><?php echo $w->company_type; ?></td>
      <td><?php echo $w->company_position; ?></td>
      <td><?php echo $periode_1.' s/d '.$periode_2; ?></td>
      <td><?php echo number_format($w->company_salary); ?></td>   
    </tr>
    <?php 
      $no++; 
    }
    ?>
  </table>
  <br>
  <table align="center">
  <tr>
    <th width="5%">No</th>
    <th>Name</th>               
    <th width="40%">Address</th>
    <th width="15%">Phone</th>
    <th width="10%">Relation</th>               
    <th width="10%">Status</th>              
  </tr>
  <?php                 
  $no = 1; 
  foreach($familylist as $f) {
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $f->family_name; ?></td>               
      <td><?php echo $f->family_address; ?></td>
      <td><?php echo $f->family_phone; ?></td>
      <td><?php echo $f->relation_name; ?></td>
      <td><?php echo $f->family_status; ?></td>
    </tr>
    <?php 
      $no++; 
    }
    ?>
  </table>
  <br>
  <table align="center">
  <tr>
    <th width="5%">No</th>
    <th width="20%">Reward No.</th>               
    <th width="10%">Date</th>
    <th width="15%">Reward Type</th>
    <th>Desctiption</th>              
  </tr>
  <?php                 
  $no = 1; 
  foreach($rewardlist as $r) {
    $tgl     = $r->trans_date;
    if (!empty($tgl)) {
      $xtgl     = explode("-",$tgl);
      $thn      = $xtgl[0];
      $bln      = $xtgl[1];
      $tgl      = $xtgl[2];

      $tanggal  = $tgl.'-'.$bln.'-'.$thn;
    } else { 
      $tanggal  = '';
    }    
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $r->trans_no; ?></td>                
      <td><?php echo $tanggal; ?></td>
      <td><?php echo $r->reward_name; ?></td>               
      <td><?php echo $r->trans_desc; ?></td>
    </tr>
    <?php 
      $no++; 
    }
    ?>
  </table>
  <br>
  <table align="center">
  <tr>
    <th width="5%">No</th>
    <th width="20%">Punishment No.</th>               
    <th width="10%">Date</th>
    <th width="15%">Punishment Type</th>
    <th>Desctiption</th>             
  </tr>
  <?php                 
  $no = 1; 
  foreach($punishmentlist as $p) {
    $tgl     = $p->trans_date;
    if (!empty($tgl)) {
      $xtgl     = explode("-",$tgl);
      $thn      = $xtgl[0];
      $bln      = $xtgl[1];
      $tgl      = $xtgl[2];

      $tanggal  = $tgl.'-'.$bln.'-'.$thn;
    } else { 
      $tanggal  = '';
    }    
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $p->trans_no; ?></td>                
      <td><?php echo $tanggal; ?></td>
      <td><?php echo $p->punishment_name; ?></td>               
      <td><?php echo $p->trans_desc; ?></td>
    </tr>
    <?php 
      $no++; 
    }
    ?>
  </table>
  <br>
  <table align="center">
  <tr>
    <th width="5%">No</th>
    <th width="20%">Information</th>                
    <th width="10%">Date</th>               
    <th>Desctiption</th>             
  </tr>
  <?php                 
  $no = 1; 
  foreach($recordlist as $c) {
    $tgl     = $c->record_date;
    if (!empty($tgl)) {
      $xtgl     = explode("-",$tgl);
      $thn      = $xtgl[0];
      $bln      = $xtgl[1];
      $tgl      = $xtgl[2];

      $tanggal  = $tgl.'-'.$bln.'-'.$thn;
    } else { 
      $tanggal  = '';
    }    
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $c->absent_name; ?></td>               
      <td><?php echo $tanggal; ?></td>                
      <td><?php echo $c->record_desc; ?></td>
    </tr>
    <?php 
      $no++; 
    }
    ?>
  </table>
</div>

</body>
</html>