<?php
header('Content-type: text/html; charset=UTF-8');
include('inc/inc_conn.php');
include('inc/function.php');



//SELECT hl_id, emp_num, hl_type, hl_title, hl_sdate, hl_date, boss_1, boss_2, boss_3, boss1_approve, boss2_approve, boss3_approve, boss1_status, boss2_status, boss3_status, boss1_remark, boss2_remark, boss3_remark, hl_appdate, hl_remark FROM his_leave WHERE 1

$data = array(
  'emp_num' => $_SESSION['user_id'],
  'hl_sdate' => $_POST['hl_sdate'],
  'hl_date' => $_POST['hl_date'],
  'hl_type' => $_POST['hl_type'],
  'hl_title' => $_POST['hl_title'],
  'boss_1' => $_POST['boss_1'],
  'boss_2' => $_POST['boss_2'],
  'boss_3' => $_POST['boss_3'],
  'hl_appdate' => _getDate()
);

$rs = $db->my_insert('his_leave',$data);
if ($db->my_query($rs)) {
  echo "success,Save Complete!";
}else {
  echo $db->_error();
}
$db->closedb();
?>
