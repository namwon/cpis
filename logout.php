<?php
header('Content-type: text/html; charset=UTF-8');
include('inc/inc_conn.php');
include('inc/function.php');

	session_destroy();
	PHPgourl("login.php");
?>
