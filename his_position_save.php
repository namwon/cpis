<?php
header('Content-type: text/html; charset=UTF-8');
include('inc/inc_conn.php');
include('inc/function.php');

// $nowdate = date('Y-m-d');
// SELECT hp_id, emp_num, hp_date, hp_step, hp_pos, hp_ponum, hp_level, hp_salary, hp_doc, hp_doc_date, hp_depcode, user_upd, hp_appdate FROM his_position WHERE 1
$emp_num = $_POST['emp_num'];

$lsStep = $db->my_maxID('hp_step','his_position',"emp_num='$emp_num'") + 1;

$data = array(
  'emp_num' => $emp_num,
  'hp_date' => $_POST['hp_date'],
  'hp_step' => $lsStep,
  'hp_pos' => $_POST['hp_pos'],
  'hp_ponum' => $_POST['hp_ponum'],
  'hp_level' => $_POST['hp_level'],
  'hp_salary' => $_POST['hp_salary'],
  'hp_doc' => $_POST['hp_doc'],
  'hp_doc_date' => $_POST['hp_doc_date'],
  'hp_depcode' => $_POST['hp_depcode'],
  'user_upd' => $_SESSION['user_id'],
  'hp_appdate' => _getDate()
);

$rs = $db->my_insert('his_position',$data);
if ($db->my_query($rs)) {
  echo "success,Save Complete!";
}else {
  echo $db->_error();
}
$db->closedb();
?>
