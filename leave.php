<link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/datatables.min.css"/>

<h2>ข้อมูลวันลา</h2>
<div class="mt-5 ">

  <ul class="nav nav-tabs responsive-tabs" id="nav-tab" role="tablist">
    <li class="nav-item nav-link active">
      <a href="#tab-1">ประวัติการลา</a>
    </li>
    <li class="nav-item nav-link">
      <a href="#tab-2">บันทึกการลา</a>
    </li>
    <li class="nav-item nav-link">
      <a href="#tab-3">ตรวจสอบใบลา</a>
    </li>
  </ul>

  <div class="tab-content border border-top-0 rounded rounded-bottom bg-white" id="nav-tabContent">
    <div class="tab-pane fade show active pt-4 container-fluid table-responsive" id="tab-1" role="tabpanel" aria-labelledby="nav-tab-1">
      <table id="tb_history" class="data-table table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>ลำดับ</th>
            <th>เหตุของการลา</th>
            <th>วันที่ลา</th>
            <th>วันที่อนุมัติการลา</th>
            <th>ประเภทการลา</th>
            <th>วันที่ยื่นใบลา</th>
            <th>หมายเหตุ</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>ลาพักผ่อน</td>
            <td>5 กรกฎาคม 2561 - 6 กรกฎาคม 2561</td>
            <td>3 กรกฎาคม 2561</td>
            <td>ลาพักผ่อน</td>
            <td>3 กรกฎาคม 2561</td>
            <td></td>
          </tr>
          <tr>
            <td>2</td>
            <td>ไข้หวัด</td>
            <td>1 สิงหาคม 2561</td>
            <td>2 สิงหาคม 2561</td>
            <td>ลาป่วย</td>
            <td>1 สิงหาคม 2561</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane fade pt-4 container-fluid table-responsive" id="tab-2" role="tabpanel" aria-labelledby="nav-tab-2">
      <form class="form-horizontal" id="frm_leave" name="frm_leave" method="post">
        <div class="form-group row">
          <label for="lv_sdate" class="col-form-label col-lg-2">วันที่เริ่มต้น</label>
          <div class="col-lg-3 input-group mb-3">
            <input type="date" class="form-control" name="lv_sdate" id="lv_sdate" value="">
            <div class="input-group-append">
              <span class="input-group-text" id="calendar1"><i class="fas fa-calendar-alt"></i></span>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="lv_edate" class="col-form-label col-lg-2">วันที่สิ้นสุด</label>
          <div class="col-lg-3 input-group mb-3">
            <input type="date" class="form-control" name="lv_edate" id="lv_edate" value="">
            <div class="input-group-append">
              <span class="input-group-text" id="calendar1"><i class="fas fa-calendar-alt"></i></span>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="lv_type" class="col-form-label col-lg-2">ประเภทการลา</label>
          <div class="col-lg-3">
            <select class="form-control" name="lv_type" id="lv_type">
              <option value="ลาป่วย">ลาป่วย</option>
              <option value="ลาพักผ่อน">ลาพักผ่อน</option>
              <option value="ลาคลอด">ลาคลอด</option>
              <option value="ลากิจ">ลากิจ</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="lv_mark" class="col-form-label col-lg-2">เหตุของการลา</label>
          <div class="col-lg-9">
            <input type="text" name="lv_mark" id="lv_mark" class="form-control" value="">
          </div>
        </div>
        <div class="form-group">
          <button type="button" name="btn_save" id="btn_save" class="offset-lg-2 btn btn-primary">บันทึก</button>
          <button type="reset" name="btn_clear" id="btn_clear" class="btn btn-warning">ล้างข้อมูล</button>
        </div>
      </form>
    </div>
    <div class="tab-pane fade pt-4 container-fluid table-responsive" id="tab-3" role="tabpanel" aria-labelledby="nav-tab-3">
      <table id="tb_edit" class="data-table table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>ลำดับ</th>
            <th>เหตุของการลา</th>
            <th>วันที่ลา</th>
            <th>การอนุมัติการลา</th>
            <th>ประเภทการลา</th>
            <th>วันที่ยื่นใบลา</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>ลาพักผ่อน</td>
            <td>5 กรกฎาคม 2561 - 6 กรกฎาคม 2561</td>
            <td>อนุมัติแล้ว</td>
            <td>ลาพักผ่อน</td>
            <td>3 กรกฎาคม 2561</td>
            <td></td>
          </tr>
          <tr>
            <td>2</td>
            <td>ไข้หวัด</td>
            <td>1 สิงหาคม 2561</td>
            <td>อนุมัติแล้ว</td>
            <td>ลาป่วย</td>
            <td>1 สิงหาคม 2561</td>
            <td></td>
          </tr>
          <tr>
            <td>3</td>
            <td>ลาพักผ่อน</td>
            <td>20 พฤศจิกายน 2561</td>
            <td>อนุมัติแล้ว</td>
            <td>ลาพักผ่อน</td>
            <td>13 พฤศจิกายน 2561</td>
            <td>
              <a href="#" title="ยกเลิกใบลา">
                <i class="fas fa-ban"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>ลาพักผ่อน</td>
            <td>26 พฤศจิกายน 2561</td>
            <td>รอการอนุมัติ</td>
            <td>ลาพักผ่อน</td>
            <td>15 พฤศจิกายน 2561</td>
            <td>
              <a href="#" title="แก้ไข">
                <i class="far fa-edit"></i>
              </a>&nbsp;
              <a href="#" title="ลบ">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>
<script type="text/javascript" src="assets/plugins/DataTables/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  // $('.data-table').DataTable();
  $('#tb_history').DataTable( {
    "order": [[ 0, "desc" ]]
  });
  $('#tb_edit').DataTable( {
    "order": [[ 0, "desc" ]]
  });

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
