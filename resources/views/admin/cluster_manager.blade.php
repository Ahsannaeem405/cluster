@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')


    <br />
    <?php

    $role = Auth::user()->role;

    ?>
      <!-- Main Header Groups -->
  
      <div class="main-header ">
          <div class="content-bg-wrap bg-group clusterbg mb-2"></div>
          <div class="container ">
              <div class="row">
                  <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                      <div class="main-header-content">
                          @if(Auth::user()->role == 'admin')
                          <h1>Manage User</h1>
                          @else
                          <h1>Join User</h1>
                          @endif
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
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal"  data-bs-toggle="modal"
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
                                <th class="text-center" scope="col">#</th>
								<th class="" scope="col">Name</th>
								<th class="" scope="col">Cluster Name</th>
								<th class=" text-center" scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                           @php
                               $i=1;
                           @endphp
                            @foreach($manager_list as $listM)
                              <tr>
                                  <td class="text-center">{{$i++}}</td>
                                  <td class="py-2">{{$listM->first_name}}</td>
                                  <td>cluster name</td>
                                  
                                  <td>
                                      <div class="d-flex justify-content-end">
                                          <a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
                                              <button class="mx-2 members-btns btn-danger">
                                                  <span>Delete </span><i class="fas fa-trash-alt"></i>
                                              </button>
                                          </a>
                                          
                                          <a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
                                              <button class="mx-2 members-btns btn-secondary">
                                                  <span>Edit</span> <i class="fas fa-edit"></i>
                                              </button>
                                          </a>
                                      </div>
                                  </td>
                              </tr>
                              @endforeach
                              {{-- edit user start--}}
                              <div class="modal fade" id="edit-new-member" tabindex="-1" role="dialog"
                              aria-labelledby="create-friend-group-1" aria-hidden="true">
                              <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
                                  <div class="modal-content">
                                      <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                                          <svg class="olymp-close-icon">
                                              <use xlink:href="#olymp-close-icon"></use>
                                          </svg>
                                      </a>
                                      <div class="modal-header">
                                          <h6 class="title">Edit Member</h6>
                                      </div>
                      
                                      <div class="modal-body">
                                          <form method="post" action="">
                                            @csrf 
                                            <div class="form-group">
                                                  <label for="exampleFormControlInput1">Name</label>
                                                  <input type="text" name="first_name" value="" class="form-control" id="Cluster-Name" Value="Francine Smith">
                                                  @error('first_name')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                                </div>
                                              <div class="form-group">
                                                  <label for="exampleFormControlInput1">Email</label>
                                                  <input type="email"  name="email" value="" class="form-control" id="Cluster-Name" Value="abc@xyz.com">
                                                  @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                                </div>
                                              <div class="form-group">
                                                  <label for="exampleFormControlInput1">Old Password</label>
                                                  <input type="password"  name="c_password"  class="form-control" id="Cluster-Name" placeholder="Enter Old Password">
                                                  @error('c_password')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                                </div>
                                              <div class="form-group">
                                                  <label for="exampleFormControlInput1">New Password</label>
                                                  <input type="password" name="new_password" class="form-control" id="Cluster-Name" placeholder="Enter New Password">
                                                  @error('new_password')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                                </div>
                                              <div class="form-group">
                                                <label for="exampleFormControlInput1">Confirm Password</label>
                                                <input type="password" name="confirm_password" class="form-control" id="Cluster-Name" placeholder="Enter Confirm Password">
                                            </div>
                      
                                              <button type="submit" class="btn btn-blue full-width">Edit Now</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                              {{-- edit user end--}}
                              {{-- delete user start--}}
                              <div class="modal fade" id="delete-new-member" tabindex="-1" role="dialog"
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
                                              <p>Are you sure you want to delete this user <span class="font-weight-bold text-danger">Francine Smith</span></p>
                                          </div>
                                          <div class="row">
                                              <div class="col-6">
                                                  <form method="post" action="">
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
                              {{-- delete user end--}}
                              
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
                      <h6 class="title">Add Cluster Manager</h6>
                  </div>
  
                  <div class="modal-body">
                      <form method="post" action="{{url('admin/addClusterManager')}}">
                        @csrf
                        <div class="form-group"  id="cluster">
							<label class="control-label">Users</label>
							<select class="clusterMemberMultiple disabled @error('users') is-invalid @enderror" name="users[]" multiple="multiple" >
	
                                @foreach($user_list as $listU)
								<option value="{{$listU->id}}" >{{$listU->first_name}}</option>
					
								@endforeach
							  </select>
							  @error('users')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror	
							  </select>
							
							</div>
                            <div class="form-group"  id="cluster">
                                <label class="control-label">Clusters</label>
                                <select class="clusterMemberMultiple disabled @error('cluster') is-invalid @enderror" name="cluster[]" multiple="multiple" >
                                    @foreach($cluster as $list)
                                    <option value="{{$list->id}}" >{{$list->name}}</option>
                        
                                    @endforeach
                                  </select>
                                  @error('cluster')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror	
                                  </select>
                                
                                </div>
                     
                        
                          <button type="submit" class="btn btn-blue  full-width">Add Now</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
     
    
  
@endsection
