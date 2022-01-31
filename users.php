<!DOCTYPE html>
<html lang="en">

<head>

	<title>Users</title>

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


	<!-- ... end Fixed Sidebar Left -->


	<!-- Header-BP -->

	<header class="header" id="site-header">

		<div class="page-title">
			<h6>Manager Users</h6>
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

				<form class="search-bar w-search notification-list friend-requests">
					<div class="form-group with-button">
						<input class="form-control js-user-search" placeholder="Search here people or pages..."
							type="text">
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
		<div class="content-bg-wrap bg-group clusterbg"></div>
		<div class="container">
			<div class="row">
				<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
					<div class="main-header-content">
						<h1>Manage User</h1>
						<p>Welcome to your user manager page.Here you can easly Add, Delete and Edit you mambers.
							Thank you</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Main Header Groups -->

	<!-- Main Content Groups -->

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="add-new-member my-3">
					<a href="#" data-bs-toggle="modal"  data-bs-toggle="modal"
					data-bs-target="#add-new-user">
						<button><i class="fas fa-plus mx-1"></i> Add New</button>
					</a>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="members-table">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col" class="text-center">#</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">1</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">2</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">3</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">4</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">5</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">6</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">7</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Main Content Groups -->



	<!-- Window-popup Create Friends Group -->

	<div class="modal fade" id="add-new-user" tabindex="-1" role="dialog"
		aria-labelledby="create-friend-group-1" aria-hidden="true">
		<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Add New User</h6>
				</div>

				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="exampleFormControlInput1">Name</label>
							<input type="text" class="form-control" id="Cluster-Name" placeholder="enter Name">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Email</label>
							<input type="email" class="form-control" id="Cluster-Name" placeholder="enter email">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Password</label>
							<input type="password" class="form-control" id="Cluster-Name" placeholder="enter passowrd">
						</div>
						<a href="#" class="btn btn-blue btn-lg full-width">Add Now</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="edit-new-member" tabindex="-1" role="dialog"
		aria-labelledby="create-friend-group-1" aria-hidden="true">
		<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Edit Member</h6>
				</div>

				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="exampleFormControlInput1">Name</label>
							<input type="text" class="form-control" id="Cluster-Name" Value="Francine Smith">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Email</label>
							<input type="email" class="form-control" id="Cluster-Name" Value="abc@xyz.com">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Old Password</label>
							<input type="password" class="form-control" id="Cluster-Name" placeholder="Enter Old Password">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">New Password</label>
							<input type="password" class="form-control" id="Cluster-Name" placeholder="Enter New Password">
						</div>

						<button href="#" class="btn btn-blue full-width">Edit Now</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="delete-new-member" tabindex="-1" role="dialog"
		aria-labelledby="create-friend-group-1" aria-hidden="true">
		<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Delete User</h6>
				</div>

				<div class="modal-body">
					<div class="">
						<p>Are you sure you want to delete this user <span class="font-weight-bold text-danger">Francine Smith</span></p>
					</div>
					<div class="row">
						<div class="col-6">
						<button href="#" class="btn btn-blue full-width" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">Yes</button>

						</div>
						<div class="col-6">
						<button href="#" class="btn btn-secondary full-width" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">No</button>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Window-popup Create Friends Group -->


	<!-- ... end Window-popup Create Friends Group Add Friends -->

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

</html>