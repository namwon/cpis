<?php
header('Content-type: text/html; charset=UTF-8');
include('inc/inc_conn.php');
include('inc/function.php');

$user_login = $_POST['username'];
$pass_login = $_POST['password'];

//Check Login User
include("assets/lib/nusoap.php");
$client = new nusoap_client("http://aryasearch.coj.go.th/itservice/WebServiceServer.php?wsdl",true);
$params = array(
           'uSername' => $user_login,
           'pAssword' => $pass_login
);
$data = $client->call("cLogin",$params);

 if ($data[0] == 'ok') {

  $_SESSION['loginok'] = $data[0];
  $_SESSION['user_id'] = $data[1];
  $_SESSION['user_code'] = $data[2];
  $_SESSION['user_login'] = $data[3];
  $_SESSION['off_name'] = $data[4];
  $_SESSION['dep_code'] = $data[5];
  $_SESSION['dep_name'] = $data[6];
  $_SESSION['post_name'] = $data[7];
  $_SESSION['off_id'] = $data[8];

 	echo "success,success";
} else {
	echo "error,Invalid Username or Password!";
}

 // foreach($data as $val)
 // {
 //   echo $val."<br>";
 // }

?>
