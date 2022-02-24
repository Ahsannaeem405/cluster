
@if($top_cluster == 'all_cluster')
@if(isset($allCluster) && count($allCluster) > 0)
@foreach($allCluster as $list)
    
@php
        
// echo '<pre>';
// var_dump($list->topCluster->take(10)->count());
	 $image=explode(',',$list->image);
 @endphp
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
        {{-- @endif --}}
	
		
@endforeach
@else
<div class="accordion-item" >
	<div class="jumbotron jumbotron-fluid"
		style="    margin-bottom: 0;    border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: #999999;">
		<div class="container py-5">
			<h5 class="text-center text-white">No Top Cluster Available</h5>
		</div>
	</div>
</div>
@endif
@endif

@if($top_cluster == 'top_cluster')
@if(isset($viewCluster) && count($viewCluster) > 0)
@foreach($viewCluster as $list)
    
@php
        
// echo '<pre>';
// var_dump($list->topCluster->take(10)->count());
	 $image=explode(',',$list->image);
 @endphp
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
        {{-- @endif --}}
	
		
@endforeach
@else
<div class="accordion-item" >
	<div class="jumbotron jumbotron-fluid"
		style="    margin-bottom: 0;    border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: #999999;">
		<div class="container py-5">
			<h5 class="text-center text-white">No Top Cluster Available</h5>
		</div>
	</div>
</div>
@endif

@endif
    @if($top_cluster == 'most_popular')
  
	@if(isset($viewCluster) && count($viewCluster) > 0)

@foreach($viewCluster as $list)
    
	@php
			
	// echo '<pre>';
	// var_dump($list->topCluster->take(10)->count());
		 $image=explode(',',$list->image);
	 @endphp
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
			{{-- @endif --}}
		
			
	@endforeach
	@else
	<div class="accordion-item" >
		<div class="jumbotron jumbotron-fluid"
			style="    margin-bottom: 0;    border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: #999999;">
			<div class="container py-5">
				<h5 class="text-center text-white">No Most Popular Cluster Available</h5>
			</div>
		</div>
	</div>
	@endif
    @endif
            @if($top_cluster == 'most_newest')
			@if(isset($TopCluster) && count($TopCluster) > 0)
            @foreach($TopCluster as $list)
            
			@php
        
           // echo '<pre>';
           // var_dump($list->topCluster->take(10)->count());
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
			@else
			<div class="accordion-item" >
				<div class="jumbotron jumbotron-fluid"
					style="    margin-bottom: 0;    border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: #999999;">
					<div class="container py-5">
						<h5 class="text-center text-white">No Most Newest Cluster Available</h5>
					</div>
				</div>
			</div>
			@endif
            @endif

    