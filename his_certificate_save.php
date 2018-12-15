<?php
header('Content-type: text/html; charset=UTF-8');
include('inc/inc_conn.php');
include('inc/function.php');

// // SELECT hd_id, hd_num, hd_school, hd_type, hd_expd, hd_incdate, hd_appdate, user_upd, emp_num FROM his_doccer WHERE 1


$emp_num = $_POST['emp_num'];

$lsStep = $db->my_maxID('hd_num','his_doccer',"emp_num='$emp_num'") + 1;

$data = array(
  'emp_num' => $emp_num,
  'hd_num' => $lsStep,
  'hd_school' => $_POST['hd_school'],
  'hd_type' => $_POST['hd_type'],
  'hd_expd' => $_POST['hd_expd'],
  'hd_incdate' => $_POST['hd_incdate'],
  'user_upd' => $_SESSION['user_id'],
  'hd_appdate' => _getDate()
);

$rs = $db->my_insert('his_doccer',$data);
if ($db->my_query($rs)) {
  echo "success,Save Complete!";
}else {
  echo $db->_error();
}
$db->closedb();
?>
