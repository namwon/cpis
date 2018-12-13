<?php
// SELECT TN_CODE, TN_SH_NAME, TN_NAME, TN_ENG_NAME, TN_ACTIVE, UPD_USER, UPD_DATE, PS_SEX FROM titlename WHERE 1
// SELECT emp_num, emp_login, emp_pws, emp_title, emp_fname, emp_sname, emp_birthdate, emp_phone, emp_mail, user_upd, emp_depcode, emp_incdate, emp_appdate FROM tb_employee WHERE 1
// SELECT PL_CODE, PW_CODE, PL_NAME, PL_SH_NAME, PL_ACTIVE, UPD_USER, UPD_DATE FROM postline WHERE 1
// SELECT PG_CODE, PT_CODE, PT_NAME, PT_SH_NAME, PT_ACTIVE, UPD_USER, UPD_DATE FROM posttype WHERE 1
// SELECT hp_id, hp_date, hp_pos, hp_ponum, hp_level, hp_salary, hp_doc, user_upd, emp_num, hp_appdate FROM his_position WHERE 1
$SQL = "SELECT * FROM titlename WHERE TN_ACTIVE='1'";
$rs = $db->arr_select($SQL);
$SQL = "SELECT * FROM posttype WHERE PT_ACTIVE='1'";
$pt = $db->arr_select($SQL);
$SQL = "SELECT * FROM postline WHERE PL_ACTIVE='1'";
$pl = $db->arr_select($SQL);
?>
<link rel='stylesheet' href='assets/plugins/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.css' />
<h2>เพิ่มข้อมูลเจ้าหน้าที่</h2>
<div class="container-fluid mt-5 pt-5 pb-5 bg-white">
  <div class="row">
    <div class="container-fluid">
      <form>
        <div class="form-group row">
          <label for="emp_title" class="col-lg-2 col-form-label text-right">คำนำหน้าชื่อ</label>
          <div class="col-lg-1">
            <select class="form-control" name="emp_title" id="emp_title">
            <?php
              for ($i=0; $i < count($rs)-1; $i++) {
                echo "<option value=\"".$rs[$i]['TN_CODE']."\">".$rs[$i]['TN_NAME']."</option>\r\n";
              }
            ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="emp_fname" class="col-lg-2 col-form-label text-right">ชื่อ</label>
          <div class="col-lg-3">
            <input type="text" name="emp_fname" id="emp_fname" class="form-control" value="">
          </div>
          <label for="emp_sname" class="col-lg-1 col-form-label text-right">สกุล</label>
          <div class="col-lg-3">
            <input type="text" name="emp_sname" id="emp_sname" class="form-control" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="emp_birthdate" class="col-lg-2 col-form-label text-right">ว/ด/ป(ค.ศ.) เกิด</label>
          <div class="col-lg-2">
            <input type="date" name="emp_birthdate" id="emp_birthdate" class="form-control" value="">
          </div>
        </div>
        <hr>
        <div class="form-group row">
          <label for="emp_birthdate" class="col-lg-2 col-form-label text-right">วันที่บรรจุ</label>
          <div class="col-lg-2">
            <input type="date" name="emp_birthdate" id="emp_birthdate" class="form-control" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="hp_pos" class="col-lg-2 col-form-label text-right">ตำแหน่ง</label>
          <div class="col-lg-2">
            <select class="form-control" name="hp_pos" id="hp_pos">
              <option value="">...</option>
            <?php
              for ($i=0; $i < count($pl)-1; $i++) {
                echo "<option value=\"".$pl[$i]['PL_CODE']."\">".$pl[$i]['PL_NAME']."</option>\r\n";
              }
            ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="hp_level" class="col-lg-2 col-form-label text-right">ระดับ</label>
          <div class="col-lg-2">
            <select class="form-control" name="hp_level" id="hp_level">
              <option value="">...</option>
            <?php
              for ($i=0; $i < count($pt)-1; $i++) {
                echo "<option value=\"".$pt[$i]['PT_CODE']."\">".$pt[$i]['PT_NAME']."</option>\r\n";
              }
            ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="hp_salary" class="col-lg-2 col-form-label text-right">เงินเดือนบรรจุ</label>
          <div class="col-lg-2">
            <!-- <input type="number" name="hp_salary" id="hp_salary" class="form-control currency" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" value=""> -->
            <input type="number" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="hp_salary" name="hp_salary" />
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-5 offset-lg-2">
            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> บันทึก</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/plugins/webshim-1.16.0/js-webshim/minified/polyfiller.js"></script>

<script type="text/javascript">
  webshims.setOptions('forms-ext', {
    replaceUI: 'auto',
    types: 'number'
  });
  webshims.polyfill('forms forms-ext');
$(function() {
});
</script>
