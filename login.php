<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบสารสนเทศศาลอาญา</title>
    <link rel="shortcut icon" href="assets/img/logo32x32.png">

    <link rel="stylesheet" href="assets/plugins/bootstrap-4.1.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="assets/plugins/jquery-confirm-v3.3.0/dist/jquery-confirm.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <center style="margin-left: -15px;">
          <img src="assets/img/logo.png" alt="" class="img-fluid">
        </center>
        <hr>
        <form name="frm_login" id="frm_login" class="login-form" action="#">
          <input type="text" name="username" id="username" placeholder="username"/>
          <input type="password" name="password" id="password" placeholder="password"/>
          <button type="button" id="btn_save">login</button>
        </form>
      </div>
    </div>
    <!--jQuery -->
    <script src="assets/lib/jquery/jquery.js"></script>

    <!--Bootstrap -->
    <script src="assets/plugins/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="assets/plugins/jquery-confirm-v3.3.0/dist/jquery-confirm.min.js"></script>
    <script src="assets/js/loadingoverlay.js"></script>


    <script type="text/javascript">
      (function($) {
        $(document).ready(function() {
          $("#btn_save").click(function() {

            var formData = new FormData(document.getElementsByName('frm_login')[0]); // yourForm: form selector
            var username = $("#username").val();
            var password = $("#password").val();

            if (username == "") {
              $.confirm({
                icon: 'fa fa-warning',
                theme: 'modern',
                closeIcon: true,
                animation: 'scale',
                type: 'orange',
                title: 'เกิดข้อผิดพลาด!',
                content: 'กรุณาระบุ Username ของท่าน!',
                buttons: {
                  close: function() {
                    //return false;
                  }
                }
              });
            }
            else {
              $.LoadingOverlay("show");
              $.ajax({
                type: "POST",
                url: "chklogin.php", // where you wanna post
                data: formData,
                processData: false,
                contentType: false,
                enctype: 'multipart/form-data',
                success: function(data) {
                  var str = data.split(",")
                  if (str[0] == "success") {
                    // $.LoadingOverlay("hide");
                    window.location = "index.php";
                  } else {
                    $.LoadingOverlay("hide");
                    $.confirm({
                      icon: 'fa fa-warning',
                      theme: 'modern',
                      closeIcon: true,
                      animation: 'scale',
                      type: 'orange',
                      title: 'Error!',
                      content: str[1],
                      buttons: {
                        ok: function() {
                          window.location.reload();
                        }
                      }
                    });
                  }
                }
              });
            }
          })
        });
      })(jQuery);
      function KeyCode(objId)
    	{
    		if (event.keyCode >= 48 && event.keyCode<=57 || event.keyCode>=97 && event.keyCode<=122) //48-57(ตัวเลข) ,65-90(Eng ตัวพิมพ์ใหญ่ ) ,97-122(Eng ตัวพิมพ์เล็ก)
    		{
    			return true;
    		}
    		else
    		{
    			alert("กรอกได้เฉพาะ a-z และ 0-9");
    			return false;
    		}
      }
    </script>
  </body>
</html>
