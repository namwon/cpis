<link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/datatables.min.css"/>

<h2>ข้อมูลประวัติส่วนตัว</h2>
<nav class="mt-5 ">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
      ข้อมูลที่อยู่
    </a>
    <a class="nav-item nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">
      ประวัติการเปลี่ยนชื่อ
    </a>
    <a class="nav-item nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">
      ข้อมูลคู่สมรส
    </a>
    <a class="nav-item nav-link" id="nav-tab-4" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">
      ข้อมูลบุตรธิดา
    </a>
  </div>
</nav>
<div class="tab-content border border-top-0 rounded rounded-bottom bg-white" id="nav-tabContent">
  <div class="tab-pane fade show active pt-4 container-fluid table-responsive" id="tab-1" role="tabpanel" aria-labelledby="nav-tab-1">
    <table class="data-table table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>ข้อมูลที่อยู่</th>
          <th>ตำบล</th>
          <th>อำเภอ</th>
          <th>จังหวัด</th>
          <th>รหัสไปรษณีย์</th>
          <th>สถานะ</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>129 ม.6</td>
          <td>ชมพู</td>
          <td>เมือง</td>
          <td>ลำปาง</td>
          <td>52100</td>
          <td>ที่อยู่ตามบัตรประชาชน</td>
        </tr>
        <tr>
          <td>557/846 แมเนอร์สนามบินน้ำ</td>
          <td>บางกระสอ</td>
          <td>เมืองนนทบุรี</td>
          <td>นนทบุรี</td>
          <td>11000</td>
          <td>ที่อยู่ปัจจุบัน</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade pt-4 container-fluid" id="tab-2" role="tabpanel" aria-labelledby="nav-tab-2">
    tab 2
  </div>
  <div class="tab-pane fade pt-4 container-fluid" id="tab-3" role="tabpanel" aria-labelledby="nav-tab-3">
    tab 3
  </div>
  <div class="tab-pane fade pt-4 container-fluid" id="tab-4" role="tabpanel" aria-labelledby="nav-tab-4">
    tab 4
  </div>

</div>
<script type="text/javascript" src="assets/plugins/DataTables/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.data-table').DataTable();
} );
</script>
