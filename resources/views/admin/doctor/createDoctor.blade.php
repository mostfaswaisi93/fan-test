@extends('layout.master')
@section('content')

           <div class="card uper">
            <div class="card-header">
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;Add Doctor </h1>
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
                <form method="post" action="{{route('doctor.store') }}" enctype="multipart/form-data">

                    <div class="form-group" style="width:350px;">
                        @csrf
                        <label for="name"> Name:</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="form-group" style="width:350px;">
                        <label for="price">Surname:</label>
                        <input type="text" class="form-control" name="surname"/>
                    </div>

                    <div class="form-group" style="width:350px;">
                        <label for="quantity">Email:</label>
                        <input type="email" class="form-control" name="email"/>
                    </div>
                    <div class="form-group" style="width:350px;">
                        <label for="quantity">Aderss</label>
                        <input type="text" class="form-control" name="aderss"/>
                    </div>

                    <div class="form-group" style="width:350px;">
                        <label for="quantity">Specialization:</label>
                        <input type="text" class="form-control" name="specialization"/>
                    </div>

                    <div class="form-group" style="width:350px;">
                        <label for="quantity">Qualification:</label>
                        <input type="text" class="form-control" name="qualification"/>
                    </div>

                    <div class="form-group" style="width:350px;">
                        <label for="quantity">Phone:</label>
                        <input type="number" class="form-control" name="phone"/>
                    </div>

                    <div class="form-group" style="width:350px;">
                        <label for="DOB">Date of Barth:</label>
                        <input type="date" class="form-control" name="DOB"/>
                    </div>



                    <div class="form-group" style="width:350px;">
                        <label for="photo">Photo:</label>
                        <input type="file" class="form-control" name="photo" multiple/>
                    </div>

                    <div class="form-group" style="width:350px;">
                        <label for="gender">Gender</label>

                        <select id="gender"  class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender">
                            <option value="-1">Choose Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>

                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>

            </div>
        </div>

@endsection
