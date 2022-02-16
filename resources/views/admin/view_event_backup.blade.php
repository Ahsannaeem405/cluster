@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')

    <?php
    $role = Auth::user()->role;
    $post_role = Auth::user()->post_role;
    ?>

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
{{--
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="notifications-tab" data-bs-toggle="tab" href="#notifications"
                                    role="tab" aria-controls="home" aria-selected="false">
                                    Events <span class="items-round-little bg-breez">{{ $event->count() }}</span>
                                </a>
                            </li> --}}

                            {{-- <ul class="nav nav-pills" role="tablist"> --}}
                                @if($post_role  != 'user')
                                <li class="nav-item">
                                    <a class="nav-link" id="notifications-tab" data-bs-toggle="pill" href="#home" data-bs-toggle="tab"
                                    role="tab" aria-controls="home" aria-selected="false">
                                  Your Events <span class="items-round-little bg-breez">{{ $event->count() }}</span>
                                </a>
                                  {{-- <a class="nav-link active" >Your Events</a> --}}
                                </li>
                                @endif
                                <li class="nav-item">
                                  <a class="nav-link" data-bs-toggle="pill" href="#menu1">Join Events</a>
                                </li>



                              </ul>
                              <li class="nav-item">
                                <a style="    height: 36px;" class="btn btn-control bg-green" data-bs-toggle="modal"
                                data-bs-target="#create-event">
                                <svg class="olymp-plus-icon">
                                    <use xlink:href="#olymp-plus-icon"></use>
                                </svg>
                            </a>                                  </li>
                        {{-- </ul> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tab panes -->

    <div class="tab-content" id="calendar-events-tabs-content">

        <div    @if($post_role  != 'user') class="tab-pane fade show active" @else class="tab-pane fade show" @endif id="home" role="tabpanel" aria-labelledby="notifications-tab">
            <div class="container">
                <div class="row">

                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="ui-block">


                            <table class="event-item-table event-item-table-fixed-width">

                                <thead>

                                    <tr>
                                        <th>#</th>

                                        <th class="author">
                                            Picture
                                        </th>

                                        <th class="location">
                                            Name
                                        </th>

                                        <th class="upcoming">
                                            DATE
                                        </th>

                                        <th class="description">
                                            DESCRIPTION
                                        </th>



                                        <th class="add-event">

                                        </th>
                                    </tr>

                                </thead>

                                <tbody>
                                    <?php
                                    $i = 1;
                                    ?>

                                    @foreach ($event as $events)
                                        {{-- @dd($events->EventJoin) --}}

                                        <tr class="event-item">
                                            <td>{{ $i++ }}</td>
                                            <td class="author">
                                                <div class="event-author inline-items">
                                                    <div class="author-thumb">
                                                        <img loading="lazy" src="{{ asset('img/avatar62-sm.html') }}"
                                                            width="34" height="34" alt="author">
                                                    </div>
                                                    <div class="author-date">
                                                        {{-- @dd($events) --}}
                                                        <a href="#"
                                                            class="author-name h6">{{ Auth::user()->first_name }}
                                                            {{ Auth::user()->last_name }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="location">
                                                <div class="place inline-items">
                                                    {{-- <svg class="olymp-add-a-place-icon">
													<use xlink:href="#olymp-add-a-place-icon"></use>
												</svg> --}}
                                                    <span>{{ $events->name }}</span>
                                                </div>
                                            </td>
                                            <td class="upcoming">
                                                <div class="date-event inline-items align-left">
                                                    <svg class="olymp-small-calendar-icon">
                                                        <use xlink:href="#olymp-small-calendar-icon"></use>

                                                    </svg>

                                                    <span class="month">{{ $events->datetimepicker }}
                                                        {{ $events->time }}{{ $events->time_type }}</span>

                                                </div>
                                            </td>
                                            <td class="description">
                                                <p class="description">Hey! {{ $events->description }} </p>
                                            </td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div @if($post_role  != 'user') class="tab-pane fade show " @else class="tab-pane fade show active" @endif id="menu1" role="tabpanel" aria-labelledby="notifications-tab">
            <div class="container">
                <div class="row">

                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="ui-block">


                            <table class="event-item-table event-item-table-fixed-width">

                                <thead>

                                    <tr>
                                        <th>#</th>

                                        <th class="author">
                                            Picture
                                        </th>

                                        <th class="location">
                                            Name
                                        </th>

                                        <th class="upcoming">
                                            DATE
                                        </th>

                                        <th class="description">
                                            DESCRIPTION
                                        </th>



                                        <th class="add-event">

                                        </th>
                                    </tr>

                                </thead>

                                <tbody>
                                    <?php
                                    $i = 1;
                                    ?>

                                    @foreach ($event_join as $eventss)
                                        {{-- @dd($eventss->EventJoin) --}}

                                        <tr class="event-item">
                                            <td>{{ $i++ }}</td>
                                            <td class="author">
                                                <div class="event-author inline-items">
                                                    <div class="author-thumb">
                                                        <img loading="lazy" src="{{ asset('img/avatar62-sm.html') }}"
                                                            width="34" height="34" alt="author">
                                                    </div>
                                                    <div class="author-date">
                                                        <a href="#"
                                                            class="author-name h6">{{  Auth::user()->first_name }}
                                                            {{ Auth::user()->last_name }}</a>
                                                    </div>
                                                </div>
                                            </td>

                                            {{-- @dd(Auth::user()->first_name) --}}
                                            <td class="location">
                                                <div class="place inline-items">
                                                    {{-- <svg class="olymp-add-a-place-icon">
													<use xlink:href="#olymp-add-a-place-icon"></use>
												</svg> --}}
                                                    <span>{{ $eventss->EventJoin->name }}</span>
                                                </div>
                                            </td>
                                            <td class="upcoming">
                                                <div class="date-event inline-items align-left">
                                                    <svg class="olymp-small-calendar-icon">
                                                        <use xlink:href="#olymp-small-calendar-icon"></use>
                                                    </svg>

                                                    <span class="month">{{ $eventss->EventJoin->datetimepicker }}
                                                        {{ $eventss->EventJoin->time }}{{ $eventss->EventJoin->time_type }}</span>

                                                </div>
                                            </td>
                                            <td class="description">
                                                <p class="description">Hey! {{ $eventss->EventJoin->description }} </p>
                                            </td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>







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
                    <form action="{{ url("$role/add/event") }}" method="POST">
                        @csrf
                        <div class="form-group label-floating is-select">
                            <label class="control-label">Event Type</label>
                            <select class="form-select" name="Event_type">
                                <option value="Public">Public Event</option>
                                <option value="Private">Private Event</option>
                            </select>



                        </div>


                        <div class="form-group label-floating is-select">

                        <select class="form-select" name="mangerID">
                            @foreach ($clustor as $item)

                            <option value="{{$item->id}}" title="Green Goo Rock">{{$item->name}}</option>

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
                            <input name="datetimepicker" name="date" value="26/03/2016">
                            <span class="input-group-addon">
                                <svg class="olymp-calendar-icon icon">
                                    <use xlink:href="#olymp-calendar-icon"></use>
                                </svg>
                            </span>
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



        <!-- Tab panes -->
        <div class="tab-content">
          {{-- <div id="home" class="container tab-pane active"><br>
            <h3>HOME</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div> --}}
          {{-- <div id="menu1" class="container tab-pane fade"><br>
            <h3>Menu 1</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div> --}}

        </div>


        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var webpMachine = new webpHero.WebpMachine()
                webpMachine.polyfillDocument()
            });
        </script>






    <!-- JS Scripts -->

@endsection
