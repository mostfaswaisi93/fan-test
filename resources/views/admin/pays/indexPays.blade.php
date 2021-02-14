@extends('layout.mastzer')


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
                                                    <td>Payments</td>
                                                    <td>Date And TIme Of Payment</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pays as $payments)
                                                    <tr>
                                                        <td>{{$payments->id}}</td>
                                                        <td name="patient_id">
                                                            <a href="{{$payments->patients}}">{{$payments->patients->name}}</a>
                                                        </td>


                                                        <td>{{$payments->pay}}</td>

                                                        <td>{{$payments->created_at}}</td>
                                                        <td>
                                                        </td>

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


