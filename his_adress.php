<?php
// SELECT ht_id, ht_num, ht_title, ht_school, ht_date, ht_doc, ht_appdate, user_upd, emp_num FROM his_training WHERE 1
$emp_num = $_GET['emp_code'];


$SQL = "SELECT e.emp_num, concat(t.TN_NAME, e.emp_fname,' ', e.emp_sname) as emp_name,
               hp.hp_ponum, hp.hp_pos, hp.hp_level, hp.hp_depcode, hp.hp_salary, pl.PL_NAME, pt.PT_NAME, o.off_name
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
        WHERE e.emp_num = '$emp_num'
       ";
$emp = $db->arr_select($SQL);

$SQL = "SELECT  * FROM his_training WHERE emp_num = '$emp_num' ORDER BY ht_num";
$rs = $db->arr_select($SQL);

?>

<link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/datatables.min.css"/>

<h2>ประวัติการฝึกอบรม</h2>
<button class="btn btn-primary" id="add"><i class="fas fa-plus"></i> เพิ่มประวัติ</button>
<div class="alert alert-info mt-3" role="alert">
  ชื่อ - สกุล: <span class="text-dark"><?php echo $emp[0]['emp_name']; ?></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตำแหน่ง: <span class="text-dark"><?php echo $emp[0]['PL_NAME'].' '.$emp[0]['PT_NAME']; ?></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สังกัด: <span class="text-dark"><?php echo $emp[0]['off_name']; ?></span>
</div>
<div id="frm_add" class="mt-5 p-3 mb-3 bg-white d-none">
  <h4>เพิ่มประวัติ</h4>
  <form name="frm_save" id="frm_save" method="post" action="#">
    <input type="hidden" name="emp_num" value="<?php echo $emp_num; ?>">
    <div class="form-group row">
      <label for="ht_title" class="col-lg-2 col-form-label text-right">หัวข้ออบรม</label>
      <div class="col-lg-3">
        <input type="text" class="form-control" id="ht_title" name="ht_title" value="" />
      </div>
    </div>
    <div class="form-group row">
      <label for="ht_school" class="col-lg-2 col-form-label text-right">สถาบัน/หน่วยงานที่จัด</label>
      <div class="col-lg-3">
        <input type="text" name="ht_school" id="ht_school" class="form-control" value="">
      </div>
    </div>
    <div class="form-group row">
      <label for="ht_date" class="col-lg-2 col-form-label text-right">ระยะเวลาที่จัดอบรม</label>
      <div class="col-lg-4">
        <input type="text" name="ht_date" id="ht_date" class="form-control" value="">
      </div>
    </div>
    <div class="form-group row">
      <label for="ht_doc" class="col-lg-2 col-form-label text-right">เอกสารประกอบ</label>
      <div class="col-lg-3">
        <input type="text" name="ht_doc" id="ht_doc" class="form-control" value="">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-lg-5 offset-lg-2">
        <button type="button" class="btn btn-primary" id="btn_save"><i class="far fa-save"></i> บันทึก</button>
      </div>
    </div>
  </form>
</div>
<div class="mt-5 p-3 bg-white table-responsive">
  <table class="data-table table table-striped table-bordered" style="width:100%"><!-- ประวัติการดำรงตำแหน่ง -->
    <thead>
      <tr>
        <th class="text-center">ลำดับ</th>
        <th>ห้วข้ออบรม</th>
        <th class="text-center">สถาบัน/หน่วยงานที่จัด</th>
        <th>ตั้งแต่ - ถึง</th>
        <th>เอกสารประกอบ</th>
        <th class="text-center">วันที่บันทึก</th>
        <th class="text-center">แก้ไข</th>
      </tr>
    </thead>
    <tbody>
  <?php
    for ($i=0; $i < count($rs); $i++) {
  ?>
      <tr>
        <td><?php echo $rs[$i]['ht_num']; ?></td>
        <td><?php echo $rs[$i]['ht_title']; ?></td>
        <td><?php echo $rs[$i]['ht_school']; ?></td>
        <td><?php echo $rs[$i]['ht_date']; ?></td>
        <td><?php echo $rs[$i]['ht_doc']; ?></td>
        <td><?php echo dateDateTh($rs[$i]['ht_appdate']); ?></td>
        <td class="text-center">
          <a href="#" class="btn btn-sm btn-info" title="แก้ไขข้อมูล"><i class="fas fa-edit"></i></a>
        </td>
      </tr>
  <?php } ?>
    </tbody>
  </table>
</div>


<script src="assets/plugins/webshim-1.16.0/js-webshim/minified/polyfiller.js"></script>
<script type="text/javascript">
$(function() {
  webshims.setOptions('forms-ext', {
    replaceUI: 'auto',
    types: 'number',
    "number": {
      "classes": "hide-inputbtns"
    }
  });
  webshims.polyfill('forms-ext');
});
</script>
<script type="text/javascript" src="assets/plugins/DataTables/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.data-table').DataTable();
  $('#add').click(function () {
    $.LoadingOverlay("show");
    $("#frm_add").toggleClass('d-none');
    setTimeout(function() {
      $.LoadingOverlay("hide");
    }, 1000);
  });

  $("#btn_save").click(function() {
    var formData = new FormData(document.getElementsByName('frm_save')[0]); // yourForm: form selector

    $.confirm({
      theme: 'modern',
      title: 'Confirm!',
      type: 'orange',
      icon: 'fas fa-exclamation',
      content: 'คุณต้องการบันทึกข้อมูลบุคคล ใช่หรือไม่?',
      buttons: {
        btn1: {
          text: 'ตกลง',
          btnClass: 'btn-blue',
          action: function() {
            $.LoadingOverlay("show");
            $.ajax({
              type: "POST",
              url: "his_training_save.php", // where you wanna post
              data: formData,
              processData: false,
              contentType: false,
              enctype: 'multipart/form-data',
              success: function(data) {
                var str = data.split(",")
                if (str[0].trim() == "success") {
                  window.location = "index.php?inc=his_training&emp_code=<?php echo $emp_num; ?>";
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
