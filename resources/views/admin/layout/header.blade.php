<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('page_title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="preload" type="text/css" href="{{ asset('css/theme-font.min.css') }}" as="style">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('Bootstrap/dist/css/bootstrap.css') }}">

    <!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.min.css') }}">


    <!--<link rel="stylesheet" type="text/css" href="{{ asset('css/rtl.min.css') }}">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- WebP Safari Support -->
    <script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/polyfills.js"></script>
    <script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/webp-hero.bundle.js"></script>


    <!-- Bootstrap CSS -->

    <!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />


    <script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/polyfills.js"></script>
    <script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/webp-hero.bundle.js"></script>
    <script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5/tinymce.min.js">
    </script>


    <style>
        .select2-container--default.select2-container .select2-selection--multiple {
            border: solid #e6ecf5 1px !important;
            outline: 0;
            height: 39px !important;
        }

        .select2-container .select2-selection--multiple .select2-selection__rendered {
            display: block !important;
            /* list-style: none; */
            padding: 4px !important;
        }

        .select2-container {
            box-sizing: border-box;
            display: inline-block;
            margin: 0;
            position: relative;
            vertical-align: middle;
            width: 100% !important;
        }

        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border: solid #e6ecf5 1px !important;
            outline: 0;
        }

        textarea.select2-search__field {
            display: none;
        }

    </style>

</head>

<body class="page-has-left-panels page-has-right-panels">
    <?php
    $role = Auth::user()->post_role;


$dataa = App\Models\Answer::where('userID', Auth::user()->id)->count();
?>


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

            <a href="{{ url('admin') }}" class="logo">
                <div class="img-wrap">
                    <img loading="lazy" src="{{ asset('img/white-logo.png') }}" alt="logo-tital" width="50"
                        height="50">
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
                        <a href="{{ url("$role") }}">
                            <svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Dashboard">
                                <use xlink:href="#olymp-newsfeed-icon"></use>
                            </svg>
                        </a>
                    </li>
                    @if (Auth::user()->role == 'admin' || Auth::user()->post_role == 'member' || Auth::user()->post_role == 'manager')
                        <li>
                            <a href="{{ url("$role/view_cluster") }}">
                                <svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Clusters">
                                    <use xlink:href="#olymp-star-icon"></use>
                                </svg>
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ url("$role/view/event") }}">
                            <svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Events">
                                <use xlink:href="#olymp-manage-widgets-icon"></use>
                            </svg>
                        </a>
                    </li>
                    @if (Auth::user()->post_role == 'admin' || Auth::user()->post_role == 'member')
                        <li>
                            <a href="{{ url("$role/services") }}">
                                <svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Services">
                                    <use xlink:href="#olymp-status-icon"></use>
                                </svg>
                            </a>
                        </li>
                    @endif


                    @if (Auth::user()->role == 'admin' )
                    <li>
                            <a href="{{ url("$role/members") }}">
                                <svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Members">
                                    <use xlink:href="#olymp-happy-faces-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url("$role/users") }}">
                                <svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Users">
                                    <use xlink:href="#olymp-happy-sticker-icon"></use>
                                </svg>
                            </a>
                        </li>
                    @endif
                        @if (Auth::user()->post_role == 'admin' || Auth::user()->post_role == 'manager')

                        <li>
                            <a href="{{ url("$role/survey/form") }}">

                                <svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Events">
                                <use xlink:href="#olymp-manage-widgets-icon"></use>
                            </svg>

                            </a>
                        </li>


                        <li>
                            <a href="{{ url("$role/survey/list") }}">
                                <svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Services">
                                <use xlink:href="#olymp-status-icon"></use>
                            </svg>
                            </a>
                        </li>


                        <li>
                            <a href="{{ url("$role/survey/view") }}">
                                <svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="WEATHER APP">
                                    <use xlink:href="#olymp-music-shuffle-icon"></use>
                                </svg>
                            </a>
                        </li>

                        @endif



                        @if(Auth::user()->post_role != 'admin')
                        @if (Auth::user()->post_role == 'user' || Auth::user()->post_role == 'member')
                        <li>
                            <a href="{{ url("$role/Survey/Question") }}">
                                <svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title=" Survey Question">
                                    <use xlink:href="#olymp-music-shuffle-icon"></use>
                                </svg>
                            </a>
                        </li>
                        @endif
                        @endif
                        @if (Auth::user()->role == 'admin' )

                        <li>
                            <a href="{{ url("$role/cluster_manager") }}">
                                <svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Cluster Manager">
                                    <use xlink:href="#olymp-music-shuffle-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url("$role/communication") }}">
                                <svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Communication">
                                    <use xlink:href="#olymp-badge-icon"></use>
                                </svg>
                            </a>
                        </li>
                    @endif

                    @if(Auth::user()->post_role != 'admin' )
                    @if(Auth::user()->post_role == 'user' ||  Auth::user()->post_role == 'member')
                    <li>
                        <a href="{{ url("$role/survey/question") }}">
                            <svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Survey Question">
                                <use xlink:href="#olymp-music-shuffle-icon"></use>
                            </svg>
                        </a>
                    </li>
                    @endif
                    @endif
                    <li>
                        <a href="{{ url("$role/setting") }}">
                            <svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Setting">
                                <use xlink:href="#olymp-settings-icon"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
            <a href="#" class="logo">
                <div class="img-wrap">
                    <img loading="lazy" src="{{ asset('img/white-logo.png') }}" alt="logo-tital" width="34"
                        height="34">
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
                        <a href="{{ url("$role") }}">
                            <svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Dashboard">
                                <use xlink:href="#olymp-status-icon"></use>
                            </svg>
                            <span class="left-menu-title">Dashboard</span>
                        </a>
                    </li>
                    @if (Auth::user()->post_role == 'admin' || Auth::user()->post_role == 'member' || Auth::user()->post_role == 'manager')
                        <li>
                            <a href="{{ url("$role/view_cluster") }}">
                                <svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Clusters">
                                    <use xlink:href="#olymp-star-icon"></use>
                                </svg>
                                <span class="left-menu-title">Clusters</span>
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ url("$role/view/event/") }}">
                            <svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Events">
                                <use xlink:href="#olymp-manage-widgets-icon"></use>
                            </svg>
                            <span class="left-menu-title">Events</span>
                        </a>
                    </li>
                    
                    @if (Auth::user()->post_role == 'admin' || Auth::user()->post_role == 'member')
                        <li>
                            <a href="{{ url("$role/services") }}">
                                <svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Services">
                                    <use xlink:href="#olymp-status-icon"></use>
                                </svg>
                                <span class="left-menu-title">Services</span>

                            </a>
                        </li>
                    @endif

                    @if (Auth::user()->role == 'admin' )

                    {{-- @if (Auth::user()->role == 'admin') --}}
                        <li>
                            <a href="{{ url("$role/members") }}">
                                <svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Members">
                                    <use xlink:href="#olymp-happy-faces-icon"></use>
                                </svg>
                                <span class="left-menu-title">Members</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url("$role/users") }}">
                                <svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Users">
                                    <use xlink:href="#olymp-happy-sticker-icon"></use>
                                </svg>
                                <span class="left-menu-title">Users</span>
                            </a>
                        </li>
                        @endif
                        @if (Auth::user()->role == 'admin' || Auth::user()->post_role == 'manager')

                            <li>
                            <a href="{{ url("$role/survey/form") }}">

                                <svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Events">
                                <use xlink:href="#olymp-manage-widgets-icon"></use>
                            </svg>

                                <span class="left-menu-title">Survey Form</span>
                            </a>
                        </li>


                        <li>
                            <a href="{{ url("$role/survey/list") }}">
                                <svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Services">
                                <use xlink:href="#olymp-status-icon"></use>
                            </svg>
                                <span class="left-menu-title"> Users Survey Response</span>
                            </a>
                        </li>


                        <li>
                            <a href="{{ url("$role/survey/view") }}">
                                <svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="WEATHER APP">
                                    <use xlink:href="#olymp-music-shuffle-icon"></use>
                                </svg>
                                <span class="left-menu-title"> Survey View</span>
                            </a>
                        </li>
                        @endif
                        @if (Auth::user()->role == 'admin' )
                        <li>
                            <a href="{{ url("$role/cluster_manager") }}">
                                <svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Cluster Manager">
                                    <use xlink:href="#olymp-music-shuffle-icon"></use>
                                </svg>
                                <span class="left-menu-title">Cluster Manager</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url("$role/communication") }}">
                                <svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Communication">
                                    <use xlink:href="#olymp-badge-icon"></use>
                                </svg>
                                <span class="left-menu-title">Communication</span>
                            </a>
                        </li>
                    @endif
                        
                    @if(Auth::user()->post_role != 'admin' )
                    @if(Auth::user()->post_role == 'user' ||  Auth::user()->post_role == 'member')
                       
                    <li>
                        <a href="{{ url("$role/survey/question") }}">
                            <svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Cluster Manager">
                                <use xlink:href="#olymp-music-shuffle-icon"></use>
                            </svg>
                            <span class="left-menu-title">Survey Question</span>
                        </a>
                    </li>
                    @endif
                    @endif
                    <li>
                        <a href="{{ url("$role/setting") }}">
                            <svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Settings">
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
                <img loading="lazy" src="{{ asset('img/white-logo.png') }}" alt="white-logo" width="34" height="34">
            </a>

        </div>

        <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
            <a href="#" class="logo">
                <div class="img-wrap">
                    <img loading="lazy" src="{{ asset('img/logo.png') }}" alt="white-logo" width="34" height="34">
                </div>
                <div class="title-block">
                    <h6 class="logo-title">Clusters</h6>
                </div>
            </a>

            <div class="mCustomScrollbar" data-mcs-theme="dark">

                <div class="control-block">
                    <div class="author-thumb">
                        <img alt="author" src="img/author-page.html" width="36" height="36" class="avatar">
                        <span class="icon-status online"></span>
                    </div>
                    <div class="author-page author vcard inline-items">


                        <a href="#" class="author-name fn">
                            <div class="author-title">
                                <div class="author-thumb">
                                    <img alt="author" src="img/author-page.html" width="36" height="36"
                                        class="avatar">
                                    <span class="icon-status online"></span>
                                </div>
                                @if (Auth::check())
                                    {{ Auth::user()->first_name }}
                                @endif
                                <svg class="olymp-dropdown-arrow-icon">
                                    <use xlink:href="#olymp-dropdown-arrow-icon"></use>
                                </svg>
                            </div>
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
                        <a href="{{ url("$role") }}">
                            <svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Dashboard">
                                <use xlink:href="#olymp-status-icon"></use>
                            </svg>
                            <span class="left-menu-title">Dashboard</span>
                        </a>
                    </li>
                    @if (Auth::user()->role == 'admin' || Auth::user()->post_role == 'member' || Auth::user()->post_role == 'manager')
                        <li>
                            <a href="{{ url("$role/view_cluster") }}">
                                <svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Clusters">
                                    <use xlink:href="#olymp-star-icon"></use>
                                </svg>
                                <span class="left-menu-title">Clusters</span>
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ url("$role/view/event") }}">
                            <svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Events">
                                <use xlink:href="#olymp-manage-widgets-icon"></use>
                            </svg>
                            <span class="left-menu-title">Events</span>
                        </a>
                    </li>
                    @if (Auth::user()->post_role == 'admin' || Auth::user()->post_role == 'member')
                        {{-- @dd(1); --}}
                        <li>
                            <a href="{{ url("$role/services") }}">
                                <svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Services">
                                    <use xlink:href="#olymp-status-icon"></use>
                                </svg>
                                <span class="left-menu-title">Services</span>

                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->role == 'admin')
                        <li>
                            <a href="{{ url('admin/members') }}">
                                <svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Members">
                                    <use xlink:href="#olymp-happy-faces-icon"></use>
                                </svg>
                                <span class="left-menu-title">Members</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/users') }}">
                                <svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Users">
                                    <use xlink:href="#olymp-happy-sticker-icon"></use>
                                </svg>
                                <span class="left-menu-title">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url("$role/cluster_manager") }}">
                                <svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Cluster Manager">
                                    <use xlink:href="#olymp-music-shuffle-icon"></use>
                                </svg>
                                <span class="left-menu-title">Cluster Manager</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url("$role/communication") }}">
                                <svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-original-title="Communication">
                                    <use xlink:href="#olymp-badge-icon"></use>
                                </svg>
                                <span class="left-menu-title">Communication</span>
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ url("$role/setting") }}">
                            <svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Settings">
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
                        <a href="{{ url("$role/setting") }}">

                            <svg class="olymp-menu-icon">
                                <use xlink:href="#olymp-menu-icon"></use>
                            </svg>

                            <span>Profile Settings</span>
                        </a>
                    </li>
                    <li>
                        {{-- <a href="#">
						<svg class="olymp-logout-icon">
							<use xlink:href="#olymp-logout-icon"></use>
						</svg>

						<span>Log Out</span>
					</a> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit(); localStorage.setItem('user','Form');">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <?php

    $noti = App\Models\Notifica::where('userid', Auth::user()->id)->get();
    $cluss = App\Models\RequestCluster::get();

    ?>

    <header class="header" id="site-header">

        <div class="page-title">
            <h6>DashBoard</h6>
        </div>

        <div class="header-content-wrapper">


            <div class="control-block">

                <div class="control-icon more has-items mt-2">

                    <i class="far fa-bell text-white" aria-hidden="true"></i>
                    @if(count($cluss) >0 )
                    <span style="
                    position: absolute;
                    backbround:red;
                    background: red;
                    width: 18px;
                    height: 18px;
                    border-radius: 50%;
                    /* padding: 0px 5px; */
                    color: white;
                    top: -9px;
                    left: 9px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 12px;
                    "><small>{{count($cluss)}}</small></span>
                    @endif
                    <div class="more-dropdown more-with-triangle triangle-top-center">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">Notifications</h6>

                        </div>

                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <ul class="notification-list chat-message">
                                @foreach ($noti as $notif)
                                    <li class="message-unread">
                                        <div class="author-thumb">
                                            <img loading="lazy"
                                                src=" {{ asset('images/') }}/{{ $notif->Event->image }}"
                                                alt="author" width="34" height="34">
                                        </div>


                                        <div class="notification-event">
                                            <a href="#" class="h6 notification-friend">{{ $notif->Event->name }}</a>
                                            <span class="chat-message-item"
                                                style="padding:8px;">{{ $notif->Event->description }}</span>
                                        </div>


                                    </li>
                                @endforeach

                                @if(count($cluss) > 0 )       
                                @foreach ($cluss as $clusss)
                                    <?php
                                    $img = explode(',', $clusss->Cluster->image);

                                    ?>
                                    <li class="message-unread">
                                        <div class="author-thumb">
                                            <img loading="lazy" style="border-radius: 8px;"
                                                src=" {{ asset('images/') }}/{{ $img[0] }}" alt="author"
                                                width="34" height="34">
                                        </div>
                                        <div class="notification-event">
                                            <a href="#" class="h6 notification-friend"
                                                style="text-decoration: none">{{ $clusss->Cluster->name }}</a>
                                            <span class="chat-message-item" style="padding:8px;">
                                                <b>{{ $clusss->User->first_name }}</b> send request for join cluster
                                                <b>{{ $clusss->Cluster->name }}</b> </span>
                                        </div>
                                        <span class="notification-icon">
                                            <a @if (auth::user()->role == 'admin' ||$clusss->Cluster->Manger) href="{{ url("$role/aprroved/request", [$clusss->id]) }}" @endif
                                                class="accept-request">
                                                <i class="fas fa-check"></i>
                                            </a> </span>

                                    </li>
                                @endforeach
                                    @else
                                    <div class="my-3">
                                        <p class="text-center">No Available Notifications</p>
                                    </div>
                                    @endif
                            </ul>
                        </div>

                        <a href="{{ url("$role/view/notifications") }}" class="view-all bg-purple">View All
                            Notifications</a>
                    </div>
                </div>

                <div class="author-page author vcard inline-items more">
                    <div class="author-thumb">
                        <i class="fa fa-icon"></i>
                        <div class="more-dropdown more-with-triangle">
                            <div class="mCustomScrollbar" data-mcs-theme="dark">
                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">Your Account</h6>
                                </div>

                                <ul class="account-settings">
                                    <li>
                                        <a href="{{ url("$role/setting") }}">

                                            <svg class="olymp-menu-icon">
                                                <use xlink:href="#olymp-menu-icon"></use>
                                            </svg>

                                            <span>Profile Settings</span>
                                        </a>
                                    </li>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();  localStorage.setItem('user','Form');">
                                        <svg class="olymp-logout-icon">
                                            <use xlink:href="#olymp-logout-icon"></use>
                                        </svg>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <a href="#" class="author-name fn">

                        <div class="author-title">
                            <div class="author-thumb">
                                @if (isset(Auth::user()->image))
                                    <img alt="author" src="{{ asset('images') }}/{{ Auth::user()->image }}"
                                        width="36" height="36" class="avatar">
                                @else
                                    <i style="font-size: 21px;" class="fa fa-user"></i>
                                @endif

                            </div>
                            @if (Auth::check())
                                {{ Auth::user()->first_name }}
                            @endif

                            <svg class="olymp-dropdown-arrow-icon">
                                <use xlink:href="#olymp-dropdown-arrow-icon"></use>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="control-icon more has-items mr-5">


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
                                <img loading="lazy" src="{{ asset('img/avatar55-sm.webp') }}" alt="author" width="34"
                                    height="34">
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
                                <img loading="lazy" src="{{ asset('img/avatar56-sm.html') }}" alt="author" width="34"
                                    height="34">
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
                                <img loading="lazy" src="{{ asset('img/avatar57-sm.html') }}" alt="author" width="34"
                                    height="34">
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
                                <img loading="lazy" src="{{ asset('img/avatar58-sm.html') }}" alt="author" width="34"
                                    height="34">
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
                                <img loading="lazy" src="{{ asset('img/avatar59-sm.html') }}" alt="author" width="34"
                                    height="34">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Diana Jameson</a>
                                <span class="chat-message-item">Hi James! It???s Diana, I just wanted to let you know
                                    that we have to reschedule...</span>
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
                                <img loading="lazy" src="{{ asset('img/avatar60-sm.html') }}" alt="author" width="34"
                                    height="34">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Jake Parker</a>
                                <span class="chat-message-item">Great, I???ll see you tomorrow!.</span>
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
                                <img loading="lazy" src="{{ asset('img/avatar61-sm.html') }}" alt="author" width="34"
                                    height="34">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                                <span class="chat-message-item">We???ll have to check that at the office and see if the
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
                                <img loading="lazy" src="{{ asset('img/avatar11-sm.html') }}" alt="author" width="16"
                                    height="16">
                                <img loading="lazy" src="{{ asset('img/avatar12-sm.html') }}" alt="author" width="16"
                                    height="16">
                                <img loading="lazy" src="{{ asset('img/avatar13-sm.html') }}" alt="author" width="16"
                                    height="16">
                                <img loading="lazy" src="{{ asset('img/avatar10-sm.html') }}" alt="author" width="36"
                                    height="36">
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
                                <img loading="lazy" src="{{ asset('img/avatar62-sm.html') }}" width="34" height="34"
                                    alt="author">
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
                                <img loading="lazy" src="{{ asset('img/avatar63-sm.html') }}" alt="author" width="34"
                                    height="34">
                            </div>
                            <div class="notification-event">
                                <div>You and
                                    <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became
                                    friends. Write on
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
                                <div class="author-thumb"><img loading="lazy"
                                        src="{{ asset('img/avatar64-sm.html') }}" width="34" height="34"
                                        alt="author">
                                </div>
                                <div class="notification-event">
                                    <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on
                                        your
                                        <a href="#" class="notification-link">photo</a>.
                                    </div>
                                    <span class="notification-date"><time class="entry-date updated"
                                            datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                                </div>
                                <span class="notification-icon"> <svg class="olymp-comments-post-icon">
                                        <use xlink:href="#olymp-comments-post-icon"></use>
                                    </svg> </span>
                            </div>
                            <div class="comment-photo"><img loading="lazy"
                                    src="{{ asset('img/comment-photo1.html') }}" alt="photo" width="40" height="40">
                                <span>???She looks incredible in that outfit! We should see each...???</span>
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
                                <img loading="lazy" src="{{ asset('img/avatar65-sm.html') }}" alt="author" width="34"
                                    height="34">
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
                                <img loading="lazy" src="{{ asset('img/avatar66-sm.html') }}" alt="author" width="34"
                                    height="34">
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
