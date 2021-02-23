<!DOCTYPE html>
<html lang="en">

<head>
    <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FanSmile : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{asset("/room/images/favicon.ico")}}" />

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="{{asset('/room/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="{{asset('/room/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Default Theme css file -->
    <link id="switcher" href="{{asset('/room/css/themes/default-theme.css')}}" rel="stylesheet">
    <!-- Slick slider css file -->
    <link href="{{asset('/room/css/slick.css')}}" rel="stylesheet">
    <!-- Photo Swipe Image Gallery -->
    <link rel='stylesheet prefetch' href='{{asset('/room/css/photoswipe.css')}}'>
    <link rel='stylesheet prefetch' href='{{asset('/room/css/default-skin.css')}}'>

    <!-- Main structure css file -->
    <link href="{{asset('/room/style.css')}}" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ========WpF ========-->
    <header id="header">
        <!-- BEGIN MENU -->
        <div class="menu_area">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- LOGO -->
                        <!-- TEXT BASED LOGO -->
                        <a class="navbar-brand" href="#"><i class="fa fa-heartbeat"></i>Fan <span>Smile</span></a>
                        <!-- IMG BASED LOGO  -->
                        <!--  <a class="navbar-brand" href="index.html"><img src="{{asset("/room/images/logo.png")}}" alt="logo"></a>   -->
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="features.html">Features</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false">Service <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="medical-counseling.html">Medical Counseling</a></li>
                                    <li><a href="medical-research.html">Medical Research</a></li>
                                    <li><a href="blood-bank.html">Blood Bank</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <span
                                        class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="blog-archive.html">Blog Archive</a></li>
                                    <li><a href="blog-archive-with-left-sidebar.html">Blog Archive with Left Sidebar</a>
                                    </li>
                                    <li><a href="blog-archive-with-right-sidebar.html">Blog Archive with Right
                                            Sidebar</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                    <li><a href="blog-single-with-left-sidebar.html">Blog Single with Left Sidebar</a>
                                    </li>
                                    <li><a href="blog-single-with-right-sidebar.html">Blog Single with Right Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Page <span class="fa fa-angle-down"></span></a>--}}
                            {{--<ul class="dropdown-menu" role="menu">--}}
                            {{--<li><a href="404.html">404 Page</a></li>--}}
                            {{--<li><a href="#">Link Two</a></li>--}}
                            {{--<li><a href="#">Link Three</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="{{url("login")}}">login</a></li>
                            <li><a href="{{url("register")}}">login</a></li>

                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </nav>
        </div>
        <!-- END MENU -->
    </header>
    <!--=========== END HEADER SECTION ================-->
    @yield('content')
    <!--=========== BEGIN SLIDER SECTION ================-->

    <script src="{{asset("/room/js/jquery.js")}}"></script>
    <!-- Bootstrap default js -->
    <script src="{{asset("/room/js/bootstrap.min.js")}}"></script>
    <!-- slick slider -->
    <script src="{{asset("/room/js/slick.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("/room/js/modernizr.custom.79639.js")}}"></script>
    <!-- counter -->
    <script src="{{asset("/room/js/waypoints.min.js")}}"></script>
    <script src="{{asset("/room/js/jquery.counterup.min.js")}}"></script>
    <!-- Doctors hover effect -->
    <script src="{{asset("/room/js/snap.svg-min.js")}}"></script>
    <script src="{{asset("/room/js/hovers.js")}}"></script>
    <!-- Photo Swipe Gallery Slider -->
    <script src='{{asset("/room/js/photoswipe.min.js")}}'></script>
    <script src='{{asset("/room/js/photoswipe-ui-default.min.js")}}'></script>
    <script src="{{asset("/room/js/photoswipe-gallery.js")}}"></script>

    <!-- Custom JS -->
    <script src="{{asset("/room/js/custom.js")}}"></script>

</body>

</html>