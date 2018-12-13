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
      <tr>
        <td>0000011</td>
        <td>นายทดสอบ ระบบทะเบียน</td>
        <td class="text-center">1234</td>
        <td>นักวิชาการคอมพิวเตอร์</td>
        <td>ปฏิบัติการ</td>
        <td>ฝ่ายทะเบียนประวัติ ส่วนช่วยอำนวยการ</td>
        <td class="text-center">
          <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="far fa-file-alt"></i> บันทึกข้อมูลเพิ่มเติม
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">ประวัติการดำรงตำแหน่ง</a>
              <a class="dropdown-item" href="#">เลื่อนขั้นเงินเดือน</a>
              <a class="dropdown-item" href="#">สังกัดในหน่วยงาน</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">ประวัติการศึกษา</a>
              <a class="dropdown-item" href="#">ใบอนุญาตประกอบวิชาชีพ</a>
              <a class="dropdown-item" href="#">ประวัติการฝึกอบรม</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">ข้อมูลที่อยู่</a>
              <a class="dropdown-item" href="#">ประวัติการเปลี่ยนชื่อ</a>
              <a class="dropdown-item" href="#">ข้อมูลคู่สมรส</a>
              <a class="dropdown-item" href="#">ข้อมูลบุตรธิดา</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">การได้รับโทษทางวินัยฯ</a>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>



<script type="text/javascript" src="assets/plugins/DataTables/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.data-table').DataTable();
});
</script>
