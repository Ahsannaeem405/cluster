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
						<p class="total-clustors"> {{count($viewCluster)}} cluster available</p>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6  col-12">
						<form method="get" action="">						
							<div class="form-group clustor-sort d-flex align-items-center justify-content-around">
							<label for="inputState">Sort By</label>
							<select id="searchCluster" name="searchCluster" class=" w-75">
								<option value="top_cluster" selected>Top Clustors</option>
								<option value="most_popular">Most Popular</option>
								<option value="most_newest">Most Newest</option>
							</select>
						</div>
					</form>

					</div>
				</div>

			</div>
		</div>
		<div class="row  mb-4 appSearch">
			@foreach($viewCluster as $list)
			@php
				$image=explode(',',$list->image);
			@endphp
			{{-- @dd($list); --}}
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
			
					<div class="clustor-card">
						<div class="clustor-card-head">
							<a href="{{ url('cluster_details') }}/{{$list->id}}">
								<img src="{{asset('images')}}/{{$image[0]}}" />
						

						</div>
						<div class="clustor-card-body">
							<h3 class="clustor-card-heading">{{$list->name}}</h3>
							<div class="clustor-card-details d-flex justify-content-between align-items-center">
								
								@if (isset($list->joindetail) && count($list->joindetail) > 0)
								@php
									$manager=0;
								@endphp
								@foreach ($list->joindetail as $listss)
								@php
									$manager++;
									if($manager > 1)
									{	
										break;
									}
								

								@endphp
								
									<div class="country">Manager:<span>
											{{ $listss->User->first_name }}

										
											
											</span></div>
								@endforeach

											@else
											<div class="country">Manager:<span>
												N\A
												
												</span></div>

							@endif
								<p><i class="fa fa-calendar mx-1"></i>{{date('m-d-Y',strtotime($list->created_at))}}</p>
							</div>
							<p>{{$list->detail}}</p>
						</a>
							<a href="{{ url('login/cluster') }}/{{$list->id}}" class="btn btn-outline-danger  mt-3 w-100"  style="color: black">Register Now</a>

						</div>
					</div>
			
			</div>
			@endforeach
		</div>
	</div>
	<div class="upcoming-events">
		<div class="container py-5">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center">UPCOMING EVENTS</h2>
					<p class="text-center">Below are details of some of the upcoming events</p>
				</div>
			</div>
			<div class="row mt-3">
				@foreach($viewEvent as $eventlist)
				@php
					// @dd($eventlist);
				@endphp
				   <div class="col-xl-3 col-lg-6  col-md-8 col-sm-8 col-12">
					<div class="group-card mx-0 mx-sm-0">
						<div class="group-card-img">

							<img src="{{asset('images')}}/{{$eventlist->image}}" />
							<a href="{{ url('register/event') }}/{{$eventlist->id}}" class="rejis-btn">
								Register Now
							</a>
						</div>
	
						<div class="group-card-body">
							<h4 class="event-name text-center">{{$eventlist->name}}</h4>
							<div class="row py-2">
								<div class="col-6">
									<small><i class="fa fa-calendar mx-1"></i>{{date('m-d-Y',strtotime($eventlist->created_at))}}</small>
								</div>
								<div class="col-6 ">
									<small class="text-end"><i class="fa fa-clock-o mx-1"></i>{{date('H:i A',strtotime($eventlist->created_at))}}</small>
								</div>
								<p class="event-dis mb-0 text-center">
								{{Str::limit($eventlist->description, 20, $end='(read more)')}}
								</p>
							</div>
	
						</div>
					</div>
				</div>
			{{-- <div class="col-lg-3 col-md-6 col-sm-8 col-12">
				<div class="clustor-card">
					<div class="clustor-card-head">
					<a href="{{ url('register/event') }}/{{$eventlist->id}}">
						<img src="{{asset('images')}}/{{$eventlist->image}}"/>
				</div>
					<div class="card-body">
						<h3 class="clustor-card-heading">{{$eventlist->name}}</h3>
						<div class="clustor-card-details d-flex justify-content-between align-items-center">

					<p><i class="fa fa-calendar mx-1"></i>
						{{date('m-d-Y',strtotime($eventlist->created_at))}}</p>
						<p ><i class="fa fa-map-marker mx-1"></i>
						{{$eventlist->location}} </p>
						</div>
						<p>{{Str::limit($eventlist->description, 20, $end='(read more)')}} </p>
					</a>
						<a href="{{ url('register/event') }}/{{$eventlist->id}}" class="btn btn-outline-danger  mt-3 w-100"  style="color: black">Register Now</a>
					</div>
				</div>
			</div>
		 --}}
			
			@endforeach
		
		
		</div>
		</div>	
	</div>
	<div class="proudly-support">
		<div class="container py-5">
			<div class="row">
				<h3 class="text-center">@if(isset($setting) ) {{$setting->heading}} @else PROUDLY SUPPORTING THOSE WHO SERVE @endif</h3>
				<p class="text-center">
					@if(isset($setting))
					 {{$setting->sub_heading}} 
					 @else
					 Cyber Wales have signed the Armed Forces Covenant and received a Bronze Employer Recognition Scheme Award
					 @endif
				</p>
			</div>
			<div class="row mt-4 d-flex align-items-center">
				<div class="col-md-6 col-12">
					<p class="mx-4 text-justify">
						@if(isset($setting))
					 {{$setting->home_description}} 
					 @else
					 Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto rerum libero recusandae magnam quibusdam!
					  Qui, consequuntur in?
					  Totam ratione repellat maiores cum illo, modi explicabo quae iste natus accusantium provident.	
					  @endif	

						
					</p>
				</div>
				<div class="col-md-6 col-12">
					<div class="homepage-video">
						<iframe src="@if(isset($setting)){{$setting->video_link}} 
							@else https://www.youtube.com/embed/kT7qrJmx68M @endif" 
							title="YouTube video player" frameborder="0" 
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
							allowfullscreen>
						</iframe>
					</div>
				</div>
			</div>
		</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<script>
			$(document).ready(function(){
				$('#searchCluster').on('change', function() {
					var search=$('#searchCluster').val();
					$.ajax({
						url:"{{url('searchCluster')}}?search="+search,
						type:'get',
					
						success:function(result)
						{
							$('.appSearch').empty().append(result);
						}
					})
				});
			});
		</script>
	<!--Home page end-->
@endsection