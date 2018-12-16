<?php
header('Content-type: text/html; charset=UTF-8');
include('inc/inc_conn.php');
include('inc/function.php');

// SELECT ha_id, emp_num, ha_address, ha_tambol, ha_amphur, ha_province, ha_zipcode, ha_status, user_upd, ha_appdate FROM his_address WHERE 1



$emp_num = $_POST['emp_num'];
$ha_status = $_POST['ha_status'];
$data = array('ha_status' => 0);
$rs = $db->my_update('his_address',$data,"emp_num = '$emp_num' AND ha_status='$ha_status'");

$data = array(
  'emp_num' => $emp_num,
  'ha_address' => $_POST['ha_address'],
  'ha_tambol' => $_POST['ha_tambol'],
  'ha_amphur' => $_POST['ha_amphur'],
  'ha_province' => $_POST['ha_province'],
  'ha_zipcode' => $_POST['ha_zipcode'],
  'ha_status' => $ha_status,
  'user_upd' => $_SESSION['user_id'],
  'ha_appdate' => _getDate()
);

$rs = $db->my_insert('his_address',$data);
if ($db->my_query($rs)) {
  echo "success,Save Complete!";
}else {
  echo $db->_error();
}
$db->closedb();
?>
