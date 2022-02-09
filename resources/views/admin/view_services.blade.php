@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')
<style>
	.serviceBtn{
		border-radius:50%;width:80%;height:80%;padding:10px;
	}
</style>
<div class="header-spacer header-spacer-small"></div>


<!-- Main Header Groups -->

<div class="main-header">
	<div class="content-bg-wrap bg-group bg-services"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Our Servies</h1>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container py-5">
		{{-- Admin page add service and view only start --}}

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
					<h6 class="title">Add New Service</h6>
				</div>

				<div class="modal-body">
					<form method="post" action="{{url('admin/addService')}}">
						@csrf
						<div class="form-group">
							<label for="exampleFormControlInput1">Title</label>
							<input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id="Cluster-Name" placeholder="Enter Title">
							@error('title')
							<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
							</span>
							@enderror                                                

						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Description</label>
							<textarea name="description" rows="4" cols="4" class="form-control  @error('description') is-invalid @enderror" placeholder="Enter Description"></textarea>
							@error('description')
							<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
							</span>
							@enderror                                                

							</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Clusters</label>
							<select name="cluster_id" class="form-control   @error('cluster_id') is-invalid @enderror" >
								<option value="">Select Sluster</option>
								@foreach($clusters as $clusterslist)
								<option value="{{$clusterslist->id}}">{{$clusterslist->name}}</option>
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

@if(count($services) > 0)
	<div class="row ">

		@foreach($services as $serviceslist)
		<div class="col-lg-4 col-md-6 col-sm-6 mt-5 ">
			<div class="servies-card text-center mx-xl-5 mx-lg-2 mx-md-3 p-2">
				<div class="servies-card-hard position-relative">
					<div class="servies-card-img position-absolute">
						<i class="fas fa-user-shield"></i>
					</div>
				</div>
				<div class="servies-card-body mt-5">
					<h4>{{$serviceslist->title}}</h4>
					<p>{{$serviceslist->description}}</p>
					<div class="row ">
						<div class="col-lg-4 col-md-4 col-sm-4  ">
							<a href="#" class="btn btn-primary serviceBtn" data-bs-toggle="modal"  data-bs-toggle="modal"
							data-bs-target="#edit-new-servies{{$serviceslist->id}}">
								<i class="fas fa-edit"></i>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4  ">
							<a href="{{url('admin/deleteService')}}/{{$serviceslist->id}}"  class="btn btn-danger serviceBtn">
								<i class="fas fa-trash text-white"></i>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4  ">
							<a class="btn btn-warning serviceBtn">
								<i class="fas fa-file text-white"></i>
							</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>


		{{-- edit service start --}}
		<div class="modal fade" id="edit-new-servies{{$serviceslist->id}}" tabindex="-1" role="dialog"
		aria-labelledby="create-friend-group-1" aria-hidden="true">
		<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
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
					<form method="post" action="{{url('admin/updateService')}}/{{$serviceslist->id}}">
						@csrf
						<div class="form-group">
							<label for="exampleFormControlInput1">Title</label>
							<input type="text" name="title" value="{{$serviceslist->title}}" class="form-control  @error('title') is-invalid @enderror" id="Cluster-Name" placeholder="Enter Title">
							@error('title')
							<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
							</span>
							@enderror                                                

						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Description</label>
							<textarea name="description" rows="4" cols="4" class="form-control  @error('description') is-invalid @enderror" placeholder="Enter Description">{{$serviceslist->description}}</textarea>
							@error('description')
							<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
							</span>
							@enderror                                                

							</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Clusters</label>
							<select name="cluster_id" class="form-control   @error('cluster_id') is-invalid @enderror" >
								<option value="">Select Sluster</option>
								@foreach($clusters as $clusterslist)
								<option value="{{$clusterslist->id}}" @if($serviceslist->cluster_id == $clusterslist->id) selected @endif>{{$clusterslist->name}}</option>
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
		{{-- edit service end --}}
		@endforeach




	</div>
	@else
	<h6 class="text-center">No Active Service</h6>
	@endif

	@endif
	{{-- Admin page add service and view only end --}}
			{{-- User page add service and view only start --}}

			@if(Auth::user()->role == 'user')
			
@if(count($services) > 0)
<div class="row ">

	@foreach($services as $serviceslist)
	<div class="col-lg-4 col-md-6 col-sm-6 mt-5 ">
		<div class="servies-card text-center mx-xl-5 mx-lg-2 mx-md-3 p-2">
			<div class="servies-card-hard position-relative">
				<div class="servies-card-img position-absolute">
					<i class="fas fa-user-shield"></i>
				</div>
			</div>
			<div class="servies-card-body mt-5">
				<h4>{{$serviceslist->title}}</h4>
				<p>{{$serviceslist->description}}</p>
				<form method="post" action="{{url('user/applyService')}}">
					@csrf
				<center>
				<div class="row px-5">
					<div class="col-lg-6 col-md-6 col-sm-6 ">
						<div class="form-group">
							<label for="exampleFormControlInput1"><small>Individual</small>
							<input type="radio" name="apply" checked value="individual" style="width: 25px;height: 25px;"></label>
						</div>
						
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6  ">
						<div class="form-group">
							<label for="exampleFormControlInput1"><small>Company</small>
							<input type="radio" name="apply" value="company" style="width: 25px;height: 25px;"></label>
						</div>
						
					</div>
				
				</div></center>
				<button type="submit" class="btn  w-100 mb-0">
					<small>	Apply Now</small>	
				</button>
				</form>
			</div>
		</div>
	</div>


	@endforeach




</div>
@else
<h6 class="text-center">No Active Service</h6>
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
