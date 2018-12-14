<?php
header('Content-type: text/html; charset=UTF-8');
include('inc/inc_conn.php');
include('inc/function.php');

// $nowdate = date('Y-m-d');

// $lsNum = "SELECT * FROM tb_genempnum WHERE geid='1'";
$lsNum = $db->my_maxID('last_num','tb_genempnum',"geid='1'") + 1;
$arN = array('last_num' => $lsNum, 'user_upd' => $_SESSION['user_id'], 'upd_date' => _getDate() );
$rsNu = $db->my_update('tb_genempnum',$arN,"geid='1'");
$db->my_query($rsNu);
$newNum =sprintf("%06d",$lsNum);
$emp_num = genDigit($newNum);

// $SQL = "SELECT emp_num, emp_login, emp_pws, emp_title, emp_fname, emp_sname, emp_birthdate, emp_phone, emp_mail, user_upd, emp_depcode, emp_incdate, emp_appdate FROM tb_employee";

$data = array(
  'emp_num' => $emp_num,
  'emp_title' => $_POST['emp_title'],
  'emp_fname' => $_POST['emp_fname'],
  'emp_sname' => $_POST['emp_sname'],
  'emp_birthdate' => $_POST['emp_birthdate'],
  'emp_phone' => $_POST['emp_phone'],
  'emp_mail' => $_POST['emp_mail'],
  'emp_depcode' => $_POST['hp_depcode'],
  'user_upd' => $_SESSION['user_id'],
  'emp_incdate' => $_POST['emp_incdate'],
  'emp_appdate' => _getDate()
);

$rs = $db->my_insert('tb_employee',$data);
if ($db->my_query($rs)) {
  // $lsStep = $db->my_maxID('hp_step','his_position',"emp_num='$emp_num'") + 1;
  $data = array(
    'emp_num' => $emp_num,
    'hp_date' => $_POST['emp_incdate'],
    'hp_step' => 1,
    'hp_pos' => $_POST['hp_pos'],
    'hp_ponum' => $_POST['hp_ponum'],
    'hp_level' => $_POST['hp_level'],
    'hp_salary' => $_POST['hp_salary'],
    'user_upd' => $_SESSION['user_id'],
    'hp_depcode' => $_POST['hp_depcode'],
    'hp_doc' => $_POST['hp_doc'],
    'hp_doc_date' => $_POST['hp_doc_date'],
    'hp_appdate' => _getDate()
  );
  $rs = $db->my_insert('his_position',$data);
  if ($db->my_query($rs)) {
    echo "success,Save Complete!";
  }else {
    echo $db->_error();
  }
}
$db->closedb();
?>
