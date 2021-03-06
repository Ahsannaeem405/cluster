@extends('admin.layout')
@section('page_title', 'View User Page')
@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">


    <?php

    $role = Auth::user()->role;

    ?>
    <div class="main-header">
        <div class="content-bg-wrap bg-group event-manager-bg"
            style="background:  linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.3)), url({{ asset('/img/events-manager.jpg') }})">
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content mt-5">
                        <h1>Manage Events</h1>
                        <p>Welcome to your event manager page. Here you can Add new, Edit and Delete events.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid" style="padding-left: 26px;padding-right: 26px;">

        @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif





    <div class="row">
        <div class="col-12">
            <div class="members-table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Second Name</th>
                            <th scope="col">Email </th>
                            <th scope="col">DOB </th>
                            {{-- <th scope="col">Role </th> --}}
                            <th scope="col">Action </th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($user as $users)


                        @if($users->User->role != 'admin')
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $users->User->first_name }}</td>
                                <td>{{ $users->User->last_name }}</td>
                                <td>{{ $users->User->email }}</td>
                                <td>{{ $users->User->dob }}</td>
                                <td>
                                    <div class="author-page author vcard inline-items more">
                                        <div class="author-thumb">
                                            <button class="btn btn-primary">Action &nbsp; <i class="fa fa-angle-down"
                                                    style="font-size: 17px;" aria-hidden="true"></i>
                                            </button>
                                            <div class="more-dropdown more-with-triangle" style="margin-top: -7px;">
                                                <div class="mCustomScrollbar" data-mcs-theme="dark">


                                                    <ul class="account-settings">
                                                        <li>

                                                            <a style="font-size: 14px;"
                                                                href="{{ url("$role/manager/status", [$users->id, $users->User->id]) }}">
                                                                <span> Manager</span>
                                                            </a>

                                                        </li>


                                                    </ul>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            @endif
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
@endsection
