<?php
header('Content-type: text/html; charset=UTF-8');
include('inc/inc_conn.php');
include('inc/function.php');

// SELECT ht_id, ht_num, ht_title, ht_school, ht_date, ht_doc, ht_appdate, user_upd, emp_num FROM his_training WHERE 1



$emp_num = $_POST['emp_num'];

$lsStep = $db->my_maxID('ht_num','his_training',"emp_num='$emp_num'") + 1;

$data = array(
  'emp_num' => $emp_num,
  'ht_num' => $lsStep,
  'ht_title' => $_POST['ht_title'],
  'ht_school' => $_POST['ht_school'],
  'ht_date' => $_POST['ht_date'],
  'ht_doc' => $_POST['ht_doc'],
  'user_upd' => $_SESSION['user_id'],
  'ht_appdate' => _getDate()
);

$rs = $db->my_insert('his_training',$data);
if ($db->my_query($rs)) {
  echo "success,Save Complete!";
}else {
  echo $db->_error();
}
$db->closedb();
?>
