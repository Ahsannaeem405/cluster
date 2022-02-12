@extends('admin.layout')
@section('page_title', 'User Page')
@section('content')


    <br />
    <?php

    $role = Auth::user()->role;

    ?>


    <!-- Main Header Groups -->

    <div class="main-header">
        <div class="content-bg-wrap bg-group clusterbg"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Manage User</h1>
                        <p>Welcome to your user manager page.Here you can easly Add, Delete and Edit you mambers.
                            Thank you</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Main Header Groups -->

    <!-- Main Content Groups -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12" style="padding: 7px;">
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
                <div class="col-12">
                    <div class="add-new-member my-3">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-toggle="modal"
                            data-bs-target="#add-new-user">
                            <i class="fas fa-plus mx-1"></i> Add New
                        </a>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="members-table">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Number</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Role</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($user_list as $list)
                                    <tr>
                                        <td class="text-center">{{ $i++ }}</td>
                                        <td class="py-2">{{ $list->first_name }} {{ $list->last_name }}</td>
                                        <td>{{ $list->email }}</td>
                                        <td>{{ $list->number }}</td>
                                        <td>{{ $list->gender }}</td>
                                        <td>{{ $list->role }}</td>

                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="members-table">
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th scope="col" class="text-center text-dark">#</th>
                                  <th class="text-dark" scope="col">Name</th>
                                  <th class="text-dark" scope="col">Email</th>
                                  <th class="text-dark" scope="col">Number</th>
                                  <th class="text-dark" scope="col">Gender</th>
                                  <th class="text-dark" scope="col">Role</th>
                                  <th class="text-dark" scope="col"></th>
                              </tr>
                          </thead>
                          <tbody>
                              @php
                                  $i=1;
                              @endphp
                              @foreach($user_list as $list)
                              <tr>
                                  <td class="text-center">{{$i++}}</td>
                                  <td class="py-2">{{$list->first_name}} {{$list->last_name}}</td>
                                  <td>{{$list->email}}</td>
                                  <td>{{$list->number}}</td>
                                  <td>{{$list->gender}}</td>
                                  <td>{{$list->role}}</td>

                                                <a data-bs-toggle="modal" data-bs-toggle="modal"
                                                    data-bs-target="#edit-new-member{{ $list->id }}">
                                                    <button class="mx-2 members-btns btn-secondary">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    {{-- edit user start --}}
                                    <div class="modal fade" id="edit-new-member{{ $list->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="create-friend-group-1" aria-hidden="true">
                                        <div class="modal-dialog window-popup create-friend-group create-friend-group-1"
                                            role="document">
                                            <div class="modal-content">
                                                <a href="#" class="close icon-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <svg class="olymp-close-icon">
                                                        <use xlink:href="#olymp-close-icon"></use>
                                                    </svg>
                                                </a>
                                                <div class="modal-header">
                                                    <h6 class="title">Edit User</h6>
                                                </div>

                                                <div class="modal-body">
                                                    <form method="post"
                                                        action="{{ url('admin/updateUser') }}/{{ $list->id }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Name</label>
                                                            <input type="text" name="first_name"
                                                                value="{{ $list->first_name }}" class="form-control"
                                                                id="Cluster-Name">
                                                            @error('first_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Email</label>
                                                            <input type="email" name="email" value="{{ $list->email }}"
                                                                class="form-control" id="Cluster-Name">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Old Password</label>
                                                            <input type="password" name="c_password" class="form-control"
                                                                id="Cluster-Name" placeholder="Enter Old Password">
                                                            @error('c_password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">New Password</label>
                                                            <input type="password" name="new_password"
                                                                class="form-control" id="Cluster-Name"
                                                                placeholder="Enter New Password">
                                                            @error('new_password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Confirm Password</label>
                                                            <input type="password" name="confirm_password"
                                                                class="form-control" id="Cluster-Name"
                                                                placeholder="Enter Confirm Password">
                                                        </div>

                                      <div class="modal-body">
                                          <form method="post" action="{{url('admin/updateUser')}}/{{$list->id}}">
                                            @csrf
                                            <div class="form-group">
                                                  <label for="exampleFormControlInput1">Name</label>
                                                  <input type="text" name="first_name" value="{{$list->first_name}}" class="form-control @error('first_name') is-invalid @enderror" id="Cluster-Name">
                                                  @error('first_name')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                                </div>
                                              <div class="form-group">
                                                  <label for="exampleFormControlInput1">Email</label>
                                                  <input type="email"  name="email" value="{{$list->email}}" class="form-control @error('email') is-invalid @enderror" id="Cluster-Name" >
                                                  @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                                </div>
                                              <div class="form-group">
                                                  <label for="exampleFormControlInput1">Old Password</label>
                                                  <input type="password"  name="c_password"  class="form-control @error('c_password') is-invalid @enderror" id="Cluster-Name" placeholder="Enter Old Password">
                                                  @error('c_password')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                                </div>
                                              <div class="form-group">
                                                  <label for="exampleFormControlInput1">New Password</label>
                                                  <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="Cluster-Name" placeholder="Enter New Password">
                                                  @error('new_password')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                                </div>
                                              <div class="form-group">
                                                <label for="exampleFormControlInput1">Confirm Password</label>
                                                <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="Cluster-Name" placeholder="Enter Confirm Password">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- edit user end --}}
                                    {{-- delete user start --}}
                                    <div class="modal fade" id="delete-new-member{{ $list->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="create-friend-group-1" aria-hidden="true">
                                        <div class="modal-dialog window-popup create-friend-group create-friend-group-1"
                                            role="document">
                                            <div class="modal-content">
                                                <a href="#" class="close icon-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <svg class="olymp-close-icon">
                                                        <use xlink:href="#olymp-close-icon"></use>
                                                    </svg>
                                                </a>
                                                <div class="modal-header">
                                                    <h6 class="title">Delete User</h6>
                                                </div>

                                              <button type="submit" class="btn btn-primary  full-width">Update</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                              {{-- edit user end--}}
                              {{-- delete user start--}}
                              <div class="modal fade" id="delete-new-member{{$list->id}}" tabindex="-1" role="dialog"
                              aria-labelledby="create-friend-group-1" aria-hidden="true">
                              <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
                                  <div class="modal-content">
                                      <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                                          <svg class="olymp-close-icon">
                                              <use xlink:href="#olymp-close-icon"></use>
                                          </svg>
                                      </a>
                                      <div class="modal-header">
                                          <h6 class="title">Delete User</h6>
                                      </div>

                                      <div class="modal-body">
                                          <div class="">
                                              <p>Are you sure you want to delete this user <span class="font-weight-bold text-danger">{{$list->first_name}}</span></p>
                                          </div>
                                          <div class="row">
                                              <div class="col-6">
                                                  <form method="post" action="{{url('admin/deleteUser')}}/{{$list->id}}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-blue full-width" class="close icon-close" >Yes</button>
                                            </form>
                                              </div>
                                              <div class="col-6">
                                              <button href="#" class="btn btn-secondary full-width" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">No</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- delete user end --}}
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- ... end Main Content Groups -->



        <!-- Window-popup Create Friends Group -->

        <div class="modal fade" id="add-new-user" tabindex="-1" role="dialog" aria-labelledby="create-friend-group-1"
            aria-hidden="true">
            <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
                <div class="modal-content">
                    <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="olymp-close-icon">
                            <use xlink:href="#olymp-close-icon"></use>
                        </svg>
                    </a>
                    <div class="modal-header">
                        <h6 class="title">Add New User</h6>
                    </div>

                  <div class="modal-body">
                      <form method="post" action="{{url('admin/addUser')}}">
                        @csrf
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Name</label>
                              <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="Cluster-Name" placeholder="Enter Name">
                              @error('first_name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Email</label>
                              <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="Cluster-Name" placeholder="Enter Email">
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Password</label>
                              <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="Cluster-Name" placeholder="Enter Passowrd">
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                          <button type="submit" class="btn btn-primary  full-width">Submit</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>



    @endsection
