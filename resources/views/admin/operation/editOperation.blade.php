{{--    <div class="card uper">--}}
{{--        <div class="card-header">--}}
{{--            <h1 >&nbsp;&nbsp;&nbsp;&nbsp;Edit Doctor </h1>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div><br />--}}
{{--            @endif--}}
{{--                          <form method="Post" action="{{ route('doctor.update', $doctor->id) }}">--}}
{{--                              @csrf--}}
{{--                              @method('PUT')--}}
{{--                <div class="form-group" style="width:350px;">--}}
{{--                    <label for="name"> Name:</label>--}}
{{--                    <input type="text"--}}
{{--                           class="form-control"--}}
{{--                           name="name"--}}
{{--                           value="{{$doctor->name}}"--}}
{{--                           id="name"--}}
{{--                                           />--}}
{{--                </div>--}}
{{--                <div class="form-group" style="width:350px;">--}}
{{--                    <label for="price">Surname:</label>--}}
{{--                    <input type="text" class="form-control" name="surname"--}}
{{--                           value="{{$doctor->surname}}"--}}
{{--                           id="name"/>--}}
{{--                </div>--}}

{{--                <div class="form-group" style="width:350px;">--}}
{{--                    <label for="quantity">Email:</label>--}}
{{--                    <input type="email" class="form-control" name="email"--}}
{{--                           value="{{$doctor->email}}"--}}
{{--                           id="name"--}}
{{--                    />--}}
{{--                </div>--}}
{{--                <div class="form-group" style="width:350px;">--}}
{{--                    <label for="quantity">Aderss</label>--}}
{{--                    <input type="text" class="form-control" name="aderss"--}}
{{--                           value="{{$doctor->aderss}}"--}}
{{--                           id="name"--}}
{{--                    />--}}
{{--                </div>--}}

{{--                <div class="form-group" style="width:350px;">--}}
{{--                    <label for="quantity">Specialization:</label>--}}
{{--                    <input type="text" class="form-control" name="specialization"--}}
{{--                           value="{{$doctor->specialization}}"--}}
{{--                           id="name"/>--}}
{{--                </div>--}}

{{--                <div class="form-group" style="width:350px;">--}}
{{--                    <label for="quantity">Qualification:</label>--}}
{{--                    <input type="text" class="form-control" name="qualification"--}}
{{--                           value="{{$doctor->qualification}}"--}}
{{--                           id="name"/>--}}
{{--                </div>--}}

{{--                <div class="form-group" style="width:350px;">--}}
{{--                    <label for="quantity">Phone:</label>--}}
{{--                    <input type="number" class="form-control" name="phone"--}}
{{--                           value="{{$doctor->phone}}"--}}
{{--                           id="name"--}}
{{--                    />--}}
{{--                </div>--}}

{{--                <div class="form-group" style="width:350px;">--}}
{{--                    <label for="DOB">Date of Barth:</label>--}}
{{--                    <input type="date" class="form-control" name="DOB"--}}
{{--                           value="{{$doctor->DOB}}"--}}
{{--                           id="name"/>--}}
{{--                </div>--}}

{{--                <div class="form-group" style="width:350px;">--}}
{{--                    <label for="DOB">Users:</label>--}}
{{--                    <input type="text" class="form-control" name="user_id"--}}
{{--                           value="{{$doctor->user_id}}"--}}
{{--                           id="name"/>--}}
{{--                </div>--}}


{{--                <div class="form-group" style="width:350px;">--}}
{{--                    <label for="gender">Gender:</label>--}}

{{--                    <input type="text" class="form-control" name="gender"--}}
{{--                           value="{{$doctor->gender}}"--}}
{{--                           id="name"/>--}}
{{--                    --}}{{--<select name="gender">--}}
{{--                    --}}{{--<option value="-1">Please select</option>--}}
{{--                    --}}{{--@foreach($gender as $genders)--}}

{{--                    --}}{{--<option  value="{{$genders->id}}">{{$genders->name}}</option>--}}

{{--                    --}}{{--</select>--}}


{{--                </div>--}}
{{--                <button type="submit" class="btn btn-primary">Update</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
@extends('layout.master')
@section('content')
<div class="card uper">
    <div class="card-header">
        <h2>Edit Operation
        </h2>

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
        <form method="post" action="{{ route('operation.update', $operation->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="status">Patient</label>
                <select name="patient_id" id="patient_select" class="form-control" enctype="multipart/form-data">
                    <option value="-1">Select Patient</option>
                    @foreach($allpatient as $patintes)
                    <option value="{{ $patintes->id }}">{{ $patintes->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="doctor_id">Doctors</label>
                <select name="doctor_id" id="doctor_select" class="form-control">
                    <option value="-1">Select Doctor</option>
                    @foreach($alldoctor as $doctors)
                    <option value="{{ $doctors->id }}">{{ $doctors->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="type_operate">Type Of Operation</label>
                <input type="text" class="form-control" name="type_operate" value="{{$operation->type_operate}}" />
            </div>

            <div class="form-group">
                <label for="photo_teeth">Photo Teeth</label>
                <input type="file" class="form-control" name="photo_teeth" multiple
                    value="{{$operation->photo_teeth}}" />
            </div>

            <div class="form-group">
                <label for="date_of_operate">Date Of Operation</label>
                <input type="date" class="form-control" name="date_of_operate"
                    value="{{$operation->date_of_operate}}" />
            </div>


            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection

@endsection