
<?php $__env->startSection('page_title','Home Page'); ?>
<?php $__env->startSection('content'); ?>


<!-- Main Header Groups -->

<div class="main-header">
	<div class="content-bg-wrap bg-group bg-dashboard"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>DashBoard</h1>
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

		<div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Total Clustors
								</span>
							</div>
							<div class="count-stat text-danger">28
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Total Events
								</span>
							</div>
							<div class="count-stat text-danger">439
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Active Events
								</span>
							</div>
							<div class="count-stat text-danger">83
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
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
		</div>

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
	<div class="row">
		<div class="col col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mb-3">
			<div class="ui-block responsive-flex h-100 mb-0">
				<div class="ui-block-title">
					<div class="h6 title">Total Registration</div>

					<div class="points align-right">

						<span>
							<span class="statistics-point bg-yellow"></span>
							THIS YEAR
						</span>

						<span>
							<span class="statistics-point bg-primary"></span>
							LAST YEAR
						</span>

					</div>

					<select class="form-select form-control without-border">
						<option value="CUR">LAST 3 MONTH</option>
						<option value="LY">LAST YEAR (2021)</option>
					</select>

					<a href="#" class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>
					</a>

				</div>

				<div class="ui-block-content">

					<!----------------------------------------- LINE-GRAPHIC-CHART ------------------------------------>

					<div class="chart-js chart-js-line-graphic">
						<canvas id="line-graphic-chart" width="730" height="300"></canvas>
					</div>

					<!--
						JS libraries for LINE-GRAPHIC-CHART:
						js/libs/Chart.min.js
						js/libs/chartjs-plugin-deferred.min.js
						js/libs/loader.min.js
					 -->


					<!-- JS-init for LINE-GRAPHIC-CHART: js/libs/run-chart.min.js -->

					<!--------------------------------- ... end LINE-GRAPHIC-CHART ------------------------------------>

				</div>

			</div>
		</div>
		<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
			<div class="ui-block h-100 mb-0">
				<div class="ui-block-title">
					<div class="h6 title">Colors Pie Chart</div>
					<a href="#" class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>
					</a>
				</div>
				<div class="ui-block-content">
					<div class="chart-with-statistic">
						<ul class="statistics-list-count">
							<li>
								<div class="points">
									<span>
										<span class="statistics-point bg-purple"></span>
										Status Updates
									</span>
								</div>
								<div class="count-stat">8.247</div>
							</li>
							<li>
								<div class="points">
									<span>
										<span class="statistics-point bg-breez"></span>
										Multimedia
									</span>
								</div>
								<div class="count-stat">5.630</div>
							</li>
							<li>
								<div class="points">
									<span>
										<span class="statistics-point bg-primary"></span>
										Shared Posts
									</span>
								</div>
								<div class="count-stat">1.498</div>
							</li>
							<li>
								<div class="points">
									<span>
										<span class="statistics-point bg-yellow"></span>
										Blog Posts
									</span>
								</div>
								<div class="count-stat">1.136</div>
							</li>
						</ul>

						<!---------------------------------------- PIE-COLOR-CHART ------------------------------------>

						<!-- <div class="chart-js chart-js-pie-color">
							<canvas id="pie-color-chart" width="180" height="180"></canvas>
							<div class="general-statistics">16.502
								<span>Last Month Posts</span>
							</div>
						</div> -->

						<!--
							JS libraries for PIE-COLOR-CHART:
							js/libs/Chart.min.js
							js/libs/chartjs-plugin-deferred.min.js
							js/libs/loader.min.js
						 -->


						<!-- JS-init for PIE-COLOR-CHART: js/libs/run-chart.min.js -->

						<!--------------------------------- ... end PIE-COLOR-CHART ----------------------------------->

					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">

		<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
			<div class="ui-block h-100 mb-0">
				<div class="ui-block-title">
					<div class="h6 title">Pie Chart with Text</div>
					<a href="#" class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>
					</a>
				</div>
				<div class="ui-block-content">

					<!---------------------------------------------- PIE-CHART ---------------------------------------->

					<div class="circle-progress circle-pie-chart">
						<div class="pie-chart" data-value="0.68" data-startcolor="#38a9ff" data-endcolor="#317cb6">
							<div class="content"><span>%</span></div>
						</div>
					</div>

					<!--
						JS libraries for PIE-CHART:
						js/libs/circle-progress.min.js
					 -->


					<!-- JS-init for PIE-CHART: js/libs/run-chart.min.js -->

					<!------------------------------------ ... end PIE-CHART ------------------------------------------>

					<div class="chart-text">
						<h6>Friends Comments</h6>
						<p>68% of friends that visit your profile comment on your posts.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mb-3">
			<div class="ui-block h-100 mb-0">
				<div class="ui-block-title">
					<div class="h6 title">Worldwide Statistics</div>
					<a href="#" class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>
					</a>
				</div>

				<div class="ui-block-content">
					<div class="world-statistics">
						<div class="world-statistics-img">
							<img loading=lazy src="img/world-map.html" alt="map" width="520" height="281">
						</div>

						<ul class="country-statistics">
							<li>
								<img loading=lazy src="img/flag1.html" alt="flag" width="16" height="11">
								<span class="country">United States</span>
								<span class="count-stat">86.134</span>
							</li>
							<li>
								<img loading="lazy" src="img/flag2.html" alt="flag" width="16" height="11">
								<span class="country">Mexico</span>
								<span class="count-stat">35.136</span>
							</li>
							<li>
								<img loading="lazy" src="img/flag3.html" alt="flag" width="16" height="11">
								<span class="country">France</span>
								<span class="count-stat">12.600</span>
							</li>
							<li>
								<img loading="lazy" src="img/flag4.html" alt="flag" width="16" height="11">
								<span class="country">Spain</span>
								<span class="count-stat">9.471</span>
							</li>
							<li>
								<img loading="lazy" src="img/flag5.html" alt="flag" width="16" height="11">
								<span class="country">Ireland</span>
								<span class="count-stat">8.058</span>
							</li>
							<li>
								<img loading="lazy" src="img/flag6.html" alt="flag" width="16" height="11">
								<span class="country">Argentina</span>
								<span class="count-stat">5.653</span>
							</li>
							<li>
								<img loading="lazy" src="img/flag7.html" alt="flag" width="16" height="11">
								<span class="country">Ecuador</span>
								<span class="count-stat">2.924</span>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
			<div class="ui-block h-100 mb-0">
				<div class="ui-block-title">
					<div class="h6 title">Country Detail</div>
					<a href="#" class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>
					</a>
				</div>
				<div class="ui-block-content js-google-map">

					<!------------------------------------------- US-CHART-MAP ---------------------------------------->

					<div id="us-chart-map" style="width: 270px; height: 180px; max-width: 100%;"></div>

					<!--
						JS libraries for US-CHART-MAP:
						js/libs/Chart.min.js
						js/libs/chartjs-plugin-deferred.min.js
						js/libs/loader.min.js
					 -->


					<!-- JS-init for US-CHART-MAP: js/libs/run-chart.min.js -->

					<!------------------------------------ ... end US-CHART-MAP --------------------------------------->


					<ul class="statistics-list-count style-2">
						<li>
							<div class="points">
									<span>
										<span class="statistics-point bg-blue"></span>
										Profile Visits
									</span>
							</div>
							<div class="count-stat">4.290</div>
						</li>
						<li>
							<div class="points">
									<span>
										<span class="statistics-point bg-breez"></span>
										Post Likes
									</span>
							</div>
							<div class="count-stat">2.758</div>
						</li>
					</ul>
				</div>
			</div>
		</div>


		<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
			<div class="ui-block h-100 mb-0">
				<div class="ui-block-title">
					<div class="h6 title">Progress Bars</div>
					<a href="#" class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>
					</a>
				</div>

				<div class="ui-block-content">
					<div class="skills-item">
						<div class="skills-item-info">
							<span class="skills-item-title">Orange Gradient Progress</span>
							<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="62" data-from="0"></span><span class="units">62%</span></span>
						</div>
						<div class="skills-item-meter">
							<span class="skills-item-meter-active bg-primary" style="width: 62%"></span>
						</div>
					</div>

					<div class="skills-item">
						<div class="skills-item-info">
							<span class="skills-item-title">Violet Progress</span>
							<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="46" data-from="0"></span><span class="units">46%</span></span>
						</div>
						<div class="skills-item-meter">
							<span class="skills-item-meter-active bg-purple" style="width: 46%"></span>
						</div>
					</div>

					<div class="skills-item">
						<div class="skills-item-info">
							<span class="skills-item-title">Blue Progress</span>
							<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="79" data-from="0"></span><span class="units">79%</span></span>
						</div>
						<div class="skills-item-meter">
							<span class="skills-item-meter-active bg-blue" style="width: 79%"></span>
						</div>
					</div>

					<div class="skills-item">
						<div class="skills-item-info">
							<span class="skills-item-title">Aqua Progress</span>
							<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="34" data-from="0"></span><span class="units">34%</span></span>
						</div>
						<div class="skills-item-meter">
							<span class="skills-item-meter-active bg-breez" style="width: 34%"></span>
						</div>
					</div>

					<div class="skills-item">
						<div class="skills-item-info">
							<span class="skills-item-title">Yellow Progress</span>
							<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="95" data-from="0"></span><span class="units">95%</span></span>
						</div>
						<div class="skills-item-meter">
							<span class="skills-item-meter-active bg-yellow" style="width: 95%"></span>
						</div>
					</div>
				</div>

			</div>
		</div>


		<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
			<div class="ui-block h-100 mb-0">
				<div class="ui-block-title">
					<div class="h6 title">Icons with Text</div>
					<a href="#" class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>
					</a>
				</div>

				<div class="ui-block-content">
					<div class="monthly-indicator-wrap">
						<div class="monthly-indicator">
							<a href="#" class="btn btn-control bg-blue">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="#olymp-happy-face-icon"></use>
								</svg>
							</a>

							<div class="monthly-count">
								9.855
								<span class="period">Likes</span>
							</div>
						</div>

						<div class="monthly-indicator">
							<a href="#" class="btn btn-control bg-blue">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="#olymp-happy-face-icon"></use>
								</svg>
							</a>

							<div class="monthly-count">
								6.721
								<span class="period">Shares</span>
							</div>
						</div>

						<div class="monthly-indicator">
							<a href="#" class="btn btn-control bg-blue">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="#olymp-happy-face-icon"></use>
								</svg>
							</a>

							<div class="monthly-count">
								2.047
								<span class="period">Comments</span>
							</div>
						</div>

						<div class="monthly-indicator">
							<a href="#" class="btn btn-control bg-blue">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="#olymp-happy-face-icon"></use>
								</svg>
							</a>

							<div class="monthly-count">
								1.536
								<span class="period">Messages</span>
							</div>
						</div>

						<div class="monthly-indicator">
							<a href="#" class="btn btn-control bg-primary">
								<svg class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</a>

							<div class="monthly-count">
								Paragraph
								<span class="period">Lorem ipsum dolor sit amet, consectetur icing elit, sed do eiusmod
									tempor incididunt ut ore et dolore magna aliqua. Ut enim ad minim an quis nostrud
									exercitation.
								</span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>


	<div class="row">
		<div class="col col-lg-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">Active Events</div>
					<select class="form-select form-control without-border">
						<option value="LY">LAST YEAR (2021)</option>
						<option value="2">CURRENT YEAR (2022)</option>
					</select>
				</div>

				<div class="ui-block-content">

					<!------------------------------------------- LINE-CHART ------------------------------------------>

					<div class="chart-js chart-js-line-chart">
						<canvas id="line-chart" width="1400" height="380"></canvas>
					</div>

					<!--
						JS libraries for LINE-CHART:
						js/libs/Chart.min.js
						js/libs/chartjs-plugin-deferred.min.js
						js/libs/loader.min.js
					 -->

					<!-- JS-init for LINE-CHART: js/libs/run-chart.min.js -->

					<!------------------------------------ ... end LINE-CHART ----------------------------------------->

				</div>
				<hr>
				<div class="ui-block-content display-flex content-around">

					<!----------------------------------------- PIE-SMALL-CHART --------------------------------------->

					<div class="chart-js chart-js-small-pie">
						<canvas id="pie-small-chart" width="90" height="90"></canvas>
					</div>

					<!--
						JS libraries for PIE-SMALL-CHART:
						js/libs/Chart.min.js
						js/libs/chartjs-plugin-deferred.min.js
						js/libs/loader.min.js
					 -->

					<!-- JS-init for PIE-SMALL-CHART: js/libs/run-chart.min.js -->

					<!--------------------------------- ... end PIE-SMALL-CHART --------------------------------------->

					<div class="points points-block">

						<span>
							<span class="statistics-point bg-breez"></span>
							Yearly Likes
						</span>

						<span>
							<span class="statistics-point bg-yellow"></span>
							Yearly Comments
						</span>

					</div>

					<div class="text-stat">
						<div class="count-stat">2.758</div>
						<div class="title">Total Likes</div>
						<div class="sub-title">This Year</div>
					</div>

					<div class="text-stat">
						<div class="count-stat">5.420,7</div>
						<div class="title">Average Likes</div>
						<div class="sub-title">By Month</div>
					</div>

					<div class="text-stat">
						<div class="count-stat">42.973</div>
						<div class="title">Total Comments</div>
						<div class="sub-title">This Year</div>
					</div>

					<div class="text-stat">
						<div class="count-stat">3.581,1</div>
						<div class="title">Average Comments</div>
						<div class="sub-title">By Month</div>
					</div>

				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
			<div class="ui-block h-100 mb-0">
				<div class="ui-block-title">
					<div class="h6 title">Progress Bars</div>
					<a href="#" class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>
					</a>
				</div>
				<div class="ui-block-content">

					<!----------------------------------------- TWO-BAR-CHART-2 --------------------------------------->

					<div class="chart-js chart-js-two-bar">
						<canvas id="two-bar-chart-2" width="400" height="300"></canvas>
					</div>

					<!--
						JS libraries for TWO-BAR-CHART-2:
						js/libs/Chart.min.js
						js/libs/chartjs-plugin-deferred.min.js
						js/libs/loader.min.js
					 -->

					<!-- JS-init for TWO-BAR-CHART-2: js/libs/run-chart.min.js -->

					<!--------------------------------- ... end TWO-BAR-CHART-2 --------------------------------------->

				</div>
			</div>
		</div>
		<!-- <div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
			<div class="ui-block h-100 mb-0">
				<div class="ui-block-title">
					<div class="h6 title">Number with Slider</div>
					<a href="#" class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>
					</a>
				</div>

				<div class="ui-block-content">
					<div class="swiper-container" data-slide="fade">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="statistics-slide">
									<div class="count-stat" data-swiper-parallax="-500">248</div>
									<div class="title" data-swiper-parallax="-100">
										<span class="c-primary">Olympus</span> Posts Rank
									</div>
									<div class="sub-title" data-swiper-parallax="-100">The Olympus Rank measures the quantity of comments, likes and posts.</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="statistics-slide">
									<div class="count-stat" data-swiper-parallax="-500">358</div>
									<div class="title" data-swiper-parallax="-100">
										<span class="c-primary">Olympus</span> Posts Rank
									</div>
									<div class="sub-title" data-swiper-parallax="-100">The Olympus Rank measures the quantity of comments, likes and posts.</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="statistics-slide">
									<div class="count-stat" data-swiper-parallax="-500">711</div>
									<div class="title" data-swiper-parallax="-100">
										<span class="c-primary">Olympus</span> Posts Rank
									</div>
									<div class="sub-title" data-swiper-parallax="-100">The Olympus Rank measures the quantity of comments, likes and posts.</div>
								</div>
							</div>
						</div>

						<!-- If we need pagination -->
						<div class="swiper-pagination pagination-blue"></div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- <div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
			<div class="ui-block h-100 mb-0">
				<div class="ui-block-title">
					<div class="h6 title">Pie Chart</div>
					<a href="#" class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>
					</a>
				</div>
				<div class="ui-block-content">

					<!------------------------------------------- RADAR-CHART ----------------------------------------->

					<!-- <div class="chart-js chart-radar">
						<canvas class="radar-chart" id="radar-chart" width="400" height="300"></canvas>
					</div> -->

					<!--
						JS libraries for RADAR-CHART:
						js/libs/Chart.min.js
						js/libs/chartjs-plugin-deferred.min.js
						js/libs/loader.min.js
					 -->

					<!-- JS-init for RADAR-CHART: js/libs/run-chart.min.js -->

					<!------------------------------------ ... end RADAR-CHART ---------------------------------------->

				</div>
			</div>
		</div> -->
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cluster\cluster\resources\views/admin/index.blade.php ENDPATH**/ ?>