@extends('layout.master')
@section('content')
<div class="page-wrapper">
    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
                <a href="index-2.html">
                    <span class="logo-icon fa fa-heartbeat fa-rotate-45"></span>
                    <span class="logo-default">Seffy</span> </a>
            </div>
            <!-- logo end -->
            <ul class="nav navbar-nav navbar-left in">
                <li><a href="javascript:void(0)" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                <li>
                    <form class="search-form-opened" action="#" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query"> <span
                                class="input-group-btn"> <a href="javascript:;" class="btn submit"> <i
                                        class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                </li>
            </ul>
            <!-- start mobile menu -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
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
                                src="img/flags/gb.png" class="position-left" alt=""> English <span
                                class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="deutsch"><img src="img/flags/de.png" alt=""> Deutsch</a>
                            </li>
                            <li>
                                <a class="ukrainian"><img src="img/flags/ua.png" alt=""> Українська</a>
                            </li>
                            <li>
                                <a class="english"><img src="img/flags/gb.png" alt=""> English</a>
                            </li>
                            <li>
                                <a class="espana"><img src="img/flags/es.png" alt=""> España</a>
                            </li>
                            <li>
                                <a class="russian"><img src="img/flags/ru.png" alt=""> Русский</a>
                            </li>
                        </ul>
                    </li>
                    <!-- end language menu -->
                    <!-- start notification dropdown -->
                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
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
                                        <a href="javascript:;">
                                            <span class="time">just now</span>
                                            <span class="details">
                                                <span class="notification-icon circle green-bgcolor"><i
                                                        class="fa fa-check"></i></span> Congratulations!. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 mins</span>
                                            <span class="details">
                                                <span class="notification-icon circle purple-bgcolor"><i
                                                        class="fa fa-user o"></i></span>
                                                <b>John Micle </b>is now following you. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">7 mins</span>
                                            <span class="details">
                                                <span class="notification-icon circle blue-bgcolor"><i
                                                        class="fa fa-comments-o"></i></span>
                                                <b>Sneha Jogi </b>sent you a message. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">12 mins</span>
                                            <span class="details">
                                                <span class="notification-icon circle pink"><i
                                                        class="fa fa-heart"></i></span>
                                                <b>Ravi Patel </b>like your photo. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">15 mins</span>
                                            <span class="details">
                                                <span class="notification-icon circle yellow"><i
                                                        class="fa fa-warning"></i></span> Warning! </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
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
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
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
                                                <img src="img/doc/doc2.svg" class="img-circle" alt=""> </span>
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
                                                <img src="img/doc/doc3.svg" class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                <span class="from"> John Deo </span>
                                                <span class="time">16 mins </span>
                                            </span>
                                            <span class="message"> Fwd: Important Notice Regarding Your Domain Name...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="photo">
                                                <img src="img/doc/doc1.svg" class="img-circle" alt=""> </span>
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
                                                <img src="img/doc/doc8.svg" class="img-circle" alt=""> </span>
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
                                                <img src="img/doc/doc5.svg" class="img-circle" alt=""> </span>
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
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                            data-close-others="true">
                            <img alt="" class="img-circle " src="img/dp.svg" />
                            <span class="username username-hide-on-mobile"> Bansi </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="user_profile.html">
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
                            <li class="divider"> </li>
                            <li>
                                <a href="lock_screen.html">
                                    <i class="icon-lock"></i> Lock
                                </a>
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="icon-logout"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a href="javascript:;" class="dropdown-toggle">
                            <i class="icon-logout"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- start color quick setting -->
    <div class="quick-setting-main">
        <button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
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
                        <a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
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
                        <a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
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
            </div>
        </div>
        <!-- end sidebar menu -->
        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">Doctor Schedule</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                    href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="#">Appointment</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Doctor Schedule</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-9 col-sm-12">
                                <div class="panel">
                                    <header class="panel-heading panel-heading-blue">
                                        Calendar</header>
                                    <div class="panel-body">
                                        <div id="calendar" class="has-toolbar"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="panel">
                                    <header class="panel-heading panel-heading-blue">
                                        Draggable Events </header>
                                    <div class="panel-body">
                                        <div id="external-events">
                                            <form class="inline-form">
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Event Title..." id="event_title" />
                                                <br />
                                                <a href="javascript:;" id="event_add" class="btn btn-success"> Add
                                                    Schedule </a>
                                            </form>
                                            <hr />
                                            <div id="event_box" class="mg-bottom-10"></div>
                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline"
                                                for="drop-remove"> remove after drop
                                                <input type="checkbox" class="group-checkable" id="drop-remove" />
                                                <span></span>
                                            </label>
                                            <hr class="visible-xs" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page content -->
        <!-- start chat sidebar -->
        <div class="chat-sidebar-container" data-close-on-body-click="false">
            <div class="chat-sidebar">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                            <span class="badge badge-danger">4</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab"> <i
                                class="icon-settings"></i> Settings
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <!-- Start Doctor Chat -->
                    <div class="tab-pane active chat-sidebar-chat" id="quick_sidebar_tab_1">
                        <div class="chat-sidebar-list">
                            <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                                data-wrapper-class="chat-sidebar-list">
                                <h3 class="list-heading">Online</h3>
                                <ul class="media-list list-items">
                                    <li class="media"><img class="media-object" src="img/doc/doc3.svg" width="35"
                                            height="35" alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h4 class="media-heading">John Deo</h4>
                                            <div class="media-heading-sub">Spine Surgeon</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">5</span>
                                        </div> <img class="media-object" src="img/doc/doc1.svg" width="35" height="35"
                                            alt="...">
                                        <i class="busy dot"></i>
                                        <div class="media-body">
                                            <h4 class="media-heading">Rajesh</h4>
                                            <div class="media-heading-sub">Director</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="img/doc/doc5.svg" width="35"
                                            height="35" alt="...">
                                        <i class="away dot"></i>
                                        <div class="media-body">
                                            <h4 class="media-heading">Jacob Ryan</h4>
                                            <div class="media-heading-sub">Ortho Surgeon</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">8</span>
                                        </div> <img class="media-object" src="img/doc/doc4.svg" width="35" height="35"
                                            alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h4 class="media-heading">Kehn Anderson</h4>
                                            <div class="media-heading-sub">CEO</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="img/doc/doc2.svg" width="35"
                                            height="35" alt="...">
                                        <i class="busy dot"></i>
                                        <div class="media-body">
                                            <h4 class="media-heading">Sarah Smith</h4>
                                            <div class="media-heading-sub">Anaesthetics</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="img/doc/doc7.svg" width="35"
                                            height="35" alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h4 class="media-heading">Vlad Cardella</h4>
                                            <div class="media-heading-sub">Cardiologist</div>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="list-heading">Offline</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-warning">4</span>
                                        </div> <img class="media-object" src="img/doc/doc6.svg" width="35" height="35"
                                            alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h4 class="media-heading">Jennifer Maklen</h4>
                                            <div class="media-heading-sub">Nurse</div>
                                            <div class="media-heading-small">Last seen 01:20 AM</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="img/doc/doc8.svg" width="35"
                                            height="35" alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h4 class="media-heading">Lina Smith</h4>
                                            <div class="media-heading-sub">Ortho Surgeon</div>
                                            <div class="media-heading-small">Last seen 11:14 PM</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">9</span>
                                        </div> <img class="media-object" src="img/doc/doc9.svg" width="35" height="35"
                                            alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h4 class="media-heading">Jeff Adam</h4>
                                            <div class="media-heading-sub">Compounder</div>
                                            <div class="media-heading-small">Last seen 3:31 PM</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="img/doc/doc10.svg" width="35"
                                            height="35" alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h4 class="media-heading">Anjelina Cardella</h4>
                                            <div class="media-heading-sub">Physiotherapist</div>
                                            <div class="media-heading-small">Last seen 7:45 PM</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="chat-sidebar-item">
                            <div class="chat-sidebar-chat-user">
                                <div class="page-quick-sidemenu">
                                    <a href="javascript:;" class="chat-sidebar-back-to-list">
                                        <i class="fa fa-angle-double-left"></i>Back
                                    </a>
                                </div>
                                <div class="chat-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="img/dp.svg" />
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Bansi
                                                Patel</a> <span class="datetime">9:10</span>
                                            <span class="body-out"> could you send me menu icons ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="img/doc/doc5.svg" />
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob
                                                Ryan</a> <span class="datetime">9:10</span>
                                            <span class="body"> please give me 10 minutes. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="img/dp.svg" />
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Bansi
                                                Patel</a> <span class="datetime">9:11</span>
                                            <span class="body-out"> ok fine :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="img/doc/doc5.svg" />
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob
                                                Ryan</a> <span class="datetime">9:22</span>
                                            <span class="body">Sorry for
                                                the delay. i sent mail to you. let me know if it is ok or not.</span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="img/dp.svg" />
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Bansi
                                                Patel</a> <span class="datetime">9:26</span>
                                            <span class="body-out"> it is perfect! :) </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="img/dp.svg" />
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Bansi
                                                Patel</a> <span class="datetime">9:26</span>
                                            <span class="body-out"> Great! Thanks. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="img/doc/doc5.svg" />
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob
                                                Ryan</a> <span class="datetime">9:27</span>
                                            <span class="body"> it is my pleasure :) </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn green-bgcolor">
                                                <i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Doctor Chat -->
                    <!-- Start Setting Panel -->
                    <div class="tab-pane chat-sidebar-settings" id="quick_sidebar_tab_3">
                        <div class="chat-sidebar-settings-list">
                            <h3 class="list-heading">Layout Settings</h3>
                            <div class="chatpane inner-content ">
                                <ul class="list-items borderless theme-options">
                                    <li class="theme-option layout-setting"><span>Sidebar
                                            Position </span>
                                        <select
                                            class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                            <option value="left" selected="selected">Left</option>
                                            <option value="right">Right</option>
                                        </select>
                                    </li>
                                    <li class="theme-option layout-setting"><span>Header</span>
                                        <select
                                            class="page-header-option form-control input-inline input-sm input-small ">
                                            <option value="fixed" selected="selected">Fixed</option>
                                            <option value="default">Default</option>
                                        </select>
                                    </li>
                                    <li class="theme-option layout-setting"><span>Sidebar Menu </span>
                                        <select
                                            class="sidebar-menu-option form-control input-inline input-sm input-small ">
                                            <option value="accordion" selected="selected">Accordion</option>
                                            <option value="hover">Hover</option>
                                        </select>
                                    </li>
                                    <li class="theme-option layout-setting"><span>Footer</span>
                                        <select
                                            class="page-footer-option form-control input-inline input-sm input-small ">
                                            <option value="fixed">Fixed</option>
                                            <option value="default" selected="selected">Default</option>
                                        </select>
                                    </li>
                                </ul>
                                <h3 class="list-heading">Account Settings</h3>
                                <ul class="list-items borderless theme-options">
                                    <li>Show me Online
                                        <input type="checkbox" class="make-switch" checked data-size="small"
                                            data-on-color="success" data-on-text="ON" data-off-color="default"
                                            data-off-text="OFF">
                                    </li>
                                    <li>Status visible to all
                                        <input type="checkbox" class="make-switch" data-size="small"
                                            data-on-color="info" data-on-text="ON" data-off-color="default"
                                            data-off-text="OFF">
                                    </li>
                                    <li>Everyone will see my stuff
                                        <input type="checkbox" class="make-switch" checked data-size="small"
                                            data-on-color="danger" data-on-text="ON" data-off-color="default"
                                            data-off-text="OFF">
                                    </li>
                                    <li>Auto Sumbit Issues
                                        <input type="checkbox" class="make-switch" data-size="small"
                                            data-on-color="warning" data-on-text="ON" data-off-color="default"
                                            data-off-text="OFF">
                                    </li>
                                    <li>Save History
                                        <input type="checkbox" class="make-switch" checked data-size="small"
                                            data-on-color="success" data-on-text="ON" data-off-color="default"
                                            data-off-text="OFF">
                                    </li>
                                </ul>
                                <h3 class="list-heading">General Settings</h3>
                                <ul class="list-items borderless">
                                    <li>Enable Notifications
                                        <input type="checkbox" class="make-switch" data-size="small"
                                            data-on-color="info" data-on-text="ON" data-off-color="default"
                                            data-off-text="OFF">
                                    </li>
                                    <li>Enable SMS Alerts
                                        <input type="checkbox" class="make-switch" checked data-size="small"
                                            data-on-color="danger" data-on-text="ON" data-off-color="default"
                                            data-off-text="OFF">
                                    </li>
                                    <li>Location
                                        <input type="checkbox" class="make-switch" data-size="small"
                                            data-on-color="warning" data-on-text="ON" data-off-color="default"
                                            data-off-text="OFF">
                                    </li>
                                    <li>Show Offline Users
                                        <input type="checkbox" class="make-switch" checked data-size="small"
                                            data-on-color="success" data-on-text="ON" data-off-color="default"
                                            data-off-text="OFF">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
    <!-- start footer -->
    <div class="page-footer">
        <div class="page-footer-inner"> 2017 &copy; Seffy Hospital Theme By
            <a href="mailto:redstartheme@gmail.com" target="_top">RT Theme maker</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- end footer -->
</div>
<!-- start js include path -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="js/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<!-- bootstrap -->
<script src="js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- calendar -->
<script src="js/moment.min.js" type="text/javascript"></script>
<script src="js/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="js/calendar.min.js" type="text/javascript"></script>

<script src="js/jquery.slimscroll.js"></script>
<script src="js/app.js" type="text/javascript"></script>
<script src="js/layout.js" type="text/javascript"></script>
<script src="js/theme-color.js" type="text/javascript"></script>


<!-- end js include path -->
</body>

<!-- Mirrored from www.seffy.radixtouch.in/schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2017 18:47:27 GMT -->

</html>