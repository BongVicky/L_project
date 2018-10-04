@extends('main')

@section('title', ' Company Information')

@section('content')

    <div class="col-md-10">

        <h4>New Employee</h4>
        <br>
        <div class="card">
            <div class="card-body">

                <form method="post" action="{{url('/companies')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group" >

                        <label style="padding-right: 10px" class="form-inline" for="Filename">Filename<sup style="color: red">*</sup> : </label>
                        <input type="file" name="image" value="{{asset('images/'.$company->filename)}}"/>
                        {{--<input type="file" name="filename" value="{{asset('images/'.$company->filename)}}" required>--}}

                    </div>
                    <div class="form-group" >
                        <label style="padding-right: 10px" class="form-inline" for="Name">Name<sup style="color: red">*</sup> : </label>
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{$company->name}}" required>

                    </div>
                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="Description">Description<sup style="color: red">*</sup> : </label>
                        <textarea class="form-control" name="description" required>{{$company->Description}}</textarea>
                    </div>
                    <div class="form-group" >
                        <label style="padding-right: 10px" class="form-inline" for="Address">Address<sup style="color: red">*</sup> : </label>
                        <input type="text" class="form-control" name="address" value="{{$company->address}}" required>

                    </div>
                    <div class="form-group" >
                        <label style="padding-right: 10px" class="form-inline" for="Phone">Telephone<sup style="color: red">*</sup> : </label>
                        <input type="text" class="form-control" name="phone" value="{{$company->phone}}" required>
                    </div>
                    <div class="form-group" >
                        <label style="padding-right: 10px" class="form-inline" for="Email">Email<sup style="color: red">*</sup> : </label>
                        <input type="text" class="form-control" name="email" value="{{$company->email}}" required>
                    </div>
                    <div class="form-group" >
                        <label style="padding-right: 10px" class="form-inline" for="Website">Website<sup style="color: red">*</sup> : </label>
                        <input type="text" class="form-control" name="website" value="{{$company->website}}"  required>
                    </div>
                    <div class="form-group" >
                        <label style="padding-right: 10px" class="form-inline" for="f_link">Facebook Link<sup style="color: red">*</sup> : </label>
                        <input type="text" class="form-control" name="f_link" value="{{$company->f_link}}" required>
                    </div>
                    <div class="form-group" >
                        <label style="padding-right: 10px" class="form-inline" for="linkedin_link">Linked-In Link<sup style="color: red">*</sup> : </label>
                        <input type="text" class="form-control" name="linkedin_link" value="{{$company->linkedin_link}}" required>
                    </div>

                    <div class="text-right">

                        <button type="submit" class="btn btn-primary">Submit</button>

                        <a href="{{url('companies')}}" class="btn btn-secondary">Cancel</a>


                    </div>

                </form>

            </div>
        </div>

    </div>


@endsection