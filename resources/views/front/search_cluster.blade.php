
@if($top_cluster == 'top_cluster')
@foreach($viewCluster as $list)
    
			@php
            
        //    echo '<pre>';
        //    var_dump($list->topCluster[0]->cluster_id);
				$image=explode(',',$list->image);
             $arr[]=$list->topCluster->count();
                //var_dump(max($max) );
                
// Driver Code
//$arr = array(64, 25, 12, 22, 11);
$len = count($arr);
// var_dump(array($arr[0]));
selection_sort($arr, $len);
// echo "Sorted array : \n"; 
// $i = 0;

for ($i = 0; $i < $len; $i++)
{
    if($len <=4)
    {
        // echo $arr[$i] . " "; 


        
    }
      
   
}

   

			@endphp
			{{-- @dd($list); --}}
        @if($list->topCluster->take(10)->count() > 3)
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
        @endif
@endforeach

@endif
    @if($top_cluster == 'most_popular')
    @php
            var_dump($top_cluster);

    @endphp        
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
@php
    // of selection sort 
function selection_sort(&$arr, $n) 
{
    for($i = 0; $i < $n ; $i++)
    {
        $low = $i;
        for($j = $i + 1; $j < $n ; $j++)
        {
            if ($arr[$j] > $arr[$low])
            {
                $low = $j;
            }
        }
          
        // swap the minimum value to $ith node
        if ($arr[$i] < $arr[$low])
        {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$low];
            $arr[$low] = $tmp;
        }
    }
}
@endphp