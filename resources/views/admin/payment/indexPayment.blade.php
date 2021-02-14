@extends('layout.master')

@if (Auth::user()&&Auth::user()->role_id ==1) {
@section('sidebar')

    <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true"
        data-slide-speed="200" style="padding-top: 20px">


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
                    <a href="{{route('prescription.create')}}" class="nav-link "> <span class="title">Add Prescription</span>
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


}@elseif((Auth::user()&&Auth::user()->role_id ==3))
    {
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
@endif






@section('cssHeader')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection



@section('content')

    <div class="row">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Payment List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="master">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>

                    </li>
                    <li class="active">Payment List</li>
                </ol>
            </div>
        </div>
        <div class="col-md-12">
            <div class="tabbable-line">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab"> List View </a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab"> Grid View </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active fontawesome-demo" id="tab1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-topline-red">
                                    <div class="card-head">
                                        <header></header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="btn-group">

                                                    {{--                                                    <div class="col">--}}
                                                    {{--                                                        <a class="btn btn-info" href="{{ url('payment/create') }}">Add P<i class="fa fa-plus"></i></a>--}}
                                                    {{--                                                    </div>--}}

<br>
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

                                        <div class="uper">
                                            @if(session()->get('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div><br/>
                                            @endif
                                            <table class="table patient">
                                                <thead>
                                                <tr>
                                                    <td>ID</td>
                                                    <td>Name Patient</td>
                                                    <td>Name Doctor</td>
                                                    <td>Total Amount</td>
                                                    <td>Payments</td>
                                                    <td>Remaining Amount</td>
                                                    <td>Date And TIme Of Payment</td>
                                                    <td>Action</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($payment as $payments)
                                                    <tr>
                                                        <td>{{$payments->id}}</td>
                                                        <td name="patient_id">
                                                         {{$payments->patients->name}}</a>
                                                        </td>

                                                        <td name="doctor_id">
                                                            {{$payments->doctors->name}}
                                                        </td>
                                                        <td>{{$payments->total_Amount}}</td>
                                                        <td>{{$payments->first_Amount}}</td>
                                                        <td>{{$payments->remaining_Amount}}</td>
                                                        <td>{{$payments->time_of_payment}}</td>

                                                        <td>

                                                            <a href="{{route('payment.edit',$payments->id)}}"
                                                               class="btn btn-primary btn-xs fa fa-pencil">

                                                            </a>
                                                            <a>
                                                                <a href="{{route('payment.edit',$payments->id)}}"
                                                                   class="btn btn-success btn-xs fa fa-print">
                                                            </a>

                                                            <form
                                                                action="{{ route('payment.destroy', $payments->id)}}"
                                                                method="post" style="display: inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-xs fa fa-trash-o "
                                                                        type="submit"></button>
                                                            </form>

                                                        </td>

{{--                                                        <td>--}}

{{--                                                            <a href="{{route('payment.edit',$payments->id)}}"--}}
{{--                                                               class="btn btn-primary btn-xs fa fa-pencil"></a>--}}

{{--                                                            <a href="{{route('payment.show',$payments->id)}}"--}}
{{--                                                               class="btn btn-dark btn-xs fa fa-eye"></a>--}}

{{--                                                            <a href="{{route('createPayment',$payments->patients->id)}}"--}}
{{--                                                               class="btn btn-dark btn-xs fa fa-dollar"></a>--}}

{{--                                                            <form--}}
{{--                                                                action="{{ route('payment.destroy', $payments->id)}}"--}}
{{--                                                                method="post">--}}
{{--                                                                @csrf--}}
{{--                                                                @method('DELETE')--}}
{{--                                                                <button class="btn btn-danger btn-xs fa fa-trash-o "--}}
{{--                                                                        type="submit"></button>--}}
{{--                                                            </form>--}}

{{--                                                        </td>--}}

                                                @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jsFooter')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.payments').DataTable();
        });
    </script>
@endsection

