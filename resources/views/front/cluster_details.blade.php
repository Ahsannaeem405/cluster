@extends('front.layout')
@section('page_title','Home Page')
@section('content')
<div class="clustor-page-header d-flex"
style="background: linear-gradient(rgba(227, 9, 23, 0.5), rgba(227, 9, 23, 0.5)),url(./img/clusterbg.jpg);background-position:center;background-repeat: no-repeat; background-size: cover;">
<div class="container d-flex align-items-center w-100">
	<div class="row py-4 w-100">
		<div class="col-12">
			<div class="clustor-page-heading text-center">
				<h1>Events Details</h1>
			</div>
		</div>

	</div>
</div>
</div>
<div class="container pt-5">
<div class="row my-5 ">
	@if(isset($viewEvent) && count($viewEvent) >0)
	@foreach($viewEvent as $eventlist)

	<div class="col-xl-4 col-lg-6  col-md-8 col-sm-8 col-12">
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
						<p><i class="fa fa-calendar mx-1"></i>{{date('m-d-Y',strtotime($eventlist->created_at))}}</p>
					</div>
					<div class="col-6 ">
						<p class="text-end"><i class="fa fa-clock-o mx-1"></i>{{date('H:i A',strtotime($eventlist->created_at))}}</p>
					</div>
					<p class="event-dis mb-0 text-center">
						{{$eventlist->description}}

					</p>
				</div>

			</div>
		</div>
	</div>
	@endforeach
	@else
	<div class="accordion-item" >
		<div class="jumbotron jumbotron-fluid"
			style="    margin-bottom: 0;    border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: white;">
			<div class="container py-5">
				<h5 class="text-center">This Cluster does't have any upcoming event at this moment.</h5>
			</div>
		</div>
	</div>
	@endif
</div>
</div>
@endsection