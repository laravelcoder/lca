@extends('layouts.app')

@section('content')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

    <h3 class="page-title">Calendar</h3>

    <div id='calendar'></div>
    
@stop

@section('javascript')
    @parent
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events : [
                        @foreach($events as $event)
                        @if($event->due_date)
                    {
                        title : '{{ $event->name }}',
                        start : '{{ \Carbon\Carbon::createFromFormat(config('app.date_format'),$event->due_date)->format('Y-m-d') }}',
                        url : '{{ url('tasks').'/'.$event->id.'/edit' }}'
                    },
                        @endif
                    @endforeach
                ]
            })
        });
    </script>
@stop
