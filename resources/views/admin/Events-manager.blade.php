@extends('admin.layout')
@section('page_title', 'Event Page')
@section('content')
    <?php
    $role = Auth::user()->post_role;
    $var = 0;
    $ii = 0;
    ?>
    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        .author-thumb img {
    border-radius: 9px !important;
    overflow: hidden;
}

    </style>
    {{-- @dd( $role) --}}
    <!-- Main Header Groups -->

    <div class="main-header">
        <div class="content-bg-wrap bg-group event-manager-bg"
            style="background:  linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.3)), url({{ asset('/img/events-manager.jpg') }})">
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content mt-5">
                        <h1>Manage Cluster</h1>
                        <p>Welcome to your event manager page. Here you can Add new, Edit and Delete events.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ... end Main Header Groups -->

    <div class="container">
        <div class="row">

            @if (session()->has('sucess'))
                <div class="alert alert-success">
                    {{ session()->get('sucess') }}
                </div>
            @endif

        </div>
    </div>
    <!-- Tab panes -->
    <div class="tab-content" id="calendar-events-tabs-content">
        <div class="tab-pane fade show active" id="events" role="tabpanel" aria-labelledby="events-tab">
            <div class="container-fluid" style="padding-left: 51px;padding-right: 51px;">
                <div class="row">
                    <div class="col col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">


                        <div class="ui-block">


                            <div class="widget w-weather">




                                <div class="row">

                                    <form
                                        @if (isset($clust->id)) action="{{ url("$role/upd/cluster/$clust->id") }}" @endif
                                        method="post">
                                        @csrf
                                        {{-- <div class="col-12">
                                            <img class="" loading="lazy" @if (isset($clus_img1[0]))  src="{{ asset("images/$clus_img1[0]") }}" @endif alt="author"
                                                style="    border-radius: 28%;" width="100" height="100">
                                        </div> --}}


                                        <div class="col-12">



                                            <div class="wethear-now inline-items">
                                                <div class="temperature-sensor" style="font-size: 38px">
                                                    @if (isset($clust->name))
                                                        {{ $clust->name }}
                                                    @endif
                                                </div>


                                            </div>


                                            <div class="wethear-now-description">


                                                @if ((isset($mang->status) && $mang->status == 2) || Auth::user()->role == 'admin')
                                                    <div class="climate cls_description">
                                                        <textarea name="detail"
                                                            style="  font-size: 16px;       margin-top: 15px;  border: none;    color: white;    font-weight: 400;background-color: rgba(0, 0, 0, 0);"
                                                            name="" id="" cols="30" rows="2">
                                                                                @if (isset($clust->detail))
    {{ $clust->detail }}
    @endif
                                                                            </textarea>

                                                    </div>

                                                @else
                                                    <div class="climate mt-2">
                                                        @if (isset($clust->detail))
                                                            {{ $clust->detail }}
                                                        @endif
                                                    </div>
                                                @endif



                                            </div>

                                        </div>

                                        <div class="col-12 position-relative">


                                            <div class="control-block-button" style="right: 11px;">


                                                <input style="margin-bottom: 0px;width: 11%;display: none" type="submit"
                                                    class="btn btn-primary formsub" value="Submit" name="" id="">


                                                <a style="height: 100%;display: none;"
                                                    class="btn btn-control bg-green submitbtn">


                                                    <svg class="olymp-plus-icon ">
                                                        <use xlink:href="#olymp-plus-icon"></use>
                                                    </svg>



                                                </a>


                                            </div>
                                        </div>

                                    </form>
                                </div>









                            </div>









                            <!-- W-Weather -->
                        </div>
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

{{-- @dd($event_3) --}}
                                        @if (isset($event_3) && count($event_3) > 0)


                                            @foreach ($event_3 as $events)
                                                <?php
                                                $i = $i + 1;

                                                ?>
                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="heading{{ $events->id }}">
                                                        <div class="event-time">
                                                            <time>{{ date('H:i A', strtotime($events->datetimepicker)) }}
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

                            <!-- ... end Today Events -->
                        </div>


                    </div>
                    <!-- Main Content -->
                    <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <div id="newsfeed-items-grid">



                            <div class="ui-block">

                                <!-- Search Result -->

                                <article class="hentry post searches-item">

                                    <div class="post__author author vcard inline-items text-center">


                                        <div class="author-date">
                                            <a class="h6 post__author-name fn"
                                                style="font-size: 20px;">{{ 'Cluster Overview' }}</a>
                                            <div class="country"></div>
                                        </div>



                                        <div class="more">
                                            <svg class="olymp-three-dots-icon">
                                                <use xlink:href="#olymp-three-dots-icon"></use>
                                            </svg>
                                            <ul class="more-dropdown">
                                                <li>
                                                    <a data-bs-toggle="modal" data-bs-target="#edit-clus">Upload Image</a>


                                                </li>

                                            </ul>
                                        </div>

                                    </div>

                                    <form
                                        @if (isset($clust->id)) action="{{ url("$role/upd/cluster_overview/$clust->id") }}" @endif
                                        method="post">
                                        @csrf
                                        <p class="user-description position-relative">
                                            @if ((isset($mang->status) && $mang->status == 2) || Auth::user()->role == 'admin')
                                                <input class="cls_description1" type="text" style="border: none;"
                                                    @if (isset($clust->cluster_overview)) value="{{ $clust->cluster_overview }}" @endif
                                                    placeholder="Enter Overview Detail" name="cluster_overview" id="">
                                            @else


                                                <input type="text" style="border: none;" required
                                                    @if (isset($clust->cluster_overview)) value="{{ $clust->cluster_overview }}" @endif
                                                    placeholder="Enter Overview Detail" id="">
                                            @endif


                                        <div class="control-block-button post-control-button heartt"
                                            style="top: 119px; display:none;">

                                            <a class="btn btn-control">
                                                <i class="fa fa-heart text-white" style="font-size: 17px;"
                                                    aria-hidden="true"></i>
                                            </a>


                                        </div>

                                        </p>




                                        <input style="margin-bottom: 0px;width: 11%;display:none" type="submit"
                                            class="btn btn-primary formsum1" value="Submit" name="" id="">


                                        {{-- </p> --}}
                                    </form>
                                    <div class="post-block-photo js-zoom-gallery">
                                        <?php
                                        $i = 1;
                                        ?>
                                        {{-- @dd($clus_img2) --}}

                                        @if (isset($clus_img))
                                            @foreach ($clus_img as $clus_imgs)
                                                @if ($clus_imgs != null)
                                                    <?php
                                                    $i++;
                                                    ?>

                                                    <a href="{{ asset("images/$clus_imgs") }}" class="col col-3-width">
                                                        <img loading="lazy" src="{{ asset("images/$clus_imgs") }}"
                                                            alt="photo" width="600" height="600">
                                                    </a>
                                                @endif
                                            @endforeach
                                        @endif
                                        <a @if (isset($clus_img1[0])) href="{{ asset("images/$clus_img1[0]") }}" @endif
                                            @if ($count_clus != 100 && $count_clus != 1) class="more-photos col col-3-width" @else class=" col col-3-width" @endif>
                                            <img loading="lazy"
                                                @if (isset($clus_img1[0])) src="{{ asset("images/$clus_img1[0]") }}" @endif
                                                alt="photo" width="600" height="600">

                                            <span class="h2">
                                                @if ($count_clus != 100 && $count_clus != 1)
                                                    {{ $count_clus - 1 }}
                                                @endif
                                            </span>
                                        </a>
                                    </div>

                                    <div class="post-additional-info">

                                        {{-- <ul class="friends-harmonic">

                                            @if (isset($clus_img2))
                                                @foreach ($clus_img2 as $clus_imgs2)
                                                    @if ($clus_imgs2 != null)
                                                        <li>
                                                            <a href="#">
                                                                <img loading="lazy"
                                                                    src="{{ asset("images/$clus_imgs2") }}" alt="friend"
                                                                    width="28" height="28">
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul> --}}
                                        <div class="names-people-likes">

                                        </div>



                                    </div>

                                </article>
                                <!-- ... end Search Result -->
                            </div>









                            <div class="row">
                                <div class=" col-12 responsive-display-none" style="">
                                    <div class="ui-block responsive-flex">
                                        <div class="ui-block-title">

                                            <ul class="nav nav-tabs calendar-events-tabs" id="calendar-events-tabs"
                                                role="tablist">


                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="news-letter-tab" data-bs-toggle="tab"
                                                        href="#news-letter" role="tab" aria-controls="home"
                                                        aria-selected="true">
                                                        Total Events
                                                    </a>
                                                </li>

                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="meeting-tab" data-bs-toggle="tab"
                                                        href="#meeting" role="tab" aria-controls="home"
                                                        aria-selected="false">
                                                        Upcoming Events
                                                    </a>
                                                </li>



                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class=" col-12">

                                    <div class="tab-content" id="calendar-events-tabs-content">
                                        <div class="tab-pane fade show active" id="news-letter" role="tabpanel"
                                            aria-labelledby="news-letter-tab">
                                            <div class="row">
                                                <div class="col-12">


                                                    @if (count($event) > 0)
                                                        @foreach ($event as $events)
                                                            @foreach ($joinn as $item)
                                                                {{-- @dd( $item) --}}


                                                                @if ($item->event_id == $events->id)
                                                                    <?php
                                                                    $ii = $events->id;

                                                                    ?>
                                                                @endif
                                                            @endforeach

                                                            <div class="ui-block">
                                                                <article class="hentry post video">
                                                                    <div
                                                                        class="post__author author vcard inline-items text-center">


                                                                        <div class="author-date">
                                                                            <a class="h6 post__author-name fn" href="#"
                                                                                style="font-size: 26px;">{{ $events->name }}
                                                                            </a>

                                                                            <div class="post__date"
                                                                                style="font-size: 18px;">
                                                                                <time class="published"
                                                                                    datetime="2004-07-24T18:18">
                                                                                    {{ $events->datetimepicker }}
                                                                                    {{-- {{ date('h:i A', strtotime($events->time)) }} --}}
                                                                                </time>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <p style="font-size: 18px;">
                                                                        {{ $events->description }}</p>

                                                                    <div class="col-12 text-center">

                                                                        <img style="min-height: 299px;max-height: 299px;width: 69%" loading="lazy"
                                                                            src="{{ asset("images/$events->image") }}"
                                                                            alt="author" width="100" height="100">
                                                                    </div>
                                                                    <div class="col-12 text-end">
                                                                        @if (isset($events->Event->cluster_id))
                                                                            @if ($ii != $events->id)
                                                                                <a href="{{ url("$role/view/join", [$events->id, $events->Event->cluster_id]) }}"
                                                                                    class="btn btn-primary"> Join</a>
                                                                            @else
                                                                                <a class="btn btn-primary bg-green "
                                                                                    style="border-color:green; color:white">
                                                                                    Joined</a>
                                                                            @endif
                                                                        @endif
                                                                    </div>

                                                                </article>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="jumbotron jumbotron-fluid"
                                                            style="    border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: white;">
                                                            <div class="container">
                                                                <h5 class="text-center">No Event Available</h5>
                                                            </div>
                                                        </div>

                                                    @endif

                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="meeting" role="tabpanel"
                                            aria-labelledby="meeting-tab">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                                        style="padding: unset">

                                                        @if (isset($eventtime) && count($eventtime) > 0)
                                                            @foreach ($eventtime as $events)
                                                                @foreach ($joinn as $item)
                                                                    @if ($item->event_id == $events->id)
                                                                        <?php
                                                                        $ii = $events->id;

                                                                        ?>
                                                                    @endif
                                                                @endforeach


                                                                <div class="ui-block">
                                                                    <article class="hentry post video">
                                                                        <div
                                                                            class="post__author author vcard inline-items text-center">


                                                                            <div class="author-date">
                                                                                <a class="h6 post__author-name fn" href="#"
                                                                                    style="font-size: 26px;">{{ $events->name }}
                                                                                </a>
                                                                                {{-- created as <a
                                                                                        href="#">{{ $events->Event_type }}</a> --}}
                                                                                <div class="post__date"
                                                                                    style="font-size: 18px;">
                                                                                    <time class="published"
                                                                                        datetime="2004-07-24T18:18">
                                                                                        {{ $events->datetimepicker }}
                                                                                    </time>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <p style="font-size: 18px;">
                                                                            {{ $events->description }}</p>

                                                                        <div class="col-12 text-center">
                                                                            <img style="min-height: 299px;max-height: 299px;width: 69%" loading="lazy"
                                                                            src="{{ asset("images/$events->image") }}"
                                                                            alt="author" width="100" height="100">                 
                                                                            {{-- <img style="width: 34%" loading="lazy"
                                                                                src="{{ asset("images/$events->image") }}"
                                                                                alt="author" width="100" height="100"> --}}
                                                                        </div>
                                                                        <div class="col-12 text-end">
                                                                            {{-- @dd($events) --}}
                                                                            @if (isset($events->Event->cluster_id))
                                                                                @if ($ii != $events->id)
                                                                                    <a href="{{ url("$role/view/join", [$events->id, $events->Event->cluster_id]) }}"
                                                                                        class="btn btn-primary"> Join</a>
                                                                                @else
                                                                                    <a class="btn btn-primary bg-green "
                                                                                        style="border-color:green; color:white">
                                                                                        Joined</a>
                                                                                @endif
                                                                            @endif
                                                                        </div>

                                                                    </article>
                                                                </div>
                                                                {{-- <div class="ui-block">
                                                                    <article class="hentry post video">
                                                                        <div
                                                                            class="post__author author vcard inline-items">
                                                                            <img loading="lazy"
                                                                                src="{{ asset('img/avatar7-sm.html') }}"
                                                                                alt="author" width="42" height="42">

                                                                            <div class="author-date">
                                                                                <a class="h6 post__author-name fn"
                                                                                    href="#">{{ $events->Event->User->first_name }}
                                                                                    {{ $events->Event->User->last_name }}</a>
                                                                                created as <a
                                                                                    href="#">{{ $events->Event_type }}</a>
                                                                                <div class="post__date">
                                                                                    <time class="published"
                                                                                        datetime="2004-07-24T18:18">
                                                                                        {{ $events->datetimepicker }}
                                                                                        {{ $events->time }}{{ $events->time_type }}
                                                                                    </time>
                                                                                </div>
                                                                            </div>


                                                                        </div>

                                                                        <p>Hey <a
                                                                                href="#">{{ $events->Event->User->first_name }}</a>
                                                                            {{ $events->description }}</p>

                                                                        <div class="col-12 text-end">

                                                                            @if ($ii != $events->id)
                                                                                <a href="{{ url("$role/view/join", [$events->id, $events->Event->cluster_id]) }}"
                                                                                    class="btn btn-primary"> Join</a>
                                                                            @else
                                                                                <a class="btn btn-primary bg-green "
                                                                                    style="border-color:green; color:white">
                                                                                    Joined</a>
                                                                            @endif
                                                                        </div>

                                                                    </article>
                                                                </div> --}}
                                                            @endforeach
                                                        @else
                                                            <div class="jumbotron jumbotron-fluid"
                                                                style="    border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: white;">
                                                                <div class="container">
                                                                    <h5 class="text-center">No Event Available</h5>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>


                            </div>










                        </div>
                    </main>
                    <!-- ... end Main Content -->
                    <!-- Right Sidebar -->

                    <aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">



                        <div class="ui-block">
                            <div class="ui-block-title">
                                <h6 class="title">Cluster Managers</h6>
                            </div>




                            <ul class="widget w-friend-pages-added notification-list friend-requests">

                                @if (isset($manager) && count($manager) > 0)
                                    @foreach ($manager as $managers)
                                        <li class="inline-items">
                                            <div class="author-thumb">
                                                @if(isset($managers->User->image))
                                                <img alt="author"  src="{{asset('images')}}/{{$managers->User->image}}" width="36" height="36" class="avatar">

                                                    @else
                                                    <i style="font-size: 25px;margin-top: 5px;" class="fa fa-user"></i>


                                                    @endif
                                            </div>
                                            <div class="notification-event">
                                                <a href="#"
                                                    class="h6 notification-friend">{{ $managers->User->first_name }}
                                                    {{ $managers->User->last_name }}</a>
                                            </div>
                                        </li>
                                    @endforeach
                                @else
                                    <li class="inline-items">
                                        <div class="col-12 text-center">
                                            <span>
                                                No data available
                                            </span>
                                        </div>

                                    </li>
                                @endif

                            </ul>

                            <!-- ... end W-Action -->
                        </div>

                        <div class="ui-block text-center">

                            <div class="ui-block-title">
                                <h6 class="title " style="text-align: start"> Members</h6>
                            </div>



                            <ul class="widget w-activity-feed notification-list">
                                {{-- @dd($user) --}}
                                @if (count($user) > 1)
                                    @foreach ($user as $users)
                                        @if ($users->User->role != 'admin')
                                            <li>
                                                <div class="author-thumb">
                                                    @if(isset($users->User->image))
                                                    <img alt="author"  src="{{asset('images')}}/{{$users->User->image}}" width="36" height="36" class="avatar">

                                                        @else
                                                        <i style="font-size: 25px;margin-top: 5px;" class="fa fa-user"></i>


                                                        @endif
                                                </div>
                                                <div class="notification-event">
                                                    <b style="    font-size: 14px;"> {{ $users->User->first_name }}
                                                        {{ $users->User->last_name }}</b>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach

                                @else
                                    <li class="inline-items">
                                        <div class="col-12 text-center">
                                            <span>
                                                No data available
                                            </span>
                                        </div>

                                    </li>
                                @endif


                                @if ($user->count() > 3 && Auth::user()->role == 'admin')
                                    <li style=" background: #2d2d2d; padding: 7px;">
                                        <div class="col-12">
                                            <a href="{{ url("$role/view", [$id]) }}"
                                                style="    color: white;font-size: 16px;"> <span> See All </span></a>

                                        </div>

                                    </li>
                                @endif


                            </ul>

                            <!-- .. end W-Activity-Feed -->
                        </div>


                        <div class="ui-block text-center">

                            <div class="ui-block-title">
                                <h6 class="title " style="text-align: start"> Users</h6>
                            </div>



                            <ul class="widget w-activity-feed notification-list">


                                @if (isset($joinn1) && count($joinn1) > 0)
                                    @foreach ($joinn1 as $joinns)

                                        @if ($joinns->User->role != 'admin')

                                            <li>
                                                <div class="author-thumb">
                                                    @if(isset($joinns->User->image))
                                                    <img alt="author"  src="{{asset('images')}}/{{$joinns->User->image}}" width="36" height="36" class="avatar">

                                                        @else
                                                        <i style="font-size: 25px;margin-top: 5px;" class="fa fa-user"></i>


                                                        @endif
                                                </div>
                                                <div class="notification-event">
                                                    <b style="    font-size: 14px;"> {{ $joinns->User->first_name }}
                                                        {{ $joinns->User->last_name }}</b>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach

                                @else
                                    <li class="inline-items">
                                        <div class="col-12 text-center">
                                            <span>
                                                No data available
                                            </span>
                                        </div>

                                    </li>
                                @endif




                            </ul>

                            <!-- .. end W-Activity-Feed -->
                        </div>








                        {{-- <div class="ui-block">
                            <div class="ui-block-title">
                                <h6 class="title">Approved Users</h6>
                            </div>
                            <ul class="widget w-friend-pages-added notification-list friend-requests">


                                @if (isset($pending_user) && count($pending_user) > 0)
                                    @foreach ($pending_user as $pending_users)

                                        <li class="inline-items">
                                            <div class="author-thumb">
                                                <img loading="lazy" src="{{ asset('img/avatar49-sm.html') }}"
                                                    alt="author" width="36" height="36">
                                            </div>
                                            <div class="notification-event">
                                                <a href="#"
                                                    class="h6 notification-friend">{{ $pending_users->User->first_name }}
                                                    {{ $pending_users->User->last_name }}</a>
                                            </div>
                                            <span class="notification-icon">

                                                <a @if (auth::user()->role == 'admin') href="{{ url("$role/aprroved", [$pending_users->id]) }}" @endif class="accept-request">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </span>
                                        </li>
                                    @endforeach
                                @else
                                    <li class="inline-items">
                                        <div class="col-12 text-center">
                                            <span>
                                                No data available
                                            </span>
                                        </div>

                                    </li>
                                @endif

                            </ul>

                        </div> --}}

                    </aside>

                    <!-- ... end Right Sidebar -->


                </div>
            </div>
        </div>

    </div>
    <!-- Window-popup Create Event -->

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

                        <div class="form-group  is-select">
                            <label class="control-label"> Event Type</label>
                            <select class="form-select" name="Event_type">
                                <option value="Public">Public Event</option>
                                <option value="Private">Private Event</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Event Name</label>
                            <input class="form-control" name="name" placeholder="Enter Event Name" type="text">
                        </div>
                        {{-- @dd($mang) --}}
                        <input type="hidden" value="@if (isset($mang->id)) {{ $mang->id }} @endif"
                            name="mangerID" id="">

                        <input type="hidden" value="@if (isset($mang->cluster_id)) {{ $mang->cluster_id }} @endif"
                            name="cluster_id" id="">



                        <div class="form-group  is-empty">
                            <label class="control-label">Event Location</label>
                            <input class="form-control" required placeholder="Enter Event Location" name="location"
                                value="" type="text">
                        </div>



                        <div class="form-group date-time-picker">
                            <label class="control-label">Image</label>
                            <input type="file" required name="image" class="form-control" value="">

                        </div>

                        <div class="row">
                            {{-- <div class=" col-lg-6 col-md-6 col-sm-12 col-6">
                                <div class="form-group ">
                                    <label class="control-label">Event Time</label>
                                    <input class="form-control" style="height: 40px;" name="time" class="form-control"
                                        type="datetime-local">
                                </div>
                            </div> --}}

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
                        {{-- <button>Create Event</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="edit-clus" tabindex="-1" role="dialog" aria-labelledby="edit-clus" aria-hidden="true">
        <div class="modal-dialog window-popup edit-clus" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon">
                        <use xlink:href="#olymp-close-icon"></use>
                    </svg>
                </a>
                <div class="modal-header">
                    <h6 class="title">Upload Image</h6>
                </div>

                <div class="modal-body">
                    <form @if (isset($clust->id)) action="{{ url("$role/upd/cluster/$clust->id") }}" @endif
                        method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group ">
                            <label for="exampleFormControlInput1">Select Cluster Image</label>
                            <input type="file" name="image[]" class="form-control  @error('image') is-invalid @enderror" id="Cluster-Name" required>

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <input type="hidden" style="border: none;" required
                                @if (isset($clust->detail)) value="{{ $clust->detail }}" @endif name="detail"
                                id="">
                        </div>

                        <div id="values" class="mb-2">

                        </div>
                        <div class="form-group" style="text-align: end">


                            <button class="btn btn-primary" id="btnn"> <i class="fa fa-plus-circle"></i> Add Image
                            </button>
                        </div>
                        @if ((isset($mang->status) && $mang->status == 2) || Auth::user()->role == 'admin')
                            <input type="submit" class="btn btn-primary " value="Update" name="" id="">
                        @endif
                        {{-- <button>Create Event</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Window-popup Create Event -->


    <!-- Window-popup Create Friends Group Add Friends -->

    <div class="modal fade" id="create-friend-group-add-friends" tabindex="-1" role="dialog"
        aria-labelledby="create-friend-group-add-friends" aria-hidden="true">
        <div class="modal-dialog window-popup create-friend-group create-friend-group-add-friends" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon">
                        <use xlink:href="#olymp-close-icon"></use>
                    </svg>
                </a>

                <div class="modal-header">
                    <h6 class="title">Add Friends to “Freelance Clients” Group</h6>
                </div>

                <div class="modal-body">
                    <form class="form-group is-select">

                        <select class="form-select">
                            <option title="Green Goo Rock">Green Goo Rock</option>

                            <option title="Mathilda Brinker">Mathilda Brinker</option>

                            <option title="Marina Valentine">Marina Valentine</option>

                            <option title="Dave Marinara">Dave Marinara</option>

                            <option title="Rachel Howlett">Rachel Howlett</option>

                        </select>
                    </form>

                    <a href="#" class="btn btn-blue btn-lg full-width">Save Changes</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Window-popup Create Friends Group Add Friends -->



    <a class="back-to-top" href="#">
        <svg class="back-icon" width="14" height="18">
            <use xlink:href="#olymp-back-to-top"></use>
        </svg>
    </a>




    <!-- Window-popup-CHAT for responsive min-width: 768px -->

    <div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog"
        aria-labelledby="popup-chat-responsive" aria-hidden="true">

        <div class="modal-content">
            <div class="modal-header">
                <span class="icon-status online"></span>
                <h6 class="title">Chat</h6>
                {{-- @if (Auth::user()->role == 'admin') --}}
                <div class="more">
                    <svg class="olymp-three-dots-icon">
                        <use xlink:href="#olymp-three-dots-icon"></use>
                    </svg>
                    <svg class="olymp-little-delete js-chat-open">
                        <use xlink:href="#olymp-little-delete"></use>
                    </svg>
                </div>
                {{-- @endif --}}
            </div>
            <div class="modal-body">
                <div class="mCustomScrollbar">
                    <ul class="notification-list chat-message chat-message-field">
                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="img/avatar14-sm.html" width="28" height="28" alt="author"
                                    class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow!
                                    I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated"
                                        datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="img/author-page.html" width="36" height="36" alt="author"
                                    class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Don’t worry Mathilda!</span>
                                <span class="chat-message-item">I already bought everything</span>
                                <span class="notification-date"><time class="entry-date updated"
                                        datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="img/avatar14-sm.html" width="28" height="28" alt="author"
                                    class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow!
                                    I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated"
                                        datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <form class="need-validation">

                    <div class="form-group">
                        <textarea class="form-control" placeholder="Press enter to post..."></textarea>
                        <div class="add-options-message">
                            <a href="#" class="options-message">
                                <svg class="olymp-computer-icon">
                                    <use xlink:href="#olymp-computer-icon"></use>
                                </svg>
                            </a>
                            <div class="options-message smile-block">

                                <svg class="olymp-happy-sticker-icon">
                                    <use xlink:href="#olymp-happy-sticker-icon"></use>
                                </svg>

                                <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat1.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat2.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat3.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat4.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat5.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat6.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat7.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat8.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat9.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat10.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat11.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat12.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat13.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat14.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat15.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat16.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat17.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat18.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat19.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat20.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat21.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat22.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat23.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat24.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat25.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat26.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat27.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <script>
        $(document).click(function() {

            $('.heartt').css('display', 'none');

        });


        $(".heartt").click(function(event) {

            event.stopPropagation();

        });


        $(".cls_description1").click(function(event) {

            event.stopPropagation();

        });
        $(".cls_description1").focusin(function() {
            $('.heartt').css('display', 'block');


        });



        $(document).click(function() {

            $('.submitbtn').css('display', 'none');

        });

        $(".submitbtn").click(function(event) {

            event.stopPropagation();

        });


        $(".cls_description").click(function(event) {

            event.stopPropagation();

        });

        $(".cls_description").focusin(function() {
            $('.submitbtn').css('display', 'block');


        });
    </script>
    <script>
        $(document).ready(function() {

            $(".submitbtn").click(function() {
                // alert(12);

                $('.formsub').click();

            });

            $(".heartt").click(function() {
                // alert(12);

                $('.formsum1').click();

            });

            var counter = 1;


            $("#btnn").on("click", function() {

                $("#values").append(
                    "<div class='form-group'> <input type='file' name='image[]' class='form-control' id='Cluster-Name' required> </div>"
                );


            });

        });
    </script>
@endsection
