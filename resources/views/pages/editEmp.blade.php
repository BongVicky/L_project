@extends('main')

@section('title', ' Employee Info')

@section('content')

    <div class="col-md-10">

        <h4>Edit Employee</h4>
        <br>
        <div class="card">
            <div class="card-body">
                <form method="post" action="/employees/{{$id}}" enctype="multipart/form-data">

                    <input name="_method" type="hidden" value="PATCH">
                    @csrf
                    <div class="form-group form-inline" >

                        <label style="padding-right: 1%" class="form-inline" for="Firstname">First name<sup style="color: red">*</sup>  : </label>
                        <input style="width: 85%" type="text" class="form-control" placeholder="Firstname" name="firstname" value="{{$employee->firstname}}" required>

                    </div>
                    <div class="form-group form-inline">
                        <label style="padding-right:1%" class="form-inline" for="Lastname">Last name<sup style="color: red">*</sup> : </label>
                        <input style="width: 85%" type="text" class="form-control" placeholder="Lastname" name="lastname" value="{{$employee->lastname}}" required>

                    </div>
                    <div class="form-group form-inline" >
                        <label style="padding-right: 4.5%" class="form-inline" for="Email">Email<sup style="color: red">*</sup> : </label>
                        <input style="width: 85%" type="email" class="form-control" placeholder="Email" name="email" value="{{$employee->email}}" required>

                    </div>
                    <div class="form-group form-inline" >
                        <label style="padding-right: 4.5%" class="form-inline" for="Phone">Phone<sup style="color: red">*</sup> : </label>
                        <input style="width: 85%" type="text" class="form-control" placeholder="Phone Number" name="number" value="{{$employee->number}}" required>

                    </div>

                    <div class="form-group form-inline">
                        <label style="padding-right: 3%" for="Position">Position<sup style="color: red">*</sup> : </label>
                        <select class="form-control" name="position" style="margin-right: 10%" required>
                            <option value="Accountant"  @if($employee->position == "Accountant") selected @endif>Accountant</option>
                            <option value="Integration Specialist" @if($employee->position == "Integration Specialist") selected @endif>Integration Specialist</option>
                            <option value="Intern" @if($employee->position == "Intern") selected @endif>Intern</option>
                            <option value="Sales Assistant"  @if($employee->position == "Sales Assistant") selected @endif>Sales Assistant</option>
                            <option value="Senior Javascript Developer"  @if($employee->position == "Senior Javascript Developer") selected @endif>Senior Javascript Developer</option>
                            <option value="Software Engineer"  @if($employee->position == "Software Engineer") selected @endif>Software Engineer</option>
                            <option value="Team Leader"  @if($employee->position == "Team Leader") selected @endif>Team Leader</option>
                        </select>
                        <label style="padding-right: 10px" for="Leave_type">Gender<sup style="color: red">*</sup> : </label>
                        <select class="form-control" name="gender" value="{{$employee->gender}}" required>
                            <option value="1" @if($employee->gender == "1") selected @endif >Male</option>
                            <option value="0" @if($employee->gender == "0") selected @endif >Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="dob">Date of Birth<sup style="color: red">*</sup> : </label>
                        <input type="text" class="form-control date datepicker" name="dob" value="{{$employee->dob}}" required>
                    </div>

                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="hire_date">Hire Date<sup style="color: red">*</sup> : </label>
                        <input type="text" class="form-control date datepicker" name="hire_date" value="{{$employee->hire_date}}" required>
                    </div>
                    <div class="form-group ">
                        <label style="padding-right: 10px" class="form-inline" for="monthly_leave">Monthly Leave<sup style="color: red">*</sup> : </label>
                        <input style="margin-right: 10px" type="text" class="form-control" placeholder="" value="{{$employee->monthly_leave}}" name="monthly_leave" required>
                    </div>
                    <div class="form-group">
                        <label style="padding-right: 3%" for="Status">Status<sup style="color: red">*</sup> : </label>
                        <select class="form-control" name="status" style="margin-right: 10%" required>
                            <option value="Working"  @if($employee->status == "Working") selected @endif>Working</option>
                            <option value="Left"  @if($employee->status == "Left") selected @endif>Left</option>
                            <option value="Resign"  @if($employee->status == "Resign") selected @endif>Resign</option>
                        </select>
                    </div>
                    <hr>

                    <div class="text-right">

                        <button type="submit" class="btn btn-primary">Update</button>

                        <a href="{{ URL::to( '/employees') }}" class="btn btn-secondary">Cancel</a>


                    </div>


                </form>

            </div>
        </div>

    </div>


@endsection