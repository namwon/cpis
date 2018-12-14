<?php
// SELECT TN_CODE, TN_SH_NAME, TN_NAME, TN_ENG_NAME, TN_ACTIVE, UPD_USER, UPD_DATE, PS_SEX FROM titlename WHERE 1
// SELECT emp_num, emp_login, emp_pws, emp_title, emp_fname, emp_sname, emp_birthdate, emp_phone, emp_mail, user_upd, emp_depcode, emp_incdate, emp_appdate FROM tb_employee WHERE 1
// SELECT PL_CODE, PW_CODE, PL_NAME, PL_SH_NAME, PL_ACTIVE, UPD_USER, UPD_DATE FROM postline WHERE 1
// SELECT PG_CODE, PT_CODE, PT_NAME, PT_SH_NAME, PT_ACTIVE, UPD_USER, UPD_DATE FROM posttype WHERE 1
// SELECT hp_id, hp_date, hp_pos, hp_ponum, hp_level, hp_salary, hp_doc, hp_doc_date, user_upd, emp_num, hp_appdate FROM his_position WHERE 1
$emp_num = $_GET['emp_code'];


$SQL = "SELECT * FROM titlename WHERE TN_ACTIVE='1'";
$tn = $db->arr_select($SQL);
$SQL = "SELECT * FROM posttype WHERE PT_ACTIVE='1'";
$pt = $db->arr_select($SQL);
$SQL = "SELECT * FROM postline WHERE PL_ACTIVE='1'";
$pl = $db->arr_select($SQL);
$SQL = "SELECT * FROM offices";
$of = $db->arr_select($SQL);


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

$SQL = "SELECT hp.hp_step, hp.hp_ponum, hp.hp_salary, hp.hp_date, hp.hp_appdate, pl.PL_NAME, pt.PT_NAME, o.off_name
        FROM his_position hp
        LEFT JOIN postline pl ON hp.hp_pos = pl.PL_CODE
        LEFT JOIN posttype pt ON hp.hp_level = pt.PT_CODE
        LEFT JOIN offices o ON hp.hp_depcode = o.off_code
        WHERE hp.emp_num = '$emp_num'
        ORDER BY hp.hp_step";

$rs = $db->arr_select($SQL);

?>

<link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/datatables.min.css"/>

<h2>ประวัติการดำรงตำแหน่ง</h2>
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
    <!-- <div class="form-group row">
      <label class="col-lg-2 col-form-label text-right">ประเภทการเลื่อน</label>
      <div class="col-lg-6">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            เลื่อนตำแหน่ง
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            เลื่อนเงินเดือน
          </label>
        </div>
      </div>
    </div> -->
    <div class="form-group row">
      <label for="hp_date" class="col-lg-2 col-form-label text-right">วันที่เลื่อน</label>
      <div class="col-lg-2">
        <input type="date" name="hp_date" id="hp_date" class="form-control" value="">
      </div>
    </div>
    <div class="form-group row">
      <label for="hp_ponum" class="col-lg-2 col-form-label text-right">เลขที่ตำแหน่ง</label>
      <div class="col-lg-2">
        <input type="text" name="hp_ponum" id="hp_ponum" class="form-control" value="<?php echo $emp[0]['hp_ponum']; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="hp_pos" class="col-lg-2 col-form-label text-right">ตำแหน่ง</label>
      <div class="col-lg-3">
        <select class="form-control" name="hp_pos" id="hp_pos">
          <option value="">...</option>
        <?php
          for ($i=0; $i < count($pl); $i++) {
            $selected = "";
            if ($emp[0]['hp_pos'] == $pl[$i]['PL_CODE']) {
              $selected = "selected";
            }
            echo "<option value=\"".$pl[$i]['PL_CODE']."\" $selected>".$pl[$i]['PL_NAME']."</option>\r\n";
          }
        ?>
        </select>
      </div>
      <label for="hp_level" class="col-lg-1 col-form-label text-right">ระดับ</label>
      <div class="col-lg-3">
        <select class="form-control" name="hp_level" id="hp_level">
          <option value="">...</option>
        <?php
          for ($i=0; $i < count($pt); $i++) {
            $selected = "";
            if ($emp[0]['hp_level'] == $pt[$i]['PT_CODE']) {
              $selected = "selected";
            }
            echo "<option value=\"".$pt[$i]['PT_CODE']."\" $selected>".$pt[$i]['PT_NAME']."</option>\r\n";
          }
        ?>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="hp_salary" class="col-lg-2 col-form-label text-right">เงินเดือน</label>
      <div class="col-lg-2">
        <input type="number" min="0" step="0.01" class="form-control currency" id="hp_salary" name="hp_salary" value="<?php echo $emp[0]['hp_salary']; ?>" />
      </div>
    </div>
    <div class="form-group row">
      <label for="hp_doc" class="col-lg-2 col-form-label text-right">เลขที่หนังสือ</label>
      <div class="col-lg-3">
        <input type="text" name="hp_doc" id="hp_doc" class="form-control" value="">
      </div>
      <label for="hp_doc_date" class="col-lg-2 col-form-label text-right">เอกสารลงวันที่</label>
      <div class="col-lg-2">
        <input type="date" name="hp_doc_date" id="hp_doc_date" class="form-control" value="">
      </div>
    </div>
    <div class="form-group row">
      <label for="hp_depcode" class="col-lg-2 col-form-label text-right">สังกัด</label>
      <div class="col-lg-3">
        <select class="form-control" name="hp_depcode" id="hp_depcode">
          <option value="">...</option>
        <?php
          for ($i=0; $i < count($of); $i++) {
            $selected = "";
            if ($emp[0]['hp_depcode'] == $of[$i]['off_code']) {
              $selected = "selected";
            }
            echo "<option value=\"".$of[$i]['off_code']."\" $selected>".$of[$i]['off_name']."</option>\r\n";
          }
        ?>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-lg-5 offset-lg-2">
        <button type="button" class="btn btn-primary" id="btn_save"><i class="far fa-save"></i> บันทึก</button>
      </div>
    </div>
  </form>
</div>
<div class="mt-5 p-3 bg-white">
  <table class="data-table table table-striped table-bordered" style="width:100%"><!-- ประวัติการดำรงตำแหน่ง -->
    <thead>
      <tr>
        <th>ลำดับ</th>
        <th>วันที่เลื่อน</th>
        <th>ตำแหน่ง</th>
        <th>ระดับ</th>
        <th class="text-center">เลขที่ตำแหน่ง</th>
        <th class="text-right">เงินเดือน</th>
        <th>สังกัด</th>
        <th>วันที่บันทึก</th>
        <th class="text-center">แก้ไข</th>
      </tr>
    </thead>
    <tbody>
  <?php
    for ($i=0; $i < count($rs); $i++) {
  ?>
      <tr>
        <td><?php echo $rs[$i]['hp_step']; ?></td>
        <td><?php echo dateDateTh($rs[$i]['hp_date']); ?></td>
        <td><?php echo $rs[$i]['PL_NAME']; ?></td>
        <td><?php echo $rs[$i]['PT_NAME']; ?></td>
        <td class="text-center"><?php echo $rs[$i]['hp_ponum']; ?></td>
        <td class="text-right"><?php echo number_format($rs[$i]['hp_salary'],2,'.',','); ?></td>
        <td><?php echo $rs[$i]['off_name']; ?></td>
        <td><?php echo dateDateTh($rs[$i]['hp_appdate']); ?></td>
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
              url: "his_position_save.php", // where you wanna post
              data: formData,
              processData: false,
              contentType: false,
              enctype: 'multipart/form-data',
              success: function(data) {
                var str = data.split(",")
                if (str[0].trim() == "success") {
                  window.location = "index.php?inc=his_position&emp_code=<?php echo $emp_num; ?>";
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
