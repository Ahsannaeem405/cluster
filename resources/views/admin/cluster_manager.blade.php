@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')


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
                          <h1>Cluster Manager</h1>
                          @else
                          <h1>Cluster Manager</h1>
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
            <div class="col-12">
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
              <div class="col-12">
                  <div class="members-table">
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                <th class="text-center" scope="col">#</th>
								<th class="" scope="col">Name</th>
								<th class="" scope="col">Email</th>
								<th class="" scope="col">Cluster Name</th>
								<th class="" scope="col">Role</th>
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
                                  <td class="py-2">{{$listM->email}}</td>
                                  <td>
                                      							
									@foreach($listM->memberCluster as $listc)
                                    {{$listc->Clusterr->name.','}}
                                
                                @endforeach
                                  </td>

                                  <td class="py-2">{{$listM->post_role}}</td>
                                  
                                  <td>
                                      <div class="d-flex justify-content-end">
                                          <a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete{{$listM->id}}">
                                              <button class="mx-2 members-btns btn-danger">
                                                 <i class="fas fa-trash-alt"></i>
                                              </button>
                                          </a>
                                          
                                          <a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit{{$listM->id}}">
                                              <button class="mx-2 members-btns btn-secondary">
                                                  <i class="fas fa-edit"></i>
                                              </button>
                                          </a>
                                      </div>
                                  </td>
                              </tr>

                               {{-- delete user start--}}
                               <div class="modal fade" id="delete{{$listM->id}}" tabindex="-1" role="dialog"
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
                                                <p>Are you sure you want to delete this Cluster Manager <span class="font-weight-bold text-danger">{{$listM->first_name}}</span></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <form method="post" action="{{url('admin/deleteClusterM')}}/{{$listM->id}}">
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

                                  {{-- edit user start--}}
                              <div class="modal fade" id="edit{{$listM->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="create-friend-group-1" aria-hidden="true">
                                <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
                                    <div class="modal-content">
                                        <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                                            <svg class="olymp-close-icon">
                                                <use xlink:href="#olymp-close-icon"></use>
                                            </svg>
                                        </a>
                                        <div class="modal-header">
                                            <h6 class="title">Edit Cluster Manager</h6>
                                        </div>
                        
                                        <div class="modal-body">
                                          <form method="post" action="{{url('admin/updateClusterManager')}}/{{$listM->id}}">
                                              @csrf
                                              <div class="form-group"  id="cluster">
                                                  <label class="control-label">Users</label>
                                                  
                                               <input  class="form-control" name="" value="{{$listM->first_name}}" disabled>
                                                  
                                                  </div>
                                                  <div class="form-group"  id="cluster">
                                                      <label class="control-label">Clusters</label>
                                                      <select class="clusterMemberMultiple disabled @error('cluster') is-invalid @enderror" name="cluster[]" multiple="multiple" >
                                                        @foreach($cluster as $listcMain)
                                                            @php
                                                                $join=App\Models\JoinCluster::where('user_id',$listM->id)->where('cluster_id',$listcMain->id)->first();
                                                            @endphp
                                                            
                                                            <option @if($join) selected @endif value="{{$listcMain->id}}"  >{{$listcMain->name}}</option>
                                                            
                                                
                                                            @endforeach
                                                        </select>
                                                        @error('cluster')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror	
                                                        </select>
                                                      
                                                      </div>
                                           
                                              
                                                <button type="submit" class="btn btn-blue  full-width">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                {{-- edit user end--}}
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
                     
                        
                          <button type="submit" class="btn btn-blue  full-width">Add New</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
     
    
  
@endsection
