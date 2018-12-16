<?php
// SELECT TN_CODE, TN_SH_NAME, TN_NAME, TN_ENG_NAME, TN_ACTIVE, UPD_USER, UPD_DATE, PS_SEX FROM titlename WHERE 1
// SELECT emp_num, emp_login, emp_pws, emp_title, emp_fname, emp_sname, emp_birthdate, emp_phone, emp_mail, user_upd, emp_depcode, emp_incdate, emp_appdate FROM tb_employee WHERE 1
// SELECT PL_CODE, PW_CODE, PL_NAME, PL_SH_NAME, PL_ACTIVE, UPD_USER, UPD_DATE FROM postline WHERE 1
// SELECT PG_CODE, PT_CODE, PT_NAME, PT_SH_NAME, PT_ACTIVE, UPD_USER, UPD_DATE FROM posttype WHERE 1
// SELECT hp_id, hp_date, hp_pos, hp_ponum, hp_level, hp_salary, hp_doc, hp_doc_date, user_upd, emp_num, hp_appdate FROM his_position WHERE 1

$SQL = "SELECT e.emp_num, concat(t.TN_NAME, e.emp_fname,' ', e.emp_sname) as emp_name,
               hp.hp_ponum, pl.PL_NAME, pt.PT_NAME, o.off_name
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
        WHERE e.emp_num <> '9999999'";
$rs = $db->arr_select($SQL);

?>

<link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/datatables.min.css"/>

<h2>ข้อมูลเจ้าหน้าที่</h2>
<a href="index.php?inc=addperson" class="btn btn-primary"><i class="fas fa-plus"></i> เพิ่มข้อมูลเจ้าหน้าที่</a>
<div class="mt-5 p-3 mb-2 bg-white">
  <table class="data-table table table-striped table-bordered" style="width:100%"><!-- ประวัติการดำรงตำแหน่ง -->
    <thead>
      <tr>
        <th>ลทศ.</th>
        <th>ชื่อ - สกุล</th>
        <th class="text-center">เลขที่ตำแหน่ง</th>
        <th>ตำแหน่ง</th>
        <th>ระดับ</th>
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
        <td><?php echo $rs[$i]['emp_name']; ?></td>
        <td class="text-center"><?php echo $rs[$i]['hp_ponum']; ?></td>
        <td><?php echo $rs[$i]['PL_NAME']; ?></td>
        <td><?php echo $rs[$i]['PT_NAME']; ?></td>
        <td><?php echo $rs[$i]['off_name']; ?></td>
        <td class="text-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="fas fa-plus"></i> บันทึกข้อมูลเพิ่มเติม
            </button>
            <div class="dropdown-menu topshow">
              <a class="dropdown-item" href="index.php?inc=his_position&emp_code=<?php echo $rs[$i]['emp_num']; ?>">ตำแหน่ง/เงินเดือน</a>
              <!-- <a class="dropdown-item" href="index.php?inc=his_salary&emp_code=<?php echo $rs[$i]['emp_num']; ?>">เลื่อนขั้นเงินเดือน</a> -->
              <!-- <a class="dropdown-item" href="index.php?inc=offices&emp_code=<?php echo $rs[$i]['emp_num']; ?>">สังกัดในหน่วยงาน</a> -->
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php?inc=his_education&emp_code=<?php echo $rs[$i]['emp_num']; ?>">ประวัติการศึกษา</a>
              <a class="dropdown-item" href="index.php?inc=his_certificate&emp_code=<?php echo $rs[$i]['emp_num']; ?>">ใบอนุญาตประกอบวิชาชีพ</a>
              <a class="dropdown-item" href="index.php?inc=his_training&emp_code=<?php echo $rs[$i]['emp_num']; ?>">ประวัติการฝึกอบรม</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php?inc=his_adress&emp_code=<?php echo $rs[$i]['emp_num']; ?>">ข้อมูลที่อยู่</a>
              <a class="dropdown-item" href="index.php?inc=his_name&emp_code=<?php echo $rs[$i]['emp_num']; ?>">ประวัติการเปลี่ยนชื่อ</a>
              <a class="dropdown-item" href="index.php?inc=his_marry&emp_code=<?php echo $rs[$i]['emp_num']; ?>">ข้อมูลคู่สมรส</a>
              <a class="dropdown-item" href="index.php?inc=his_children&emp_code=<?php echo $rs[$i]['emp_num']; ?>">ข้อมูลบุตรธิดา</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php?inc=his_discipline&emp_code=<?php echo $rs[$i]['emp_num']; ?>">การได้รับโทษทางวินัยฯ</a>
            </div>
          </div>
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
});
</script>
