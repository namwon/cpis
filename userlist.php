<link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/datatables.min.css"/>

<h2>ข้อมูลผู้ใช้งานระบบ</h2>
<a href="index.php?inc=adduser" class="btn btn-primary"><i class="fas fa-plus"></i> เพิ่มผู้ใช้</a>
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
      <tr>
        <td>0000011</td>
        <td class="text-center">121220033654</td>
        <td>นายทดสอบ ระบบทะเบียน</td>
        <td class="text-center">1234</td>
        <td>ฝ่ายทะเบียนประวัติ ส่วนช่วยอำนวยการ</td>
        <td class="text-center">
					<a href="#" class="btn btn-warning" title="แก้ไขรหัสผ่าน">
						<i class="fa fa-edit"></i>
					</a>
					<a href="#" class="btn btn-info" title="กำหนดสิทธิ์">
						<i class="fas fa-ellipsis-h"></i>
					</a>
        </td>
      </tr>
      <tr>
        <td>0000022</td>
        <td class="text-center">4521154003256</td>
        <td>นายทดสอบ ระบบทะเบียน</td>
        <td class="text-center">1421</td>
        <td>ฝ่ายทะเบียนประวัติ ส่วนช่วยอำนวยการ</td>
        <td class="text-center">
					<a href="#" class="btn btn-warning" title="แก้ไขรหัสผ่าน">
						<i class="fa fa-edit"></i>
					</a>
					<a href="#" class="btn btn-info" title="กำหนดสิทธิ์">
						<i class="fas fa-ellipsis-h"></i>
					</a>
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
