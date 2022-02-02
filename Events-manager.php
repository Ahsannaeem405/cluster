<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.crumina.net/html-olympus/17-FriendGroups.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Feb 2021 07:40:50 GMT -->

<head>

	<title>Event Manager</title>

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
						<a href="clustor-manager.php">
							<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FAV PAGE">
								<use xlink:href="#olymp-star-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Manage Widgets">
								<use xlink:href="#olymp-manage-widgets-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
								<use xlink:href="#olymp-happy-faces-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
								<use xlink:href="#olymp-happy-sticker-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="WEATHER APP">
								<use xlink:href="#olymp-music-shuffle-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
								<use xlink:href="#olymp-badge-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Community Badges">
								<use xlink:href="#olymp-status-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="#">
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
						<a href="clustor-manager.php">
							<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FAV PAGE">
								<use xlink:href="#olymp-star-icon"></use>
							</svg>
							<span class="left-menu-title">Clustors</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Manage Widgets">
								<use xlink:href="#olymp-manage-widgets-icon"></use>
							</svg>
							<span class="left-menu-title">Events</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
								<use xlink:href="#olymp-happy-faces-icon"></use>
							</svg>
							<span class="left-menu-title">Members</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
								<use xlink:href="#olymp-happy-sticker-icon"></use>
							</svg>
							<span class="left-menu-title">Users</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="WEATHER APP">
								<use xlink:href="#olymp-music-shuffle-icon"></use>
							</svg>
							<span class="left-menu-title">Cluster Manager</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
								<use xlink:href="#olymp-badge-icon"></use>
							</svg>
							<span class="left-menu-title">Communication</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Community Badges">
								<use xlink:href="#olymp-status-icon"></use>
							</svg>
							<span class="left-menu-title">Services</span>
						</a>
					</li>
					<li>
						<a href="#">
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
						<a href="02-ProfilePage.html" class="author-name fn">
							<div class="author-title">
								Abu Sufian
								<svg class="olymp-dropdown-arrow-icon">
									<use xlink:href="#olymp-dropdown-arrow-icon"></use>
								</svg>
							</div>
							<span class="author-subtitle">SPACE COWBOY</span>
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
						<a href="#">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="NEWSFEED">
								<use xlink:href="#olymp-status-icon"></use>
							</svg>
							<span class="left-menu-title">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FAV PAGE">
								<use xlink:href="#olymp-star-icon"></use>
							</svg>
							<span class="left-menu-title">Clustors</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Manage Widgets">
								<use xlink:href="#olymp-manage-widgets-icon"></use>
							</svg>
							<span class="left-menu-title">Events</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
								<use xlink:href="#olymp-happy-faces-icon"></use>
							</svg>
							<span class="left-menu-title">Members</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
								<use xlink:href="#olymp-happy-sticker-icon"></use>
							</svg>
							<span class="left-menu-title">Users</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="WEATHER APP">
								<use xlink:href="#olymp-music-shuffle-icon"></use>
							</svg>
							<span class="left-menu-title">Cluster Manager</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
								<use xlink:href="#olymp-badge-icon"></use>
							</svg>
							<span class="left-menu-title">Communication</span>
						</a>
					</li>
					<li>
						<a href="#">
							<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
								data-bs-placement="right" data-bs-original-title="Community Badges">
								<use xlink:href="#olymp-status-icon"></use>
							</svg>
							<span class="left-menu-title">Services</span>
						</a>
					</li>
					<li>
						<a href="#">
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
			<h6>Events Manager</h6>
		</div>

		<div class="header-content-wrapper">
			<!-- <form class="search-bar w-search notification-list friend-requests">
			<div class="form-group with-button">
				<input class="form-control js-user-search" placeholder="Search here events" type="text">
				<button>
					<svg class="olymp-magnifying-glass-icon">
						<use xlink:href="#olymp-magnifying-glass-icon"></use>
					</svg>
				</button>
			</div>
		</form> -->

			<!-- <a href="#" class="link-find-friend">Find Events</a> -->

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

		<!-- Tab panes -->
		<div class="tab-content tab-content-responsive">

			<div class="tab-pane fade" id="request" role="tabpanel" aria-labelledby="request-tab">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FRIEND REQUESTS</h6>
						<a href="#">Find Friends</a>
						<a href="#">Settings</a>
					</div>
					<ul class="notification-list friend-requests">
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar55-sm.webp" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
								<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>

								<a href="#" class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>

							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar56-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Tony Stevens</a>
								<span class="chat-message-item">4 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>

								<a href="#" class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>

							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>
						<li class="accepted">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar57-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								You and
								<a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends.
								Write on
								<a href="#" class="notification-link">her wall</a>.
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="#olymp-happy-face-icon"></use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="#olymp-little-delete"></use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar58-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Stagg Clothing</a>
								<span class="chat-message-item">9 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>

								<a href="#" class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>

							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>
					</ul>
					<a href="#" class="view-all bg-blue">Check all your Events</a>
				</div>

			</div>

			<div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Chat / Messages</h6>
						<a href="#">Mark all as read</a>
						<a href="#">Settings</a>
					</div>

					<ul class="notification-list chat-message">
						<li class="message-unread">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar59-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Diana Jameson</a>
								<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that
									we have to reschedule...</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="#olymp-chat---messages-icon"></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar60-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Jake Parker</a>
								<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="#olymp-chat---messages-icon"></use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar61-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
								<span class="chat-message-item">We’ll have to check that at the office and see if the
									client is on board with...</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="#olymp-chat---messages-icon"></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>

						<li class="chat-group">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar11-sm.html" alt="author" width="16" height="16">
								<img loading="lazy" src="img/avatar12-sm.html" alt="author" width="16" height="16">
								<img loading="lazy" src="img/avatar13-sm.html" alt="author" width="16" height="16">
								<img loading="lazy" src="img/avatar10-sm.html" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
								<span class="last-message-author">Ed:</span>
								<span class="chat-message-item">Yeah! Seems fine by me!</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="#olymp-chat---messages-icon"></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
							</div>
						</li>
					</ul>

					<a href="#" class="view-all bg-purple">View All Messages</a>
				</div>

			</div>

			<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Notifications</h6>
						<a href="#">Mark all as read</a>
						<a href="#">Settings</a>
					</div>

					<ul class="notification-list">
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar62-sm.html" width="34" height="34" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your
									new
									<a href="#" class="notification-link">profile status</a>.
								</div>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="#olymp-little-delete"></use>
								</svg>
							</div>
						</li>

						<li class="un-read">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar63-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<div>You and
									<a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends.
									Write on
									<a href="#" class="notification-link">his wall</a>.
								</div>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">9 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="#olymp-happy-face-icon"></use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="#olymp-little-delete"></use>
								</svg>
							</div>
						</li>

						<li class="with-comment-photo-wrap">
							<div class="with-comment-photo">
								<div class="author-thumb"><img loading="lazy" src="img/avatar64-sm.html" width="34"
										height="34" alt="author"></div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your
										<a href="#" class="notification-link">photo</a>.
									</div>
									<span class="notification-date"><time class="entry-date updated"
											datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
								</div>
								<span class="notification-icon"> <svg class="olymp-comments-post-icon">
										<use xlink:href="#olymp-comments-post-icon"></use>
									</svg> </span>
							</div>
							<div class="comment-photo"><img loading="lazy" src="img/comment-photo1.html" alt="photo"
									width="40" height="40">
								<span>“She looks incredible in that outfit! We should see each...”</span>
							</div>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="#olymp-little-delete"></use>
								</svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar65-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<div>
									<a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend
									to his event Goo in
									<a href="#" class="notification-link">Gotham Bar</a>.
								</div>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="#olymp-happy-face-icon"></use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="#olymp-little-delete"></use>
								</svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar66-sm.html" alt="author" width="34" height="34">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new
									<a href="#" class="notification-link">profile status</a>.
								</div>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-heart-icon">
									<use xlink:href="#olymp-heart-icon"></use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="#olymp-little-delete"></use>
								</svg>
							</div>
						</li>
					</ul>

					<a href="#" class="view-all bg-primary">View All Notifications</a>
				</div>

			</div>

			<div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">

				<div class="search-bar w-search notification-list friend-requests">
					<div class="form-group with-button">
						<input class="form-control js-user-search" placeholder="Search here people or pages..."
							type="text">
					</div>
				</div>

			</div>

		</div>
		<!-- ... end  Tab panes -->

	</header>

	<!-- ... end Responsive Header-BP -->

	<div class="header-spacer header-spacer-small"></div>


	<!-- Main Header Groups -->

	<div class="main-header">
		<div class="content-bg-wrap bg-group event-manager-bg"></div>
		<div class="container">
			<div class="row">
				<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
					<div class="main-header-content">
						<h1>Manage Events</h1>
						<p>Welcome to your event manager page. Here you can Add new, Edit and Delete events.</p>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- ... end Main Header Groups -->

	<div class="container">
		<div class="row">
			<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ui-block responsive-flex">
					<div class="ui-block-title">
						<ul class="nav nav-tabs calendar-events-tabs" id="calendar-events-tabs" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="events-tab" data-bs-toggle="tab" href="#events"
									role="tab" aria-controls="home" aria-selected="true">
									Calendar and Events
								</a>
							</li>


						</ul>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Tab panes -->
	<div class="tab-content" id="calendar-events-tabs-content">
		<div class="tab-pane fade show active" id="events" role="tabpanel" aria-labelledby="events-tab">
			<div class="container">
				<div class="row">
					<div class="col col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
						<div class="ui-block">


							<!-- Today Events -->

							<div class="today-events calendar">
								<div class="today-events-thumb">
									<div class="date">
										<div class="day-number">26</div>
										<div class="day-week">Saturday</div>
										<div class="month-year">March, 2016</div>
									</div>
								</div>

								<div class="list">
									<div class="control-block-button">
										<a href="#" class="btn btn-control bg-green" data-bs-toggle="modal"
											data-bs-target="#create-event">
											<svg class="olymp-plus-icon">
												<use xlink:href="#olymp-plus-icon"></use>
											</svg>
										</a>
									</div>

									<div class="accordion day-event" id="accordionExample" data-month="12" data-day="2">
										<div class="accordion-item">
											<div class="accordion-header" id="headingOne">
												<div class="event-time">
													<time datetime="2004-07-24T18:18">9:00am</time>
													<div class="more">
														<svg class="olymp-three-dots-icon">
															<use xlink:href="#olymp-three-dots-icon"></use>
														</svg>
														<ul class="more-dropdown">
															<li>
																<a href="#">Mark as Completed</a>
															</li>
															<li>
																<a href="#">Delete Event</a>
															</li>
														</ul>
													</div>
												</div>
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapseOne" aria-expanded="true"
													aria-controls="collapseOne">
													Breakfast at the Agency
													<svg width="8" height="8">
														<use xlink:href="#olymp-dropdown-arrow-icon"></use>
													</svg>
													<span class="event-status-icon" data-bs-toggle="modal"
														data-bs-target="#public-event">
														<svg class="olymp-calendar-icon" data-bs-toggle="tooltip"
															data-bs-placement="top"
															data-bs-original-title="UNCOMPLETED">
															<use xlink:href="#olymp-calendar-icon"></use>
														</svg>
													</span>
												</button>
											</div>
											<div id="collapseOne" class="accordion-collapse collapse show"
												aria-labelledby="headingOne" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													Hi Guys! I propose to go a litle earlier at the agency to have
													breakfast and talk a little more about the new design project we
													have been working on. Cheers!
													<div class="place inline-items">
														<svg class="olymp-add-a-place-icon">
															<use xlink:href="#olymp-add-a-place-icon"></use>
														</svg>
														<span>Daydreamz Agency</span>
													</div>

													<ul class="friends-harmonic inline-items">
														<li>
															<a href="#">
																<img loading="lazy" src="img/friend-harmonic5.html"
																	alt="friend" width="28" height="28">
															</a>
														</li>
														<li>
															<a href="#">
																<img loading="lazy" src="img/friend-harmonic10.html"
																	alt="friend" width="28" height="28">
															</a>
														</li>
														<li>
															<a href="#">
																<img loading="lazy" src="img/friend-harmonic7.html"
																	alt="friend" width="28" height="28">
															</a>
														</li>
														<li>
															<a href="#">
																<img loading="lazy" src="img/friend-harmonic8.html"
																	alt="friend" width="28" height="28">
															</a>
														</li>
														<li>
															<a href="#">
																<img loading="lazy" src="img/friend-harmonic2.html"
																	alt="friend" width="28" height="28">
															</a>
														</li>
														<li class="with-text">
															Will Assist
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header" id="headingTwo">
												<div class="event-time">
													<time datetime="2004-07-24T18:18">12:00pm</time>
													<div class="more">
														<svg class="olymp-three-dots-icon">
															<use xlink:href="#olymp-three-dots-icon"></use>
														</svg>
														<ul class="more-dropdown">
															<li>
																<a href="#">Mark as Completed</a>
															</li>
															<li>
																<a href="#">Delete Event</a>
															</li>
														</ul>
													</div>
												</div>
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseTwo"
													aria-expanded="false" aria-controls="collapseTwo">
													Send the new “Olympus” project files to the Agency
													<svg width="8" height="8">
														<use xlink:href="#olymp-dropdown-arrow-icon"></use>
													</svg>
													<span class="event-status-icon completed" data-toggle="tooltip"
														data-placement="top" data-original-title="COMPLETED">
														<svg class="olymp-checked-calendar-icon">
															<use xlink:href="#olymp-checked-calendar-icon"></use>
														</svg>
													</span>
												</button>
											</div>
											<div id="collapseTwo" class="accordion-collapse collapse"
												aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													Hi Guys! I propose to go a litle earlier at the agency to have
													breakfast and talk a little more about the new design project we
													have been working on. Cheers!
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header" id="headingThree">
												<div class="event-time">
													<time datetime="2004-07-24T18:18">6:30pm</time>
													<div class="more">
														<svg class="olymp-three-dots-icon">
															<use xlink:href="#olymp-three-dots-icon"></use>
														</svg>
														<ul class="more-dropdown">
															<li>
																<a href="#">Mark as Completed</a>
															</li>
															<li>
																<a href="#">Delete Event</a>
															</li>
														</ul>
													</div>
												</div>
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseThree"
													aria-expanded="false" aria-controls="collapseThree">
													Take Querty to the Veterinarian
													<svg width="8" height="8">
														<use xlink:href="#olymp-dropdown-arrow-icon"></use>
													</svg>
													<span class="event-status-icon" data-bs-toggle="modal"
														data-bs-target="#public-event">
														<svg class="olymp-calendar-icon" data-bs-toggle="tooltip"
															data-bs-placement="top"
															data-bs-original-title="UNCOMPLETED">
															<use xlink:href="#olymp-calendar-icon"></use>
														</svg>
													</span>
												</button>
											</div>
											<div id="collapseThree" class="accordion-collapse collapse"
												aria-labelledby="headingThree" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<div class="place inline-items">
														<svg class="olymp-add-a-place-icon">
															<use xlink:href="#olymp-add-a-place-icon"></use>
														</svg>
														<span>Daydreamz Agency</span>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

							<!-- ... end Today Events -->
						</div>
					</div>
					<!-- Main Content -->
					<main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">

						<div id="newsfeed-items-grid">

							<div class="ui-block">
								<article class="hentry post video">
									<div class="post__author author vcard inline-items">
										<img loading="lazy" src="img/avatar7-sm.html" alt="author" width="42"
											height="42">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Marina Valentine</a> shared a <a
												href="#">link</a>
											<div class="post__date">
												<time class="published" datetime="2004-07-24T18:18">
													March 4 at 2:05pm
												</time>
											</div>
										</div>

										<div class="more"><svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
											<ul class="more-dropdown">
												<li>
													<a href="#">Edit Post</a>
												</li>
												<li>
													<a href="#">Delete Post</a>
												</li>
												<li>
													<a href="#">Turn Off Notifications</a>
												</li>
												<li>
													<a href="#">Select as Featured</a>
												</li>
											</ul>
										</div>

									</div>

									<p>Hey <a href="#">Cindi</a>, you should really check out this new song by Iron
										Maid. The next time they come to the city we should totally go!</p>

									<div class="post-video">
										<div class="video-thumb">
											<img loading="lazy" src="img/video-youtube1.html" alt="photo" width="197"
												height="194">
											<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
												<svg class="olymp-play-icon">
													<use xlink:href="#olymp-play-icon"></use>
												</svg>
											</a>
										</div>

										<div class="video-content">
											<a href="#" class="h4 title">Iron Maid - ChillGroves</a>
											<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod
												tempor incididunt
												ut labore et dolore magna aliqua...
											</p>
											<a href="#" class="link-site">YOUTUBE.COM</a>
										</div>
									</div>
								</article>
							</div>
							<div class="ui-block">
								<article class="hentry post video">
									<div class="post__author author vcard inline-items">
										<img loading="lazy" src="img/avatar7-sm.html" alt="author" width="42"
											height="42">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Marina Valentine</a> shared a <a
												href="#">link</a>
											<div class="post__date">
												<time class="published" datetime="2004-07-24T18:18">
													March 4 at 2:05pm
												</time>
											</div>
										</div>

										<div class="more"><svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
											<ul class="more-dropdown">
												<li>
													<a href="#">Edit Post</a>
												</li>
												<li>
													<a href="#">Delete Post</a>
												</li>
												<li>
													<a href="#">Turn Off Notifications</a>
												</li>
												<li>
													<a href="#">Select as Featured</a>
												</li>
											</ul>
										</div>

									</div>

									<p>Hey <a href="#">Cindi</a>, you should really check out this new song by Iron
										Maid. The next time they come to the city we should totally go!</p>

									<div class="post-video">
										<div class="video-thumb">
											<img loading="lazy" src="img/video-youtube1.html" alt="photo" width="197"
												height="194">
											<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
												<svg class="olymp-play-icon">
													<use xlink:href="#olymp-play-icon"></use>
												</svg>
											</a>
										</div>

										<div class="video-content">
											<a href="#" class="h4 title">Iron Maid - ChillGroves</a>
											<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod
												tempor incididunt
												ut labore et dolore magna aliqua...
											</p>
											<a href="#" class="link-site">YOUTUBE.COM</a>
										</div>
									</div>
								</article>
							</div>
							<div class="ui-block">
								<article class="hentry post video">
									<div class="post__author author vcard inline-items">
										<img loading="lazy" src="img/avatar7-sm.html" alt="author" width="42"
											height="42">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Marina Valentine</a> shared a <a
												href="#">link</a>
											<div class="post__date">
												<time class="published" datetime="2004-07-24T18:18">
													March 4 at 2:05pm
												</time>
											</div>
										</div>

										<div class="more"><svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
											<ul class="more-dropdown">
												<li>
													<a href="#">Edit Post</a>
												</li>
												<li>
													<a href="#">Delete Post</a>
												</li>
												<li>
													<a href="#">Turn Off Notifications</a>
												</li>
												<li>
													<a href="#">Select as Featured</a>
												</li>
											</ul>
										</div>

									</div>

									<p>Hey <a href="#">Cindi</a>, you should really check out this new song by Iron
										Maid. The next time they come to the city we should totally go!</p>

									<div class="post-video">
										<div class="video-thumb">
											<img loading="lazy" src="img/video-youtube1.html" alt="photo" width="197"
												height="194">
											<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
												<svg class="olymp-play-icon">
													<use xlink:href="#olymp-play-icon"></use>
												</svg>
											</a>
										</div>

										<div class="video-content">
											<a href="#" class="h4 title">Iron Maid - ChillGroves</a>
											<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod
												tempor incididunt
												ut labore et dolore magna aliqua...
											</p>
											<a href="#" class="link-site">YOUTUBE.COM</a>
										</div>
									</div>
								</article>
							</div>

						</div>
					</main>
					<!-- ... end Main Content -->
					<!-- Right Sidebar -->

					<aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">

						

						<div class="ui-block">
							<div class="ui-block-title">
								<h6 class="title">Event Managers</h6>
							</div>



							<!-- W-Action -->

							<ul class="widget w-friend-pages-added notification-list friend-requests">
								<li class="inline-items">
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar38-sm.html" alt="author" width="36"
											height="36">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Francine Smith</a>
									</div>
								</li>
								<li class="inline-items">
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar38-sm.html" alt="author" width="36"
											height="36">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Francine Smith</a>
									</div>
								</li>
								<li class="inline-items">
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar38-sm.html" alt="author" width="36"
											height="36">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Francine Smith</a>
									</div>
								</li>
								<li class="inline-items">
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar38-sm.html" alt="author" width="36"
											height="36">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Francine Smith</a>
									</div>
								</li>

							</ul>

							<!-- ... end W-Action -->
						</div>

						<div class="ui-block">

							<div class="ui-block-title">
								<h6 class="title">Activity Users</h6>
							</div>


							<!-- W-Activity-Feed -->

							<ul class="widget w-activity-feed notification-list">
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar49-sm.html" alt="author" width="28"
											height="28">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Marina Polson</a>
									</div>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar49-sm.html" alt="author" width="28"
											height="28">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Marina Polson</a>
									</div>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar49-sm.html" alt="author" width="28"
											height="28">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Marina Polson</a>
									</div>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar49-sm.html" alt="author" width="28"
											height="28">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Marina Polson</a>
									</div>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar49-sm.html" alt="author" width="28"
											height="28">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Marina Polson</a>
									</div>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar49-sm.html" alt="author" width="28"
											height="28">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Marina Polson</a>
									</div>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar49-sm.html" alt="author" width="28"
											height="28">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Marina Polson</a>
									</div>
								</li>

							</ul>

							<!-- .. end W-Activity-Feed -->
						</div>


					</aside>

					<!-- ... end Right Sidebar -->


				</div>
			</div>
		</div>

	</div>
	<!-- Window-popup Create Event -->

	<div class="modal fade" id="create-event" tabindex="-1" role="dialog" aria-labelledby="create-event"
		aria-hidden="true">
		<div class="modal-dialog window-popup create-event" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Create an Event</h6>
				</div>

				<div class="modal-body">
					<div class="form-group label-floating is-select">
						<label class="control-label">Personal Event</label>
						<select class="form-select">
							<option value="MA">Private Event</option>
							<option value="FE">Personal Event</option>
						</select>
					</div>

					<div class="form-group label-floating">
						<label class="control-label">Event Name</label>
						<input class="form-control" placeholder="" value="Take Querty to the Veterinarian" type="text">
					</div>

					<div class="form-group label-floating is-empty">
						<label class="control-label">Event Location</label>
						<input class="form-control" placeholder="" value="" type="text">
					</div>

					<div class="form-group date-time-picker label-floating">
						<label class="control-label">Event Date</label>
						<input name="datetimepicker" value="26/03/2016">
						<span class="input-group-addon">
							<svg class="olymp-calendar-icon icon">
								<use xlink:href="#olymp-calendar-icon"></use>
							</svg>
						</span>
					</div>

					<div class="row">
						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="form-group label-floating">
								<label class="control-label">Event Time</label>
								<input class="form-control" placeholder="" value="09:00" type="text">
							</div>
						</div>
						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="form-group label-floating is-select">
								<label class="control-label">AM-PM</label>
								<select class="form-select">
									<option value="MA">AM</option>
									<option value="FE">PM</option>
								</select>
							</div>
						</div>
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="form-group label-floating is-select">
								<label class="control-label">Timezone</label>
								<select class="form-select">
									<option value="MA">US (UTC-8)</option>
									<option value="FE">UK (UTC-0)</option>
								</select>
							</div>
						</div>

					</div>

					<div class="form-group">
						<textarea class="form-control"
							placeholder="Event Description">I need to take Querty for a check up and ask the doctor if he needs a new tank.</textarea>
					</div>

					<div class="form-group">
						<svg class="olymp-happy-face-icon">
							<use xlink:href="#olymp-happy-face-icon"></use>
						</svg>

						<select class="form-select">
							<option title="Green Goo Rock">Green Goo Rock</option>

							<option title="Mathilda Brinker">Mathilda Brinker</option>

							<option title="Marina Valentine">Marina Valentine</option>

							<option title="Dave Marinara">Dave Marinara</option>

							<option title="Rachel Howlett">Rachel Howlett</option>

						</select>
					</div>

					<button class="btn btn-lg full-width create-event">Create Event</button>

				</div>
			</div>
		</div>
	</div>

	<!-- ... end Window-popup Create Event -->


	<!-- Window-popup Create Friends Group Add Friends -->

	<div class="modal fade" id="create-friend-group-add-friends" tabindex="-1" role="dialog"
		aria-labelledby="create-friend-group-add-friends" aria-hidden="true">
		<div class="modal-dialog window-popup create-friend-group create-friend-group-add-friends" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">Add Friends to “Freelance Clients” Group</h6>
				</div>

				<div class="modal-body">
					<div class="form-group is-select">

						<select class="form-select">
							<option title="Green Goo Rock">Green Goo Rock</option>

							<option title="Mathilda Brinker">Mathilda Brinker</option>

							<option title="Marina Valentine">Marina Valentine</option>

							<option title="Dave Marinara">Dave Marinara</option>

							<option title="Rachel Howlett">Rachel Howlett</option>

						</select>
					</div>

					<a href="#" class="btn btn-blue btn-lg full-width">Save Changes</a>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Window-popup Create Friends Group Add Friends -->



	<a class="back-to-top" href="#">
		<svg class="back-icon" width="14" height="18">
			<use xlink:href="#olymp-back-to-top"></use>
		</svg>
	</a>




	<!-- Window-popup-CHAT for responsive min-width: 768px -->

	<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog"
		aria-labelledby="popup-chat-responsive" aria-hidden="true">

		<div class="modal-content">
			<div class="modal-header">
				<span class="icon-status online"></span>
				<h6 class="title">Chat</h6>
				<div class="more">
					<svg class="olymp-three-dots-icon">
						<use xlink:href="#olymp-three-dots-icon"></use>
					</svg>
					<svg class="olymp-little-delete js-chat-open">
						<use xlink:href="#olymp-little-delete"></use>
					</svg>
				</div>
			</div>
			<div class="modal-body">
				<div class="mCustomScrollbar">
					<ul class="notification-list chat-message chat-message-field">
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar14-sm.html" width="28" height="28" alt="author"
									class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow!
									I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/author-page.html" width="36" height="36" alt="author"
									class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Don’t worry Mathilda!</span>
								<span class="chat-message-item">I already bought everything</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar14-sm.html" width="28" height="28" alt="author"
									class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow!
									I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
							</div>
						</li>
					</ul>
				</div>

				<div class="need-validation">

					<div class="form-group">
						<textarea class="form-control" placeholder="Press enter to post..."></textarea>
						<div class="add-options-message">
							<a href="#" class="options-message">
								<svg class="olymp-computer-icon">
									<use xlink:href="#olymp-computer-icon"></use>
								</svg>
							</a>
							<div class="options-message smile-block">

								<svg class="olymp-happy-sticker-icon">
									<use xlink:href="#olymp-happy-sticker-icon"></use>
								</svg>

								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat1.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat2.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat3.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat4.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat5.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat6.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat7.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat8.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat9.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat10.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat11.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat12.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat13.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat14.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat15.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat16.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat17.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat18.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat19.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat20.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat21.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat22.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat23.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat24.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat25.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat26.html" alt="icon" width="20"
												height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat27.html" alt="icon" width="20"
												height="20">
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

	<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->


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

<!-- Mirrored from html.crumina.net/html-olympus/17-FriendGroups.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Feb 2021 07:40:51 GMT -->

</html>