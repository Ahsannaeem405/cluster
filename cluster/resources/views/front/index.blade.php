@extends('front.layout')
@section('page_title','Home Page')
@section('content')
    
	<!--Home page Start-->
	<div class="homepage-header d-flex">
		<div class="container d-flex align-items-center justify-content-center">
			<div class="row w-100 d-flex justify-content-center">
				<div class="col-lg-10 col-md-10 col-12 d-flex justify-content-center">
					<div>
						<h2 class="text-center">Find The Perfect Cluster for Yourself</h2>
						<form class="form-inline search-form" method="post">
							<div class="form-group label-floating">
								<label class="control-label">What are you looking for?</label>
								<input class="form-control bg-white" placeholder="" type="text" value="">
							</div>
							<button class="btn btn-blue btn-lg">Search</button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 mt-5">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="col-xl-3 col-lg-4 col-md-6 col-12">
						<p class="total-clustors"> 250 cluster available</p>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6  col-12">
						<div class="form-group clustor-sort d-flex align-items-center justify-content-around">
							<label for="inputState">Sort By</label>
							<select id="inputState" class=" w-75">
								<option selected>Top Clustors</option>
								<option>Most Popular</option>
								<option>Most Newest</option>
							</select>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="row  mb-4">
			@foreach($viewCluster as $list)

			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="clustor.php">
					<div class="clustor-card">
						<div class="clustor-card-head">
							<img src="{{asset('images')}}/{{$list->image}}" />
						</div>
						<div class="clustor-card-body">
							<h3 class="clustor-card-heading">{{$list->name}}</h3>
							<div class="clustor-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p><i class="far fa-calendar-alt mx-1"></i>{{date('m-d-Y',strtotime($list->created_at))}}</p>
							</div>
							<p>{{$list->detail}}</p>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
	<div class="upcoming-events">
		<div class="container py-5">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center">UPCOMING MEETINGS</h2>
					<p class="text-center">Below are details of some of the upcoming meetings</p>
				</div>
			</div>
			<div class="row mt-3">
			<div class="col-lg-4 col-md-6 col-sm-8 col-12">
				<div class="upcoming-card mt-3">
					<div class="upcoming-card-img">
						<img src="./img/upcoming1.jpg"/>
					</div>
					<div class="upcoming-card-body">
						<h3 class="py-2 ">Holiday Event At The Last Sunday</h3>
						<span><i class="far fa-calendar-alt mx-1"></i>31-Jan-2022</span>
						<p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem 
							voluptate officia rerum. </p>
						<a href="#"><button class="btn w-100">Register Now</button></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-12 mt-3">
				<div class="upcoming-card">
					<div class="upcoming-card-img">
						<img src="./img/upcoming2.jpg"/>
					</div>
					<div class="upcoming-card-body">
						<h3 class="py-2 ">Holiday Event At The Last Sunday</h3>
						<span><i class="far fa-calendar-alt mx-1"></i>31-Jan-2022</span>
						<p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem 
							voluptate officia rerum. </p>
						<a href="#"><button class="btn w-100">Register Now</button></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-12 mt-3">
				<div class="upcoming-card">
					<div class="upcoming-card-img">
						<img src="./img/upcoming3.jpg"/>
					</div>
					<div class="upcoming-card-body">
						<h3 class="py-2 ">Holiday Event At The Last Sunday</h3>
						<span><i class="far fa-calendar-alt mx-1"></i>31-Jan-2022</span>
						<p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem 
							voluptate officia rerum. </p>
						<a href="#"><button class="btn w-100">Register Now</button></a>
					</div>
				</div>
			</div>
		</div>
		</div>	
	</div>
	<div class="proudly-support">
		<div class="container py-5">
			<div class="row">
				<h3 class="text-center">PROUDLY SUPPORTING THOSE WHO SERVE</h3>
				<p class="text-center">Cyber Wales have signed the Armed Forces Covenant and received a Bronze Employer Recognition Scheme Award</p>
			</div>
			<div class="row mt-4 d-flex align-items-center">
				<div class="col-md-6 col-12">
					<p class="mx-4 text-justify">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto rerum 
						libero recusandae magnam quibusdam! Qui, consequuntur in? Totam 
						ratione repellat maiores cum illo, modi explicabo quae iste natus 
						accusantium provident.
							</p>
						<p class="mx-4 text-justify">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto rerum 
						libero recusandae magnam quibusdam! Qui, consequuntur in? Totam 
						ratione repellat maiores cum illo, modi explicabo quae iste natus 
						accusantium provident. <a href="#">Read more...</a>
					</p>
				</div>
				<div class="col-md-6 col-12">
					<div class="homepage-video">
						<iframe src="https://www.youtube.com/embed/kT7qrJmx68M" 
							title="YouTube video player" frameborder="0" 
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
							allowfullscreen>
						</iframe>
					</div>
				</div>
			</div>
		</div>
		</div>

	<!--Home page end-->
@endsection