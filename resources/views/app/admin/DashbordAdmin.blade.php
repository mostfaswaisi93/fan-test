@extends('layout.master')
@section('sidebar')





    <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true"
        data-slide-speed="200" style="padding-top: 20px">

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
                    <a href="{{url('schedule')}}" class="nav-link "> <span
                            class="title">Doctor Schedule</span>
                    </a>
                </li>
                <li class="nav-item  ">
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
            <a href="#" class="nav-link nav-toggle"><i class="fa fa-book"></i>
                <span class="title">Users</span><span class="arrow"></span></a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="{{route('user.create')}}" class="nav-link "> <span
                            class="title">New User</span>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="{{route('user.index')}}" class="nav-link "> <span
                            class="title">All User</span>
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
                    <a href="{{route('doctor.create')}}" class="nav-link "> <span class="title">Add Doctor</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="#" class="nav-link "> <span class="title">Edit Doctor</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="#" class="nav-link "> <span
                            class="title">About Doctor</span>
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
                    <a href="{{route('patient.index')}}" class="nav-link "> <span
                            class="title">All Patients</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{route('patient.create')}}" class="nav-link "> <span class="title">Add Patient</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="#" class="nav-link "> <span
                            class="title">Edit Patient</span>
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
                    <a href="{{route('employee.index')}}" class="nav-link "> <span class="title">All Staff</span>
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
                    <a href="#" class="nav-link "> <span
                            class="title">Staff Profile</span>
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
                    <a href="{{route('operation.create')}}" class="nav-link "> <span class="title">Add Operation</span>
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
                    <a href="{{route('prescription.index')}}"> <span
                            class="title">All Prescription</span>
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
                    <a href="{{route('payment.create')}}" class="nav-link "> <span
                            class="title">Add Payments</span>
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

@endsection


@section('dashboard')

            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>

                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="state-overview">
                    <div class="col-lg-3 col-sm-6">
                        <div class="overview-panel blue">
                            <div class="symbol">
                                <i class="fa fa-users usr-clr"></i>
                            </div>
                            <div class="value white">
                                <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{$appointment}}">0</p>

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
                                <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{$patient}}">0</p>
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
                                <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{$user}}">0</p>
                                <p>Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="overview-panel orange">
                            <div class="symbol">
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="value white">
                                <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{$payment}}">0</p>
                                <span>$</span>
                                <p>Hospital Earning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end widget -->
            <!-- chart start -->
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-topline-aqua">
                        <div class="card-head">
                            <header>HOSPITAL SURVEY</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body no-padding height-9">
                            <div class="row">
                                <canvas id="chartjs_line"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-topline-aqua">
                        <div class="card-head">
                            <header>HOSPITAL SURVEY</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body no-padding height-9">
                            <div class="row">
                                <canvas id="chartjs_polar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart end -->
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="card  card-topline-green">
                        <div class="card-head">
                            <header>BOOKED APPOINTMENT</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row table-padding">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="btn-group">
                                        <button id="addRow" class="btn btn-info">
                                            Add New <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="btn-group pull-right">
                                        <button class="btn green-bgcolor  btn-outline dropdown-toggle"
                                                data-toggle="dropdown">Tools
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-print"></i> Print </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table
                                    class="table table-striped table-bordered table-hover table-checkable order-column"
                                    id="example4">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                <input type="checkbox" class="group-checkable"
                                                       data-set="#sample_1 .checkboxes"/>
                                                <span></span>
                                            </label>
                                        </th>
                                        <th>Patient Name</th>
                                        <th>Assigned Doctor</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1"/>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> Jayesh Patel</td>
                                        <td>
                                            <a href="mailto:shuxer@gmail.com"> Dr.Rajesh </a>
                                        </td>
                                        <td class="center"> 12/05/2016</td>
                                        <td class="center"> 10:45</td>
                                        <td class="center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-warning dropdown-toggle center no-margin"
                                                        type="button" data-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-left" role="menu">
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-ban"></i> Cancel </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-clock-o"></i> Postpone
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1"/>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> Pooja Patel</td>
                                        <td>
                                            <a href="mailto:looper90@gmail.com"> Dr.Sarah Smith </a>
                                        </td>
                                        <td class="center"> 12/05/2016</td>
                                        <td class="center"> 10:55</td>
                                        <td class="center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-info dropdown-toggle no-margin"
                                                        type="button" data-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-ban"></i> Cancel </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-clock-o"></i> Postpone
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1"/>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> Pankaj Singh</td>
                                        <td>
                                            <a href="mailto:userwow@yahoo.com"> Dr.Rajesh </a>
                                        </td>
                                        <td class="center"> 12/05/2016</td>
                                        <td class="center"> 11:15</td>
                                        <td class="center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success dropdown-toggle no-margin"
                                                        type="button" data-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-ban"></i> Cancel </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-clock-o"></i> Postpone
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1"/>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> Raj Malhotra</td>
                                        <td>
                                            <a href="mailto:doctormail@gmail.com"> Dr.Megha Trivedi </a>
                                        </td>
                                        <td class="center"> 12/05/2016</td>
                                        <td class="center"> 11:25</td>
                                        <td class="center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-primary dropdown-toggle no-margin"
                                                        type="button" data-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-ban"></i> Cancel </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-clock-o"></i> Postpone
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1"/>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> Sneha Pandya</td>
                                        <td>
                                            <a href="mailto:doctormail@gmail.com"> Dr.Sarah Smith </a>
                                        </td>
                                        <td class="center"> 12/05/2016</td>
                                        <td class="center"> 11:35</td>
                                        <td class="center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-warning dropdown-toggle no-margin"
                                                        type="button" data-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-ban"></i> Cancel </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-clock-o"></i> Postpone
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX ">
                                        <td>
                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1"/>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> Sameer Jain</td>
                                        <td>
                                            <a href="mailto:doctormail@gmail.com"> Dr.Megha Trivedi </a>
                                        </td>
                                        <td class="center"> 12/05/2016</td>
                                        <td class="center"> 11:45</td>
                                        <td class="center">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-danger dropdown-toggle no-margin"
                                                        type="button" data-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-ban"></i> Cancel </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"><i class="fa fa-clock-o"></i> Postpone
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card  card-topline-red">
                        <div class="card-head">
                            <header>DOCTORS LIST</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body no-padding height-9">
                            <div class="row">
                                <ul class="docListWindow">
                                    <li>
                                        <div class="prog-avatar">
                                            <img src="img/doc/doc1.svg" alt="" width="40" height="40">
                                        </div>
                                        <div class="details">
                                            <div class="title">
                                                <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                                            </div>
                                            <div>
                                                <span class="clsAvailable">Available</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="prog-avatar">
                                            <img src="img/doc/doc2.svg" alt="" width="40" height="40">
                                        </div>
                                        <div class="details">
                                            <div class="title">
                                                <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                            </div>
                                            <div>
                                                <span class="clsAvailable">Available</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="prog-avatar">
                                            <img src="img/doc/doc3.svg" alt="" width="40" height="40">
                                        </div>
                                        <div class="details">
                                            <div class="title">
                                                <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                            </div>
                                            <div>
                                                <span class="clsNotAvailable">Not Available</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="prog-avatar">
                                            <img src="img/doc/doc4.svg" alt="" width="40" height="40">
                                        </div>
                                        <div class="details">
                                            <div class="title">
                                                <a href="#">Dr.Jay Soni</a> - (BHMS)
                                            </div>
                                            <div>
                                                <span class="clsOnLeave">On Leave</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="prog-avatar">
                                            <img src="img/doc/doc5.svg" alt="" width="40" height="40">
                                        </div>
                                        <div class="details">
                                            <div class="title">
                                                <a href="#">Dr.Jacob Ryan</a> - (MBBS,MS)
                                            </div>
                                            <div>
                                                <span class="clsNotAvailable">Not Available</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="prog-avatar">
                                            <img src="img/doc/doc6.svg" alt="" width="40" height="40">
                                        </div>
                                        <div class="details">
                                            <div class="title">
                                                <a href="#">Dr.Megha Trivedi</a> - (MBBS,MS)
                                            </div>
                                            <div>
                                                <span class="clsAvailable">Available</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a href="#">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start admited patient list -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card  card-topline-yellow">
                        <div class="card-head">
                            <header>ADMIT PATIENT LIST</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table display product-overview mb-30" id="support_table">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Assigned Doctor</th>
                                            <th>Date Of Admit</th>
                                            <th>Diseases</th>
                                            <th>Room No</th>
                                            <th>Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Jens Brincker</td>
                                            <td>Dr.Kenny Josh</td>
                                            <td>27/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-success">Influenza</span>
                                            </td>
                                            <td>101</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a> <a
                                                    href="javascript:void(0)" class="text-inverse" title="Delete"
                                                    data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mark Hay</td>
                                            <td>Dr. Mark</td>
                                            <td>26/05/2017</td>
                                            <td>
                                                <span class="label label-sm label-warning"> Cholera </span>
                                            </td>
                                            <td>105</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a> <a
                                                    href="javascript:void(0)" class="text-inverse" title="Delete"
                                                    data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Anthony Davie</td>
                                            <td>Dr.Cinnabar</td>
                                            <td>21/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-success ">Amoebiasis</span>
                                            </td>
                                            <td>106</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a> <a
                                                    href="javascript:void(0)" class="text-inverse" title="Delete"
                                                    data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>David Perry</td>
                                            <td>Dr.Felix</td>
                                            <td>20/04/2016</td>
                                            <td>
                                                <span class="label label-sm label-danger">Jaundice</span>
                                            </td>
                                            <td>105</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a> <a
                                                    href="javascript:void(0)" class="text-inverse" title="Delete"
                                                    data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Anthony Davie</td>
                                            <td>Dr.Beryl</td>
                                            <td>24/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-success ">Leptospirosis</span>
                                            </td>
                                            <td>102</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a> <a
                                                    href="javascript:void(0)" class="text-inverse" title="Delete"
                                                    data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Alan Gilchrist</td>
                                            <td>Dr.Joshep</td>
                                            <td>22/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-warning ">Hepatitis</span>
                                            </td>
                                            <td>103</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a> <a
                                                    href="javascript:void(0)" class="text-inverse" title="Delete"
                                                    data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Mark Hay</td>
                                            <td>Dr.Jayesh</td>
                                            <td>18/06/2016</td>
                                            <td>
                                                <span class="label label-sm label-success ">Typhoid</span>
                                            </td>
                                            <td>107</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a> <a
                                                    href="javascript:void(0)" class="text-inverse" title="Delete"
                                                    data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Sue Woodger</td>
                                            <td>Dr.Sharma</td>
                                            <td>17/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-danger">Malaria</span>
                                            </td>
                                            <td>108</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a> <a
                                                    href="javascript:void(0)" class="text-inverse" title="Delete"
                                                    data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end admited patient list -->
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
                                    </div>
                                    <img class="media-object" src="img/doc/doc1.svg" width="35" height="35" alt="...">
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
                                    </div>
                                    <img class="media-object" src="img/doc/doc4.svg" width="35" height="35" alt="...">
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
                                    </div>
                                    <img class="media-object" src="img/doc/doc6.svg" width="35" height="35" alt="...">
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
                                    </div>
                                    <img class="media-object" src="img/doc/doc9.svg" width="35" height="35" alt="...">
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
                                    <img class="avatar" alt="" src="img/dp.svg"/>
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Bansi Patel</a>
                                        <span class="datetime">9:10</span>
                                        <span class="body-out"> could you send me menu icons ? </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="img/doc/doc5.svg"/>
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a>
                                        <span class="datetime">9:10</span>
                                        <span class="body"> please give me 10 minutes. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="img/dp.svg"/>
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Bansi Patel</a>
                                        <span class="datetime">9:11</span>
                                        <span class="body-out"> ok fine :) </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="img/doc/doc5.svg"/>
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a>
                                        <span class="datetime">9:22</span>
                                        <span class="body">Sorry for
													the delay. i sent mail to you. let me know if it is ok or not.</span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="img/dp.svg"/>
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Bansi Patel</a>
                                        <span class="datetime">9:26</span>
                                        <span class="body-out"> it is perfect! :) </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="img/dp.svg"/>
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Bansi Patel</a>
                                        <span class="datetime">9:26</span>
                                        <span class="body-out"> Great! Thanks. </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="img/doc/doc5.svg"/>
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a>
                                        <span class="datetime">9:27</span>
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
                                    <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                        <option value="left" selected="selected">Left</option>
                                        <option value="right">Right</option>
                                    </select>
                                </li>
                                <li class="theme-option layout-setting"><span>Header</span>
                                    <select class="page-header-option form-control input-inline input-sm input-small ">
                                        <option value="fixed" selected="selected">Fixed</option>
                                        <option value="default">Default</option>
                                    </select>
                                </li>
                                <li class="theme-option layout-setting"><span>Sidebar Menu </span>
                                    <select class="sidebar-menu-option form-control input-inline input-sm input-small ">
                                        <option value="accordion" selected="selected">Accordion</option>
                                        <option value="hover">Hover</option>
                                    </select>
                                </li>
                                <li class="theme-option layout-setting"><span>Footer</span>
                                    <select class="page-footer-option form-control input-inline input-sm input-small ">
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
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info"
                                           data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>Everyone will see my stuff
                                    <input type="checkbox" class="make-switch" checked data-size="small"
                                           data-on-color="danger" data-on-text="ON" data-off-color="default"
                                           data-off-text="OFF">
                                </li>
                                <li>Auto Sumbit Issues
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning"
                                           data-on-text="ON" data-off-color="default" data-off-text="OFF">
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
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info"
                                           data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>Enable SMS Alerts
                                    <input type="checkbox" class="make-switch" checked data-size="small"
                                           data-on-color="danger" data-on-text="ON" data-off-color="default"
                                           data-off-text="OFF">
                                </li>
                                <li>Location
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning"
                                           data-on-text="ON" data-off-color="default" data-off-text="OFF">
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
@endsection
