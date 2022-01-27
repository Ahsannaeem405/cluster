<!DOCTYPE html>
<html lang="en">


<head>

    <title>Cluster Page</title>

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
    <!--header end-->
    <!--Clustor page start-->
    <div class="clustor-page-header d-flex"
        style="background: linear-gradient(rgba(227, 9, 23, 0.5), rgba(227, 9, 23, 0.5)),url(./img/clusterbg.jpg);background-position:center;background-repeat: no-repeat; background-size: cover;">
        <div class="container d-flex align-items-center w-100">
            <div class="row py-4 w-100">
                <div class="col-12">
                    <div class="clustor-page-heading text-center">
                        <h1>Floppy</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row my-5 d-flex justify-content-center justify-content-lg-center">
            <div class="col-xl-4 col-lg-6  col-md-8 col-sm-8 col-12">
                <div class="group-card mx-0 mx-sm-0">
                    <div class="group-card-img">
                        <img src="./img/event-img.jpg" />
                        <a href="#" class="rejis-btn">
                            Register Now
                        </a>
                    </div>

                    <div class="group-card-body">
                        <h4 class="event-name text-center">Holiday</h4>
                        <div class="row py-2">
                            <div class="col-4">
                                <p><i class="far fa-calendar-alt mx-1"></i>31-01-2022</p>
                            </div>
                            <div class="col-8 ">
                                <p class="text-end"><i class="far fa-clock mx-1"></i>6:00 PM to 8:00 PM</p>
                            </div>
                            <p class="event-dis mb-0 text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tempora repellat
                                fuga, modi ab velit. Totam repellat illo nesciunt, saepe dolores sapiente excepturi
                                impedit placeat velit veritatis ab deserunt cum.
                            </p>
                        </div>

                    </div>
                </div>
            </div><div class="col-xl-4 col-lg-6  col-md-8 col-sm-8 col-12">
                <div class="group-card mx-0 mx-sm-0">
                    <div class="group-card-img">
                        <img src="./img/event-img.jpg" />
                        <a href="#" class="rejis-btn">
                            Register Now
                        </a>
                    </div>

                    <div class="group-card-body">
                        <h4 class="event-name text-center">Holiday</h4>
                        <div class="row py-2">
                            <div class="col-4">
                                <p><i class="far fa-calendar-alt mx-1"></i>31-01-2022</p>
                            </div>
                            <div class="col-8 ">
                                <p class="text-end"><i class="far fa-clock mx-1"></i>6:00 PM to 8:00 PM</p>
                            </div>
                            <p class="event-dis mb-0 text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tempora repellat
                                fuga, modi ab velit. Totam repellat illo nesciunt, saepe dolores sapiente excepturi
                                impedit placeat velit veritatis ab deserunt cum.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6  col-md-8 col-sm-8 col-12">
                <div class="group-card mx-0 mx-sm-0">
                    <div class="group-card-img">
                        <img src="./img/event-img.jpg" />
                        <a href="#" class="rejis-btn">
                            Register Now
                        </a>
                    </div>

                    <div class="group-card-body">
                        <h4 class="event-name text-center">Holiday</h4>
                        <div class="row py-2">
                            <div class="col-4">
                                <p><i class="far fa-calendar-alt mx-1"></i>31-01-2022</p>
                            </div>
                            <div class="col-8 ">
                                <p class="text-end"><i class="far fa-clock mx-1"></i>6:00 PM to 8:00 PM</p>
                            </div>
                            <p class="event-dis mb-0 text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tempora repellat
                                fuga, modi ab velit. Totam repellat illo nesciunt, saepe dolores sapiente excepturi
                                impedit placeat velit veritatis ab deserunt cum.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6  col-md-8 col-sm-8 col-12">
                <div class="group-card mx-0 mx-sm-0">
                    <div class="group-card-img">
                        <img src="./img/event-img.jpg" />
                        <a href="#" class="rejis-btn">
                            Register Now
                        </a>
                    </div>

                    <div class="group-card-body">
                        <h4 class="event-name text-center">Holiday</h4>
                        <div class="row py-2">
                            <div class="col-4">
                                <p><i class="far fa-calendar-alt mx-1"></i>31-01-2022</p>
                            </div>
                            <div class="col-8 ">
                                <p class="text-end"><i class="far fa-clock mx-1"></i>6:00 PM to 8:00 PM</p>
                            </div>
                            <p class="event-dis mb-0 text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tempora repellat
                                fuga, modi ab velit. Totam repellat illo nesciunt, saepe dolores sapiente excepturi
                                impedit placeat velit veritatis ab deserunt cum.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6  col-md-8 col-sm-8 col-12">
                <div class="group-card mx-0 mx-sm-0">
                    <div class="group-card-img">
                        <img src="./img/event-img.jpg" />
                        <a href="#" class="rejis-btn">
                            Register Now
                        </a>
                    </div>

                    <div class="group-card-body">
                        <h4 class="event-name text-center">Holiday</h4>
                        <div class="row py-2">
                            <div class="col-4">
                                <p><i class="far fa-calendar-alt mx-1"></i>31-01-2022</p>
                            </div>
                            <div class="col-8 ">
                                <p class="text-end"><i class="far fa-clock mx-1"></i>6:00 PM to 8:00 PM</p>
                            </div>
                            <p class="event-dis mb-0 text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tempora repellat
                                fuga, modi ab velit. Totam repellat illo nesciunt, saepe dolores sapiente excepturi
                                impedit placeat velit veritatis ab deserunt cum.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6  col-md-8 col-sm-8 col-12">
                <div class="group-card mx-0 mx-sm-0">
                    <div class="group-card-img">
                        <img src="./img/event-img.jpg" />
                        <a href="#" class="rejis-btn">
                            Register Now
                        </a>
                    </div>

                    <div class="group-card-body">
                        <h4 class="event-name text-center">Holiday</h4>
                        <div class="row py-2">
                            <div class="col-4">
                                <p><i class="far fa-calendar-alt mx-1"></i>31-01-2022</p>
                            </div>
                            <div class="col-8 ">
                                <p class="text-end"><i class="far fa-clock mx-1"></i>6:00 PM to 8:00 PM</p>
                            </div>
                            <p class="event-dis mb-0 text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tempora repellat
                                fuga, modi ab velit. Totam repellat illo nesciunt, saepe dolores sapiente excepturi
                                impedit placeat velit veritatis ab deserunt cum.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Clustor page end-->
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
                                <input type="submit" class="footer-news-btn form-control" />
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