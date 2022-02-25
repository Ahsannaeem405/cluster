@extends('admin.layout')
@section('page_title', 'View Event Page')
@section('content')

    <?php
    $role = Auth::user()->role;
    $post_role = Auth::user()->post_role;
    ?>


@if ($message = Session::get('success'))
<div class="alert alert-success ">
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-danger ">
<strong>{{ $message }}</strong>
</div>
@endif
    <div class="main-header">
        <div class="content-bg-wrap bg-group event-manager-bg"
            style="background:  linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.3)), url({{ asset('/img/events-manager.jpg') }})">
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content mt-5">
                        <h1>Your Events</h1>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ... end Main Header Groups -->

    <div class="container-fluid" style="padding-left: 47px;padding-right: 47px;">
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block responsive-flex">
                    <div class="ui-block-title">
                        <ul class="nav nav-tabs calendar-events-tabs" id="calendar-events-tabs" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link your_evnt1" id="notifications-tab ">
                                    Your Events <span class="items-round-little bg-breez">{{ $event->count() }}</span>
                                </a>
                                {{-- <a class="nav-link active" >Your Events</a> --}}
                            </li>

                            <li class="nav-item">
                                <a class="nav-link join_evnt1">Joined Events</a>
                            </li>

                            @if (Auth::user()->role == 'admin' || Auth::user()->post_role == 'manager')
                                <li class="nav-item">
                                    <a class="nav-link join_evnt12">Events list </a>
                                </li>
                            @endif


                        </ul>



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

                                        <?php

                                        $i = 0;
                                        ?>

                                        @if (isset($event_3) && count($event_3) > 0)
                                            @foreach ($event_3 as $events)
                                                <?php
                                                $i = $i + 1;

                                                ?>
                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="heading{{ $events->id }}">
                                                        <div class="event-time">
                                                            <time>{{ date('h:i A', strtotime($events->datetimepicker)) }}
                                                            </time>

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

                                                        </button>
                                                    </div>
                                                    <div id="collapse{{ $events->id }}"
                                                        @if ($i == 1) class="accordion-collapse collapse show" @else class="accordion-collapse collapse" @endif
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
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="accordion-item" style="    padding: unset;">
                                                <div class="jumbotron jumbotron-fluid"
                                                    style="    margin-bottom: 0;    border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: white;">
                                                    <div class="container">
                                                        <h5 class="text-center">No Event Available</h5>
                                                    </div>
                                                </div>
                                            </div>


                                        @endif

                                    </div>

                                </div>
                            </div>

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


        <div class="container-fluid" style="padding-right: 47px;padding-left: 47px;">
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

                                                <div class="author-date">
                                                    <a class="h3 event-title"
                                                        style="text-decoration: none">{{ $events->name }}</a>
                                                    <div class="event__date">
                                                        <time class="published" datetime="2017-03-24T18:18">
                                                            {{ date('Y-m-d h:i A', strtotime($events->datetimepicker)) }}
                                                        </time>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="post-thumb">
                                                <img loading="lazy"
                                                    @if (isset($events->image)) src="{{ asset("images/$events->image") }}" @endif
                                                    style="min-height: 339px; max-height: 339px;"
                                                    style="min-height: 339px; max-height: 339px;" alt="photo" width="770"
                                                    height="379">
                                            </div>

                                            <div class="row">
                                                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="post__author author vcard inline-items">

                                                        <i class="fa fa-user" style="font-size: 18px;"></i> &nbsp;

                                                        <div class="author-date">
                                                            <a class="h6 post__author-name fn"
                                                                href="#">{{ $events->User->first_name }}</a>
                                                            join this
                                                            <a href="#">{{ $events->name }}</a>
                                                            <div class="post__date">
                                                                <time>{{ date('h:i A', strtotime($events->datetimepicker)) }}
                                                                </time>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <p>
                                                        {{ $events->description }}
                                                    </p>

                                                    @if ((isset($mang->status) && $mang->status == 2) || Auth::user()->role == 'admin')
                                                        <div>
                                                            <form method="post" action="{{ url("$role/invite/user") }}">
                                                                @csrf

                                                                <?php
                                                                $get = $events->UserExist($events->id);
                                                                ?>

                                                                <label class="control-label">Invite User</label>

                                                                <select required class="clusterMultiple" name="userid[]"
                                                                    size="1" multiple>

                                                                    @foreach ($get as $gets)
                                                                        @if ($gets->id != Auth::user()->id)
                                                                            <option value="{{ $gets->id }}">
                                                                                {{ $gets->first_name }}
                                                                                {{ $gets->last_name }}
                                                                            </option>
                                                                        @endif
                                                                    @endforeach

                                                                </select>



                                                                <input type="hidden" value="{{ $events->cluster_id }}"
                                                                    name="clusterID" id="">

                                                                <input type="hidden" value="{{ $events->id }}"
                                                                    name="eventID" id="">

                                                                <input style="margin-top: 18px;" type="submit"
                                                                    class="btn btn-primary" value="Invite User">
                                                            </form>
                                                        </div>
                                                    @endif

                                                </div>

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


        <div id="join_evnt" role="tabpanel" aria-labelledby="notifications-tab">


            <div class="container-fluid" style="padding-left:47px;padding-right:47px;">
                <div class="row">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="ui-block">

                            @if (isset($event_join) && count($event_join) > 0)
                                <table class="event-item-table event-item-table-fixed-width">

                                    <thead>

                                        <tr>

                                            <th class="author">
                                                #
                                            </th>

                                            <th class="location">
                                                IMAGE
                                            </th>

                                            <th class="location">
                                                NAME
                                            </th>

                                            <th class="upcoming">
                                                DESCRIPTION
                                            </th>

                                            <th class="description">
                                                EVENT DATE </th>


                                        </tr>

                                    </thead>

                                    <tbody>
                                        <?php
                                        $i = 1;

                                        ?>


                                        @foreach ($event_join as $events)
                                            {{-- @dd($events) --}}



                                            <tr class="">
                                                <td class="author">
                                                    {{ $i++ }}
                                                </td>


                                                <td class="description event-as" atrr={{ $events->EventJoin->id }}>
                                                    <img loading="lazy"
                                                        src="{{ asset('images/') }}/{{ $events->EventJoin->image }}"
                                                        alt="friend" width="38" height="38">
                                                </td>

                                                <td class="location event-as" atrr={{ $events->EventJoin->id }}>
                                                    {{ $events->EventJoin->name }}

                                                </td>
                                                <td class="upcoming event-as" atrr={{ $events->EventJoin->id }}>
                                                    {{ $events->EventJoin->description }}
                                                </td>
                                                <td class="description event-as" atrr={{ $events->EventJoin->id }}>

                                                    {{ date('Y-m-d h:i A', strtotime($events->EventJoin->datetimepicker)) }}

                                                </td>


                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            @else
                                <div class="jumbotron jumbotron-fluid" style="    margin-bottom: 0;background: white;">
                                    <div class="container">
                                        <h4 class="text-center">No Data Available</h4>
                                    </div>
                                </div>


                            @endif

                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Event List --}}


        <div id="join_evnt22" role="tabpanel" aria-labelledby="notifications-tab">


            <div class="container-fluid" style="padding-left:47px;padding-right:47px;">
                <div class="row">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="ui-block">

                            @if (isset($event) && count($event) > 0)
                                <table class="event-item-table event-item-table-fixed-width">

                                    <thead>

                                        <tr>

                                            <th class="author">
                                                #
                                            </th>

                                            <th class="location">
                                                IMAGE
                                            </th>

                                            <th class="location">
                                                NAME
                                            </th>

                                            <th class="upcoming">
                                                DESCRIPTION
                                            </th>

                                            <th class="description">
                                                EVENT DATE </th>

                                            <th class="description">
                                                Action </th>


                                        </tr>

                                    </thead>

                                    <tbody>
                                        <?php
                                        $i = 1;

                                        ?>


                                        @foreach ($event as $events)
                                            <tr class="">
                                                <td class="author">
                                                    {{ $i++ }}
                                                </td>


                                                <td class="description">
                                                    <img loading="lazy"
                                                        src="{{ asset('images/') }}/{{ $events->image }}" alt="friend"
                                                        width="38" height="38">
                                                </td>

                                                <td class="location">
                                                    {{ $events->name }}

                                                </td>
                                                <td class="upcoming ">
                                                    {{ $events->description }}
                                                </td>
                                                <td class="description ">

                                                    {{ date('Y-m-d h:i A', strtotime($events->datetimepicker)) }}

                                                </td>
                                                <td>
                                                    <i class="fa fa-edit text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#edit-event{{$events->id}}" style="font-size: 18px;" aria-hidden="true"> </i>
                                                    &nbsp;

                                                    <i data-bs-toggle="modal" data-bs-target="#delete-new-event{{$events->id}}" class="fa fa-trash olymp-happy-faces-icon text-danger" style="font-size: 18px;" aria-hidden="true"> </i>

                                                </td>


                                            </tr>

                                            <div class="modal fade" id="edit-event{{$events->id}}" tabindex="-1" role="dialog" aria-labelledby="create-event"
                                            aria-hidden="true">
                                            <div class="modal-dialog window-popup create-event" role="document">
                                                <div class="modal-content">
                                                    <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                                                        <svg class="olymp-close-icon">
                                                            <use xlink:href="#olymp-close-icon"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="modal-header">
                                                        <h6 class="title">Edit an Event</h6>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form action="{{ url("$role/edit/event") }}/{{$events->id}}" enctype="multipart/form-data" method="POST">
                                                            @csrf

                                                            <div class="form-group  is-select">
                                                                <label class="control-label"> Event Type</label>
                                                                <select class="form-select" name="Event_type">
                                                                    <option value="Public" @if($events->Event_type == 'Public') selected @endif>Public Event</option>
                                                                    <option value="Private" @if($events->Event_type == 'Private') selected @endif>Private Event</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label">Event Name</label>
                                                                <input class="form-control" name="name" value="{{$events->name}}" required placeholder="Enter Event Name"
                                                                    type="text">
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label">Select Cluster</label>

                                                                <select class="form-select cluster_id1" name="cluster_id">
                                                                    @foreach ($clustor as $item)
                                                                        <option value="{{ $item->id }}"  @if($events->cluster_id == $item->id) selected @endif>{{ $item->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>


                                                            <input type="hidden" value="" name="mangerID" id="mangerID">




                                                            <div class="form-group  is-empty">
                                                                <label class="control-label">Event Location</label>
                                                                <input class="form-control"  required placeholder="Enter Event Location" name="location"
                                                                value="{{$events->location}}" type="text">
                                                            </div>



                                                            <div class="form-group date-time-picker">
                                                                <label class="control-label">Image</label>
                                                                <input type="file"  name="image" class="form-control" value="">
                                                                <img src="{{asset('images')}}/{{$events->image}}" width="80" height="80">
                                                            </div>

                                                            <div class="row">

                                                                <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                    <div class="form-group date-time-picker">
                                                                        <label class="control-label">Event Date</label>
                                                                        <input value="{{$events->datetimepicker}}" required type="datetime-local" style="height: 40px;" name="datetimepicker"
                                                                            class="form-control" name="date" >

                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div class="form-group">
                                                                <textarea class="form-control" required placeholder="Event Description"
                                                                    name="description">{{$events->description}}</textarea>
                                                            </div>



                                                            <input type="submit" class="btn btn-primary " value="Create Event" name="" id="">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        {{-- delte event --}}

<div class="modal fade" id="delete-new-event{{$events->id}}" tabindex="-1" role="dialog"
    aria-labelledby="create-friend-group-1" aria-hidden="true">
    <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon">
                    <use xlink:href="#olymp-close-icon"></use>
                </svg>
            </a>
            <div class="modal-header">
                <h6 class="title">Delete Event</h6>
            </div>

            <div class="modal-body">
                <div class="">
                    <p>Are you sure you want to delete this Event <span class="text-danger">{{$events->name}}</span></p>
                </div>
                <div class="row">
                    <div class="col-6">
                        <form method="post" action="{{url('admin/deleteEvent')}}/{{$events->id}}">
                            @csrf
                            <button type="submit" class="btn btn-danger full-width" class="close icon-close" >Yes</button>
                    </form>
                    </div>
                    <div class="col-6">
                    <button href="#" class="btn btn-warning  full-width" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">No</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
                                        @endforeach


                                    </tbody>
                                </table>
                            @else
                                <div class="jumbotron jumbotron-fluid" style="    margin-bottom: 0;background: white;">
                                    <div class="container">
                                        <h4 class="text-center">No Data Available</h4>
                                    </div>
                                </div>


                            @endif

                        </div>
                    </div>
                </div>
            </div>

        </div>


        {{-- Event List --}}




        <div class="container-fluid" style="padding-right: 47px;padding-left: 47px;">
            <div class="row">
                <div class="col-12">

                    @foreach ($event_join as $events)
                        <div class="modal fade" id="viewevent{{ $events->EventJoin->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="private-event" aria-hidden="true">
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

                                                <div class="author-date">
                                                    <a class="h3 event-title"
                                                        style="text-decoration: none">{{ $events->EventJoin->name }}</a>
                                                    <div class="event__date">
                                                        <time class="published" datetime="2017-03-24T18:18">
                                                            {{ date('Y-m-d h:i A', strtotime($events->EventJoin->datetimepicker)) }}

                                                        </time>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="post-thumb">
                                                <img loading="lazy" style="    min-height: 339px;max-height: 339px;"
                                                    @if (isset($events->EventJoin->image)) src="{{ asset('images/') }}/{{ $events->EventJoin->image }}" @endif
                                                    alt="photo" width="770" height="379">
                                            </div>

                                            <div class="row">
                                                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="post__author author vcard inline-items">
                                                        <img loading="lazy"
                                                            src="{{ asset('images/') }}/{{ $events->EventJoin->image }}"
                                                            width="36" height="36" alt="author">

                                                        <div class="author-date">
                                                            <a class="h6 post__author-name fn"
                                                                href="02-ProfilePage.html">{{ $events->User->first_name }}</a>
                                                            join this
                                                            <a href="#">{{ $events->EventJoin->name }}</a>
                                                            <div class="post__date">
                                                                <time class="published" datetime="2017-03-24T18:18">
                                                                    {{ date('h:i A', strtotime($events->EventJoin->datetimepicker)) }}

                                                                </time>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <p>
                                                        {{ $events->EventJoin->description }}
                                                    </p>



                                                    @if ((isset($mang->status) && $mang->status == 2) || Auth::user()->role == 'admin')
                                                        <div>
                                                            <form method="post" action="{{ url("$role/invite/user") }}">
                                                                @csrf


                                                                <?php
                                                                $get = $events->UserExist($events->id);
                                                                ?>


                                                                <label class="control-label">Invite User</label>
                                                                <select required class="clusterMultiple" name="userid[]"
                                                                    size="1" multiple>

                                                                    @foreach ($get as $gets)
                                                                        @if ($gets->id != Auth::user()->id)
                                                                            <option value="{{ $gets->id }}">
                                                                                {{ $gets->first_name }}
                                                                                {{ $gets->last_name }}
                                                                            </option>
                                                                        @endif
                                                                    @endforeach

                                                                    {{-- @foreach ($user as $users)
                                                                        <option value="{{ $users->id }}">
                                                                            {{ $users->first_name }}
                                                                            {{ $users->last_name }}</option>
                                                                    @endforeach --}}
                                                                </select>



                                                                <input type="hidden" value="{{ $events->cluster_id }}"
                                                                    name="clusterID" id="">
                                                                <input type="hidden" value="{{ $events->id }}"
                                                                    name="eventID" id="">

                                                                <input style="margin-top: 18px;" type="submit"
                                                                    class="btn btn-primary" value="Invite User">
                                                            </form>
                                                        </div>
                                                    @endif
                                                </div>

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
                        <form action="{{ url("$role/add/events") }}" enctype="multipart/form-data" method="POST">
                            @csrf

                            <div class="form-group  is-select">
                                <label class="control-label"> Event Type</label>
                                <select class="form-select evenType" name="Event_type">

                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Event Name</label>
                                <input class="form-control" name="name" required placeholder="Enter Event Name"
                                    type="text">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Select Cluster</label>

                                <select class="form-select cluster_id1" name="cluster_id">
                                    @foreach ($clustor as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            <input type="hidden" value="" name="mangerID" id="mangerID">




                            <div class="form-group  is-empty">
                                <label class="control-label">Event Location</label>
                                <input class="form-control" required placeholder="Enter Event Location" name="location"
                                    value="" type="text">
                            </div>



                            <div class="form-group date-time-picker">
                                <label class="control-label">Image</label>
                                <input type="file" accept="image/png, image/gif, image/jpg, image/jpeg" required
                                    name="image" class="form-control" value="">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row">

                                <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group date-time-picker">
                                        <label class="control-label">Event Date</label>
                                        <input required type="datetime-local" style="height: 40px;" name="datetimepicker"
                                            class="form-control" name="date">

                                    </div>
                                </div>


                            </div>

                            <div class="form-group">
                                <textarea class="form-control" required placeholder="Event Description"
                                    name="description"></textarea>
                            </div>



                            <input type="submit" class="btn btn-primary " value="Create Event" name="" id="">
                        </form>
                    </div>
                </div>
            </div>
        </div>








    </div>





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

                    @foreach ($event_join as $eventss)
                        {
                        title: '{{ $eventss->EventJoin->name }}',
                        start: '{{ $eventss->EventJoin->datetimepicker }}',
                        url: 'modal:#{{ $eventss->EventJoin->id }}'
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
                        title: '{{ $eventss->EventJoin->name }}',
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
        $(document).ready(function() {

            $("#join_evnt").css('display', 'none');
            $("#join_evnt22").css('display', 'none');
            $("#your_evnt").css('display', 'block');


            $(".your_evnt1").click(function() {
                $("#join_evnt").css('display', 'none');
                $("#join_evnt22").css('display', 'none');
                $("#your_evnt").css('display', 'block');

            });



            $(".join_evnt1").click(function() {
                $("#join_evnt22").css('display', 'none');
                $("#join_evnt").css('display', 'block');
                $("#your_evnt").css('display', 'none');

            });

            $(".join_evnt12").click(function() {
                $("#join_evnt22").css('display', 'block');
                $("#join_evnt").css('display', 'none');
                $("#your_evnt").css('display', 'none');

            });
        });
    </script>

    <script>
        $(document).ready(function() {


            var clusterID = $('.cluster_id1').val();

            $.ajax({
                type: "GET",
                url: "{{ url('getclusterID') }}?id=" + clusterID,
                success: function(res) {

                    if (res.type == 'Private') {
                        $('.evenType').empty().append("<option value='Private'>Private Event</option>");
                    } else {
                        $('.evenType').empty().append(
                            "<option value='Private'>Private Event</option><option value='Public'>Public Event</option>"
                        );

                    }

                    console.log(res.joinID);

                    $('#mangerID').empty().val(res.joinID);
                }
            });



            $(".cluster_id1").change(function() {

                var clusterID = $(this).val();
                // alert(clusterID);

                $.ajax({
                    type: "GET",
                    url: "{{ url('getclusterID') }}?id=" + clusterID,
                    success: function(res) {

                        if (res.type == 'Private') {
                            $('.evenType').empty().append(
                                "<option value='Private'>Private Event</option>");
                        } else {
                            $('.evenType').empty().append(
                                "<option value='Private'>Private Event</option><option value='Public'>Public Event</option>"
                            );

                        }
                        console.log(res.joinID);

                        $('#mangerID').empty().val(res.joinID);
                    }
                });




            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script>
        $(document).ready(function() {

            $(".event-as").click(function() {
                var id = $(this).attr('atrr');
                // alert(".vieweve" + id);

                // alert("#viewevent" + id);
                $("#viewevent" + id).modal('show');


            });

        });
    </script>

    <script>
        $(document).ready(function() {

            $('.clusterMultiple').select2();
        });
    </script>

@endsection
