<link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/datatables.min.css"/>

<h2>ข้อมูลทะเบียนประวัติ</h2>
<nav class="mt-5 ">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
      ประวัติการดำรงตำแหน่ง
    </a>
    <a class="nav-item nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">
      ประวัติการศึกษา
    </a>
    <a class="nav-item nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">
      ใบอนุญาตประกอบวิชาชีพ
    </a>
    <a class="nav-item nav-link" id="nav-tab-4" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">
      ประวัติการฝึกอบรม
    </a>
    <a class="nav-item nav-link" id="nav-tab-5" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-5" aria-selected="false">
      การได้รับโทษทางวินัยและการนิรโทษกรรม
    </a>
  </div>
</nav>
<div class="tab-content border border-top-0 rounded rounded-bottom bg-white" id="nav-tabContent">
  <div class="tab-pane fade show active pt-4 container table-responsive" id="tab-1" role="tabpanel" aria-labelledby="nav-tab-1">
    <table class="data-table table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="text-center">วัน เดือน ปี</th>
          <th>ตำแหน่ง</th>
          <th class="text-center">เลขที่ตำแหน่ง</th>
          <th>ระดับ</th>
          <th class="text-right">อัตราเงินเดือน</th>
          <th class="text-center">เอกสารอ้างอิงลงวันที่</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center">1 มิ.ย. 2560</td>
          <td>นักวิชาการคอมพิวเตอร์</td>
          <td class="text-center">xxxx</td>
          <td>ปฏิบัติการ</td>
          <td class="text-right">xx,xxx.xx</td>
          <td class="text-center">1 มิ.ย. 2560</td>
        </tr>
        <tr>
          <td class="text-center">1 มิ.ย. 2560</td>
          <td></td>
          <td class="text-center"></td>
          <td></td>
          <td class="text-right"></td>
          <td class="text-center"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade pt-4 container" id="tab-2" role="tabpanel" aria-labelledby="nav-tab-2">
    tab 2
  </div>
  <div class="tab-pane fade pt-4 container" id="tab-3" role="tabpanel" aria-labelledby="nav-tab-3">
    tab 3
  </div>
  <div class="tab-pane fade pt-4 container" id="tab-4" role="tabpanel" aria-labelledby="nav-tab-4">
    tab 4
  </div>
  <div class="tab-pane fade pt-4 container" id="tab-5" role="tabpanel" aria-labelledby="nav-tab-5">
    tab 5
  </div>

</div>
<script type="text/javascript" src="assets/plugins/DataTables/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.data-table').DataTable();
} );
</script>
