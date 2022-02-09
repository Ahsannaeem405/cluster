<!DOCTYPE html>
<html lang="en">
	
<head>

	<title>Setting</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">


	<!-- Theme Font -->
	<link rel="preload" type="text/css" href="css/theme-font.min.css" as="style">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.min.css">

	<!-- Main RTL CSS -->
	<!--<link rel="stylesheet" type="text/css" href="css/rtl.min.css">-->

	<!-- WebP Safari Support -->
	<script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/polyfills.js"></script>
	<script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/webp-hero.bundle.js"></script>
	<script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
</head>

<body class="page-has-left-panels page-has-right-panels">


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

	<!-- Profile Settings Responsive -->
	<div class="profile-settings-responsive">

		<a href="#" class="js-profile-settings-open profile-settings-open">
			<svg class="settings-open-arrow" width="14" height="14">
				<use xlink:href="#olymp-popup-left-arrow"></use>
			</svg>
		</a>
		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<div class="ui-block">
				<div class="your-profile">

					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h6 class="accordion-header" id="headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Settings
									<svg class="olymp-dropdown-arrow-icon">
										<use xlink:href="#olymp-dropdown-arrow-icon"></use>
									</svg>
								</button>
							</h6>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
								data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<ul class="your-profile-menu">
										<li>
											<a href="website-setting.php">Website Settings</a>
										</li>
										<li>
											<a href="personal-setting.php">Personal Settings </a>
										</li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ... end Profile Settings Responsive -->


<!-- Fixed Sidebar Left -->
<div class="fixed-sidebar left">
	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

		<a href="dashboard.php" class="logo">
			<div class="img-wrap">
				<img loading="lazy" src="img/white-logo.png" alt="logo-tital" width="50" height="50">
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-menu-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="OPEN MENU">
							<use xlink:href="#olymp-menu-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="dashboard.php">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="NEWSFEED">
							<use xlink:href="#olymp-newsfeed-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="cluster-manager.php">
						<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
							<use xlink:href="#olymp-star-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="your-events.php">
						<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Manage Widgets">
							<use xlink:href="#olymp-manage-widgets-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="members.php">
						<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
							<use xlink:href="#olymp-happy-faces-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="users.php">
						<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
							<use xlink:href="#olymp-happy-sticker-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="communication.php">
						<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Community Badges">
							<use xlink:href="#olymp-status-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="services.php">
						<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
							<use xlink:href="#olymp-badge-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="setting.php">
						<svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Friends Birthdays">
							<use xlink:href="#olymp-settings-icon"></use>
						</svg>
					</a>
				</li>
				
			</ul>
		</div>
	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
		<a href="02-ProfilePage.html" class="logo">
			<div class="img-wrap">
				<img loading="lazy" src="img/white-logo.png" alt="logo-tital" width="34" height="34">
			</div>
			<div class="title-block">
				<h6 class="logo-title">Cluster</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
						<span class="left-menu-title">Main Menu</span>
					</a>
				</li>
				<li>
					<a href="dashboard.php">
						<svg  class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="NEWSFEED"><use xlink:href="#olymp-status-icon"></use></svg>
						<span class="left-menu-title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="cluster-manager.php">
						<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
							<use xlink:href="#olymp-star-icon"></use>
						</svg>
						<span class="left-menu-title">Clusters</span>
					</a>
				</li>
				<li>
					<a href="your-events.php">
						<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Manage Widgets">
							<use xlink:href="#olymp-manage-widgets-icon"></use>
						</svg>
						<span class="left-menu-title">Events</span>
					</a>
				</li>
				<li>
					<a href="members.php">
						<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
							<use xlink:href="#olymp-happy-faces-icon"></use>
						</svg>
						<span class="left-menu-title">Members</span>
					</a>
				</li>
				<li>
					<a href="users.php">
						<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
							<use xlink:href="#olymp-happy-sticker-icon"></use>
						</svg>
						<span class="left-menu-title">Users</span>
					</a>
				</li>
				
				<li>
					<a href="communication.php">
						<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
							<use xlink:href="#olymp-badge-icon"></use>
						</svg>
						<span class="left-menu-title">Communication</span>
					</a>
				</li>
				<li>
					<a href="services.php">
						<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Community Badges">
							<use xlink:href="#olymp-status-icon"></use>
						</svg>
						<span class="left-menu-title">Services</span>
					</a>
				</li>
				<li>
					<a href="setting.php">
						<svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Friends Birthdays">
							<use xlink:href="#olymp-settings-icon"></use>
						</svg>
						<span class="left-menu-title">Settings</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- ... end Fixed Sidebar Left -->
<!-- Fixed Sidebar Left -->
<div class="fixed-sidebar left fixed-sidebar-responsive">

	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
		<a href="#" class="logo js-sidebar-open">
			<img loading="lazy" src="img/white-logo.png" alt="white-logo" width="34" height="34">
		</a>

	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
		<a href="#" class="logo">
			<div class="img-wrap">
				<img loading="lazy" src="img/logo.png" alt="white-logo" width="34" height="34">
			</div>
			<div class="title-block">
				<h6 class="logo-title">Clusters</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="control-block">
				<div class="author-page author vcard inline-items">
					<div class="author-thumb">
						<img alt="author" src="img/author-page.html" width="36" height="36" class="avatar">
						<span class="icon-status online"></span>
					</div>
					<a href="dashboard.php" class="author-name fn">
						<div class="author-title">
							Abu Sufian
							<svg class="olymp-dropdown-arrow-icon">
								<use xlink:href="#olymp-dropdown-arrow-icon"></use>
							</svg>
						</div>
						<span class="author-subtitle">web developer</span>
					</a>
				</div>
			</div>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">MAIN SECTIONS</h6>
			</div>

			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
						<span class="left-menu-title">Main Menu</span>
					</a>
				</li>
				<li>
					<a href="dashboard.php">
						<svg  class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="NEWSFEED"><use xlink:href="#olymp-status-icon"></use></svg>
						<span class="left-menu-title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="cluster-manager.php">
						<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
							<use xlink:href="#olymp-star-icon"></use>
						</svg>
						<span class="left-menu-title">Clusters</span>
					</a>
				</li>
				<li>
					<a href="your-events.php">
						<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Manage Widgets">
							<use xlink:href="#olymp-manage-widgets-icon"></use>
						</svg>
						<span class="left-menu-title">Events</span>
					</a>
				</li>
				<li>
					<a href="members.php">
						<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
							<use xlink:href="#olymp-happy-faces-icon"></use>
						</svg>
						<span class="left-menu-title">Members</span>
					</a>
				</li>
				<li>
					<a href="users.php">
						<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
							<use xlink:href="#olymp-happy-sticker-icon"></use>
						</svg>
						<span class="left-menu-title">Users</span>
					</a>
				</li>
				<li>
					<a href="communication.php">
						<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
							<use xlink:href="#olymp-badge-icon"></use>
						</svg>
						<span class="left-menu-title">Communication</span>
					</a>
				</li>
				<li>
					<a href="services.php">
						<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Community Badges">
							<use xlink:href="#olymp-status-icon"></use>
						</svg>
						<span class="left-menu-title">Services</span>
					</a>
				</li>
				<li>
					<a href="setting.php">
						<svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Friends Birthdays">
							<use xlink:href="#olymp-settings-icon"></use>
						</svg>
						<span class="left-menu-title">Settings</span>
					</a>
				</li>
			</ul>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">YOUR ACCOUNT</h6>
			</div>

			<ul class="account-settings">
				<li>
					<a href="#">

						<svg class="olymp-menu-icon">
							<use xlink:href="#olymp-menu-icon"></use>
						</svg>

						<span>Profile Settings</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-logout-icon">
							<use xlink:href="#olymp-logout-icon"></use>
						</svg>

						<span>Log Out</span>
					</a>
				</li>
			</ul>

		</div>
	</div>
</div>
<!-- ... end Fixed Sidebar Left -->


	<!-- Header-BP -->
	<header class="header" id="site-header">

		<div class="page-title">
			<h6>DashBoard</h6>
		</div>

		<div class="header-content-wrapper">
			<div class="control-block">
				<div class="author-page author vcard inline-items more">
					<div class="author-thumb">
						<img alt="author" src="img/author-page.html" width="36" height="36" class="avatar">
						<span class="icon-status online"></span>
						<div class="more-dropdown more-with-triangle">
							<div class="mCustomScrollbar" data-mcs-theme="dark">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Your Account</h6>
								</div>

								<ul class="account-settings">
									<li>
										<a href="29-YourAccount-AccountSettings.html">

											<svg class="olymp-menu-icon">
												<use xlink:href="#olymp-menu-icon"></use>
											</svg>

											<span>Profile Settings</span>
										</a>
									</li>
									<li>
										<a href="#">
											<svg class="olymp-logout-icon">
												<use xlink:href="#olymp-logout-icon"></use>
											</svg>

											<span>Log Out</span>
										</a>
									</li>
								</ul>
							</div>

						</div>
					</div>
					<a href="02-ProfilePage.html" class="author-name fn">
						<div class="author-title">
							Abu Sufian
							<svg class="olymp-dropdown-arrow-icon">
								<use xlink:href="#olymp-dropdown-arrow-icon"></use>
							</svg>
						</div>
						<span class="author-subtitle">web developer</span>
					</a>
				</div>
				<div class="control-icon more has-items mr-5">
					<i class="far fa-bell text-white">
						<!-- <use xlink:href="#olymp-thunder-icon"></use> -->
					</i>

					<div class="label-avatar bg-primary">8</div>

					<div class="more-dropdown more-with-triangle triangle-top-center">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Notifications</h6>
							<a href="#">Mark all as read</a>
						</div>

						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<ul class="notification-list">
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar62-sm.html" width="34" height="34"
											alt="author">
									</div>
									<div class="notification-event">
										<div>
											<a href="#" class="h6 notification-friend">Mathilda Brinker</a>
											add new event
											<!-- <a href="#" class="notification-link">profile status</a>. -->
										</div>
										<span class="notification-date"><time class="entry-date updated"
												datetime="2004-07-24T18:18">4 hours ago</time></span>
									</div>
									<span class="notification-icon">
										<!-- <svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg> -->
										<i class="fas fa-ellipsis-v"></i>
									</span>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar62-sm.html" width="34" height="34"
											alt="author">
									</div>
									<div class="notification-event">
										<div>
											<a href="#" class="h6 notification-friend">Mathilda Brinker</a>
											add new event
											<!-- <a href="#" class="notification-link">profile status</a>. -->
										</div>
										<span class="notification-date"><time class="entry-date updated"
												datetime="2004-07-24T18:18">4 hours ago</time></span>
									</div>
									<span class="notification-icon">
										<!-- <svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg> -->
										<i class="fas fa-ellipsis-v"></i>
									</span>
								</li>

								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar62-sm.html" width="34" height="34"
											alt="author">
									</div>
									<div class="notification-event">
										<div>
											<a href="#" class="h6 notification-friend">Mathilda Brinker</a>
											add new event
											<!-- <a href="#" class="notification-link">profile status</a>. -->
										</div>
										<span class="notification-date"><time class="entry-date updated"
												datetime="2004-07-24T18:18">4 hours ago</time></span>
									</div>
									<span class="notification-icon">
										<!-- <svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg> -->
										<i class="fas fa-ellipsis-v"></i>
									</span>
								</li>




							</ul>
						</div>

						<a href="#" class="view-all bg-primary">View All Notifications</a>
					</div>
				</div>

			</div>
		</div>

	</header>
	<!-- ... end Header-BP -->

	<!-- Responsive Header-BP -->
	<header class="header header-responsive" id="site-header-responsive">

		<div class="header-content-wrapper float-end">
			<ul class="nav nav-tabs mobile-notification-tabs" id="mobile-notification-tabs" role="tablist">

				<li class="nav-item" role="presentation">
					<a class="nav-link" id="notification-tab" data-bs-toggle="tab" href="#notification" role="tab"
						aria-controls="notification" aria-selected="false">
						<div class="control-icon has-items">
							<i class="far fa-bell text-white">
							</i>
							<div class="label-avatar bg-primary">8</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</header>
	<!-- ... end Responsive Header-BP -->


	<div class="header-spacer header-spacer-small"></div>

	<!-- Main Header Account -->

	<div class="main-header">
		<div class="content-bg-wrap setting-bg"></div>
		<div class="container">
			<div class="row">
				<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
					<div class="main-header-content">
						<h1>Setting</h1>
						<p>Welcome to your account setting, here you can edit your account details</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Main Header Account -->


	<!-- Your Account Personal Information -->

	<div class="container">
		<div class="row">
			<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
				<div class="tab-content" id="calendar-events-tabs-content">
					<div class="tab-pane fade show active" id="events" role="tabpanel" aria-labelledby="events-tab">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div class="ui-block">
										<div class="ui-block-title">
											<h6 class="title">Personal Information</h6>
										</div>
										<div class="ui-block-content">
											<!-- Personal Information Form  -->
					
											<form>
												<div class="row">
													<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="form-group label-floating">
															<label class="control-label">First Name</label>
															<input class="form-control" placeholder="" type="text" value="Abu">
														</div>
					
														<div class="form-group label-floating">
															<label class="control-label">Your Email</label>
															<input class="form-control" placeholder="" type="email"
																value="abc@yourmail.com">
														</div>
					
														<div class="form-group date-time-picker label-floating">
															<label class="control-label">Your Birthday</label>
															<input name="datetimepicker" value="10/24/1984" />
															<span class="input-group-addon">
																<svg class="olymp-month-calendar-icon icon">
																	<use xlink:href="#olymp-month-calendar-icon"></use>
																</svg>
															</span>
														</div>
													</div>
					
													<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="form-group label-floating">
															<label class="control-label">Last Name</label>
															<input class="form-control" placeholder="" type="text" value="Sufian">
														</div>
					
					
					
														<div class="form-group label-floating is-empty">
															<label class="control-label">Your Phone Number</label>
															<input class="form-control" placeholder="" type="text">
														</div>
													</div>
					
													<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
														<div class="form-group label-floating is-select">
															<label class="control-label">Your Country</label>
															<select class="form-select">
																<option value="US">United States</option>
																<option value="AU">Australia</option>
															</select>
														</div>
													</div>
													<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
														<div class="form-group label-floating is-select">
															<label class="control-label">Your State / Province</label>
															<select class="form-select">
																<option value="CA">California</option>
																<option value="TE">Texas</option>
															</select>
														</div>
													</div>
													<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
														<div class="form-group label-floating is-select">
															<label class="control-label">Your City</label>
															<select class="form-select">
																<option value="SF">San Francisco</option>
																<option value="NY">New York</option>
															</select>
														</div>
													</div>
													<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="form-group">
															<textarea class="form-control"
																placeholder="Write a little description about you">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56</textarea>
														</div>
					
														<div class="form-group label-floating is-select">
															<label class="control-label">Your Gender</label>
															<select class="form-select">
																<option value="MA">Male</option>
																<option value="FE">Female</option>
															</select>
														</div>
													</div>
													<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="form-group label-floating is-select">
															<label class="control-label">Status</label>
															<select class="form-select">
																<option value="MA">Married</option>
																<option value="FE">Not Married</option>
															</select>
														</div>
													</div>
													<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
														<button class="btn btn-primary full-width">Save all Changes</button>
													</div>
					
												</div>
											</form>
					
											<!-- ... end Personal Information Form  -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					<div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
						<div class="container">
							<div class="row">
								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="ui-block">
										<div class="ui-block-title">
											<h6 class="title">Website Settings</h6>
										</div>
										<div class="ui-block-content">	
											<!-- Personal Information Form  -->
											<form>
												<div class="row">
													<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="form-group label-floating">
															<label class="control-label">Website Name</label>
															<input class="form-control" placeholder="" type="text" value="Cluster">
														</div>
													</div>
													<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="form-group label-floating d-flex upload-logo align-items-center">
															<div class="w-50">
																<h6>Website Logo</h6>
																<label type="button" class="btn btn-primary w-50"> upload
																	<input class="form-control" placeholder="" type="file" value="Cluster" hidden id="logo-upload">
																</label>
																<input class="form-control" placeholder="" type="file" value="Cluster" hidden id="logo-upload">
															</div>
															<div class="site-img"><img src="./img/logo.png"></div>
														</div>
													</div>
													<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="form-group label-floating">
															<label class="control-label">Home page header</label>
															<input class="form-control" placeholder="" type="text" value="Find The Perfect Cluster for Yourself
															">
														</div>
													</div>
													<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="form-group label-floating d-flex upload-logo align-items-center">
															<div class="w-50">
																<h6>Primary Logo</h6>
																<label type="button" class="btn btn-primary w-50"> upload
																	<input class="form-control" placeholder="" type="file" value="Cluster" hidden id="logo-upload">
																</label>
																<input class="form-control" placeholder="" type="file" value="Cluster" hidden id="logo-upload">
															</div>
															<div class="site-img" style="background-color: gray;"><img src="./img/logo.png"></div>
														</div>
													</div>
													<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="form-group label-floating">
															<label class="control-label">Footer Text</label>
															<input class="form-control" placeholder="" type="text" value="Thank You for Visiting Our website">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
														<button type="submit" class="btn btn-primary btn-lg full-width">Save all Changes</button>
													</div>
												</div>
											</form>
											
											<!-- ... end Personal Information Form  -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="modal fade" id="public-event" tabindex="-1" role="dialog" aria-labelledby="public-event" aria-hidden="true">
					<div class="modal-dialog window-popup event-private-public public-event" role="document">
						<div class="modal-content">
							<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
								<svg class="olymp-close-icon">
									<use xlink:href="#olymp-close-icon"></use>
								</svg>
							</a>
							<div class="modal-body">
								<article class="hentry post has-post-thumbnail thumb-full-width private-event">
				
									<div class="private-event-head inline-items">
										<img loading="lazy" src="img/avatar77-sm.html" alt="author" width="40" height="40">
				
										<div class="author-date">
											<a class="h3 event-title" href="#">Green Goo in Gotham</a>
											<div class="event__date">
												<time class="published" datetime="2017-03-24T18:18">
													Saturday at 9:00am
												</time>
											</div>
										</div>
				
										<div class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
											<ul class="more-dropdown">
												<li>
													<a href="#">Edit Event Settings</a>
												</li>
												<li>
													<a href="#">Mark as Completed</a>
												</li>
												<li>
													<a href="#">Delete Event</a>
												</li>
											</ul>
										</div>
									</div>
				
									<div class="post-thumb">
										<img loading="lazy" src="img/event-public.html" alt="photo" width="769" height="380">
									</div>
				
									<div class="row">
										<div class="col col-lg-7 col-md-7 col-sm-12 col-12">
											<div class="post__author author vcard inline-items">
												<img loading="lazy" src="img/avatar5-sm.html" alt="author" width="42" height="42">
				
												<div class="author-date">
													<a class="h6 post__author-name fn" href="#">Green Goo Rock</a> created the
													<a href="#">Event</a>
													<div class="post__date">
														<time class="published" datetime="2017-03-24T18:18">
															March 11 at 9:52pm
														</time>
													</div>
												</div>
				
											</div>
				
											<p>
												We’ll be playing in the Gotham Bar in May. Come and have a great time with us! Entry: $12
											</p>
										</div>
										<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
											<div class="event-description">
												<h6 class="event-description-title">Public Event</h6>
												<div class="place inline-items">
													<svg class="olymp-add-a-place-icon">
														<use xlink:href="#olymp-add-a-place-icon"></use>
													</svg>
													<span>Gotham Bar</span>
												</div>
				
												<div class="place inline-items">
													<svg class="olymp-add-a-place-icon">
														<use xlink:href="#olymp-add-a-place-icon"></use>
													</svg>
													<span>Mar 26, 2016 at 9:00am UTC-8</span>
												</div>
				
												<ul class="friends-harmonic">
													<li>
														<a href="#">
															<img loading="lazy" src="img/friend-harmonic5.html" alt="friend" width="28" height="28">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/friend-harmonic10.html" alt="friend" width="28" height="28">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/friend-harmonic7.html" alt="friend" width="28" height="28">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/friend-harmonic8.html" alt="friend" width="28" height="28">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/friend-harmonic2.html" alt="friend" width="28" height="28">
														</a>
													</li>
													<li>
														<a href="#" class="all-users bg-breez">+24</a>
													</li>
				
													<li class="with-text">
														Will Assist
													</li>
												</ul>
				
												<a href="#" class="btn btn-blue btn-sm full-width">Invite Friends</a>
				
												<a href="#" class="btn btn-breez btn-sm full-width">Add to Calendar / Assist</a>
											</div>
										</div>
									</div>
				
				
									<div class="post-additional-info inline-items">
				
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-heart-icon">
												<use xlink:href="#olymp-heart-icon"></use>
											</svg>
											<span>8</span>
										</a>
				
										<ul class="friends-harmonic">
											<li>
												<a href="#">
													<img loading="lazy" src="img/friend-harmonic1.html" alt="friend" width="28" height="28">
												</a>
											</li>
											<li>
												<a href="#">
													<img loading="lazy" src="img/friend-harmonic9.html" alt="friend" width="28" height="28">
												</a>
											</li>
											<li>
												<a href="#">
													<img loading="lazy" src="img/friend-harmonic7.html" alt="friend" width="28" height="28">
												</a>
											</li>
											<li>
												<a href="#">
													<img loading="lazy" src="img/friend-harmonic4.html" alt="friend" width="28" height="28">
												</a>
											</li>
											<li>
												<a href="#">
													<img loading="lazy" src="img/friend-harmonic8.html" alt="friend" width="28" height="28">
												</a>
											</li>
										</ul>
				
										<div class="names-people-likes">
											<a href="#">Diana </a>, <a href="#">Nicholas</a> and
											<br>15 more liked this
										</div>
				
				
										<div class="comments-shared">
											<a href="#" class="post-add-icon inline-items">
												<svg class="olymp-speech-balloon-icon">
													<use xlink:href="#olymp-speech-balloon-icon"></use>
												</svg>
												<span>16 Comments</span>
											</a>
										</div>
				
				
									</div>
				
									<div class="control-block-button post-control-button">
				
										<a href="#" class="btn btn-control">
											<svg class="olymp-like-post-icon">
												<use xlink:href="#olymp-like-post-icon"></use>
											</svg>
										</a>
				
										<a href="#" class="btn btn-control">
											<svg class="olymp-comments-post-icon">
												<use xlink:href="#olymp-comments-post-icon"></use>
											</svg>
										</a>
				
										<a href="#" class="btn btn-control">
											<svg class="olymp-share-icon">
												<use xlink:href="#olymp-share-icon"></use>
											</svg>
										</a>
				
									</div>
				
								</article>
				
								<div class="mCustomScrollbar" data-mcs-theme="dark">
				
									<ul class="comments-list">
										<li class="comment-item">
											<div class="post__author author vcard inline-items">
												<img loading="lazy" src="img/author-page.html" width="36" height="36" alt="author">
				
												<div class="author-date">
													<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
													<div class="post__date">
														<time class="published" datetime="2017-03-24T18:18">
															38 mins ago
														</time>
													</div>
												</div>
				
												<a href="#" class="more">
													<svg class="olymp-three-dots-icon">
														<use xlink:href="#olymp-three-dots-icon"></use>
													</svg>
												</a>
				
											</div>
				
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>
				
											<a href="#" class="post-add-icon inline-items">
												<svg class="olymp-heart-icon">
													<use xlink:href="#olymp-heart-icon"></use>
												</svg>
												<span>3</span>
											</a>
											<a href="#" class="reply">Reply</a>
										</li>
										<li class="comment-item">
											<div class="post__author author vcard inline-items">
												<img loading="lazy" src="img/avatar1-sm.html" alt="author" width="42" height="42">
				
												<div class="author-date">
													<a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
													<div class="post__date">
														<time class="published" datetime="2017-03-24T18:18">
															1 hour ago
														</time>
													</div>
												</div>
				
												<a href="#" class="more">
													<svg class="olymp-three-dots-icon">
														<use xlink:href="#olymp-three-dots-icon"></use>
													</svg>
												</a>
				
											</div>
				
											<p>Ratione voluptatem sequi en lod nesciunt. Neque porro quisquam est, quinder dolorem ipsum
												quia dolor sit amet, consectetur adipisci velit en lorem ipsum duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
											</p>
				
											<a href="#" class="post-add-icon inline-items">
												<svg class="olymp-heart-icon">
													<use xlink:href="#olymp-heart-icon"></use>
												</svg>
												<span>8</span>
											</a>
											<a href="#" class="reply">Reply</a>
										</li>
										<li class="comment-item">
											<div class="post__author author vcard inline-items">
												<img loading="lazy" src="img/avatar10-sm.html" alt="author" width="36" height="36">
				
												<div class="author-date">
													<a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
													<div class="post__date">
														<time class="published" datetime="2017-03-24T18:18">
															5 mins ago
														</time>
													</div>
												</div>
				
												<a href="#" class="more">
													<svg class="olymp-three-dots-icon">
														<use xlink:href="#olymp-three-dots-icon"></use>
													</svg>
												</a>
				
											</div>
				
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>
				
											<a href="#" class="post-add-icon inline-items">
												<svg class="olymp-heart-icon">
													<use xlink:href="#olymp-heart-icon"></use>
												</svg>
												<span>8</span>
											</a>
											<a href="#" class="reply">Reply</a>
										</li>
									</ul>
				
								</div>
				
								<form class="comment-form inline-items">
				
									<div class="post__author author vcard inline-items">
										<img loading="lazy" src="img/author-page.html" width="36" height="36" alt="author">
				
										<div class="form-group with-icon-right">
											<textarea class="form-control" placeholder=""></textarea>
											<div class="add-options-message">
												<a href="#" class="options-message">
													<svg class="olymp-camera-icon">
														<use xlink:href="#olymp-camera-icon"></use>
													</svg>
												</a>
											</div>
										</div>
									</div>
				
								</form>
							</div>
						</div>
					</div>
				</div> -->
				
			</div>

			<div
				class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12 responsive-display-none">
				<div class="ui-block">

					<!-- Your Profile  -->
					<div class="your-profile">

						<div class="accordion" id="accordionExample1">
							<div class="accordion-item">
								<h6 class="accordion-header" id="headingOne1">
									<button class="accordion-button" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseOne1" aria-expanded="true"
										aria-controls="collapseOne1">
										Settings
										<svg class="olymp-dropdown-arrow-icon">
											<use xlink:href="#olymp-dropdown-arrow-icon"></use>
										</svg>
									</button>
								</h6>
								<div id="collapseOne1" class="accordion-collapse collapse show"
									aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
									<div class="accordion-body setting-nav">
										<ul class="nav  calendar-events-tabs" id="calendar-events-tabs" role="tablist">
											<li class="" role="presentation">
												<a class="nav-link active" id="events-tab" data-bs-toggle="tab" href="#events" role="tab" aria-controls="home" aria-selected="true">
													Personel Setttings
												</a>
											</li>
											<li class="" role="presentation">
												<a class="nav-link" id="notifications-tab" data-bs-toggle="tab" href="#notifications" role="tab" aria-controls="home" aria-selected="false">
													Website Settings
												</a>
											</li>

										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- ... end Your Profile  -->

				</div>
			</div>
		</div>
	</div>
	

	<!-- ... end Your Account Personal Information -->





	<a class="back-to-top" href="#">
		<svg class="back-icon" width="14" height="18">
			<use xlink:href="#olymp-back-to-top"></use>
		</svg>
	</a>



	<!-- JS Scripts -->

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			var webpMachine = new webpHero.WebpMachine()
			webpMachine.polyfillDocument()
		});
	</script>
	<script src="js/jQuery/jquery-3.5.1.min.js"></script>

	<script src="js/libs/jquery.mousewheel.min.js"></script>
	<script src="js/libs/perfect-scrollbar.min.js"></script>
	<script src="js/libs/imagesloaded.pkgd.min.js"></script>
	<script src="js/libs/material.min.js"></script>
	<script src="js/libs/selectize.min.js"></script>
	<script src="js/libs/moment.min.js"></script>
	<script src="js/libs/daterangepicker.min.js"></script>
	<script src="js/libs/isotope.pkgd.min.js"></script>
	<script src="js/libs/ajax-pagination.min.js"></script>
	<script src="js/libs/jquery.magnific-popup.min.js"></script>

	<script src="js/main.js"></script>
	<script src="js/libs-init/libs-init.js"></script>

	<script src="Bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- SVG icons loader -->
	<script src="js/svg-loader.js"></script>
	<!-- /SVG icons loader -->

</body>

<!-- Mirrored from html.crumina.net/html-olympus/28-YourAccount-PersonalInformation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Feb 2021 07:41:40 GMT -->

</html>