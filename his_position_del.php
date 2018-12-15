<?php
header('Content-type: text/html; charset=UTF-8');
include('inc/inc_conn.php');
include('inc/function.php');

// $nowdate = date('Y-m-d');

$he_id = $_REQUEST['he_id'];

$rs = $db->my_delete('his_education',"he_id='$he_id'");
  if ($db->my_query($rs)) {
    echo "success,Save Complete!";
  }else {
    echo $db->_error();
  }

$db->closedb();
?>
