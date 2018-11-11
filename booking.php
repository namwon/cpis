<link rel='stylesheet' href='assets/plugins/fullcalendar-3.9.0/fullcalendar.css' />
<h2>การนัดหมาย</h2>
<div class="container-fluid mt-5 pt-5 pb-5 bg-white">
  <div class="row">
    <div class="col-md-6">

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
