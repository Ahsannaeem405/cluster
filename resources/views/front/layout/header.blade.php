<!DOCTYPE html>
<html lang="en">

<head>

	<title>@yield('page_title')</title>

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- WebP Safari Support -->
	<script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/polyfills.js"></script>
	<script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/webp-hero.bundle.js"></script>
	{{-- <link rel="icon" href="{{$setting->logo}}" type="image/icon type"> --}}
</head>

<body class="landing-page">


	<!-- Preloader -->

	<div id="hellopreloader">
		<div class="preloader">
			<svg width="45" height="45" stroke="#fff">
				<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
					<circle cx="22" cy="22" r="6" stroke="none">
						<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite"
							values="6;22" />
						<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s"
							repeatCount="indefinite" values="1;0" />
						<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s"
							repeatCount="indefinite" values="2;0" />
					</circle>
					<circle cx="22" cy="22" r="6" stroke="none">
						<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite"
							values="6;22" />
						<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s"
							repeatCount="indefinite" values="1;0" />
						<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s"
							repeatCount="indefinite" values="2;0" />
					</circle>
					<circle cx="22" cy="22" r="8">
						<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite"
							values="6;1;2;3;4;5;6" />
					</circle>
				</g>
			</svg>

			<div class="text">Loading ...</div>
		</div>
	</div>

	<!-- ... end Preloader -->
	<!-- Header Standard Landing  -->

	<div class="header--standard header--standard-landing" id="header--standard">
		<div class="container">
			<div class="header--standard-wrap">

				<a href="#" class="logo">
					<div class="img-wrap">
						@if(isset($setting))
						<img loading="lazy" src="{{asset('images')}}/{{$setting->website_logo}}" alt="cluster logo" width="100" height="100">

						<img loading="lazy" src="{{asset('images')}}/{{$setting->website_logo}}"  width="100" height="100" alt="cluster logo"
							class="logo-colored">

						@else  
						<img loading="lazy" src="{{asset('img/logo.png')}}" alt="cluster logo"  width="100" height="100">

						<img loading="lazy" src="{{asset('img/logo.png')}}"  width="100" height="100" alt="cluster logo"
							class="logo-colored">
						@endif
						
					</div>
				</a>

				<a href="#" class="open-responsive-menu js-open-responsive-menu">
					<svg class="olymp-menu-icon">
						<use xlink:href="#olymp-menu-icon"></use>
					</svg>
				</a>

				<div class="nav nav-pills nav1 header-menu expanded-menu">
					<div class="mCustomScrollbar">
						<ul>
							<li class="nav-item">
								<a href="{{url('/')}}" class="nav-link">Home</a>
							</li>
							<!-- <li class="nav-item">
							<a href="#" class="nav-link">Terms & Conditions</a>
						</li> -->
							<li class="nav-item">
								<a href="{{ route('login') }}?signup" class="nav-link">Sign up</a>
							</li>
							@if(!Auth::check())
							<li class="nav-item ">
								<a href="{{ route('login') }}?signin" class="nav-link join-us ">Log in</a>
							</li>
							@else
							<li class="nav-item ">
								<a class="nav-link join-us " href="{{ route('logout') }}"
								onclick="event.preventDefault();
											  document.getElementById('logout-form').submit();">
								 {{ __('Logout') }}
							 </a>

							 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								 @csrf
							 </form>
							</li>
							@endif
						
							<li class="close-responsive-menu js-close-responsive-menu">
								<svg class="olymp-close-icon">
									<use xlink:href="#olymp-close-icon"></use>
								</svg>
							</li>

							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
