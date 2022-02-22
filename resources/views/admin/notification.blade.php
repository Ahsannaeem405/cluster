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
                        <h1>Notifications </h1>

                    </div>
                </div>
            </div>
        </div>

    </div>


    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container-fluid" style="padding-left:47px;padding-right:47px;">


        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block">


                    @if (isset($noti) && count($noti) > 0)
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
                                    @if (auth::user()->role == 'admin' || auth::user()->post_role == 'manager')
                                        <th class="description">
                                            Action </th>
                                    @endif

                                </tr>

                            </thead>

                            <tbody>
                                <?php
                                $i = 1;

                                ?>


                                @foreach ($noti as $events)
                                    {{-- @dd($events) --}}



                                    <?php
                                    $img = explode(',', $events->Cluster->image);

                                    ?>

                                    <tr class="">
                                        <td class="author">
                                            {{ $i++ }}
                                        </td>


                                        <td class="description event-as">
                                            <img loading="lazy" src="{{ asset('images/') }}/{{ $img[0] }}"
                                                alt="friend" width="38" height="38">
                                        </td>

                                        <td class="location event-as">
                                            {{ $events->Cluster->name }}

                                        </td>
                                        <td class="upcoming event-as">
                                            {{ $events->Cluster->detail }}
                                        </td>

                                        @if (auth::user()->role == 'admin' || $events->Cluster->Manger)
                                            <td class="description event-as">

                                                <a href="{{ url("$role/reject/request", [$events->id]) }}">
                                                    <i class="fas fa-ban"></i>

                                                </a>
                                                &nbsp;


                                                <span class="notification-icon">

                                                    <a href="{{ url("$role/aprroved/request", [$events->id]) }}">
                                                        <i class="fas fa-check" aria-hidden="true"></i>
                                                    </a> </span>


                                            </td>
                                        @endif


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



@endsection
