<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.crumina.net/html-olympus/01-LandingPage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Feb 2021 07:41:14 GMT -->

<head>

	<title>Landing Page</title>

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
						<img loading="lazy" src="img/logo.png" alt="Olympus" width="34" height="34">

						<img loading="lazy" src="img/logo.png" width="34" height="34" alt="Olympus"
							class="logo-colored">

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
								<a href="index.php" class="nav-link">Home</a>
							</li>
							<!-- <li class="nav-item">
							<a href="#" class="nav-link">Terms & Conditions</a>
						</li> -->
							<li class="nav-item">
								<a href="#" class="nav-link">About Us</a>
							</li>
							<li class="nav-item ">
								<a href="01-LandingPage.php" class="nav-link join-us ">Join us</a>
							</li>
							<!-- <li class="nav-item">
							<a href="#" class="nav-link">Privacy Policy</a>
						</li> -->
							<li class="close-responsive-menu js-close-responsive-menu">
								<svg class="olymp-close-icon">
									<use xlink:href="#olymp-close-icon"></use>
								</svg>
							</li>

							<!-- <li class="nav-item js-expanded-menu">
							<a href="#" class="nav-link">
								<svg class="olymp-menu-icon"><use xlink:href="#olymp-menu-icon"></use></svg>
								<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
							</a>
						</li>
						<li class="menu-search-item">
							<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#main-popup-search">
								<svg class="olymp-magnifying-glass-icon"><use xlink:href="#olymp-magnifying-glass-icon"></use></svg>
							</a>
						</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--Home page Start-->
	<div class="homepage-header d-flex">
		<div class="container d-flex align-items-center justify-content-center">
			<div class="row w-100 d-flex justify-content-center">
				<div class="col-lg-10 col-md-10 col-12 d-flex justify-content-center">
					<div>
						<h2 class="text-center">Find The Perfect Cluster for Yourself</h2>
						<form class="form-inline search-form" method="post">
							<div class="form-group label-floating">
								<label class="control-label">What are you looking for?</label>
								<input class="form-control bg-white" placeholder="" type="text" value="">
							</div>
							<button class="btn btn-blue btn-lg">Search</button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 mt-5">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="col-3">
						<p class="total-clusters"> 250 cluster available</p>
					</div>
					<div class="col-3">
						<div class="form-group clustor-sort d-flex align-items-center justify-content-around">
							<label for="inputState">Sort By </label>
							<select id="inputState" class="form-control w-75">
								<option selected>Top Clusters</option>
								<option>Most Popular</option>
								<option>Most Newest</option>
							</select>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="#">
					<div class="cluster-card">
						<div class="cluster-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="cluster-card-body">
							<h3 class="cluster-card-heading">Floppy</h3>
							<div class="cluster-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="#">
					<div class="cluster-card">
						<div class="cluster-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="cluster-card-body">
							<h3 class="cluster-card-heading">Floppy</h3>
							<div class="cluster-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="#">
					<div class="cluster-card">
						<div class="cluster-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="cluster-card-body">
							<h3 class="cluster-card-heading">Floppy</h3>
							<div class="cluster-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="#">
					<div class="cluster-card">
						<div class="cluster-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="cluster-card-body">
							<h3 class="cluster-card-heading">Floppy</h3>
							<div class="cluster-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="#">
					<div class="cluster-card">
						<div class="cluster-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="cluster-card-body">
							<h3 class="cluster-card-heading">Floppy</h3>
							<div class="cluster-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="#">
					<div class="cluster-card">
						<div class="cluster-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="cluster-card-body">
							<h3 class="cluster-card-heading">Floppy</h3>
							<div class="cluster-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="#">
					<div class="cluster-card">
						<div class="cluster-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="cluster-card-body">
							<h3 class="cluster-card-heading">Floppy</h3>
							<div class="cluster-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="#">
					<div class="cluster-card">
						<div class="cluster-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="cluster-card-body">
							<h3 class="cluster-card-heading">Floppy</h3>
							<div class="cluster-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>

			
		</div>
	</div>

	<!--Home page end-->
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

<!-- Mirrored from html.crumina.net/html-olympus/01-LandingPage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Feb 2021 07:41:16 GMT -->

</html>