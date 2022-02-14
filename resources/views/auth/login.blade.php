
@php
// @dd($event_id, $_SERVER['REQUEST_URI'] == "/register/event/$event_id");
@endphp
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login | Sign up</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Theme Font -->
	<link rel="preload" type="text/css" href="{{asset('css/theme-font.min.css')}}" as="style">

	<!-- Bootstrap CSS -->

	<link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap.css')}}">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.min.css')}}">

	<!-- Main RTL CSS -->
	<!--<link rel="stylesheet" type="text/css" href="{{asset('css/rtl.min.css')}}">-->

	<!-- WebP Safari Support -->
	<script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/polyfills.js"></script>
	<script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/webp-hero.bundle.js"></script>

</head>

<body class="landing-page">

<style>
	.select2-container--default.select2-container .select2-selection--multiple {
    border: solid #e6ecf5  1px !important;
    outline: 0;
    height: 39px !important;
}
.select2-container .select2-selection--multiple .select2-selection__rendered {
     display: block !important; 
    /* list-style: none; */
    padding: 4px !important;
}
.select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
    width: 100% !important;
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: solid #e6ecf5 1px !important;
    outline: 0;
}
textarea.select2-search__field {
            display: none;
        }
</style>
<!-- Preloader -->

<div id="hellopreloader">
	<div class="preloader">
		<svg width="45" height="45" stroke="#fff">
			<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="8">
					<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"/>
				</circle>
			</g>
		</svg>

		<div class="text">Loading ...</div>
	</div>
</div>

<!-- ... end Preloader -->
<div class="content-bg-wrap"></div>



<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
	<div class="row display-flex d-flex justify-content-center mt-5">
		<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
			
			<!-- Login-Registration Form  -->

			<div class="registration-login-form">

				<!-- Nav tabs -->
				<ul class="nav nav-tabs d-flex justify-content-between" id="registration-form-tabs" role="tablist">
					<li class="nav-item w-50" role="presentation">
						<a class="nav-link @if($_SERVER['REQUEST_URI'] == '/login?signup') active  @endif  @if(isset($cluster_id)) @if($_SERVER['REQUEST_URI'] == "/login/cluster/$cluster_id") active @endif @endif  @if(isset($event_id)) @if($_SERVER['REQUEST_URI'] == "/register/event/$event_id") active @endif @endif d-flex justify-content-center align-items-center" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">
							 <svg class="olymp-login-icon mx-2">
								 <use xlink:href="#olymp-login-icon"></use> 
								 
								</svg>
								Sign Up
						</a>
					</li>
					<li class="nav-item w-50" role="presentation">
						<a class="nav-link  @if($_SERVER['REQUEST_URI'] == '/login?signin' ) active @endif d-flex justify-content-center align-items-center" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
							<svg class="olymp-register-icon mx-2"><use xlink:href="#olymp-register-icon"></use></svg> Login
						</a>
					</li>
				</ul>

				<!-- Tab panes -->
				@php
				@endphp
				<div class="tab-content" id="registration-form-tabs-content">
					<div class="tab-pane fade  @if($_SERVER['REQUEST_URI'] == '/login?signup' ) show active  @endif @if(isset($cluster_id)) @if($_SERVER['REQUEST_URI'] == "/login/cluster/$cluster_id" ) show active  @endif @endif @if(isset($event_id)) @if($_SERVER['REQUEST_URI'] == "/register/event/$event_id") show active @endif @endif" id="login" role="tabpanel" aria-labelledby="login-tab">
						<div class="title h6">Register to new account</div>
                            <form class="content" method="POST" action="{{ route('register') }}">
                                @csrf
							<div class="row">
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">First Name</label>
                                        <input id="fname" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="fname" autofocus>

                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
								</div>
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Last Name</label>
                                        <input id="lname" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="lname" autofocus>

                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
								</div>
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Your Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror		
                                    </div>
									<div class="form-group label-floating">
										<label class="control-label">Your Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group label-floating">
										<label class="control-label">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                       
                                    </div>

									<div class="form-group date-time-picker label-floating">
										<label class="control-label">Your Birthday</label>
										<input type="date" name="datetimepicker" value="10/24/1984"  class="form-control @error('password') is-invalid @enderror"  required autocomplete="new-password" />
										

                                        @error('datetimepicker')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
									</div>
									<div class="form-group label-floating is-select"  >
										<label class="control-label">Your Gender</label>
										<select class="form-select" name="gender" class="form-control @error('gender') is-invalid @enderror"  required autocomplete="new-password">
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
									</div>
									<div class="row my-3 d-flex justify-content-center">
										<div class="col-md-6 col-lg-6 col-sm-6">
											<div class="row">
												<div class="col-md-6 col-lg-6 col-sm-6">
													Register As Member
												</div>
												<div class="col-md-6 col-lg-6 col-sm-6 mt-1">
													<input name="post_role" value="member" id="member" type="radio" @if(isset($cluster_name)) checked @else checked  @endif required>

												</div>
											</div>
												

										</div>
										<div class="col-md-6 col-lg-6 col-sm-6">
											<div class="row">
												<div class="col-md-6 col-lg-6 col-sm-6">
													Register As User
												</div>
												<div class="col-md-6 col-lg-6 col-sm-6 mt-1">
													<input name="post_role" value="user" id="user" type="radio" @if(isset($event_name)) checked  @endif required>

												</div>
											</div>
														

										</div>
									</div>
									<div class="form-group"  id="cluster">
									<label class="control-label">Cluster</label>
									<select class="clusterMultiple" name="cluster[]" multiple="multiple" >

										@foreach($cluster as $list)
										<option value="{{$list->id}}" @if(isset($cluster_id)) @if($cluster_id == $list->id) selected @endif @endif>{{$list->name}}</option>
							
										@endforeach
									  </select>
									</div>
									<div class="form-group "  id="event"  >
										<label class="control-label">Event</label>
										<select class="eventMultiple" name="event[]" multiple="multiple">
											@foreach($event as $listE)
											<option value="{{$listE->id}}"  @if(isset($event_id)) @if($event_id == $listE->id) selected @endif @endif>{{$listE->name}}</option>
								
											@endforeach
										  </select>
										</div>
										

                                    <button type="submit" class="btn btn-blue btn-lg full-width">
                                        {{ __('Complete Registration!') }}
                                    </button>
								</div>
							</div>
						</form>
						@if(isset($event_name))
						<input  type="hidden"  class="event_value" value="{{$event_name}}">
						@endif
					</div>

					<div class="tab-pane fade  @if($_SERVER['REQUEST_URI'] == '/login?signin') show active @endif" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="title h6">Login to your Account</div>
						{{-- //<form class="content"> --}}
                            <form class="content" method="POST" action="{{ route('login') }}">
                                @csrf
        
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Your Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Your Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>

									<div class="remember">

									
										@if (Route::has('password.request'))
										<a class="btn btn-link forgot" href="{{ route('password.request') }}">
											{{ __('Forgot Your Password?') }}
										</a>
									@endif
									</div>


                                    <button type="submit" class="btn btn-lg btn-primary full-width">
                                        {{ __('Login') }}
                                    </button>

									<p>Don’t you have an account? <a href="{{ route('login') }}?signup">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
								</div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
			
			<!-- ... end Login-Registration Form  -->		</div>
	</div>
</div>

<!-- Window-popup Restore Password -->

<div class="modal fade" id="restore-password" tabindex="-1" role="dialog" aria-labelledby="restore-password" aria-hidden="true">
	<div class="modal-dialog window-popup restore-password-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Restore your Password</h6>
			</div>

			<div class="modal-body">
				<form  method="get">
					<p>Enter your email and click the send code button. You’ll receive a code in your email. Please use that
						code below to change the old password for a new one.
					</p>
					<div class="form-group label-floating">
						<label class="control-label">Your Email</label>
						<input class="form-control" placeholder="" type="email" value="james-spiegel@yourmail.com">
					</div>
					<button class="btn btn-blue btn-lg full-width">Send me the Code</button>
					<div class="form-group label-floating">
						<label class="control-label">Enter the Code</label>
						<input class="form-control" placeholder="" type="text" value="">
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Your New Password</label>
						<input class="form-control" placeholder="" type="password" value="password">
					</div>
					<button class="btn btn-primary btn-lg full-width">Change your Password!</button>
				</form>

			</div>
		</div>
	</div>
</div>


<script>
	document.addEventListener("DOMContentLoaded", function() {
		var webpMachine = new webpHero.WebpMachine()
		webpMachine.polyfillDocument()
	});


</script>
<script src="{{asset('js/jQuery/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('js/libs/jquery.mousewheel.min.js')}}"></script>
<script src="{{asset('js/libs/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/libs/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/libs/material.min.js')}}"></script>
<script src="{{asset('js/libs/selectize.min.js')}}"></script>
<script src="{{asset('js/libs/moment.min.js')}}"></script>
<script src="{{asset('js/libs/daterangepicker.min.js')}}"></script>
<script src="{{asset('js/libs/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/libs/ajax-pagination.min.js')}}"></script>
<script src="{{asset('js/libs/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/libs-init/libs-init.js')}}"></script>

<script src="{{asset('Bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>


<!-- SVG icons loader -->
<script src="{{asset('js/svg-loader.js')}}"></script>
<!-- /SVG icons loader -->

</body>

</html>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script>
		$(document).ready(function() {
		$user_val=$('.event_value').val();
		//alert($user_val);
		if($user_val == 'event')
		{
			$('#event').show();
			$('#cluster').hide();
			$(".eventMultiple").attr("required", true);



		}else{
			$('#event').hide();
			$(".clusterMultiple").attr("required", true);


		}
	
		$('#member').click(function(){
		$('#cluster').show();
		$('#event').hide();
		$(".clusterMultiple").attr("required", true);
		$(".eventMultiple").attr("required", false);

		});
		
		$('#user').click(function(){
		$('#cluster').hide();
		$('#event').show();
		 $(".eventMultiple").attr("required", true);
		$(".clusterMultiple").attr("required", false);


		});

    $('.clusterMultiple').select2();
    $('.eventMultiple').select2();
});
</script>
{{-- 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
