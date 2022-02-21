@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')
    <style>
        .serviceBtn {
            border-radius: 50%;
            width: 80%;
            height: 80%;
            padding: 10px;
        }

    </style>




    <!-- Main Header Groups -->

    <div class="main-header">
        <div class="content-bg-wrap bg-group bg-services"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Our Service</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5">
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
        {{-- Admin page add service and view only start --}}
        @if (Auth::user()->role == 'admin')
            <div class="row">
                <div class="col-12">
                    <div class="add-new-member my-3">
                        <a href="#" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#add-new-member">
                            <button><i class="fas fa-plus mx-1"></i> Add New</button>
                        </a>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="add-new-member" tabindex="-1" role="dialog"
                aria-labelledby="create-friend-group-1" aria-hidden="true">
                <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
                    <div class="modal-content">
                        <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                            <svg class="olymp-close-icon">
                                <use xlink:href="#olymp-close-icon"></use>
                            </svg>
                        </a>
                        <div class="modal-header">
                            <h6 class="title">Create New Service</h6>
                        </div>

                        <div class="modal-body">
                            <form method="post" action="{{ url('admin/addService') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" name="title"
                                        class="form-control  @error('title') is-invalid @enderror" id="Cluster-Name"
                                        placeholder="Enter Title">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Description</label>
                                    <textarea name="description" rows="4" cols="4"
                                        class="form-control  @error('description') is-invalid @enderror"
                                        placeholder="Enter Description"></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Clusters</label>
                                    <select name="cluster_id"
                                        class="form-control   @error('cluster_id') is-invalid @enderror">
                                        <option value="">Select Cluster</option>
                                        @foreach ($clusters as $clusterslist)
                                            <option value="{{ $clusterslist->id }}">{{ $clusterslist->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('cluster_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>


                                <button type="submit" class="btn btn-blue full-width">Add Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            @if (count($services) > 0)
                <div class="row ">

                    @foreach ($services as $serviceslist)
                        @php
                            $apply_services = App\Models\ApplyService::where('service_id', $serviceslist->id)->get();

                        @endphp
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-5 ">
                            <div class="servies-card text-center mx-xl-3 mx-lg-2 mx-md-3 p-2">
                                <div class="servies-card-hard position-relative">
                                    <div class="servies-card-img position-absolute">
                                        <i class="fas fa-user-shield"></i>
                                    </div>
                                </div>
                                <div class="servies-card-body mt-5">
                                    <h4>{{ $serviceslist->title }}</h4>
                                    <p>{{ $serviceslist->description }}</p>
                                    <p>{{ $serviceslist->ServiceCluster->name }}</p>
                                    <hr>

                                    <div class="row ">

                                        <div class="col-12">

                                            <a style="    color: white;border-radius: 50%;    margin-right: 7px;" href="#"
                                                class="btn btn-control bg-primary " data-bs-toggle="modal"
                                                data-bs-toggle="modal"
                                                data-bs-target="#edit-new-servies{{ $serviceslist->id }}">
                                                <i class="fa fa-edit" style="margin-top: 6px;" aria-hidden="true"></i>
                                            </a>

                                            <a style="    color: white;border-radius: 50%;    margin-right: 7px;" href="#"
                                                class="btn btn-control bg-danger " data-bs-toggle="modal"
                                                data-bs-toggle="modal"
                                                data-bs-target="#delete-service{{ $serviceslist->id }}">
                                                <i class="fas fa-trash text-white" style="margin-top: 6px;"></i>

                                            </a>


                                            <a href="{{ url('admin/applyServiceView') }}/{{ $serviceslist->id }}"
                                                style="    color: white;border-radius: 50%;"
                                                class=" btn btn-control bg-blue ">

                                                <i class="fas fa-file text-white" style="margin-top: 6px;"></i>
                                                <span class="badge bg-warning" style="
            position: absolute;
            right: -3px;
            top: -5px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
           ">{{ count($apply_services) }}</span>
                                            </a>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="edit-new-servies{{ $serviceslist->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="create-friend-group-1" aria-hidden="true">
                            <div class="modal-dialog window-popup create-friend-group create-friend-group-1"
                                role="document">
                                <div class="modal-content">
                                    <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg class="olymp-close-icon">
                                            <use xlink:href="#olymp-close-icon"></use>
                                        </svg>
                                    </a>
                                    <div class="modal-header">
                                        <h6 class="title">Edit Service</h6>
                                    </div>

                                    <div class="modal-body">
                                        <form method="post"
                                            action="{{ url('admin/updateService') }}/{{ $serviceslist->id }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Title</label>
                                                <input type="text" name="title" value="{{ $serviceslist->title }}"
                                                    class="form-control  @error('title') is-invalid @enderror"
                                                    id="Cluster-Name" placeholder="Enter Title">
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Description</label>
                                                <textarea name="description" rows="4" cols="4"
                                                    class="form-control  @error('description') is-invalid @enderror"
                                                    placeholder="Enter Description">{{ $serviceslist->description }}</textarea>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Clusters</label>
                                                <select name="cluster_id"
                                                    class="form-control   @error('cluster_id') is-invalid @enderror">
                                                    <option value="">Select Clusters</option>
                                                    @foreach ($clusters as $clusterslist)
                                                        <option value="{{ $clusterslist->id }}"
                                                            @if ($serviceslist->cluster_id == $clusterslist->id) selected @endif>
                                                            {{ $clusterslist->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('cluster_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>


                                            <button type="submit" class="btn btn-blue full-width">Update Now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- edit service end --}}

                        {{-- delete user start --}}
                        <div class="modal fade" id="delete-service{{ $serviceslist->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="create-friend-group-1" aria-hidden="true">
                            <div class="modal-dialog window-popup create-friend-group create-friend-group-1"
                                role="document">
                                <div class="modal-content">
                                    <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg class="olymp-close-icon">
                                            <use xlink:href="#olymp-close-icon"></use>
                                        </svg>
                                    </a>
                                    <div class="modal-header">
                                        <h6 class="title">Delete Service</h6>
                                    </div>

                                    <div class="modal-body">
                                        <div class="">
                                            <p>Are you sure you want to delete this user <span
                                                    class="font-weight-bold text-danger">{{ $serviceslist->name }}</span>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <form method="get"
                                                    action="{{ url('admin/deleteService') }}/{{ $serviceslist->id }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-blue full-width"
                                                        class="close icon-close">Yes</button>
                                                </form>
                                            </div>
                                            <div class="col-6">
                                                <button href="#" class="btn btn-secondary full-width"
                                                    class="close icon-close" data-bs-dismiss="modal"
                                                    aria-label="Close">No</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- delete user end --}}
                    @endforeach




                </div>
            @else
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h4 class="text-center">No Data Available</h4>
                    </div>
                </div>

            @endif

        @endif
        {{-- Admin page add service and view only end --}}
        {{-- User page add service and view only start --}}

        @if (Auth::user()->post_role == 'member')

            @if (count($services) > 0)
                <div class="row ">

                    @foreach ($services as $serviceslist)
                        @php
                            // $service_get = App\Models\JoinCluster::where('cluster_id', $serviceslist->cluster_id)
                            //     ->where('user_id', Auth::user()->id)
                            //     ->where('status', 1)
                            //     ->get();


                            $service_member = $serviceslist->serviceClusterMember;
                        @endphp
                          {{-- @dd( $serviceslist->serviceClusterMember)
                         @dd($serviceslist->serviceClusterMember   ) --}}

                        @foreach ($service_member as $list)


                            @if (count($service_member) > 0)
                                <div class="col-lg-4 col-md-6 col-sm-6 mt-5 ">
                                    <div class="servies-card text-center mx-xl-5 mx-lg-2 mx-md-3 p-2">
                                        <div class="servies-card-hard position-relative">
                                            <div class="servies-card-img position-absolute">
                                                <i class="fas fa-user-shield"></i>
                                            </div>
                                        </div>
                                        <div class="servies-card-body mt-5">
                                            <h4>{{ $list->title }}</h4>
                                            <p>{{ $list->description }}</p>
                                            <form method="post" action="{{ url('user/applyService') }}">
                                                @csrf
                                                <center>
                                                    <div class="row px-5">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                                                            <div class="form-group">
                                                                <label
                                                                    for="exampleFormControlInput1"><small>Individual</small>
                                                                    <input type="radio" name="apply" checked
                                                                        value="individual"
                                                                        style="width: 25px;height: 25px;"></label>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6  ">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1"><small>Company</small>
                                                                    <input type="radio" name="apply" value="company"
                                                                        style="width: 25px;height: 25px;"></label>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </center>
                                                <input type="hidden" name="service_id" value="{{ $list->id }}">
                                                <button type="submit" class="btn  w-100 mb-0">
                                                    <small> Apply Now</small>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach




                </div>
            @else
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h4 class="text-center">No Data Available</h4>
                    </div>
                </div>
            @endif

        @endif
        {{-- User page add service and view only end --}}

    </div>

    <!-- ... end Main Header Groups -->






    <!-- Window-popup-CHAT for responsive min-width: 768px -->



    <!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



    <a class="back-to-top" href="#">
        <svg class="back-icon" width="14" height="18">
            <use xlink:href="#olymp-back-to-top"></use>
        </svg>
    </a>



@endsection
