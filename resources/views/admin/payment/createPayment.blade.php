@extends('layout.master')

@if (Auth::user()&&Auth::user()->role_id ==1) {
@section('sidebar')





<ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200"
    style="padding-top: 20px">

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
                <a href="{{url('schedule')}}" class="nav-link "> <span class="title">Doctor Schedule</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('appointment.create')}}" class="nav-link "> <span class="title">Book Appointment</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('appointment.index')}}" class="nav-link "> <span class="title">View All
                        Appointment</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item  ">
        <a href="#" class="nav-link nav-toggle"><i class="fa fa-book"></i>
            <span class="title">Users</span><span class="arrow"></span></a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="{{route('user.create')}}" class="nav-link "> <span class="title">New User</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="{{route('user.index')}}" class="nav-link "> <span class="title">All User</span>
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
                <a href="{{route('patient.index')}}" class="nav-link "> <span class="title">All Patients</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('patient.create')}}" class="nav-link "> <span class="title">Add Patient</span>
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
                <a href="{{route('prescription.index')}}"> <span class="title">All Prescription</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('prescription.create')}}" class="nav-link "> <span class="title">Add
                        Prescription</span>
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
                <a href="{{route('payment.create')}}" class="nav-link "> <span class="title">Add Payments</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('payment.index')}}" class="nav-link "> <span class="title">Payments</span>
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



<ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200"
    style="padding-top: 20px">


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
                <a href="{{url('schedule')}}" class="nav-link "> <span class="title">Doctor Schedule</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('appointment.create')}}" class="nav-link "> <span class="title">Book Appointment</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('appointment.index')}}" class="nav-link "> <span class="title">View All
                        Appointment</span>
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
                <a href="{{route('patient.index')}}" class="nav-link "> <span class="title">All Patients</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('patient.create')}}" class="nav-link "> <span class="title">Add Patient</span>
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
                <a href="{{route('payment.create')}}" class="nav-link "> <span class="title">Add Payments</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('payment.index')}}" class="nav-link "> <span class="title">Payments</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="" class="nav-link "> <span class="title">Patient Invoice</span>
                </a>
            </li>
        </ul>
    </li>

</ul>
}
@endsection
@endif


@section('content')
<div class="card uper">
    <div class="card-header">
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;Add Payment
        </h1>

    </div>
    <div class="btn-group">

    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{route('payment.store')}}">
            @csrf
            <div class="form-group" style="width:350px;">
                <label for="status">Patient</label>
                <select name="patient_id" id="patient_select" class="form-control">
                    <option value="-1">Select Patient</option>
                    @foreach($allpatient as $patintes)
                    <option value="{{ $patintes->id }}">{{ $patintes->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group" style="width:350px;">
                <label for="doctor_id">Doctors</label>
                <select name="doctor_id" id="doctor_select" class="form-control">
                    <option value="-1">Select Doctor</option>
                    @foreach($alldoctor as $doctors)
                    <option value="{{ $doctors->id }}">{{ $doctors->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group" style="width:350px;">
                <label for="total_Amount">Total Amount</label>
                <input type="number" class="form-control" name="total_Amount" />
            </div>

            <div class="form-group" style="width:350px;">
                <label for="first_Amount">First Amount</label>
                <input type="number" class="form-control" name="first_Amount" />
            </div>
            <div class="form-group" style="width:350px;">
                <label for="date_Of_Payment">Date and time Of Payment</label>
                <input type="datetime-local" class="form-control" name="time_of_payment" />
            </div>


            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection