<!DOCTYPE html>
<html lang="en">


<head>
	<title>Communication</title>
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
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/main.min.css">

	<!-- Main RTL CSS -->
	<!--<link rel="stylesheet" type="text/css" href="css/rtl.min.css">-->

	<!-- WebP Safari Support -->
	<script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/polyfills.js"></script>
	<script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/webp-hero.bundle.js"></script>
	<script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
	<script
		src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5/tinymce.min.js"></script>

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
							<h6 class="accordion-header" id="headingOne1">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
									Commiuncation
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
											<a class="nav-link active" id="news-letter-tab" data-bs-toggle="tab"
												href="#news-letter" role="tab" aria-controls="home"
												aria-selected="true">
												News Letter
											</a>
										</li>
										<li class="" role="presentation">
											<a class="nav-link" id="meeting-tab" data-bs-toggle="tab" href="#meeting"
												role="tab" aria-controls="home" aria-selected="false">
												Meeting Invitation
											</a>
										</li>
										<li class="" role="presentation">
											<a class="nav-link" id="offer-tab" data-bs-toggle="tab" href="#offer"
												role="tab" aria-controls="home" aria-selected="true">
												Partner Offers
											</a>
										</li>
										<li class="" role="presentation">
											<a class="nav-link" id="marketing-tab" data-bs-toggle="tab"
												href="#marketing" role="tab" aria-controls="home" aria-selected="false">
												Marketing Mails
											</a>
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
							<svg class="olymp-menu-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="OPEN MENU">
								<use xlink:href="#olymp-menu-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="dashboard.php">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="NEWSFEED">
								<use xlink:href="#olymp-newsfeed-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="cluster-manager.php">
							<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FAV PAGE">
								<use xlink:href="#olymp-star-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="your-events.php">
							<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Manage Widgets">
								<use xlink:href="#olymp-manage-widgets-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="members.php">
							<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
								<use xlink:href="#olymp-happy-faces-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="users.php">
							<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
								<use xlink:href="#olymp-happy-sticker-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="communication.php">
							<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Community Badges">
								<use xlink:href="#olymp-status-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="services.php">
							<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
								<use xlink:href="#olymp-badge-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="setting.php">
							<svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Friends Birthdays">
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
							<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="NEWSFEED">
								<use xlink:href="#olymp-status-icon"></use>
							</svg>
							<span class="left-menu-title">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="cluster-manager.php">
							<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FAV PAGE">
								<use xlink:href="#olymp-star-icon"></use>
							</svg>
							<span class="left-menu-title">Clusters</span>
						</a>
					</li>
					<li>
						<a href="your-events.php">
							<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Manage Widgets">
								<use xlink:href="#olymp-manage-widgets-icon"></use>
							</svg>
							<span class="left-menu-title">Events</span>
						</a>
					</li>
					<li>
						<a href="members.php">
							<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
								<use xlink:href="#olymp-happy-faces-icon"></use>
							</svg>
							<span class="left-menu-title">Members</span>
						</a>
					</li>
					<li>
						<a href="users.php">
							<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
								<use xlink:href="#olymp-happy-sticker-icon"></use>
							</svg>
							<span class="left-menu-title">Users</span>
						</a>
					</li>

					<li>
						<a href="communication.php">
							<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
								<use xlink:href="#olymp-badge-icon"></use>
							</svg>
							<span class="left-menu-title">Communication</span>
						</a>
					</li>
					<li>
						<a href="services.php">
							<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Community Badges">
								<use xlink:href="#olymp-status-icon"></use>
							</svg>
							<span class="left-menu-title">Services</span>
						</a>
					</li>
					<li>
						<a href="setting.php">
							<svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Friends Birthdays">
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
							<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="NEWSFEED">
								<use xlink:href="#olymp-status-icon"></use>
							</svg>
							<span class="left-menu-title">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="cluster-manager.php">
							<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FAV PAGE">
								<use xlink:href="#olymp-star-icon"></use>
							</svg>
							<span class="left-menu-title">Clusters</span>
						</a>
					</li>
					<li>
						<a href="your-events.php">
							<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Manage Widgets">
								<use xlink:href="#olymp-manage-widgets-icon"></use>
							</svg>
							<span class="left-menu-title">Events</span>
						</a>
					</li>
					<li>
						<a href="members.php">
							<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
								<use xlink:href="#olymp-happy-faces-icon"></use>
							</svg>
							<span class="left-menu-title">Members</span>
						</a>
					</li>
					<li>
						<a href="users.php">
							<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
								<use xlink:href="#olymp-happy-sticker-icon"></use>
							</svg>
							<span class="left-menu-title">Users</span>
						</a>
					</li>
					<li>
						<a href="communication.php">
							<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
								<use xlink:href="#olymp-badge-icon"></use>
							</svg>
							<span class="left-menu-title">Communication</span>
						</a>
					</li>
					<li>
						<a href="services.php">
							<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Community Badges">
								<use xlink:href="#olymp-status-icon"></use>
							</svg>
							<span class="left-menu-title">Services</span>
						</a>
					</li>
					<li>
						<a href="setting.php">
							<svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Friends Birthdays">
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
		<div class="content-bg-wrap bg-account comm-bg"></div>
		<div class="container">
			<div class="row">
				<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
					<div class="main-header-content">
						<h1>Welcome to your Communication dashboard!</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ... end Main Header Account -->


	<!-- Your Account Personal Information -->
	<div class="container">
		<div class="row">
			<div class=" col-12 responsive-display-none">
				<div class="ui-block responsive-flex">
					<div class="ui-block-title">
						<ul class="nav nav-tabs calendar-events-tabs" id="calendar-events-tabs" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="news-letter-tab" data-bs-toggle="tab" href="#news-letter"
									role="tab" aria-controls="home" aria-selected="true">
									News Letter
								</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="nav-link" id="meeting-tab" data-bs-toggle="tab" href="#meeting" role="tab"
									aria-controls="home" aria-selected="false">
									Meeting Invitation
								</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="nav-link" id="offer-tab" data-bs-toggle="tab" href="#offer" role="tab"
									aria-controls="home" aria-selected="true">
									Partner Offers
								</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="nav-link" id="marketing-tab" data-bs-toggle="tab" href="#marketing" role="tab"
									aria-controls="home" aria-selected="false">
									Marketing Mails
								</a>
							</li>

						</ul>

					</div>
				</div>
			</div>
			<div class=" col-12">
				<div class="tab-content" id="calendar-events-tabs-content">
					<div class="tab-pane fade show active" id="news-letter" role="tabpanel"
						aria-labelledby="news-letter-tab">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div class="ui-block">
										<div class="ui-block-title">
											<h6 class="title">News Letter</h6>
										</div>
										<div class="ui-block-content">
											<!-- Personal Account Settings Form -->
											<form>
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<textarea id="editor" rows="10"></textarea>
														</div>
													</div>
												</div>
												<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Managers</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" checked="">
															</label>
														</div>
													</div>
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Members</div>

														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" checked="">
															</label>
														</div>
													</div>
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Users</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" checked="">
															</label>
														</div>
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<button class="btn btn-danger w-md-50 w-100">Send Now</button>
												</div>
											</form>

											<!-- ... end Personal Account Settings Form  -->

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="meeting" role="tabpanel" aria-labelledby="meeting-tab">
						<div class="container">
							<div class="row">
								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="ui-block">
										<div class="ui-block-title">
											<h6 class="title">Meeting Invitations</h6>
										</div>
										<div class="ui-block-content">
											<!-- Personal Account Settings Form -->
											<form>
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<textarea id="editor1" rows="10"></textarea>
														</div>
													</div>
												</div>
												<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Managers</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" checked="">
															</label>
														</div>
													</div>
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Members</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" checked="">
															</label>
														</div>
													</div>
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Users</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" checked="">
															</label>
														</div>
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<button class="btn btn-danger w-md-50 w-100">Send Now</button>
												</div>
											</form>

											<!-- ... end Personal Account Settings Form  -->

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="offer" role="tabpanel" aria-labelledby="offer-tab">
						<div class="container">
							<div class="row">
								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="ui-block">
										<div class="ui-block-title">
											<h6 class="title">Partner Offers</h6>
										</div>
										<div class="ui-block-content">
											<!-- Personal Account Settings Form -->
											<form>
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<textarea id="editor2" rows="10"></textarea>
														</div>
													</div>
												</div>
												<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Managers</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" checked="">
															</label>
														</div>
													</div>
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Members</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" checked="">
															</label>
														</div>
													</div>
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Users</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" checked="">
															</label>
														</div>
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<button class="btn btn-danger w-md-50 w-100">Send Now</button>
												</div>
											</form>

											<!-- ... end Personal Account Settings Form  -->

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
						<div class="container">
							<div class="row">
								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="ui-block">
										<div class="ui-block-title">
											<h6 class="title">Marketing Mails</h6>
										</div>
										<div class="ui-block-content">
											<!-- Personal Account Settings Form -->
											<form>
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<textarea id="editor3" rows="10"></textarea>
														</div>
													</div>
												</div>
												<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Managers</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" checked="">
															</label>
														</div>
													</div>
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Members</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" checked="">
															</label>
														</div>
													</div>
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Users</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" checked="">
															</label>
														</div>
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<button class="btn btn-danger w-md-50 w-100">Send Now</button>
												</div>
											</form>

											<!-- ... end Personal Account Settings Form  -->

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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

		tinymce.init({
			selector: '#editor',
			menubar: false,
			statusbar: false,
			plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
			toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
			skin: 'bootstrap',
			toolbar_drawer: 'floating',
			min_height: 200,
			autoresize_bottom_margin: 16,
			setup: (editor) => {
				editor.on('init', () => {
					editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
				});
				editor.on('focus', () => {
					editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)",
						editor.getContainer().style.borderColor = "#80bdff"
				});
				editor.on('blur', () => {
					editor.getContainer().style.boxShadow = "",
						editor.getContainer().style.borderColor = ""
				});
			}
		});


		tinymce.init({
			selector: '#editor1',
			menubar: false,
			statusbar: false,
			plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
			toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
			skin: 'bootstrap',
			toolbar_drawer: 'floating',
			min_height: 200,
			autoresize_bottom_margin: 16,
			setup: (editor) => {
				editor.on('init', () => {
					editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
				});
				editor.on('focus', () => {
					editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)",
						editor.getContainer().style.borderColor = "#80bdff"
				});
				editor.on('blur', () => {
					editor.getContainer().style.boxShadow = "",
						editor.getContainer().style.borderColor = ""
				});
			}
		});

		tinymce.init({
			selector: '#editor2',
			menubar: false,
			statusbar: false,
			plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
			toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
			skin: 'bootstrap',
			toolbar_drawer: 'floating',
			min_height: 200,
			autoresize_bottom_margin: 16,
			setup: (editor) => {
				editor.on('init', () => {
					editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
				});
				editor.on('focus', () => {
					editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)",
						editor.getContainer().style.borderColor = "#80bdff"
				});
				editor.on('blur', () => {
					editor.getContainer().style.boxShadow = "",
						editor.getContainer().style.borderColor = ""
				});
			}
		});

		tinymce.init({
			selector: '#editor3',
			menubar: false,
			statusbar: false,
			plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
			toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
			skin: 'bootstrap',
			toolbar_drawer: 'floating',
			min_height: 200,
			autoresize_bottom_margin: 16,
			setup: (editor) => {
				editor.on('init', () => {
					editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
				});
				editor.on('focus', () => {
					editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)",
						editor.getContainer().style.borderColor = "#80bdff"
				});
				editor.on('blur', () => {
					editor.getContainer().style.boxShadow = "",
						editor.getContainer().style.borderColor = ""
				});
			}
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


</html>