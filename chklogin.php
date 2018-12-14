<?php
header('Content-type: text/html; charset=UTF-8');
include('inc/inc_conn.php');
include('inc/function.php');

// $user_login = $_POST['username'];
// $pass_login = $_POST['password'];

//Check Login User
// include("assets/lib/nusoap.php");
// $client = new nusoap_client("http://arya1/itservice/WebServiceServer.php?wsdl",true);
// $client = new nusoap_client("http://aryasearch.coj.go.th/itservice/WebServiceServer.php?wsdl",true);
// $params = array(
//            'uSername' => $user_login,
//            'pAssword' => $pass_login
// );
// $data = $client->call("cLogin",$params);
//
//  if ($data[0] == 'ok') {
//
//   $_SESSION['loginok'] = $data[0];
//   $_SESSION['user_id'] = $data[1];
//   $_SESSION['user_code'] = $data[2];
//   $_SESSION['user_login'] = $data[3];
//   $_SESSION['off_name'] = $data[4];
//   $_SESSION['dep_code'] = $data[5];
//   $_SESSION['dep_name'] = $data[6];
//   $_SESSION['post_name'] = $data[7];
//   $_SESSION['off_id'] = $data[8];
//
//  	echo "success,success";
// } else {
// 	echo "error,Invalid Username or Password!";
// }

 // foreach($data as $val)
 // {
 //   echo $val."<br>";
 // }

 $emp_login = $db->escape_string($_POST['username']);
 $emp_psw = md5($_POST['password']);

// SELECT `emp_num`, `emp_login`, `emp_pws`, `emp_title`, `emp_fname`, `emp_sname`, `emp_birthdate`, `emp_phone`, `emp_mail`, `user_upd`, `emp_depcode`, `emp_incdate`, `emp_appdate` FROM `tb_employee` WHERE 1


 $SQL = "SELECT * FROM tb_employee WHERE emp_login='$emp_login' AND trim(emp_psw) = '$emp_psw'";
 $rs = $db->arr_select($SQL);

 // echo $SQL;

 if ($rs[0]['emp_num']!='') {
     $_SESSION['loginok'] = 'ok';
     $_SESSION['user_id'] = $rs[0]['emp_num'];
     $_SESSION['user_login'] = $rs[0]['emp_login'];
     $_SESSION['user_name'] = $rs[0]['emp_title'].''.$rs[0]['emp_fname'].' '.$rs[0]['emp_sname'];
     $_SESSION['dep_code'] = $rs[0]['emp_depcode'];
   $db->closedb();
	echo "success,success";

 } else {
   $_SESSION['login'] = false;
   $db->closedb();
   // PHPgourl("index.php");
   echo "error,Invalid Username or Password!";
 }
 exit();



?>
