<?php
// SELECT TN_CODE, TN_SH_NAME, TN_NAME, TN_ENG_NAME, TN_ACTIVE, UPD_USER, UPD_DATE, PS_SEX FROM titlename WHERE 1
// SELECT emp_num, emp_login, emp_pws, emp_title, emp_fname, emp_sname, emp_birthdate, emp_phone, emp_mail, user_upd, emp_depcode, emp_incdate, emp_appdate FROM tb_employee WHERE 1
// SELECT PL_CODE, PW_CODE, PL_NAME, PL_SH_NAME, PL_ACTIVE, UPD_USER, UPD_DATE FROM postline WHERE 1
// SELECT PG_CODE, PT_CODE, PT_NAME, PT_SH_NAME, PT_ACTIVE, UPD_USER, UPD_DATE FROM posttype WHERE 1
// SELECT hp_id, hp_date, hp_pos, hp_ponum, hp_level, hp_salary, hp_doc, hp_doc_date, user_upd, emp_num, hp_appdate FROM his_position WHERE 1

$SQL = "SELECT e.emp_num, e.emp_login, concat(t.TN_NAME, e.emp_fname,' ', e.emp_sname) as emp_name,
               hp.hp_ponum, o.off_name, p.menu_id
        FROM tb_employee e
        LEFT JOIN (
          SELECT a.* FROM his_position a
          INNER JOIN (
            SELECT emp_num, MAX(hp_step) max_step FROM his_position GROUP BY emp_num
          ) b ON a.emp_num = b.emp_num AND a.hp_step = max_step
        ) hp ON e.emp_num = hp.emp_num
        LEFT JOIN titlename t ON e.emp_title = t.TN_CODE
        LEFT JOIN offices o ON e.emp_depcode = o.off_code
        LEFT JOIN tb_privileges p ON e.emp_num = p.emp_code
        WHERE e.emp_num <> '9999999'";
$rs = $db->arr_select($SQL);

?>
<link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/datatables.min.css"/>

<h2>ข้อมูลผู้ใช้งานระบบ</h2>
<!-- <a href="index.php?inc=adduser" class="btn btn-primary"><i class="fas fa-plus"></i> เพิ่มผู้ใช้</a> -->
<div class="mt-5 p-3 mb-2 bg-white">
  <table class="data-table table table-striped table-bordered" style="width:100%"><!-- ประวัติการดำรงตำแหน่ง -->
    <thead>
      <tr>
        <th>ลทศ.</th>
        <th>Username</th>
        <th>ชื่อ - สกุล</th>
        <th class="text-center">เลขที่ตำแหน่ง</th>
        <th>สังกัด</th>
        <th class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
  <?php
    for ($i=0; $i < count($rs); $i++) {
  ?>
      <tr>
        <td><?php echo $rs[$i]['emp_num']; ?></td>
        <td><?php echo $rs[$i]['emp_login']; ?></td>
        <td><?php echo $rs[$i]['emp_name']; ?></td>
        <td class="text-center"><?php echo $rs[$i]['hp_ponum']; ?></td>
        <td><?php echo $rs[$i]['off_name']; ?></td>
        <td class="text-center">
					<button class="btn btn-warning repass" title="แก้ไขรหัสผ่าน" data-id="<?php echo $rs[$i]['emp_num']; ?>">
						<i class="fas fa-sync-alt"></i>
					</button>
					<a href="#" class="btn btn-info" title="กำหนดสิทธิ์">
          <?php
            if ($rs[$i]['menu_id'] == 1 || $rs[$i]['menu_id'] == 2) {
              echo "<i class=\"fas fa-unlock-alt\"></i>";
            } else {
              echo "<i class=\"far fa-user\"></i>";
            }
          ?>
					</a>
        </td>
      </tr>
  <?php } ?>
    </tbody>
  </table>
</div>



<script type="text/javascript" src="assets/plugins/DataTables/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.data-table').DataTable();

  $(".repass").click(function() {
    var id = $(this).data("id");

    $.confirm({
      theme: 'modern',
      title: 'Confirm!',
      type: 'orange',
      icon: 'fas fa-exclamation',
      content: 'คุณต้องการตั้งค่ารหัสผ่านใหม่ ใช่หรือไม่?',
      buttons: {
        btn1: {
          text: 'ตกลง',
          btnClass: 'btn-blue',
          action: function() {
            var formData = '';
            $.LoadingOverlay("show");
            $.ajax({
              type: "GET",
              url: "resetpassword.php?emp_code=" + id, // where you wanna post
              data: formData,
              processData: false,
              contentType: false,
              enctype: 'multipart/form-data',
              success: function(data) {
                var str = data.split(",")
                if (str[0].trim() == "success") {
                  window.location = "index.php?inc=userlist";
                } else {
                  $.confirm({
                    title: 'Error!',
                    content: data,
                    buttons: {
                      ok: function() {
                        $.LoadingOverlay("hide");
                        // setTimeout(function() {
                        //   location.reload();
                        // }, 2000);
                      }
                    }
                  });
                }
              }
            });
          }
        },
        cancel: function() {
        }
      }
    });
  });
});
</script>
