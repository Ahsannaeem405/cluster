@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')

    <?php
    $role = Auth::user()->role;
    $post_role = Auth::user()->post_role;
    ?>

    <!-- ... end Responsive Header-BP -->

    <div class="header-spacer header-spacer-small"></div>


    <!-- Main Header Groups -->

    <div class="main-header">
        <div class="content-bg-wrap bg-group event-manager-bg"
            style="background:  linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.3)), url({{ asset('/img/events-manager.jpg') }})">
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Your Events</h1>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ... end Main Header Groups -->

    <div class="container">
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block responsive-flex">
                    <div class="ui-block-title">
                        <ul class="nav nav-tabs calendar-events-tabs" id="calendar-events-tabs" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link your_evnt1" id="notifications-tab "
                                      >
                                        Your Events <span class="items-round-little bg-breez">{{ $event->count() }}</span>
                                    </a>
                                    {{-- <a class="nav-link active" >Your Events</a> --}}
                                </li>

                            <li class="nav-item">
                                <a class="nav-link join_evnt1" >Join Events</a>
                            </li>



                        </ul>
                        @if ((isset($mang->status) && $mang->status == 2) || Auth::user()->role == 'admin')

                        <li class="nav-item">
                            <a style="    height: 36px;" class="btn btn-control bg-green" data-bs-toggle="modal"
                                data-bs-target="#create-event">
                                <svg class="olymp-plus-icon">
                                    <use xlink:href="#olymp-plus-icon"></use>
                                </svg>
                            </a>
                        </li>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tab panes -->

    <div class="tab-content" id="calendar-events-tabs-content">
        {{-- calender for your joins --}}
        <div id="your_evnt" role="tabpanel" aria-labelledby="notifications-tab">



            <div class="container-fluid pl-5 pr-5">
                <div class="row">
                    <div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="ui-block">


                            <!-- Today Events -->

                            <div class="today-events calendar">
                                <div class="today-events-thumb">
                                    <div class="date">
                                        <div class="day-number">{{ date('d') }}  </div>
                                        <div class="day-week">{{ date('D') }}</div>
                                        <div class="month-year">{{ date('M, Y') }}</div>
                                    </div>
                                </div>

                                <div class="list">
                                    <div class="control-block-button">

                                        {{-- @if (isset($mang->status)) --}}
                                        @if ((isset($mang->status) && $mang->status == 2) || Auth::user()->role == 'admin')
                                            <a style="height: 100%;" class="btn btn-control bg-green" data-bs-toggle="modal"
                                                data-bs-target="#create-event">
                                                <svg class="olymp-plus-icon">
                                                    <use xlink:href="#olymp-plus-icon"></use>
                                                </svg>
                                            </a>
                                        @endif

                                    </div>

                                    <div class="accordion day-event" id="accordionExample" data-month="12" data-day="2">



                                        @if (isset($event))
                                            {{-- @if ($event_3->id) --}}


                                            @foreach ($event as $events)

                                                {{-- @if ($events->Event->cluster_id == $id && $events->Event->user_id == Auth::user()->id) --}}

                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="heading{{ $events->id }}">
                                                        <div class="event-time">
                                                            <time datetime="2004-07-24T18:18">{{ $events->time }}
                                                                {{ $events->time_type }}</time>

                                                        </div>
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{ $events->id }}"
                                                            aria-expanded="true"
                                                            aria-controls="collapse{{ $events->id }}">
                                                            {{ $events->name }}
                                                            <svg width="8" height="8">
                                                                <use xlink:href="#olymp-dropdown-arrow-icon"></use>
                                                            </svg>
                                                            <span class="event-status-icon" data-bs-toggle="modal"
                                                                data-bs-target="#public-event">
                                                                <svg class="olymp-calendar-icon" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-original-title="UNCOMPLETED">
                                                                    <use xlink:href="#olymp-calendar-icon"></use>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <div id="collapse{{ $events->id }}"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="heading{{ $events->id }}"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            {{ $events->description }}
                                                            <div class="place inline-items">
                                                                <svg class="olymp-add-a-place-icon">
                                                                    <use xlink:href="#olymp-add-a-place-icon"></use>
                                                                </svg>
                                                                <span> {{ $events->location }}</span>
                                                            </div>

                                                            <ul class="friends-harmonic inline-items">

                                                                <li>
                                                                    <a href="#">
                                                                        <img loading="lazy"
                                                                            src="{{ asset("images/$events->image") }}"
                                                                            alt="friend" width="28" height="28">
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- @endif --}}
                                            @endforeach

                                        @endif

                                    </div>

                                </div>
                            </div>

                            <!-- ... end Today Events -->
                        </div>
                    </div>
                    <div class="col col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="ui-block">


                            <div id="calendar" class="crumina-full-calendar">


                            </div>




                        </div>

                    </div>
                </div>
            </div>


        </div>


        <div class="container">
            <div class="row">
                <div class="col-12">

                    @foreach ($event as $events)
                        <div class="modal fade" id="{{ $events->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="private-event" aria-hidden="true">
                            <div class="modal-dialog window-popup event-private-public private-event modal-md"
                                role="document">
                                <div class="modal-content">
                                    <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg class="olymp-close-icon">
                                            <use xlink:href="#olymp-close-icon"></use>
                                        </svg>
                                    </a>
                                    <div class="modal-body">
                                        <article class="hentry post has-post-thumbnail thumb-full-width private-event">

                                            <div class="private-event-head inline-items">
                                                <img loading="lazy" src="{{ asset('img/avatar77-sm.html') }}"
                                                    alt="author" width="40" height="40">

                                                <div class="author-date">
                                                    <a class="h3 event-title" href="#">{{ $events->name }}</a>
                                                    <div class="event__date">
                                                        <time class="published" datetime="2017-03-24T18:18">
                                                            {{ $events->datetimepicker }}
                                                        </time>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="post-thumb">
                                                <img loading="lazy" @if (isset($events->image)) src="{{ asset("images/$events->image") }}"  @endif alt="photo" width="770"
                                                    height="379">
                                            </div>

                                            <div class="row">
                                                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="post__author author vcard inline-items">
                                                        <img loading="lazy" src="{{ asset('img/author-page.html') }}"
                                                            width="36" height="36" alt="author">

                                                        <div class="author-date">
                                                            <a class="h6 post__author-name fn"
                                                                href="02-ProfilePage.html">{{ $events->User->first_name }}</a>
                                                            created the
                                                            <a href="#">{{ $events->name }}</a>
                                                            <div class="post__date">
                                                                <time class="published" datetime="2017-03-24T18:18">
                                                                    {{ $events->datetimepicker }}
                                                                </time>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <p>
                                                        {{ $events->description }}
                                                    </p>
                                                </div>

                                            </div>



                                            <div class="control-block-button post-control-button">

                                                <a href="#" class="btn btn-control">
                                                    <svg class="olymp-like-post-icon">
                                                        <use xlink:href="#olymp-like-post-icon"></use>
                                                    </svg>
                                                </a>

                                                <a href="#" class="btn btn-control">
                                                    <svg class="olymp-comments-post-icon">
                                                        <use xlink:href="#olymp-comments-post-icon"></use>
                                                    </svg>
                                                </a>

                                            </div>

                                        </article>


                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        {{-- calender for your joins --}}



        {{-- calender for join event --}}


        <div  id="join_evnt" role="tabpanel" aria-labelledby="notifications-tab">
            <div class="container-fluid pl-5 pr-5">
                <div class="row">
                    <div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="ui-block">


                            <!-- Today Events -->

                            <div class="today-events calendar">
                                <div class="today-events-thumb">
                                    <div class="date">
                                        <div class="day-number">{{ date('d') }}</div>
                                        <div class="day-week">{{ date('D') }}</div>
                                        <div class="month-year">{{ date('M, Y') }}</div>
                                    </div>
                                </div>

                                <div class="list">
                                    <div class="control-block-button">

                                        {{-- @if (isset($mang->status)) --}}
                                        @if ((isset($mang->status) && $mang->status == 2) || Auth::user()->role == 'admin')
                                            <a style="height: 100%;" class="btn btn-control bg-green" data-bs-toggle="modal"
                                                data-bs-target="#create-event">
                                                <svg class="olymp-plus-icon">
                                                    <use xlink:href="#olymp-plus-icon"></use>
                                                </svg>
                                            </a>
                                        @endif

                                    </div>

                                    <div class="accordion day-event" id="accordionExample" data-month="12" data-day="2">



                                        @if (isset($event_join))
                                            {{-- @if ($event_3->id) --}}


                                            @foreach ($event_join as $events)

                                                {{-- @if ($events->Event->cluster_id == $id && $events->Event->user_id == Auth::user()->id) --}}

                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="heading{{ $events->id }}">
                                                        <div class="event-time">
                                                            <time datetime="2004-07-24T18:18">{{ $events->EventJoin->time }}
                                                                {{ $events->EventJoin->time_type }}</time>

                                                        </div>
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{ $events->EventJoin->id }}"
                                                            aria-expanded="true"
                                                            aria-controls="collapse{{ $events->EventJoin->id }}">
                                                            {{ $events->EventJoin->name }}
                                                            <svg width="8" height="8">
                                                                <use xlink:href="#olymp-dropdown-arrow-icon"></use>
                                                            </svg>
                                                            <span class="event-status-icon" data-bs-toggle="modal"
                                                                data-bs-target="#public-event">
                                                                <svg class="olymp-calendar-icon" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-original-title="UNCOMPLETED">
                                                                    <use xlink:href="#olymp-calendar-icon"></use>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <div id="collapse{{ $events->EventJoin->id }}"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="heading{{ $events->EventJoin->id }}"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            {{ $events->EventJoin->description }}
                                                            <div class="place inline-items">
                                                                <svg class="olymp-add-a-place-icon">
                                                                    <use xlink:href="#olymp-add-a-place-icon"></use>
                                                                </svg>
                                                                <span> {{ $events->EventJoin->location }}</span>
                                                            </div>

                                                            <ul class="friends-harmonic inline-items">

                                                                <li>
                                                                    <a href="#">
                                                                        <img loading="lazy"
                                                                            src="{{ asset("images/$events->EventJoin->image") }}"
                                                                            alt="friend" width="28" height="28">
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- @endif --}}
                                            @endforeach

                                        @endif

                                    </div>

                                </div>
                            </div>

                            <!-- ... end Today Events -->
                        </div>
                    </div>
                    <div class="col col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="ui-block">


                            <div id="calendar1" class="crumina-full-calendar">


                            </div>




                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-12">

                    @foreach ($event_join as $events)
                        <div class="modal fade" id="{{  $events->EventJoin->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="private-event" aria-hidden="true">
                            <div class="modal-dialog window-popup event-private-public private-event modal-md"
                                role="document">
                                <div class="modal-content">
                                    <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg class="olymp-close-icon">
                                            <use xlink:href="#olymp-close-icon"></use>
                                        </svg>
                                    </a>
                                    <div class="modal-body">
                                        <article class="hentry post has-post-thumbnail thumb-full-width private-event">

                                            <div class="private-event-head inline-items">
                                                <img loading="lazy" src="{{ asset('img/avatar77-sm.html') }}"
                                                    alt="author" width="40" height="40">

                                                <div class="author-date">
                                                    <a class="h3 event-title" href="#">{{  $events->EventJoin->name }}</a>
                                                    <div class="event__date">
                                                        <time class="published" datetime="2017-03-24T18:18">
                                                            {{ $events->EventJoin->datetimepicker }}
                                                        </time>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="post-thumb">
                                                <img loading="lazy" @if (isset($events->EventJoin->image)) src="{{ asset("images/$events->EventJoin->image") }}"  @endif alt="photo" width="770"
                                                    height="379">
                                            </div>

                                            <div class="row">
                                                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="post__author author vcard inline-items">
                                                        <img loading="lazy" src="{{ asset('img/author-page.html') }}"
                                                            width="36" height="36" alt="author">

                                                        <div class="author-date">
                                                            <a class="h6 post__author-name fn"
                                                                href="02-ProfilePage.html">{{ $events->EventJoin->User->first_name }}</a>
                                                            created the
                                                            <a href="#">{{ $events->EventJoin->name }}</a>
                                                            <div class="post__date">
                                                                <time class="published" datetime="2017-03-24T18:18">
                                                                    {{ $events->EventJoin->datetimepicker }}
                                                                </time>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <p>
                                                        {{ $events->EventJoin->description }}
                                                    </p>
                                                </div>

                                            </div>



                                            <div class="control-block-button post-control-button">

                                                <a href="#" class="btn btn-control">
                                                    <svg class="olymp-like-post-icon">
                                                        <use xlink:href="#olymp-like-post-icon"></use>
                                                    </svg>
                                                </a>

                                                <a href="#" class="btn btn-control">
                                                    <svg class="olymp-comments-post-icon">
                                                        <use xlink:href="#olymp-comments-post-icon"></use>
                                                    </svg>
                                                </a>

                                            </div>

                                        </article>


                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        {{-- calender for join event --}}







        <div class="modal fade" id="create-event" tabindex="-1" role="dialog" aria-labelledby="create-event"
            aria-hidden="true">
            <div class="modal-dialog window-popup create-event" role="document">
                <div class="modal-content">
                    <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="olymp-close-icon">
                            <use xlink:href="#olymp-close-icon"></use>
                        </svg>
                    </a>
                    <div class="modal-header">
                        <h6 class="title">Create an Event</h6>
                    </div>

                    <div class="modal-body">
                        <form action="{{ url("$role/add/event") }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group label-floating is-select">
                                <label class="control-label">Personal Event</label>
                                <select class="form-select" name="Event_type">
                                    <option value="Public">Public Event</option>
                                    <option value="Private">Private Event</option>
                                </select>



                            </div>


                            <div class="form-group label-floating is-select">

                                <select class="form-select" name="mangerID">
                                    @foreach ($clustor as $item)
                                        <option value="{{ $item->id }}" title="Green Goo Rock">{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group label-floating">
                                <label class="control-label">Event Name</label>
                                <input class="form-control" name="name" placeholder=""
                                    value="Take Querty to the Veterinarian" type="text">
                            </div>
                            {{-- <input type="hidden" value="@if (isset($mang->id)) {{ $mang->id }} @endif" name="mangerID" id=""> --}}

                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Event Location</label>
                                <input class="form-control" placeholder="" name="location" value="" type="text">
                            </div>

                            <div class="form-group date-time-picker label-floating">
                                <label class="control-label">Event Date</label>
                                <input name="datetimepicker" required type="date" name="date">

                            </div>

                            <div class="form-group date-time-picker label-floating">
                                <label class="control-label">Image</label>
                                <input type="file" name="image" value="">

                            </div>
                            <div class="row">
                                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Event Time</label>
                                        <input class="form-control" name="time" placeholder="" value="09:00" type="text">
                                    </div>
                                </div>
                                <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">AM-PM</label>
                                        <select class="form-select" name="time_type">
                                            <option value="AM">AM</option>
                                            <option value="PM">PM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Timezone</label>
                                        <select class="form-select" name="timezone">
                                            <option value="US">US (UTC-8)</option>
                                            <option value="UK">UK (UTC-0)</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <textarea class="form-control" placeholder="Event Description"
                                    name="description">I need to take Querty for a check up and ask the doctor if he needs a new tank.</textarea>
                            </div>

                            <div class="form-group">
                                <svg class="olymp-happy-face-icon">
                                    <use xlink:href="#olymp-happy-face-icon"></use>
                                </svg>

                                <select class="form-select" name="type_Emj">
                                    <option value="Green" title="Green Goo Rock">Green Goo Rock</option>

                                    <option value="Mathilda" title="Mathilda Brinker">Mathilda Brinker</option>

                                    <option value="Marina" title="Marina Valentine">Marina Valentine</option>

                                    <option value="Dave" title="Dave Marinara">Dave Marinara</option>

                                    <option value="Rachel" title="Rachel Howlett">Rachel Howlett</option>

                                </select>



                            </div>

                            <input type="submit" class="btn btn-primary " value="Create Event" name="" id="">
                            {{-- <button>Create Event</button> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>


{{-- @dd($event_join[1]->EventJoin) --}}

    <?php

    $currentDate = date('Y-m-d');
    $date1 = strtr($currentDate, '/', '-');
    $currentDate = date('Y-m-d', strtotime($date1));

    ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="{{ asset('js/libs/fullcalendar.min.js') }}"></script>

    <script>
        fullCalendar = function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['interaction', 'dayGrid', 'timeGrid'],
                defaultView: 'dayGridMonth',
                defaultDate: '<?php echo $currentDate; ?>',
                header: {
                    left: 'prev',
                    center: 'title',
                    right: 'next,dayGridMonth,timeGridWeek,timeGridDay'
                },
                buttonText: {
                    month: ' ',
                    week: ' ',
                    day: ' '
                },
                buttonIcons: {
                    prev: 'far fa-chevron-left',
                    next: 'far fa-chevron-right'
                },

                eventClick: function(info) {
                    var url = info.event.url;
                    var is_modal = url.match(/^modal\:(#[-\w]+)$/);
                    if (!is_modal) {
                        return;
                    }

                    info.jsEvent.preventDefault();
                    var modal = is_modal[1];

                    $(modal).modal('show');
                },
                events: [


                    @foreach ($event as $events)
                        {
                        title: '{{ $events->name }}',
                        start: '{{ $events->datetimepicker }}',
                        url: 'modal:#{{ $events->id }}'
                        },
                    @endforeach


                ]
            });

            calendar.render();
        };

        document.addEventListener("DOMContentLoaded", function() {
            fullCalendar();
        });
    </script>

    <script>
        fullCalendar1 = function() {
            var calendarEli = document.getElementById('calendar1');

            var calendar1 = new FullCalendar.Calendar(calendarEli, {
                plugins: ['interaction', 'dayGrid', 'timeGrid'],
                defaultView: 'dayGridMonth',
                defaultDate: '<?php echo $currentDate; ?>',
                header: {
                    left: 'prev',
                    center: 'title',
                    right: 'next,dayGridMonth,timeGridWeek,timeGridDay'
                },
                buttonText: {
                    month: ' ',
                    week: ' ',
                    day: ' '
                },
                buttonIcons: {
                    prev: 'far fa-chevron-left',
                    next: 'far fa-chevron-right'
                },

                eventClick: function(info) {
                    var url = info.event.url;
                    var is_modal = url.match(/^modal\:(#[-\w]+)$/);
                    if (!is_modal) {
                        return;
                    }

                    info.jsEvent.preventDefault();
                    var modal = is_modal[1];

                    $(modal).modal('show');
                },
                events: [


                    @foreach ($event_join as $eventss)
                        {
                        title: '{{  $eventss->EventJoin->name  }}',
                        start: '{{ $eventss->EventJoin->datetimepicker }}',
                        url: 'modal:#{{ $eventss->EventJoin->id }}'
                        },
                    @endforeach


                ]
            });

            calendar1.render();
        };

        document.addEventListener("DOMContentLoaded", function() {
            fullCalendar1();
        });
    </script>


<script>

$(document).ready(function(){

    $("#join_evnt").css('display', 'none');
    $("#your_evnt").css('display', 'block');

$(".your_evnt1").click(function(){
    $("#join_evnt").css('display', 'none');
    $("#your_evnt").css('display', 'block');
    // alert(12);

});



$(".join_evnt1").click(function(){
    $("#join_evnt").css('display', 'block');
    $("#your_evnt").css('display', 'none');
    // alert(12);

});
});

</script>


@endsection
