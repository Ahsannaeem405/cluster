@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')

    <?php
    $role = Auth::user()->post_role;
    ?>
    <style>
        .serviceBtn {
            border-radius: 50%;
            width: 80%;
            height: 80%;
            padding: 10px;
        }

        .pppp:hover {
            text-decoration: none !important;
        }

    </style>


    <!-- Main Header Groups -->

    <div class="main-header">
        <div class="content-bg-wrap bg-group clusterbg"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">

                        @if (Auth::user()->role == 'admin')
                            <h1>Manage your Clusters</h1>
                        @else
                            <h1>Your Joined Clusters</h1>
                        @endif
                        @if (Auth::user()->role == 'admin')
                            <p>Welcome to your Clusters Management page.Here you can easly Add, Delete and Edit you
                                clustors.
                                Thank you</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Main Header Groups -->
    <!-- Main Content Groups -->


    <div class="container-fluid" style="padding-left: 52px;padding-right: 52px;">


        <div class="accordion-item" style="    padding: unset;">

            <div class="container-fluid"
                style="margin-bottom: 15px;padding: 19px;border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: white;">

                <div class="row">

                    <div class="col-12">
                        <h5 class="text-center"> Joined Cluster</h5>
                    </div>

                </div>




            </div>


        </div>

    </div>

    <div class="container-fluid" style="padding-right: 51px;padding-left: 51px;">
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





        <div class="row">


            {{-- @dd($viewCluster) --}}
            @if(isset($viewCluster) && count($viewCluster) > 0)


            @foreach ($viewCluster as $list)
                <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                    <a style="text-decoration: none;"
                        @if (Auth::user()->role == 'admin') href="{{ url("$role/Join/cluster", $list->Event->id) }}" @else  href="{{ url("$role/view/cluster", $list->Event->id) }}" @endif>

                        <div class="ui-block h-100 mb-0">

                            <div class="friend-item friend-groups">





                                <?php
                                $clus_img2 = explode(',', $list->Event->image);
                                $clus_img1 = array_slice($clus_img2, 0, 1);
                                ?>
                                <div class="friend-item-content">


                                    <div class="friend-avatar">
                                        <div class="author-thumb">
                                            <img loading="lazy" src="{{ asset('images') }}/{{ $clus_img1[0] }}" alt=""
                                                width="34" height="34">
                                        </div>
                                        <div class="author-content">
                                            {{-- @dd($list) --}}

                                            <span class="pppp"
                                                style="    font-size: 20px;      color: black;text-decoration: none;">
                                                {{ $list->Event->name }}</span>
                                            @if (isset($list->Event->joindetail) && count($list->Event->joindetail) > 0)
                                                @php
                                                    $manager = 0;
                                                @endphp
                                                @foreach ($list->Event->joindetail as $listss)
                                                    @php
                                                        $manager++;
                                                        if ($manager > 1) {
                                                            break;
                                                        }
                                                    @endphp
                                                    <div style="color: red" class="country">Manager:<span>
                                                            {{ $listss->User->first_name }}
                                                        </span></div>
                                                @endforeach

                                            @else
                                                <div style="color: red" class="country">Manager:<span>
                                                        N\A

                                                    </span></div>
                                            @endif
                                            <p class="pppp" style="    color: black;">{{ $list->Event->detail }}
                                            </p>



                                        </div>
                                    </div>




                                    <div class="control-block-button" style="margin-top:-6px">
                                        @if (isset($list->Event->join))
                                            <button class="btn btn-primary"> Pending</button>
                                        @else

                                            <a href="{{ url('/user/Join/cluster', $list->Event->id) }}" style="  ">

                                                <button class="btn btn-success"> Joined</button>

                                            </a>
                                        @endif



                                    </div>

                                </div>

                            </div>

                        </div>
                    </a>

                </div>
            @endforeach
                    @else
                    <div class="accordion-item"
                    style="    padding-left: 15px !important;padding-right: 15px !important;    padding: unset;margin-bottom: 11px;">
                    <div class="jumbotron jumbotron-fluid"
                        style="    margin-bottom: 0;    border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: white;">
                        <div class="container">
                            <h5 class="text-center">No Cluster Available</h5>
                        </div>
                    </div>
                </div>
                    @endif
        </div>
    </div>



    {{-- For member show search --}}



    @if (Auth::user()->post_role)
        <div class="container-fluid" style="padding-left: 52px;padding-right: 52px;">


            <div class="accordion-item" style="    padding: unset;">

                <div class="container-fluid"
                    style="margin-bottom: 0;padding: 19px;border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: white;">

                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4">
                            <h5 class="text-center">Request To Join</h5>
                        </div>
                        <div class="col-4">
                            <div class="input-group md-form form-sm form-2 pl-0">
                                <input class="form-control my-0 py-1 amber-border " id="searchh" type="text"
                                    placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <span class="input-group-text amber lighten-3" style="color: white;background: #2d2d2d;"
                                        id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>


            </div>

            <div class="row appSearch" style="margin-top: 13px;">


                @if(isset($public_cluster) && count($public_cluster) > 0)

                {{-- @dd($public_cluster) --}}
                @foreach ($public_cluster as $list)
                @if (!isset($list->JoinClust))
                    <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                        <a style="text-decoration: none;"
                            @if (Auth::user()->role == 'admin') href="{{ url("$role/Join/cluster", $list->id) }}" @else  href="{{ url("$role/view/cluster", $list->id) }}" @endif>

                            <div class="ui-block h-100 mb-0">

                                <div class="friend-item friend-groups">
                                    <?php
                                    $clus_img2 = explode(',', $list->image);
                                    $clus_img1 = array_slice($clus_img2, 0, 1);
                                    ?>
                                    <div class="friend-item-content">


                                        <div class="friend-avatar">
                                            <div class="author-thumb">
                                                <img loading="lazy" src="{{ asset('images') }}/{{ $clus_img1[0] }}" alt=""
                                                    width="34" height="34">
                                            </div>
                                            <div class="author-content">

                                                <span class="pppp"
                                                    style="    font-size: 20px;      color: black;text-decoration: none;">
                                                    {{ $list->name }}</span>
                                                @if (isset($list->joindetail) && count($list->joindetail) > 0)
                                                    @php
                                                        $manager = 0;
                                                    @endphp
                                                    @foreach ($list->joindetail as $listss)
                                                        @php
                                                            $manager++;
                                                            if ($manager > 1) {
                                                                break;
                                                            }
                                                        @endphp
                                                        <div style="color: red" class="country">Manager:<span>
                                                                {{ $listss->User->first_name }}
                                                            </span></div>
                                                    @endforeach

                                                @else
                                                    <div style="color: red" class="country">Manager:<span>
                                                            N\A

                                                        </span></div>
                                                @endif
                                                <p class="pppp" style="    color: black;">{{ $list->detail }}</p>



                                            </div>
                                        </div>




                                        <div class="control-block-button" style="margin-top:-6px">


                                            <a href="{{url("$role/request/joinCluster",[$list->id])}}" style="color: white; ">
                                                <button class="btn btn-primary"
                                                    style="background:#ff5e3a; border-color:#ff5e3a">Request For Join</button>
                                            </a>


                                        </div>

                                    </div>

                                </div>

                            </div>
                        </a>

                    </div>
                @endif
            @endforeach

                @else

                <div class="accordion-item"
                    style="    padding-left: 15px !important;padding-right: 15px !important;    padding: unset;margin-bottom: 11px;">
                    <div class="jumbotron jumbotron-fluid"
                        style="    margin-bottom: 0;    border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: white;">
                        <div class="container">
                            <h5 class="text-center">No Cluster Available</h5>
                        </div>
                    </div>
                </div>
                @endif




            </div>
        </div>
    @endif


    {{-- For member show search --}}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            var counter = 1;


            $("#btnn").on("click", function() {

                $("#values").append(
                    "<div class='form-group'> <input type='file' name='image[]' class='form-control' id='Cluster-Name' required> </div>"
                );

            });

        });
    </script>


    <script>
        $(document).ready(function() {

            $("#searchh").keyup(function() {

                var search = $(this).val();

                $.ajax({
                    type: "GET",
                    url: "{{ url('member/search/cluster') }}?name=" + search,
                    success: function(res) {


                        $('.appSearch').empty().append(res);


                    }
                });


            });


        });
    </script>


@endsection
