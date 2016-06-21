<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
function Age($dob) {
  /*$today = date('Y-m-d');
  $now = time();
  list($thn, $bln, $tgl) = explode('-',$tgl_lahir);
  $time_lahir = mktime(0,0,0,$bln, $tgl, $thn);
  $selisih = $now – $time_lahir;
  $tahun = floor($selisih/(60*60*24*365));

  return $tahun;
*/
  if(!empty($dob)){
    $birthdate = new DateTime($dob);
    $today   = new DateTime('today');
    $age = $birthdate->diff($today)->y;
    return $age;
  }else{
    return 0;
  }
}
?>