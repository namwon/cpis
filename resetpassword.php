<?php
header('Content-type: text/html; charset=UTF-8');
include('inc/inc_conn.php');
include('inc/function.php');

// $nowdate = date('Y-m-d');

$emp_num = $_REQUEST['emp_code'];

$SQL = "SELECT * FROM tb_employee WHERE emp_num = '$emp_num'";
$rs = $db->arr_select($SQL);
// $psw = str_replace('/','',dateDateTh($rs[0]['emp_birthdate']));
$psw = $rs[0]['emp_login'];
$data = array('emp_psw' => md5($psw) );

$rs = $db->my_update('tb_employee',$data,"emp_num = '$emp_num'");
  if ($db->my_query($rs)) {
    echo "success,Save Complete!";
  }else {
    echo $db->_error();
  }

$db->closedb();
?>
