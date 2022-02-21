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

{{-- @dd($role) --}}

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
                            <h1>Join your Clusters</h1>
                        @endif
                        <p>Welcome to your Clusters Management page.Here you can easly Add, Delete and Edit you clustors.
                            Thank you</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Main Header Groups -->
    <!-- Main Content Groups -->

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

























            @if (Auth::user()->role == 'admin')
                <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">

                    <!-- Friend Item -->


                    <div class="friend-item friend-groups create-group h-75 mb-3"
                        @if (count($viewCluster) == 0) style="min-height:275px" @endif>

                        <a href="#" class="  full-block" data-bs-toggle="modal"
                            data-bs-target="#create-friend-group-1"></a>
                        <div class="content" data-bs-toggle="modal" data-bs-target="#create-friend-group-1">

                            <div class="friend-item-content" style="padding-bottom: 0px;">

                                <div class="control-block-button" style="margin-bottom: 0px;">


                                    <a href="#" class="btn btn-control bg-green">
                                        <svg class="olymp-plus-icon">
                                            <use xlink:href="#olymp-plus-icon"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="author-content">
                                <p>Create New</p>
                                <div class="country"></div>
                            </div>

                        </div>

                    </div>

                    <!-- ... end Friend Item -->
                </div>
            @endif

            @foreach ($viewCluster as $list)
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
                                            <img loading="lazy" src="{{ asset('images') }}/{{ $clus_img2[0] }}" alt=""
                                                width="34" height="34">
                                        </div>
                                        <div class="author-content">
                                            {{-- @dd($list) --}}

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
                                        @if (Auth::user()->role == 'user')
                                            @if (isset($list->join))

                                                <a class="btn btn-primary text-white" > Pending</a>
                                            @else
                                                <a href="{{ url('/user/Join/cluster', $list->id) }}"
                                                    class="btn btn-control " style="background:#ff5e3a;    color: white; ">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                            @endif


                                        @else




                                            <a style="    color: white;border-radius: 50%;    margin-right: 7px;" href="#"
                                                class="btn btn-control bg-green " data-bs-toggle="modal"
                                                data-bs-target="#edit-cluster{{ $list->id }}">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>


                                            <a style="    color: white;border-radius: 50%;" data-bs-toggle="modal"
                                                data-bs-toggle="modal"
                                                data-bs-target="#delete-new-member{{ $list->id }}"
                                                class=" btn btn-control bg-blue ">
                                                <i class="fa fa-trash olymp-happy-faces-icon " aria-hidden="true"></i>
                                            </a>
                                        @endif

                                    </div>

                                </div>

                            </div>

                        </div>
                    </a>

                </div>










                <div class="modal fade" id="edit-cluster{{ $list->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="create-friend-group-1" aria-hidden="true">
                    <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
                        <div class="modal-content">
                            <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                            <div class="modal-header">
                                <h6 class="title">Edit Cluster</h6>
                            </div>

                            <div class="modal-body">
                                <form method="post" action="{{ url('admin/updateCluster') }}/{{ $list->id }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Cluster Name</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ $list->name }}" id="Cluster-Name" placeholder="Enter Cluster Name"
                                            required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Cluster Details</label>
                                        <textarea name="detail" class="form-control @error('detail') is-invalid @enderror"
                                            id="exampleFormControlTextarea1" rows="3"
                                            required>{{ $list->detail }}</textarea>
                                        @error('detail')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Cluster Type</label>

                                        <select class="form-select" name="cluster_type">
                                            <option value="Public" @if($list->cluster_type == "Public") selected @endif>Public </option>
                                            <option value="Private" @if($list->cluster_type == "Private") selected @endif>Private </option>
                                        </select>
                                    </div>


                                    <?php
                                    $clus_img2 = explode(',', $list->image);
                                    $clus_img1 = array_slice($clus_img2, 0, 1);
                                    ?>


                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Select Cluster Image</label>
                                        <input type="file" name="image[]"
                                            class="form-control @error('image') is-invalid @enderror" value=""
                                            id="Cluster-Name" placeholder="Enter Cluster Image">
                                        <img src="{{ asset('images') }}/{{ $clus_img1[0] }}" name="imgg" width="100"
                                            height="100">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div id="values" class="mb-2">

                                    </div>
                                    <div class="form-group" style="text-align: end">
                                        <button class="btn btn-primary" id="btnn" style="    padding: 7px;"> <i
                                                class="fa fa-plus-circle"></i> Add Image </button>
                                    </div>




                                    <button type="submit" class="btn btn-blue btn-sm full-width">Update Cluster</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <div class="modal fade" id="create-friend-group-1" tabindex="-1" role="dialog"
        aria-labelledby="create-friend-group-1" aria-hidden="true">
        <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon">
                        <use xlink:href="#olymp-close-icon"></use>
                    </svg>
                </a>
                <div class="modal-header">
                    <h6 class="title">Create New Cluster</h6>
                </div>

                <div class="modal-body">
                    <form method="post" action="{{ url('admin/createCluster') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cluster Name</label>
                            <input type="text" name="name" required class="form-control @error('name') is-invalid @enderror"
                                id="Cluster-Name" placeholder="Enter Cluster Name" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Cluster Details</label>
                            <textarea name="detail" required class="form-control @error('detail') is-invalid @enderror"
                                id="exampleFormControlTextarea1" rows="3" required></textarea>
                            @error('detail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Select Cluster Image</label>
                            <input type="file" required name="image[]"
                                class="form-control @error('image') is-invalid @enderror" id="Cluster-Name"
                                placeholder="Enter Cluster Name" required>

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div id="values" class="mb-2">

                        </div>
                        <div class="form-group" style="text-align: end">


                            <button class="btn btn-primary" id="btnn" style="    padding: 7px;"> <i
                                    class="fa fa-plus-circle"></i> Add Image </button>
                        </div>
                        <div class="form-group">
                            <select class="form-select" name="cluster_type">
                                <option value="Public">Public </option>
                                <option value="Private">Private </option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-blue btn-sm     full-width">Create Cluster</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @if (isset($list->id))
        <div class="modal fade" id="delete-new-member{{ $list->id }}" tabindex="-1" role="dialog"
            aria-labelledby="create-friend-group-1" aria-hidden="true">
            <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
                <div class="modal-content">
                    <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="olymp-close-icon">
                            <use xlink:href="#olymp-close-icon"></use>
                        </svg>
                    </a>
                    <div class="modal-header">
                        <h6 class="title">Delete Cluster</h6>
                    </div>

                    <div class="modal-body">
                        <div class="">
                            <p>Are you sure you want to delete this cluster <span
                                    class="font-weight-bold text-danger">{{ $list->name }}</span>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <form method="post" action="{{ url("$role/deleteCluster") }}/{{ $list->id }}">
                                    @csrf
                                    <button type="submit" class="btn btn-blue full-width"
                                        class="close icon-close">Yes</button>
                                </form>
                            </div>
                            <div class="col-6">
                                <button href="#" class="btn btn-secondary full-width" class="close icon-close"
                                    data-bs-dismiss="modal" aria-label="Close">No</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- For member show search --}}


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
