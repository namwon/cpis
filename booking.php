<link rel='stylesheet' href='assets/plugins/fullcalendar-3.9.0/fullcalendar.css' />
<h2>การนัดหมาย</h2>
<div class="container-fluid mt-5 pt-5 pb-5 bg-white">
  <div class="row">
    <div class="col-md-6">
      <form class="form-horizontal" id="frm_bookconf" name="frm_bookconf" method="post">
        <div class="form-group row">
          <label for="book_sdate" class="col-form-label col-lg-2">วันที่เริ่มต้น</label>
          <div class="col-lg-6 input-group mb-3">
            <input type="date" class="form-control" name="book_sdate" id="book_sdate" value="">
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
          <label for="book_edate" class="col-form-label col-lg-2">วันที่สิ้นสุด</label>
          <div class="col-lg-6 input-group mb-3">
            <input type="date" class="form-control" name="book_edate" id="book_edate" value="">
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
          <label for="book_title" class="col-form-label col-lg-2">หัวข้อการนัด</label>
          <div class="col-lg-7">
            <input type="text" class="form-control" name="book_title" id="book_title">
          </div>
        </div>
        <div class="form-group">
          <button type="button" name="btn_save" id="btn_save" class="offset-lg-2 btn btn-primary">บันทึก</button>
          <button type="reset" name="btn_clear" id="btn_clear" class="btn btn-warning">ล้างข้อมูล</button>
        </div>
      </form>
    </div>
    <div class="col-md-6">
      <div id='calendar'></div>
    </div>
  </div>
</div>



<script src='assets/plugins/fullcalendar-3.9.0/lib/moment.min.js'></script>
<script src='assets/plugins/fullcalendar-3.9.0/fullcalendar.js'></script>
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

});
</script>
