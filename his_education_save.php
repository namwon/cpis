<?php
header('Content-type: text/html; charset=UTF-8');
include('inc/inc_conn.php');
include('inc/function.php');

// SELECT he_id, emp_num, he_num, he_school, he_faculty, he_faculty2, he_level, he_date, he_top, he_doc, user_upd, he_appdate FROM his_education WHERE 1

$emp_num = $_POST['emp_num'];

$lsStep = $db->my_maxID('he_num','his_education',"emp_num='$emp_num'") + 1;

$data = array(
  'emp_num' => $emp_num,
  'he_num' => $lsStep,
  'he_school' => $_POST['he_school'],
  'he_faculty' => $_POST['he_faculty'],
  'he_faculty2' => $_POST['he_faculty2'],
  'he_level' => $_POST['he_level'],
  'he_date' => $_POST['he_date'],
  'he_top' => $_POST['he_top'],
  'he_doc' => $_POST['he_doc'],
  'user_upd' => $_SESSION['user_id'],
  'he_appdate' => _getDate()
);

$rs = $db->my_insert('his_education',$data);
if ($db->my_query($rs)) {
  echo "success,Save Complete!";
}else {
  echo $db->_error();
}
$db->closedb();
?>
