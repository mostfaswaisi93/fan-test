@extends('layout.master')
@section('sidebar')



<ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true"
    data-slide-speed="200" style="padding-top: 20px">
    <li class="sidebar-toggler-wrapper hide">
        <div class="sidebar-toggler">
            <span></span>
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
                <a href="{{url('schedule')}}" class="nav-link "> <span
                        class="title">Doctor Schedule</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('appointment.create')}}" class="nav-link "> <span class="title">Book Appointment</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('appointment.index')}}" class="nav-link "> <span class="title">View All Appointment</span>
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
