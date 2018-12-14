<?PHP
ob_start();
session_start();
include("phpClass.php");
$db=new DB;
//
// define("DB_HOST","10.4.28.1");
// define("DB_NAME","arya");
// define("DB_USERNAME","root");
// define("DB_PASSWORD","A8r4Y2a6");
//
define("DB_HOST","localhost");
define("DB_NAME","cpis");
define("DB_USERNAME","root");
define("DB_PASSWORD","Crimc10900");

$db->connectdb(DB_HOST,DB_NAME,DB_USERNAME,DB_PASSWORD);
//
// $db2 = new DB;
// define("DB_HOST2","localhost");
// define("DB_NAME2","ccis_db");
// // define("DB_NAME2","cpis");
// define("DB_USERNAME2","root");
// define("DB_PASSWORD2","Crimc10900");
// // define("DB_PASSWORD2","12345678");
//
// $db2->connectdb(DB_HOST2,DB_NAME2,DB_USERNAME2,DB_PASSWORD2);

?>
