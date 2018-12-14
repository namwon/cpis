<?php
// SELECT TN_CODE, TN_SH_NAME, TN_NAME, TN_ENG_NAME, TN_ACTIVE, UPD_USER, UPD_DATE, PS_SEX FROM titlename WHERE 1
// SELECT emp_num, emp_login, emp_pws, emp_title, emp_fname, emp_sname, emp_birthdate, emp_phone, emp_mail, user_upd, emp_depcode, emp_incdate, emp_appdate FROM tb_employee WHERE 1
// SELECT PL_CODE, PW_CODE, PL_NAME, PL_SH_NAME, PL_ACTIVE, UPD_USER, UPD_DATE FROM postline WHERE 1
// SELECT PG_CODE, PT_CODE, PT_NAME, PT_SH_NAME, PT_ACTIVE, UPD_USER, UPD_DATE FROM posttype WHERE 1
// SELECT hp_id, hp_date, hp_pos, hp_ponum, hp_level, hp_salary, hp_doc, hp_doc_date, user_upd, emp_num, hp_appdate FROM his_position WHERE 1
$emp_num = $_SESSION['user_id'];
$SQL = "SELECT e.emp_num, e.emp_login, concat(t.TN_NAME, e.emp_fname,' ', e.emp_sname) as emp_name,
               hp.hp_ponum, hp.hp_date, hp.hp_salary, pl.PL_NAME, pt.PT_NAME, o.off_name, hp.hp_doc, hp.hp_doc_date
        FROM tb_employee e
        LEFT JOIN his_position hp ON e.emp_num = hp.emp_num
        LEFT JOIN titlename t ON e.emp_title = t.TN_CODE
        LEFT JOIN postline pl ON hp.hp_pos = pl.PL_CODE
        LEFT JOIN posttype pt ON hp.hp_level = pt.PT_CODE
        LEFT JOIN offices o ON e.emp_depcode = o.off_code
        WHERE e.emp_num = '$emp_num'";
$tab1 = $db->arr_select($SQL);

?>
<link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/datatables.min.css"/>

<h2>ข้อมูลทะเบียนประวัติ</h2>
<div class="mt-5">

  <ul class="nav nav-tabs responsive-tabs" id="nav-tab" role="tablist">
  	<li class="nav-item nav-link active">
      <a href="#tab-1">ประวัติการดำรงตำแหน่ง</a>
    </li>
  	<li class="nav-item nav-link">
      <a href="#tab-2">ประวัติการศึกษา</a>
    </li>
  	<li class="nav-item nav-link">
      <a href="#tab-3">ใบอนุญาตประกอบวิชาชีพ</a>
    </li>
    <li class="nav-item nav-link">
      <a href="#tab-4">ประวัติการฝึกอบรม</a>
    </li>
  	<li class="nav-item nav-link">
      <a href="#tab-5">การได้รับโทษทางวินัยและการนิรโทษกรรม</a>
    </li>
  </ul>

  <div class="tab-content border border-top-0 rounded rounded-bottom bg-white" id="nav-tabContent">
    <div class="tab-pane fade show active pt-4 container-fluid table-responsive" id="tab-1" role="tabpanel" aria-labelledby="nav-tab-1">
      <table class="data-table table table-striped table-bordered" style="width:100%"><!-- ประวัติการดำรงตำแหน่ง -->
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
        <?php
          for ($i=0; $i < count($tab1); $i++) {
        ?>
          <tr>
            <td class="text-center"><?php echo _Tdates2($tab1[$i]['hp_date']); ?></td>
            <td><?php echo $tab1[$i]['PL_NAME']; ?></td>
            <td class="text-center"><?php echo $tab1[$i]['hp_ponum']; ?></td>
            <td><?php echo $tab1[$i]['PT_NAME']; ?></td>
            <td class="text-right"><?php echo number_format($tab1[$i]['hp_salary'],2,'.',','); ?></td>
            <td class="text-center"><?php echo $tab1[$i]['hp_doc']."<br>"._Tdates2($tab1[$i]['hp_doc_date']); ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="tab-pane fade pt-4 container-fluid table-responsive" id="tab-2" role="tabpanel" aria-labelledby="nav-tab-2">
      <table class="data-table table table-striped table-bordered" style="width:100%"><!-- ประวัติการศึกษา -->
        <thead>
          <tr>
            <th class="text-center">ลำดับ</th>
            <th>สถานศึกษา</th>
            <th>คณะ/สาขา</th>
            <th>วุฒิการศึกษา</th>
            <th class="text-center">วันที่ได้รับวุฒิฯ</th>
            <th>เกียรตินิยม</th>
            <th>เอกสารประกอบ</th>
            <th class="text-center">วันที่บันทึก</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1</td>
            <td>มหาวิทยาลัยแม่โจ้</td>
            <td>คณะบริหารธุรกิจ / สาขาเทคโนโลยีสารสนเทศทางธุรกิจ</td>
            <td>บธ.บ.</td>
            <td class="text-center">14 มีนาคม 2544</td>
            <td></td>
            <td><!-- <i class="far fa-file-pdf"></i> --></td>
            <td class="text-center">1 มิ.ย. 2560</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane fade pt-4 container-fluid table-responsive" id="tab-3" role="tabpanel" aria-labelledby="nav-tab-3">
      <table class="data-table table table-striped table-bordered" style="width:100%"><!-- ใบอนุญาตประกอบวิชาชีพ -->
        <thead>
          <tr>
            <th class="text-center">ลำดับ</th>
            <th>สถาบันที่ออกใบอนุญาต</th>
            <th>ประเภทวิชาชีพ</th>
            <th class="text-center">วันที่หมดอายุ</th>
            <th class="text-center">วันที่ขึ้นทะเบียน</th>
            <th class="text-center">วันที่บันทึก</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center"></td>
            <td></td>
            <td></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane fade pt-4 container-fluid table-responsive" id="tab-4" role="tabpanel" aria-labelledby="nav-tab-4">
      <table class="data-table table table-striped table-bordered" style="width:100%"><!-- ประวัติการฝึกอบรม -->
        <thead>
          <tr>
            <th class="text-center">ลำดับ</th>
            <th>ห้วข้ออบรม</th>
            <th class="text-center">สถาบัน/หน่วยงานที่จัด</th>
            <th>ตั้งแต่ - ถึง</th>
            <th>เอกสารประกอบ</th>
            <th class="text-center">วันที่บันทึก</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center"></td>
            <td></td>
            <td class="text-center"></td>
            <td></td>
            <td></td>
            <td class="text-center"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane fade pt-4 container-fluid table-responsive" id="tab-5" role="tabpanel" aria-labelledby="nav-tab-5">
      <table class="data-table table table-striped table-bordered" style="width:100%"><!-- การได้รับโทษทางวินัยและการนิรโทษกรรม -->
        <thead>
          <tr>
            <th class="text-center">พ.ศ.</th>
            <th>รายการ</th>
            <th class="text-center">เอกสารอ้างอิง</th>
            <th class="text-center">ลงวันที่</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center"></td>
            <td></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

</div>










<script type="text/javascript" src="assets/plugins/DataTables/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.data-table').DataTable();

  ! function($) {
    "use strict";
    var a = {
        accordionOn: ["xs"]
    };
    $.fn.responsiveTabs = function(e) {
        var t = $.extend({}, a, e),
            s = "";
        return $.each(t.accordionOn, function(a, e) {
            s += " accordion-" + e
        }), this.each(function() {
            var a = $(this),
                e = a.find("> li > a"),
                t = $(e.first().attr("href")).parent(".tab-content"),
                i = t.children(".tab-pane");
            a.add(t).wrapAll('<div class="responsive-tabs-container" />');
            var n = a.parent(".responsive-tabs-container");
            n.addClass(s), e.each(function(a) {
                var t = $(this),
                    s = t.attr("href"),
                    i = "",
                    n = "",
                    r = "";
                t.parent("li").hasClass("active") && (i = " active"), 0 === a && (n = " first"), a === e.length - 1 && (r = " last"), t.clone(!1).addClass("accordion-link" + i + n + r).insertBefore(s)
            });
            var r = t.children(".accordion-link");
            e.on("click", function(a) {
                a.preventDefault();
                var e = $(this),
                    s = e.parent("li"),
                    n = s.siblings("li"),
                    c = e.attr("href"),
                    l = t.children('a[href="' + c + '"]');
                s.hasClass("active show") || (s.addClass("active show"), n.removeClass("active show"), i.removeClass("active"), $(c).addClass("active show"), r.removeClass("active show"), l.addClass("active show"))
            }), r.on("click", function(t) {
                t.preventDefault();
                var s = $(this),
                    n = s.attr("href"),
                    c = a.find('li > a[href="' + n + '"]').parent("li");
                s.hasClass("active show") || (r.removeClass("active show"), s.addClass("active show"), i.removeClass("active"), $(n).addClass("active show"), e.parent("li").removeClass("active show"), c.addClass("active show"))
            })
        })
    }
  }(jQuery);


  $('.responsive-tabs').responsiveTabs({
      accordionOn: ['xs', 'sm']
  });


});
</script>
