<?php
ob_start();
session_start();
include('inc/inc_conn.php');
include('inc/function.php');
$inc = "booking";
if (!empty($_GET['inc'])) {
  $inc = $_GET['inc'];
} else {
  if ($_SESSION['loginok']!='ok') {
      // PHPgourl('login.html');
      PHPgourl('login.php');
  }
}
?>
<!DOCTYPE html>
<html lang="th">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบสารสนเทศศาลอาญา</title>
    <link rel="shortcut icon" href="assets/img/logo32x32.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-4.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.1.0-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/jquery-confirm-v3.3.0/dist/jquery-confirm.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/cpis.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/sb-admin-2.css"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="assets/js/jquery-1.11.0.min.js"></script> -->
    <!-- <script type="text/javascript">
       jq11 = jQuery.noConflict(true);
    </script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/fontawesome-free-5.1.0-web/js/all.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-confirm-v3.3.0/dist/jquery-confirm.min.js"></script>
    <script type="text/javascript" src="assets/js/loadingoverlay.js"></script>
  </head>
  <body>

    <nav id="topnavbar" class="navbar navbar-dark navbar-expand-lg fixed-top d-flex">
      <a class="navbar-brand ml-auto ml-md-0" href="#">
        <img src="assets/img/logo121x42.png"class="d-inline-block align-top" alt="">
      </a>
      <button id="menu-toggle" class="navbar-toggler" type="button" aria-controls="navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-angle-right fa-2x"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#" class="nav-link icon-wrapper">
              <span class="nav-link fa-stack fa-stack-red has-badge" data-count="8">
                <i class="far fa-envelope fa-lg"></i>
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link icon-wrapper">
              <span class="nav-link fa-stack fa-stack-yellow has-badge" data-count="4">
                <i class="far fa-bell fa-lg"></i>
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link icon-wrapper" title="ออกจากระบบ">
              <span class="nav-link fa-stack has-badge">
                <i class="fas fa-power-off fa-lg"></i>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="wrapper">
      <!-- Image and text -->
      <!-- Sidebar -->
        <?php include_once 'menu.php'; ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <?php include "$inc.php"; ?>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <footer>
      &copy; 2019 Criminal Court Person Information system
    </footer>
        <!-- /#wrapper -->
    <!-- Metis Menu Plugin JavaScript -->
    <!-- <script type="text/javascript" src="assets/plugins/metisMenu/metisMenu.min.js"></script> -->
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        icon = $(this).find(".fa");
        if(icon.hasClass(".fa-angle-right")){
            icon.addClass("fa-angle-left").removeClass("fa-angle-right");
          }else{
            icon.addClass("fa-angle-right").removeClass("fa-angle-left");
          }
    });
    $(".clickShowLoad").click(function(){
      $.LoadingOverlay("show");

      // Hide it after 3 seconds
      if ($(this).hasClass('cview')) {
        setTimeout(function(){
          $.LoadingOverlay("hide");
        }, 3000);
      }
    });
    </script>
  </body>
</html>
