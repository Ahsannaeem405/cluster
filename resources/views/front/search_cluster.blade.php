
@if($top_cluster == 'top_cluster')
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

@endif
    @if($top_cluster == 'most_popular')
  
           
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

    @endif
            @if($top_cluster == 'most_newest')
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
            @endif

    