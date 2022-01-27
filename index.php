<!DOCTYPE html>
<html lang="en">


<head>

	<title>Home Page</title>

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
						<img loading="lazy" src="img/logo.png" alt="header-white-log" width="34" height="34">

						<img loading="lazy" src="img/logo.png" width="34" height="34" alt="header-color-logo"
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
								<a href="login.php" class="nav-link">Sign up</a>
							</li>
							<li class="nav-item ">
								<a href="login.php" class="nav-link join-us ">Log in</a>
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
					<div class="col-xl-3 col-lg-4 col-md-6 col-12">
						<p class="total-clustors"> 250 cluster available</p>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6  col-12">
						<div class="form-group clustor-sort d-flex align-items-center justify-content-around">
							<label for="inputState">Sort By</label>
							<select id="inputState" class=" w-75">
								<option selected>Top Clustors</option>
								<option>Most Popular</option>
								<option>Most Newest</option>
							</select>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="row d-flex justify-content-center mb-4">
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="clustor.php">
					<div class="clustor-card">
						<div class="clustor-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="clustor-card-body">
							<h3 class="clustor-card-heading">Floppy</h3>
							<div class="clustor-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p><i class="far fa-calendar-alt mx-1"></i>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="clustor.php">
					<div class="clustor-card">
						<div class="clustor-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="clustor-card-body">
							<h3 class="clustor-card-heading">Floppy</h3>
							<div class="clustor-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p><i class="far fa-calendar-alt mx-1"></i>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="clustor.php">
					<div class="clustor-card">
						<div class="clustor-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="clustor-card-body">
							<h3 class="clustor-card-heading">Floppy</h3>
							<div class="clustor-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p><i class="far fa-calendar-alt mx-1"></i>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="clustor.php">
					<div class="clustor-card">
						<div class="clustor-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="clustor-card-body">
							<h3 class="clustor-card-heading">Floppy</h3>
							<div class="clustor-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p><i class="far fa-calendar-alt mx-1"></i>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="clustor.php">
					<div class="clustor-card">
						<div class="clustor-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="clustor-card-body">
							<h3 class="clustor-card-heading">Floppy</h3>
							<div class="clustor-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p><i class="far fa-calendar-alt mx-1"></i>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="clustor.php">
					<div class="clustor-card">
						<div class="clustor-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="clustor-card-body">
							<h3 class="clustor-card-heading">Floppy</h3>
							<div class="clustor-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p><i class="far fa-calendar-alt mx-1"></i>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="clustor.php">
					<div class="clustor-card">
						<div class="clustor-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="clustor-card-body">
							<h3 class="clustor-card-heading">Floppy</h3>
							<div class="clustor-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p><i class="far fa-calendar-alt mx-1"></i>2-01-2022</p>
							</div>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam dolores
								distinctio. Iusto, quam. Aut dicta tempora non ea modi, repellendus praesentium fuga
								sint? Laborum sequi magni itaque optio inventore?</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
				<a href="clustor.php">
					<div class="clustor-card">
						<div class="clustor-card-head">
							<img src="./img/clusterbg.jpg" />
						</div>
						<div class="clustor-card-body">
							<h3 class="clustor-card-heading">Floppy</h3>
							<div class="clustor-card-details d-flex justify-content-between align-items-center">
								<h4>Manager: <span>Faizan</span></h4>
								<p><i class="far fa-calendar-alt mx-1"></i>2-01-2022</p>
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
	<div class="upcoming-events">
		<div class="container py-5">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center">UPCOMING MEETINGS</h2>
					<p class="text-center">Below are details of some of the upcoming meetings</p>
				</div>
			</div>
			<div class="row mt-3">
			<div class="col-lg-4 col-md-6 col-sm-8 col-12">
				<div class="upcoming-card mt-3">
					<div class="upcoming-card-img">
						<img src="./img/upcoming1.jpg"/>
					</div>
					<div class="upcoming-card-body">
						<h3 class="py-2 ">Holiday Event At The Last Sunday</h3>
						<span><i class="far fa-calendar-alt mx-1"></i>31-Jan-2022</span>
						<p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem 
							voluptate officia rerum. </p>
						<a href="#"><button class="btn w-100">Register Now</button></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-12 mt-3">
				<div class="upcoming-card">
					<div class="upcoming-card-img">
						<img src="./img/upcoming2.jpg"/>
					</div>
					<div class="upcoming-card-body">
						<h3 class="py-2 ">Holiday Event At The Last Sunday</h3>
						<span><i class="far fa-calendar-alt mx-1"></i>31-Jan-2022</span>
						<p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem 
							voluptate officia rerum. </p>
						<a href="#"><button class="btn w-100">Register Now</button></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-12 mt-3">
				<div class="upcoming-card">
					<div class="upcoming-card-img">
						<img src="./img/upcoming3.jpg"/>
					</div>
					<div class="upcoming-card-body">
						<h3 class="py-2 ">Holiday Event At The Last Sunday</h3>
						<span><i class="far fa-calendar-alt mx-1"></i>31-Jan-2022</span>
						<p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem 
							voluptate officia rerum. </p>
						<a href="#"><button class="btn w-100">Register Now</button></a>
					</div>
				</div>
			</div>
		</div>
		</div>	
	</div>
	<div class="proudly-support">
		<div class="container py-5">
			<div class="row">
				<h3 class="text-center">PROUDLY SUPPORTING THOSE WHO SERVE</h3>
				<p class="text-center">Cyber Wales have signed the Armed Forces Covenant and received a Bronze Employer Recognition Scheme Award</p>
			</div>
			<div class="row mt-4 d-flex align-items-center">
				<div class="col-md-6 col-12">
					<p class="mx-4 text-justify">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto rerum 
						libero recusandae magnam quibusdam! Qui, consequuntur in? Totam 
						ratione repellat maiores cum illo, modi explicabo quae iste natus 
						accusantium provident.
							</p>
						<p class="mx-4 text-justify">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto rerum 
						libero recusandae magnam quibusdam! Qui, consequuntur in? Totam 
						ratione repellat maiores cum illo, modi explicabo quae iste natus 
						accusantium provident. <a href="#">Read more...</a>
					</p>
				</div>
				<div class="col-md-6 col-12">
					<div class="homepage-video">
						<iframe src="https://www.youtube.com/embed/kT7qrJmx68M" 
							title="YouTube video player" frameborder="0" 
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
							allowfullscreen>
						</iframe>
					</div>
				</div>
			</div>
		</div>
		</div>

	<!--Home page end-->

	 <!--footer start-->
	 <div class="homepage-footer">
        <div class="container ">
            <div class="row d-flex align-items-center py-4">
                <div class="col-lg-6 col-12 mt-5 px-0 px-xl-5">
                    <div class="news-sub">
                        <h5 class="news-sub-heading text-white">
                            News Subscribe Now for Updates!
                        </h5>
                        <form>
                            <div class="footer-form">
                                <input type="email" required placeholder="Email Address" class="form=conteol w-100 " />
                                <input type="submit" class="footer-news-btn form-control" value="submit" />
                            </div>
                            
                            
                        </form>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="footer-logo text-lg-center text-start">
                        <img loading="lazy" src="img/white-logo.png" alt="footer-logo">
                    </div>

                    <h2>Thank You for Visiting Our website</h2>
                </div>

                <div class="col-lg-3 col-6 d-flex justify-content-center">
                    <div class="contact-us">
                        <h4>
                            Contact Us
                        </h4>
                        <div class="d-flex " style="gap:10px;">
                            <a href="#">
                                <div class="footer-links">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </a>
                            <a href="#">
                                <div class="footer-links">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
               
            </div>
            <div class="row footer-buttom">
                <div class="col-12">
                    <p class="text-center text-white">
                        Copyrights © 2022-2023 All Rights Reserved by website.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--footer end -->
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


</html>