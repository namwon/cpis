<link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/datatables.min.css"/>

<h2>ข้อมูลประวัติส่วนตัว</h2>
<div class="mt-5 ">

  <ul class="nav nav-tabs responsive-tabs" id="nav-tab" role="tablist">
    <li class="nav-item nav-link active">
      <a href="#tab-1">ข้อมูลที่อยู่</a>
    </li>
    <li class="nav-item nav-link">
      <a href="#tab-2">ประวัติการเปลี่ยนชื่อ</a>
    </li>
    <li class="nav-item nav-link">
      <a href="#tab-3">ข้อมูลคู่สมรส</a>
    </li>
    <li class="nav-item nav-link">
      <a href="#tab-4">ข้อมูลบุตรธิดา</a>
    </li>
    <li class="nav-item nav-link">
      <a href="#tab-5">ข้อมูลส่วนตัว</a>
    </li>
  </ul>

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
    <div class="tab-pane fade pt-4 container-fluid table-responsive" id="tab-2" role="tabpanel" aria-labelledby="nav-tab-2">
      <table class="data-table table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th scope="col">ลำดับ</th>
            <th scope="col">ชื่อ - สกุล</th>
            <th scope="col">วันที่เปลี่ยน</th>
            <th scope="col">วันที่บันทึก</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>นายน้ำวน คนซื่อ</td>
            <td></td>
            <td>1 มิ.ย. 2560</td>
          </tr>
          <tr>
            <td>2</td>
            <td>ว่าที่ร้อยตรีสุทธนิต ชัยขุนพล</td>
            <td>1 ส.ค. 2561</td>
            <td>11 ส.ค. 2561</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane fade pt-4 container-fluid table-responsive" id="tab-3" role="tabpanel" aria-labelledby="nav-tab-3">
      <table class="data-table table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ชื่อ - สกุล</th>
            <th scope="col">ว/ด/ป เกิด</th>
            <th scope="col">วันที่แจ้ง</th>
            <th scope="col">วันที่บันทึก</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>นางสาวโชติกา ชัยขุนพล</td>
            <td>20 ส.ค. 2532</td>
            <td>1 มิ.ย. 2560</td>
            <td>1 มิ.ย. 2560</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane fade pt-4 container-fluid table-responsive" id="tab-4" role="tabpanel" aria-labelledby="nav-tab-4">
      <table class="data-table table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th scope="col">ลำดับ</th>
            <th scope="col">ชื่อ - สกุล</th>
            <th scope="col">ว/ด/ป เกิด</th>
            <th scope="col">วันที่บันทึก</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tab-pane fade pt-5 container-fluid table-responsive" id="tab-5" role="tabpanel" aria-labelledby="nav-tab-5">
      <form class="" action="index.html" method="post">
        <div class="form-group row">
          <label for="old_passw" class="col-form-label col-lg-2">Old Password</label>
          <div class="col-lg-2">
            <input type="password" class="form-control" name="old_passw" id="old_passw" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="newpassw" class="col-form-label col-lg-2">New Password</label>
          <div class="col-lg-2">
            <input type="password" class="form-control" name="newpassw" id="newpassw" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="repassw" class="col-form-label col-lg-2">Re-new Password</label>
          <div class="col-lg-2">
            <input type="password" class="form-control" name="repassw" id="repassw" value="">
          </div>
        </div>
      </form>
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
