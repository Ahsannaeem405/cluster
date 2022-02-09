@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')

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
					<h6 class="title">Add New Member</h6>
				</div>

				<div class="modal-body">
					<form method="post" action="{{url('admin/addService')}}">
						@csrf
						<div class="form-group">
							<label for="exampleFormControlInput1">Title</label>
							<input type="text" name="title" class="form-control" id="Cluster-Name" placeholder="Enter Title">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Description</label>
							<textarea name="description" rows="4" cols="4" class="form-control" placeholder="Enter Description"></textarea>
						</div>
					

						<button type="submit" class="btn btn-blue full-width">Add Now</button>
					</form>
				</div>
			</div>
		</div>
	</div>
		@endif
	<div class="row ">
		<div class="col-lg-4 col-md-6 col-sm-6 mt-5 ">
			<div class="servies-card text-center mx-xl-5 mx-lg-2 mx-md-3 p-2">
				<div class="servies-card-hard position-relative">
					<div class="servies-card-img position-absolute">
						<i class="fas fa-user-shield"></i>
					</div>
				</div>
				<div class="servies-card-body mt-5">
					<h4>Administrator</h4>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga earum placeat vero eos
						dolores possimus consectetur doloribus porro natus repudiandae aperiam a beatae alias,
						laborum illum, voluptatibus repellendus, dolorum fugit.</p>
					<button class="btn w-100 mb-0">
						Join Now
					</button>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 mt-5 ">
			<div class="servies-card text-center mx-xl-5 mx-lg-2 mx-md-3 p-2">
				<div class="servies-card-hard position-relative">
					<div class="servies-card-img position-absolute">
						<i class="fas fa-object-ungroup"></i>
					</div>
				</div>
				<div class="servies-card-body mt-5">
					<h4>Adjustment</h4>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga earum placeat vero eos
						dolores possimus consectetur doloribus porro natus repudiandae aperiam a beatae alias,
						laborum illum, voluptatibus repellendus, dolorum fugit.</p>
					<button class="btn w-100 mb-0">
						Join Now
					</button>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 mt-5 ">
			<div class="servies-card text-center mx-xl-5 mx-lg-2 mx-md-3 p-2">
				<div class="servies-card-hard position-relative">
					<div class="servies-card-img position-absolute">
						<i class="fas fa-pencil-ruler"></i>
					</div>
				</div>
				<div class="servies-card-body mt-5">
					<h4>Design</h4>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga earum placeat vero eos
						dolores possimus consectetur doloribus porro natus repudiandae aperiam a beatae alias,
						laborum illum, voluptatibus repellendus, dolorum fugit.</p>
					<button class="btn w-100 mb-0">
						Join Now
					</button>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 mt-5 ">
			<div class="servies-card text-center mx-xl-5 mx-lg-2 mx-md-3 p-2">
				<div class="servies-card-hard position-relative">
					<div class="servies-card-img position-absolute">
						<i class="fas fa-photo-video"></i>
					</div>
				</div>
				<div class="servies-card-body mt-5">
					<h4>Photographer</h4>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga earum placeat vero eos
						dolores possimus consectetur doloribus porro natus repudiandae aperiam a beatae alias,
						laborum illum, voluptatibus repellendus, dolorum fugit.</p>
					<button class="btn w-100 mb-0">
						Join Now
					</button>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 mt-5 ">
			<div class="servies-card text-center mx-xl-5 mx-lg-2 mx-md-3 p-2">
				<div class="servies-card-hard position-relative">
					<div class="servies-card-img position-absolute">
						<i class="fas fa-music"></i>
					</div>
				</div>
				<div class="servies-card-body mt-5">
					<h4>Music</h4>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga earum placeat vero eos
						dolores possimus consectetur doloribus porro natus repudiandae aperiam a beatae alias,
						laborum illum, voluptatibus repellendus, dolorum fugit.</p>
					<button class="btn w-100 mb-0">
						Join Now
					</button>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 mt-5 ">
			<div class="servies-card text-center mx-xl-5 mx-lg-2 mx-md-3 p-2">
				<div class="servies-card-hard position-relative">
					<div class="servies-card-img position-absolute">
						<i class="fas fa-spa"></i>
					</div>
				</div>
				<div class="servies-card-body mt-5">
					<h4>Planning</h4>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga earum placeat vero eos
						dolores possimus consectetur doloribus porro natus repudiandae aperiam a beatae alias,
						laborum illum, voluptatibus repellendus, dolorum fugit.</p>
					<button class="btn w-100 mb-0">
						Join Now
					</button>
				</div>
			</div>
		</div>




	</div>
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
