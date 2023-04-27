@extends('admin.layout.app')
@section('styles')
<style>
    .fc-event{
    color: white;
}
    .fc-event:hover{
    color: #20bbc7;
}

</style>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        // timeZone: 'Asia/Jakarta',
        locale: 'en-GB',
        startime: '08:00:00', /* calendar start Timing */
        endime: '16:00:00',  /* calendar end Timing */
        headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
        events: @json($events),
        eventTimeFormat: { // like '14:30:00'
          hour: '2-digit',
          minute: '2-digit',
          second: '2-digit',
          hour12: false
    }
  
      });
      calendar.render();
    });
  
  </script>
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div id='calendar'></div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


@stop
@section('scripts')
@stop
