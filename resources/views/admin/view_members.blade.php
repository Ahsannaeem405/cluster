@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')

	<div class="main-header">
		<div class="content-bg-wrap bg-group clusterbg"></div>
		<div class="container">
			<div class="row">
				<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
					<div class="main-header-content">
						<h1>Members</h1>
						<p>Welcome to your member manager page.Here you can easly Add, Delete and Edit you mambers.
							Thank you</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Main Header Groups -->

	<!-- Main Content Groups -->

	<div class="container-fluid">
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
		@if(Auth::user()->role == 'admin')
		<div class="row">
			<div class="col-12">
				<div class="add-new-member my-3">
					<a href="#" data-bs-toggle="modal"  data-bs-toggle="modal"
					data-bs-target="#add-new-member">
						<button><i class="fas fa-plus mx-1"></i> Add New</button>
					</a>
					
				</div>
			</div>
		</div>
		@endif
		<div class="row">
			<div class="col-12">
				<div class="members-table">
					<table class="table table-striped">
						<thead>
							<tr >
								<th class=" text-center" scope="col">#</th>
								<th class="" scope="col">First Name</th>
								<th class="" scope="col">Email</th>
								<th class="" scope="col">Cluster</th>
								<th class=" text-center" scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@php
								$i=1;
							@endphp
							@foreach($user_list as $list)
							
							{{-- //dd($list->memberCluster,) --}}
							<tr>
								<td class="text-center">{{$i++}}</td>
								<td class="py-2">{{$list->first_name}}</td>
								<td class="py-2">{{$list->email}}</td>
								<td class="py-2">
															
									@foreach($list->memberCluster as $listc)
										
									{{-- @dd($listc->selectCluster($listc->user_id)); --}}
										{{$listc->Clusterr->name.','}}
									
									@endforeach
									
								</td>
								
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#assign-manger{{$list->id}}">
											<button class="mx-2 members-btns btn-warning" >
												<i class="fa fa-check-double"></i>
											</button>
										</a>
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member{{$list->id}}">
											<button class="mx-2 members-btns btn-danger" >
												<i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member{{$list->id}}">
											<button class="mx-2 members-btns btn-secondary">
												<i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>

								{{-- assign cluster manger start --}}
																
	<div class="modal fade" id="assign-manger{{$list->id}}" tabindex="-1" role="dialog"
		aria-labelledby="create-friend-group-1" aria-hidden="true">
		<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Assign Cluster Manager</h6>
				</div>
	
				<div class="modal-body">
					<form method="post" action="{{url('admin/assignManager')}}/{{$list->id}}">
						@csrf
						<div class="form-group">
							<label for="exampleFormControlInput1">Name</label>
							<input type="text" name="first_name" disabled class="form-control" value="{{$list->first_name}}" id="Cluster-Name" placeholder="Enter Name">
						
						</div>
					
					
				
						<div class="form-group"  id="cluster">
							<label class="control-label">Cluster</label>
							<select class="clusterMemberMultiple disabled @error('cluster') is-invalid @enderror" name="cluster[]" multiple="multiple" >
	
								@foreach($list->memberCluster as $listc)
								<option value="{{$listc->Clusterr->id}}" @if( $listc->cluster_id == $listc->Clusterr->id) selected  @endif>{{$listc->Clusterr->name}}</option>
					
							@endforeach
							  </select>
							
							</div>
	
						<button type="submit"  class="btn btn-primary  full-width">Assign Now</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
								{{-- assign cluster manger end --}}

											{{-- edit member start --}}
	<div class="modal fade" id="edit-new-member{{$list->id}}" tabindex="-1" role="dialog"
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
				<form method="post" action="{{url('admin/updateMember')}}/{{$list->id}}">
					@csrf
					<div class="form-group">
						<label for="exampleFormControlInput1">Name</label>
						<input type="text" name="first_name" class="form-control  @error('first_name') is-invalid @enderror" value="{{$list->first_name}}" id="Cluster-Name" placeholder="Enter Name">
						@error('first_name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Email</label>
						<input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="Cluster-Name" value="{{$list->email}}" placeholder="Enter Email">
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					</div>
			
				
					

					<div class="form-group"  id="cluster">
						<label class="control-label">Cluster</label>
						<select class="clusterMemberMultiple  @error('password') is-invalid @enderror" name="cluster[]" multiple="multiple" >
						
							@foreach($cluster as $listcMain)
							@php
								$join=App\Models\JoinCluster::where('user_id',$list->id)->where('cluster_id',$listcMain->id)->first();
							@endphp
							@if($join->cluster_id == $listcMain->id)
							<option value="{{$listcMain->id}}" selected >{{$listcMain->name}}</option>
							@else
				
							<option value="{{$listcMain->id}}" >{{$listcMain->name}}</option>
							@endif
							@endforeach
							{{-- @foreach($list->memberCluster as $listc)
								<option value="{{$listc->Clusterr->id}}" @if( $listc->cluster_id == $listc->Clusterr->id) selected  @endif>{{$listc->Clusterr->name}}</option>
					
							@endforeach --}}
							{{-- @foreach($cluster as $listcMain)


							<option value="{{$listcMain->id}}" @if( $listcMain->id == $listcMain->join) selected  @endif>{{$listcMain->name}}</option>

							@endforeach --}}
						  </select>
						  @error('cluster')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror	
						</div>

					<button type="submit"  class="btn btn-primary  full-width">Update Now</button>
				</form>
			</div>
		</div>
	</div>
</div>
											{{-- edit member end --}}



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
			<h6 class="title">Delete Member</h6>
		</div>

		<div class="modal-body">
			<div class="">
				<p>Are you sure you want to delete this members <span class="text-danger">{{$list->first_name}}</span></p>
			</div>
			<div class="row">
				<div class="col-6">
					<form method="post" action="{{url('admin/deleteMembers')}}/{{$list->id}}">
						@csrf
						<button type="submit" class="btn btn-primary full-width" class="close icon-close" >Yes</button>
				</form>
				</div>
				<div class="col-6">
				<button href="#" class="btn btn-warning  full-width" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">No</button>

				</div>
			</div>
		</div>
	</div>
</div>
</div>
								@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Main Content Groups -->



	<!-- Window-popup Create Friends Group -->

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
					<h6 class="title">Add New Member</h6>
				</div>

				<div class="modal-body">
					<form method="post" action="{{url('admin/addMember')}}">
						@csrf
						<div class="form-group">
							<label for="exampleFormControlInput1">Name</label>
							<input type="text" name="first_name" class="form-control  @error('first_name') is-invalid @enderror" id="Cluster-Name" placeholder="Enter Name">
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
						<div class="form-group"  id="cluster">
							<label class="control-label">Cluster</label>
							<select class="clusterMemberMultiple form-control  @error('cluster') is-invalid @enderror" name="cluster[]" multiple="multiple" >

								@foreach($cluster as $list)
								<option value="{{$list->id}}" >{{$list->name}}</option>
					
								@endforeach
							  </select>
							  @error('cluster')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror	
							</div>

						<button type="submit" href="#" class="btn btn-primary  full-width">Add Now</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	


@endsection
