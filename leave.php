<?php
$me = $_SESSION['user_id'];
$SQL = "SELECT e.emp_num, concat(t.TN_NAME, e.emp_fname,' ', e.emp_sname) as emp_name
        FROM tb_employee e
        LEFT JOIN titlename t ON e.emp_title = t.TN_CODE
        WHERE e.emp_num not in ('9999999','$me')";
$em = $db->arr_select($SQL);
//hl_id, emp_num, hl_type, hl_title, hl_sdate, hl_date, boss_1, boss_2, boss_3, boss1_approve, boss2_approve, boss3_approve, boss1_status, boss2_status, boss3_status, boss1_remark, boss2_remark, boss3_remark, hl_appdate, hl_remark
$SQL = "SELECT * FROM his_leave WHERE emp_num = '$me' ORDER BY hl_sdate DESC";
$tab3 = $db->arr_select($SQL);

?>
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
      <form  id="frm_leave" name="frm_leave" method="post">
        <div class="form-group row">
          <label for="hl_sdate" class="col-form-label col-lg-2">วันที่เริ่มต้น</label>
          <!-- <div class="col-lg-3 input-group mb-3">
            <input type="date" class="form-control" name="hl_sdate" id="hl_sdate" value="">
            <div class="input-group-append">
              <span class="input-group-text" id="calendar1"><i class="fas fa-calendar-alt"></i></span>
            </div>
          </div> -->
          <div class="col-lg-3">
            <input type="date" class="form-control" name="hl_sdate" id="hl_sdate" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="hl_date" class="col-form-label col-lg-2">วันที่สิ้นสุด</label>
          <!-- <div class="col-lg-3 input-group mb-3">
            <input type="date" class="form-control" name="hl_date" id="hl_date" value="">
            <div class="input-group-append">
              <span class="input-group-text" id="calendar1"><i class="fas fa-calendar-alt"></i></span>
            </div>
          </div> -->
          <div class="col-lg-3">
            <input type="date" class="form-control" name="hl_date" id="hl_date" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="hl_type" class="col-form-label col-lg-2">ประเภทการลา</label>
          <div class="col-lg-3">
            <select class="form-control" name="hl_type" id="hl_type">
              <option value="1">ลาป่วย</option>
              <option value="2">ลาพักผ่อน</option>
              <option value="3">ลาคลอด</option>
              <option value="4">ลากิจ</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="hl_title" class="col-form-label col-lg-2">เหตุของการลา</label>
          <div class="col-lg-9">
            <input type="text" name="hl_title" id="hl_title" class="form-control" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="boss_1" class="col-form-label col-lg-2">หัวหน้าลำดับที่ 1</label>
          <div class="col-lg-3">
            <select class="form-control" name="boss_1" id="boss_1">
              <option value="">...</option>
              <?php for ($i=0; $i < count($em); $i++) {
                echo "<option value=\"".$em[$i]['emp_num']."\">".$em[$i]['emp_name']."</option>";
              } ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="boss_2" class="col-form-label col-lg-2">หัวหน้าที่เหนือขึ้นไป</label>
          <div class="col-lg-3">
            <select class="form-control" name="boss_2" id="boss_2">
              <option value="">...</option>
              <?php for ($i=0; $i < count($em); $i++) {
                echo "<option value=\"".$em[$i]['emp_num']."\">".$em[$i]['emp_name']."</option>";
              } ?>
            </select>
          </div>
        </div>
        <input type="hidden" name="boss_3" id="boss_3" value="0000066">
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
        <?php
        $numList = count($tab3);
          for ($i=0; $i < count($tab3); $i++) {
            switch ($tab3[$i]['hl_type']) {
              case '1':
                $type = "ลาป่วย";
                break;
              case '2':
                $type = "ลาพักผ่อน";
                break;
              case '3':
                $type = "ลาคลอด";
                break;
              case '4':
                $type = "ลากิจ";
                break;
              default:
                $type = "ไม่ได้ระบุ";
                break;
            }
            $leavedate = _TSdateNopre($tab3[$i]['hl_sdate']);
            if ($tab3[$i]['hl_date'] != $tab3[$i]['hl_sdate']) {
              $leavedate = _TSdateNopre($tab3[$i]['hl_sdate']).' - '._TSdateNopre($tab3[$i]['hl_date']);
            }

            $leaveStatus = "";
            if ($tab3[$i]['boss3_approve'] == '0000-00-00') {
              $leaveStatus = "รอการอนุมัติ";
            }
        ?>
          <tr>
            <td><?php echo $numList-- ?></td>
            <td><?php echo $tab3[$i]['hl_title']; ?></td>
            <td><?php echo $leavedate; ?></td>
            <td><?php echo $leaveStatus; ?></td>
            <td><?php echo $type; ?></td>
            <td><?php echo _TSdateNopre($tab3[$i]['hl_appdate']); ?></td>
            <td>
            <?php
              if ($tab3[$i]['boss1_approve'] == '0000-00-00') {
            ?>
              <a href="#" title="แก้ไข">
                <i class="far fa-edit"></i>
              </a>&nbsp;
              <a href="#" title="ลบ">
                <i class="far fa-trash-alt"></i>
              </a>
            <?php
          } elseif ($tab3[$i]['boss1_approve'] != '0000-00-00' && $tab3[$i]['boss2_approve'] == '0000-00-00') {
            ?>
              <a href="#" title="ยกเลิกใบลา">
                <i class="fas fa-ban"></i>
              </a>
            <?php } ?>
            </td>
          </tr>
        <?php } ?>
          <!-- <tr>
            <td>4</td>
            <td>ลาพักผ่อน</td>
            <td>26 พฤศจิกายน 2561</td>
            <td>รอการอนุมัติ</td>
            <td>ลาพักผ่อน</td>
            <td>15 พฤศจิกายน 2561</td>
            <td>
              <a href="#" title="ยกเลิกใบลา">
                <i class="fas fa-ban"></i>
              </a>
              <a href="#" title="แก้ไข">
                <i class="far fa-edit"></i>
              </a>&nbsp;
              <a href="#" title="ลบ">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr> -->
        </tbody>
      </table>
    </div>

  </div>
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
<script type="text/javascript">
$(function() {

    $("#btn_save").click(function() {
      var formData = new FormData(document.getElementsByName('frm_leave')[0]); // yourForm: form selector

      $.confirm({
        theme: 'modern',
        title: 'Confirm!',
        type: 'orange',
        icon: 'fas fa-exclamation',
        content: 'คุณต้องการบันทึกการลา ใช่หรือไม่?',
        buttons: {
          btn1: {
            text: 'ตกลง',
            btnClass: 'btn-blue',
            action: function() {
              $.LoadingOverlay("show");
              $.ajax({
                type: "POST",
                url: "leave_save.php", // where you wanna post
                data: formData,
                processData: false,
                contentType: false,
                enctype: 'multipart/form-data',
                success: function(data) {
                  var str = data.split(",")
                  if (str[0].trim() == "success") {
                    window.location = "index.php?inc=leave";
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
