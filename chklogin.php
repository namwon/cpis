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


 $SQL = "SELECT e.*, t.TN_NAME, hp.hp_ponum, hp.hp_pos, hp.hp_level, hp.hp_depcode,
                hp.hp_salary, pl.PL_NAME, pt.PT_NAME, o.off_name
         FROM tb_employee e
         LEFT JOIN (
           SELECT a.* FROM his_position a
           INNER JOIN (
             SELECT emp_num, MAX(hp_step) max_step FROM his_position GROUP BY emp_num
           ) b ON a.emp_num = b.emp_num AND a.hp_step = max_step
         ) hp ON e.emp_num = hp.emp_num
         LEFT JOIN titlename t ON e.emp_title = t.TN_CODE
         LEFT JOIN postline pl ON hp.hp_pos = pl.PL_CODE
         LEFT JOIN posttype pt ON hp.hp_level = pt.PT_CODE
         LEFT JOIN offices o ON e.emp_depcode = o.off_code
         WHERE e.emp_login='$emp_login' AND trim(e.emp_psw) = '$emp_psw'";
 $rs = $db->arr_select($SQL);

 // echo $SQL;

 if ($rs[0]['emp_num']!='') {
     $_SESSION['loginok'] = 'ok';
     $_SESSION['user_id'] = $rs[0]['emp_num'];
     $_SESSION['user_login'] = $rs[0]['emp_login'];
     $_SESSION['user_name'] = $rs[0]['TN_NAME'].''.$rs[0]['emp_fname'].' '.$rs[0]['emp_sname'];
     $_SESSION['dep_code'] = $rs[0]['emp_depcode'];
     $_SESSION['dep_name'] = $rs[0]['off_name'];
     $_SESSION['position'] = $rs[0]['PL_NAME'].''.$rs[0]['PT_NAME'];
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
