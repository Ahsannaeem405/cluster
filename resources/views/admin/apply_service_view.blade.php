@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')


    <br />
    <?php

    $role = Auth::user()->role;

    ?>
  	<div class="header-spacer header-spacer-small"></div>


      <!-- Main Header Groups -->

      <div class="main-header">
          <div class="content-bg-wrap bg-group clusterbg"></div>
          <div class="container">
              <div class="row">
                  <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                      <div class="main-header-content">
                          <h1>Manage Service User</h1>
                          <p>Welcome to your user manager page.Here you can easly Add, Delete and Edit you mambers.
                              Thank you</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- ... end Main Header Groups -->

      <!-- Main Content Groups -->

      <div class="container">
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
                                  <th scope="col">Service Name</th>
                                  <th scope="col">Service Type</th>
                                  <th scope="col">Cluster Name</th>
                              </tr>
                          </thead>
                          <tbody>
                             @foreach($Applyservices as $list)
                         
                              <tr>
                                  <td class="text-center">1</td>
                                  <td class="py-2">{{$list->ServiceUsers->first_name}}</td>
                                  <td class="py-2">{{$list->ServiceUsers->email}}</td>
                                  <td class="py-2">{{$list->service->title}}</td>
                                  <td class="py-2">{{$list->apply_type}}</td>
                                  <td class="py-2">{{$list->service->ServiceCluster->name}}</td>
                              </tr>

                              @endforeach
                          
                         

                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>

      <!-- ... end Main Content Groups -->



      <!-- Window-popup Create Friends Group -->

      <div class="modal fade" id="add-new-user" tabindex="-1" role="dialog"
          aria-labelledby="create-friend-group-1" aria-hidden="true">
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
                              <input type="text" name="first_name" class="form-control" id="Cluster-Name" placeholder="enter Name">
                              @error('first_name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Email</label>
                              <input type="email" name="email" class="form-control" id="Cluster-Name" placeholder="enter email">
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Password</label>
                              <input type="password" name="password" class="form-control" id="Cluster-Name" placeholder="enter passowrd">
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                          <button type="submit" class="btn btn-blue btn-lg full-width">Add Now</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>



@endsection
