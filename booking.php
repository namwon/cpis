<link rel='stylesheet' href='assets/plugins/fullcalendar-3.9.0/fullcalendar.css' />
<link rel='stylesheet' href='assets/plugins/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.css' />
<h2>การนัดหมาย</h2>
<div class="container-fluid mt-5 pt-5 pb-5 bg-white">
  <div class="row">
    <div class="col-md-6 order-2 order-md-1">
      <button type="button" name="btn-addbook" id="btn-addbook" class="btn btn-primary mt-3 d-sm-block d-md-none">
        <i class="fas fa-plus"></i> เพิ่มนัดหมาย
      </button>
      <form class="form-horizontal d-none d-md-block" id="frm_bookconf" name="frm_bookconf" method="post">
        <div class="form-group row">
          <label for="book_sdate" class="col-form-label col-lg-3">วันที่เริ่มต้น</label>
          <div class="col-lg-9 input-group mb-3">
            <input type="date" class="form-control col-lg-8" name="book_sdate" id="book_sdate" value="">
            <div class="input-group-append">
              <span class="input-group-text" id="calendar1"><i class="fas fa-calendar-alt"></i></span>
            </div>
            <input type="time" class="form-control col-lg-4" name="book_stime" id="book_stime" value="">
            <div class="input-group-append">
              <span class="input-group-text" id="clock1"><i class="far fa-clock"></i></span>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="book_edate" class="col-form-label col-lg-3">วันที่สิ้นสุด</label>
          <div class="col-lg-9 input-group mb-3">
            <input type="date" class="form-control col-lg-8" name="book_edate" id="book_edate" value="">
            <div class="input-group-append">
              <span class="input-group-text" id="calendar2"><i class="fas fa-calendar-alt"></i></span>
            </div>
            <input type="time" class="form-control col-lg-4" name="book_etime" id="book_etime" value="">
            <div class="input-group-append">
              <span class="input-group-text" id="clock2"><i class="far fa-clock"></i></span>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="book_title" class="col-form-label col-lg-3">หัวข้อการนัด</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" name="book_title" id="book_title">
          </div>
        </div>
        <div class="form-group row">
          <label for="book_name" class="col-form-label col-lg-3">ผู้เกี่ยวข้อง</label>
          <div class="col-lg-9">
            <input type="text" name="book_name" id="book_name" data-role="tagsinput" value="USER1,USER2,USER3">
          </div>
        </div>
        <div class="form-group row">
          <label for="book_remark" class="col-form-label col-lg-3">หมายเหตุ</label>
          <div class="col-lg-9">
            <textarea name="book_remark" id="book_remark" rows="3" class="form-control"></textarea>
          </div>
        </div>
        <div class="form-group">
          <button type="button" name="btn_save" id="btn_save" class="offset-lg-3 btn btn-primary">บันทึก</button>
          <button type="reset" name="btn_clear" id="btn_clear" class="btn btn-warning">ล้างข้อมูล</button>
        </div>
      </form>
    </div>
    <div class="col-md-6 order-1 order-md-2">
      <div id='calendar'></div>
    </div>
  </div>
</div>


<script src='assets/plugins/fullcalendar-3.9.0/lib/moment.min.js'></script>
<script src='assets/plugins/fullcalendar-3.9.0/fullcalendar.js'></script>
<script src="assets/plugins/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.js" charset="utf-8"></script>
<script type="text/javascript">
$(function() {

  $('#calendar').fullCalendar({
    defaultView: 'month',
    events: 'https://fullcalendar.io/demo-events.json',
    header: {
      left: 'prev,next',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,list'
    },
  });
  $("#btn-addbook").click(function(event) {
    $("#frm_bookconf").toggleClass( "d-none" );
  });
});
</script>
