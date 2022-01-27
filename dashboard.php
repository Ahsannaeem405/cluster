<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.crumina.net/html-olympus/26-Statistics.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Feb 2021 07:41:04 GMT -->
<head>

	<title>Dashboard</title>

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
					<a href="clustor-manager.php">
						<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
							<use xlink:href="#olymp-star-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Manage Widgets">
							<use xlink:href="#olymp-manage-widgets-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
							<use xlink:href="#olymp-happy-faces-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
							<use xlink:href="#olymp-happy-sticker-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="WEATHER APP">
							<use xlink:href="#olymp-music-shuffle-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
							<use xlink:href="#olymp-badge-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Community Badges">
							<use xlink:href="#olymp-status-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
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
					<a href="clustor-manager.php">
						<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
							<use xlink:href="#olymp-star-icon"></use>
						</svg>
						<span class="left-menu-title">Clustors</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Manage Widgets">
							<use xlink:href="#olymp-manage-widgets-icon"></use>
						</svg>
						<span class="left-menu-title">Events</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
							<use xlink:href="#olymp-happy-faces-icon"></use>
						</svg>
						<span class="left-menu-title">Members</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
							<use xlink:href="#olymp-happy-sticker-icon"></use>
						</svg>
						<span class="left-menu-title">Users</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="WEATHER APP">
							<use xlink:href="#olymp-music-shuffle-icon"></use>
						</svg>
						<span class="left-menu-title">Cluster Manager</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
							<use xlink:href="#olymp-badge-icon"></use>
						</svg>
						<span class="left-menu-title">Communication</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Community Badges">
							<use xlink:href="#olymp-status-icon"></use>
						</svg>
						<span class="left-menu-title">Services</span>
					</a>
				</li>
				<li>
					<a href="#">
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
						<svg  class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="NEWSFEED"><use xlink:href="#olymp-status-icon"></use></svg>
						<span class="left-menu-title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
							<use xlink:href="#olymp-star-icon"></use>
						</svg>
						<span class="left-menu-title">Clustors</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Manage Widgets">
							<use xlink:href="#olymp-manage-widgets-icon"></use>
						</svg>
						<span class="left-menu-title">Events</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
							<use xlink:href="#olymp-happy-faces-icon"></use>
						</svg>
						<span class="left-menu-title">Members</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
							<use xlink:href="#olymp-happy-sticker-icon"></use>
						</svg>
						<span class="left-menu-title">Users</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="WEATHER APP">
							<use xlink:href="#olymp-music-shuffle-icon"></use>
						</svg>
						<span class="left-menu-title">Cluster Manager</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
							<use xlink:href="#olymp-badge-icon"></use>
						</svg>
						<span class="left-menu-title">Communication</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Community Badges">
							<use xlink:href="#olymp-status-icon"></use>
						</svg>
						<span class="left-menu-title">Services</span>
					</a>
				</li>
				<li>
					<a href="#">
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
									<img loading="lazy" src="img/avatar62-sm.html" width="34" height="34" alt="author">
								</div>
								<div class="notification-event">
									<div>
										<a href="#" class="h6 notification-friend">Mathilda Brinker</a> 
										add new event
										<!-- <a href="#" class="notification-link">profile status</a>. -->
									</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
								<span class="notification-icon">
										<!-- <svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg> -->
										<i class="fas fa-ellipsis-v"></i>
									</span>
							</li>
							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar62-sm.html" width="34" height="34" alt="author">
								</div>
								<div class="notification-event">
									<div>
										<a href="#" class="h6 notification-friend">Mathilda Brinker</a> 
										add new event
										<!-- <a href="#" class="notification-link">profile status</a>. -->
									</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
								<span class="notification-icon">
										<!-- <svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg> -->
										<i class="fas fa-ellipsis-v"></i>
									</span>
							</li>

							<li>
								<div class="author-thumb">
									<img loading="lazy" src="img/avatar62-sm.html" width="34" height="34" alt="author">
								</div>
								<div class="notification-event">
									<div>
										<a href="#" class="h6 notification-friend">Mathilda Brinker</a> 
										add new event
										<!-- <a href="#" class="notification-link">profile status</a>. -->
									</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
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
				<a class="nav-link" id="notification-tab" data-bs-toggle="tab" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
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
												<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
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
												<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
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
							<a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on
							<a href="#" class="notification-link">her wall</a>.
						</div>
						<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
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
												<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
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
							<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
						<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
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
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
						<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
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
							<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
						</div>
						<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
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
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
						</div>
						<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="#olymp-chat---messages-icon"></use></svg>
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
							<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new
								<a href="#" class="notification-link">profile status</a>.
							</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
						<span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>
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
								<a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on
								<a href="#" class="notification-link">his wall</a>.
							</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
						</div>
						<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
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
							<div class="author-thumb"><img loading="lazy" src="img/avatar64-sm.html" width="34" height="34" alt="author"></div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your
									<a href="#" class="notification-link">photo</a>.
								</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
							</div>
							<span class="notification-icon">										<svg class="olymp-comments-post-icon"><use xlink:href="#olymp-comments-post-icon"></use></svg>									</span>
						</div>
						<div class="comment-photo"><img loading="lazy" src="img/comment-photo1.html" alt="photo" width="40" height="40">
							<span>“She looks incredible in that outfit! We should see each...”</span></div>
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
								<a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in
								<a href="#" class="notification-link">Gotham Bar</a>.
							</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
						</div>
						<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="#olymp-happy-face-icon"></use></svg>
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
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
						</div>
						<span class="notification-icon">
											<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
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

			<form class="search-bar w-search notification-list friend-requests">
				<div class="form-group with-button">
					<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
				</div>
			</form>

		</div>

	</div>
	<!-- ... end  Tab panes -->

</header>

<!-- ... end Responsive Header-BP -->
<div class="header-spacer header-spacer-small"></div>


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



<!-- JS Scripts -->

<script>
	document.addEventListener("DOMContentLoaded", function() {
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
<script src="js/libs/swiper.jquery.min.js"></script>
<script src="js/libs/isotope.pkgd.min.js"></script>
<script src="js/libs/ajax-pagination.min.js"></script>
<script src="js/libs/jquery.magnific-popup.min.js"></script>

<!-- JS-libs and init for charts -->
<script src="js/libs/moment.min.js"></script>
<script src="js/libs/jquery.appear.min.js"></script>
<script src="js/libs/Chart.min.js"></script>
<script src="js/libs/chartjs-plugin-deferred.min.js"></script>
<script src="js/libs/circle-progress.min.js"></script>
<script src="js/libs/loader.min.js"></script>
<script src="js/libs/run-chart.min.js"></script>
<!-- ... end JS-libs and init for charts -->

<script src="js/main.js"></script>
<script src="js/libs-init/libs-init.js"></script>

<script src="Bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- SVG icons loader -->
<script src="js/svg-loader.js"></script>
<!-- /SVG icons loader -->

</body>

</html>