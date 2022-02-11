@extends('admin.layout')
@section('page_title','Home Page')
@section('content')


<!-- Main Header Groups -->

<div class="main-header">
	<div class="content-bg-wrap bg-group bg-dashboard"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Dashboard</h1>
					<p>Welcome to your dashboard! Here you’l see all your profile stats like: visits,
	 events, clustors, annual graphs, and much more!</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Main Header Groups -->

<div class="container">
	<div class="row">

		<div class="col col-xl-4 order-xl-4 col-lg-6 order-lg-4 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Total Clustors
								</span>
							</div>
							<div class="count-stat text-danger">@if(isset($clus)) {{$clus}} @endif
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col col-xl-4 order-xl-4 col-lg-6 order-lg-4 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Total Events
								</span>
							</div>
							<div class="count-stat text-danger">@if(isset($eve)) {{$eve}} @endif
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col col-xl-4 order-xl-4 col-lg-6 order-lg-4 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Total Services
								</span>
							</div>
							<div class="count-stat text-danger">@if(isset($ser)) {{$ser}} @endif
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		{{-- <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									This Months Events
								</span>
							</div>
							<div class="count-stat text-danger">18
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div> --}}

	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-lg-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">Upcoming Events Registration</div>
					<select class="form-select form-control without-border">
						<option value="LY">Holiday</option>
						<option value="CUR">Holiday</option>
					</select>
				</div>

				<div class="ui-block-content">

					<!----------------------------------------- ONE-BAR-CHART ----------------------------------------->

					<div class="chart-js chart-js-one-bar">
						<canvas id="one-bar-chart" width="1400" height="380"></canvas>
					</div>

					<!--
						JS libraries for ONE-BAR-CHART:
						js/libs/Chart.min.js
						js/libs/chartjs-plugin-deferred.min.js
						js/libs/loader.min.js
					 -->


					<!-- JS-init for ONE-BAR-CHART: js/libs/run-chart.min.js -->

					<!-------------------------------------- ... end ONE-BAR-CHART ------------------------------------>

				</div>
			</div>
		</div>
	</div>

</div>






<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="popup-chat-responsive" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="#olymp-little-delete"></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar14-sm.html" width="28" height="28" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/author-page.html" width="36" height="36" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar14-sm.html" width="28" height="28" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>
				</ul>
			</div>

			<form class="need-validation">

		<div class="form-group">
			<textarea class="form-control" placeholder="Press enter to post..."></textarea>
			<div class="add-options-message">
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="#olymp-computer-icon"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="#olymp-happy-sticker-icon"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat1.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat2.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat3.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat4.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat5.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat6.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat7.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat8.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat9.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat10.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat11.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat12.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat13.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat14.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat15.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat16.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat17.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat18.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat19.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat20.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat21.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat22.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat23.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat24.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat25.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat26.html" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat27.html" alt="icon" width="20" height="20">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</form>
		</div>
	</div>

</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



<a class="back-to-top" href="#">
	<svg class="back-icon" width="14" height="18"><use xlink:href="#olymp-back-to-top"></use></svg>
</a>


@endsection
