<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="FanSmile" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FanSmile</title>

    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
        type="text/css" />
    <!-- icons -->
    <link href="{{mix('css/style.css')}}" rel="stylesheet" />

    <link href="{{asset("plugin/js/simple-line-icons/simple-line-icons.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("plugin/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />

    <!--bootstrap -->
    <link href="{{asset("plugin/js/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("plugin/js/bootstrap-switch/css/bootstrap-switch.min.css")}}" rel="stylesheet"
        type="text/css" />

    <!-- Theme Styles -->
    <link href="{{asset("plugin/css/plugins.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("plugin/css/style.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("plugin/css/responsive.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("plugin/css/theme-color.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugin/js/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="{{asset("plugin/img/easy-clinic-logoprog.png")}}" />
    @yield('cssHeader')
</head>

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-blue">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="{{url('home')}}">
                        <span class="logo-icon fa fa-heartbeat fa-rotate-45"></span>
                        <span class="logo-default">FanSmile</span> </a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="javascript:void(0)" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a>
                    </li>
                    <li>
                        <form class="search-form-opened" action="#" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." name="query"> <span
                                    class="input-group-btn"> <a href="#" class="btn submit"> <i
                                            class="icon-magnifier"></i>
                                    </a>
                                </span>
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- start mobile menu -->
                <a href="#" class="menu-toggler responsive-toggler" data-toggle="collapse"
                    data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start language menu -->
                        <li class="dropdown language-switch">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img
                                    src="{{asset("plugin/img/flags/gb.png")}}" class="position-left" alt=""> English
                                <span class="fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="deutsch"><img src="{{asset("plugin/img/flags/de.png")}}" alt="">
                                        Deutsch</a>
                                </li>
                                <li>
                                    <a class="ukrainian"><img src="{{asset("plugin/img/flags/ua.png")}}" alt="">
                                        Українська</a>
                                </li>
                                <li>
                                    <a class="english"><img src="{{asset("plugin/img/flags/gb.png")}}" alt="">
                                        English</a>
                                </li>
                                <li>
                                    <a class="espana"><img src="{{asset("plugin/img/flags/es.png")}}" alt=""> España</a>
                                </li>
                                <li>
                                    <a class="russian"><img src="{{asset("plugin/img/flags/ru.png")}}" alt="">
                                        Русский</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end language menu -->
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge orange-bgcolor"> 6 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New 6</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                    <span class="notification-icon circle green-bgcolor"><i
                                                            class="fa fa-check"></i></span> Congratulations!. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle purple-bgcolor"><i
                                                            class="fa fa-user o"></i></span>
                                                    <b>John Micle </b>is now following you. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="time">7 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle blue-bgcolor"><i
                                                            class="fa fa-comments-o"></i></span>
                                                    <b>Sneha Jogi </b>sent you a message. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="time">12 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle pink"><i
                                                            class="fa fa-heart"></i></span>
                                                    <b>Ravi Patel </b>like your photo. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="time">15 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle yellow"><i
                                                            class="fa fa-warning"></i></span> Warning! </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="time">10 hrs</span>
                                                <span class="details">
                                                    <span class="notification-icon circle red"><i
                                                            class="fa fa-times"></i></span> Application error. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)"> All notifications </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge cyan-bgcolor"> 2 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Messages</span></h3>
                                    <span class="notification-label cyan-bgcolor">New 2</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="{{asset("plugin/img/doc/doc2.svg")}}"
                                                        class="{{asset("plugin/img-circle")}}" alt=""> </span>
                                                <span class="subject">
                                                    <span class="from"> Sarah Smith </span>
                                                    <span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Jatin I found you on LinkedIn... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="{{asset("plugin/img/doc/doc3.svg")}}"
                                                        class="{{asset("plugin/img-circle")}}" alt=""> </span>
                                                <span class="subject">
                                                    <span class="from"> John Deo </span>
                                                    <span class="time">16 mins </span>
                                                </span>
                                                <span class="message"> Fwd: Important Notice Regarding Your Domain
                                                    Name... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="{{asset("plugin/img/doc/doc1.svg")}}"
                                                        class="{{asset("plugin/img-circle")}}" alt=""> </span>
                                                <span class="subject">
                                                    <span class="from"> Rajesh </span>
                                                    <span class="time">2 hrs </span>
                                                </span>
                                                <span class="message"> pls take a print of attachments. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="{{asset("plugin/img/doc/doc8.svg")}}"
                                                        class="{{asset("plugin/img-circle")}}" alt=""> </span>
                                                <span class="subject">
                                                    <span class="from"> Lina Smith </span>
                                                    <span class="time">40 mins </span>
                                                </span>
                                                <span class="message"> Apply for Ortho Surgeon </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="{{asset("plugin/img/doc/doc5.svg")}}"
                                                        class="{{asset("plugin/img-circle")}}" alt=""> </span>
                                                <span class="subject">
                                                    <span class="from"> Jacob Ryan </span>
                                                    <span class="time">46 mins </span>
                                                </span>
                                                <span class="message"> Request for leave application. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#"> All Messages </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end message dropdown -->
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <img alt="" class="{{asset("plugin/img-circle")}}"
                                    src="{{asset("plugin/img/dp.svg")}}" />
                                <span class="username username-hide-on-mobile"> Bansi </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-directions"></i> Help
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="icon-lock"></i> Lock
                                    </a>
                                </li>
                                <li>

                                    <a class="icon-logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>


                                </li>
                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->


        <!-- start color quick setting -->
        <div class="quick-setting-main">
            <div class="quick-setting display-none">
                <ul id="themecolors">
                    <li>
                        <p class="selector-title">Main Layouts</p>
                    </li>
                    <li class="complete">
                        <div class="theme-color sidebar-theme">
                            <a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
                            <a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
                            <a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
                            <a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
                            <a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
                            <a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
                            <a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
                        </div>
                    </li>

                    <li>
                        <p class="selector-title">Header Brand color</p>
                    </li>
                    <li class="theme-option">
                        <div class="theme-color logo-theme">
                            <a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
                            <a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
                            <a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
                            <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                                    class="cont"></span></a>
                            <a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
                            <a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
                            <a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>

                        </div>
                    </li>
                    <li>
                        <p class="selector-title">Header color</p>
                    </li>
                    <li class="theme-option">
                        <div class="theme-color header-theme">
                            <a href="#" data-theme="header-white"><span class="head"></span><span
                                    class="cont"></span></a>
                            <a href="#" data-theme="header-dark"><span class="head"></span><span
                                    class="cont"></span></a>
                            <a href="#" data-theme="header-blue"><span class="head"></span><span
                                    class="cont"></span></a>
                            <a href="#" data-theme="header-indigo"><span class="head"></span><span
                                    class="cont"></span></a>
                            <a href="#" data-theme="header-cyan"><span class="head"></span><span
                                    class="cont"></span></a>
                            <a href="#" data-theme="header-green"><span class="head"></span><span
                                    class="cont"></span></a>
                            <a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end color quick setting -->


        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll">
                        <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true"
                            data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    <div class="pull-left image">
                                        <img src="{{asset("plugin/img/dp.svg")}}"
                                            class="{{asset("plugin/img-circle user-img-circle")}}" alt="User Image" />
                                    </div>
                                    <div class="pull-left info">
                                        <p>{{ config('app.name', 'Laravel') }}</p>
                                        <a href="{{url('home')}}"><i class="fa fa-circle user-online"></i><span
                                                class="txtOnline"> Online</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item start active open">
                                <a class="nav-link " href="{{url('home')}}"> <i class="fa fa-tachometer"></i> <span
                                        class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"><i class="fa fa-book"></i>
                                    <span class="title">Appointment</span><span class="arrow"></span></a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        {{--                                    <a href="{{route('events.index')}}"
                                        class="nav-link "> <span--}}
                                            {{--                                            class="title">Doctor Schedule</span>z--}}
                                            {{--                                    </a>--}} </li> <li
                                            class="nav-item  ">
                                            <a href="{{route('appointment.create')}}" class="nav-link "> <span
                                                    class="title">Book Appointment</span>
                                            </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{route('appointment.index')}}" class="nav-link "> <span
                                                class="title">View All Appointment</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i class="fa fa-user-md"></i>

                                    <span class="title">Doctors</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{route('doctor.index')}}"> <span class="title">All Doctor</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{route('doctor.create')}}" class="nav-link "> <span class="title">Add
                                                Doctor</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="#" class="nav-link "> <span class="title">Edit Doctor</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="#" class="nav-link "> <span class="title">About Doctor</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i class="fa fa-user"></i>
                                    <span class="title">Patients</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{route('patient.index')}}" class="nav-link "> <span class="title">All
                                                Patients</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{route('patient.create')}}" class="nav-link "> <span class="title">Add
                                                Patient</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="#" class="nav-link "> <span class="title">Edit Patient</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="#" class="nav-link "> <span class="title">Patient Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i class="fa fa-users"></i>
                                    <span class="title">Other Staff</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{route('employee.index')}}" class="nav-link "> <span class="title">All
                                                Staff</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{route('employee.create')}}" class="nav-link ">
                                            <span class="title">Add Staff</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="#" class="nav-link "> <span class="title">Edit Staff</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="#" class="nav-link "> <span class="title">Staff Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i class="fa fa-plus-square"></i>

                                    <span class="title">Operation</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{route('operation.index')}}"> <span class="title">All Operation</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{route('operation.create')}}" class="nav-link "> <span
                                                class="title">Add Operation</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="#" class="nav-link "> <span class="title">Edit Eperation</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i class="fa fa-medkit custom"></i>

                                    <span class="title">Prescription</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{route('prescription.index')}}"> <span class="title">All
                                                Prescription</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{route('prescription.create')}}" class="nav-link "> <span
                                                class="title">Add Prescription</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i class="fa fa-money"></i>
                                    <span class="title">Payments</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{route('payment.create')}}" class="nav-link "> <span class="title">Add
                                                Payments</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{route('payment.index')}}" class="nav-link "> <span
                                                class="title">Payments</span>
                                        </a>
                                    </li>

                                    <li class="nav-item  ">
                                        <a href="" class="nav-link "> <span class="title">Patient Invoice</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->

            <!-- start page content -->
            <div class="page-content-wrapper">

                <div class="page-content">
                    <div class="page-content-wrapper">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class=" pull-left">
                                    <div class="page-title">Dashboard</div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                            href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <!-- start widget -->
                        <div class="row">
                            <div class="state-overview">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel blue">
                                        <div class="symbol">
                                            <i class="fa fa-users usr-clr"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="23">0</p>
                                            <p>APPOINTMENTS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel green-bgcolor">
                                        <div class="symbol">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="48">0</p>
                                            <p>NEW PATIENTS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel grey">
                                        <div class="symbol">
                                            <i class="fa fa-heartbeat"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="14">0</p>
                                            <p>TODAY'S OPT</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel orange">
                                        <div class="symbol">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="3421">
                                                0</p><span>$</span>
                                            <p>Hospital Earning</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            @yield('content')
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="page-footer">
            <div class="page-footer-inner">
                <a href="" target="_top"> 2019 &copy; FanSmile</a> عمل اتصل بنا وربطها
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->

        <script src="{{mix('js/javascript.js')}}" type="text/javascript"></script>

        <script src="{{asset('plugin/js/jquery.min.js')}}" type="text/javascript"></script>

        <script src="{{asset('plugin/js/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

        <script src="{{asset('plugin/js/jquery.blockui.min.js')}}" type="text/javascript"></script>

        <script src="{{asset('plugin/js/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript">
        </script>
        <script src="{{asset('plugin/js/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugin/js/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugin/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('plugin/js/app.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugin/js/layout.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugin/js/chart-js/Chart.bundle.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugin/js/chart-js/utils.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugin/js/chart-js/home-data.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugin/js/theme-color.js')}}" type="text/javascript"></script>

        @yield('jsFooter')
</body>

</html>