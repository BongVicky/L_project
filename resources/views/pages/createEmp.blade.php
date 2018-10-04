@extends('main')

@section('title', ' Employee Information')

@section('content')

    <div class="col-md-10">

        <h4>New Employee</h4>
        <br>
        <div class="card">
            <div class="card-body">

                <form method="post" action="{{url('employees')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group form-inline" >

                        <label style="padding-right: 1%" class="form-inline" for="Firstname">First name<sup style="color: red">*</sup>  : </label>
                        <input style="width: 85%" type="text" class="form-control" placeholder="Firstname" name="firstname" required>

                    </div>
                    <div class="form-group form-inline">
                        <label style="padding-right:1%" class="form-inline" for="Lastname">Last name<sup style="color: red">*</sup> : </label>
                        <input style="width: 85%" type="text" class="form-control" placeholder="Lastname" name="lastname" required>

                    </div>


                    <div class="form-group form-inline" >
                        <label style="padding-right: 4.5%" class="form-inline" for="Email">Email<sup style="color: red">*</sup>  : </label>
                        <input style="width: 85%" type="email" class="form-control" placeholder="Email" name="email" required>

                    </div>
                    <div class="form-group form-inline" >
                        <label style="padding-right: 4%" class="form-inline" for="Email">Phone<sup style="color: red">*</sup>  : </label>
                        <input style="width: 85%" type="text" class="form-control" placeholder="Phone Number" name="phone" required>

                    </div>
                    <div class="form-group form-inline">
                        <label style="padding-right: 3%" for="Position">Position<sup style="color: red">*</sup> : </label>
                        <select class="form-control" name="position" style="margin-right: 10%" required>
                            <option value="Accountant">Accountant</option>
                            <option value="Integration Specialist">Integration Specialist</option>
                            <option value="Intern">Intern</option>
                            <option value="Sales Assistant">Sales Assistant</option>
                            <option value="Senior Javascript Developer">Senior Javascript Developer</option>
                            <option value="Software Engineer">Software Engineer</option>
                            <option value="Team Leader">Team Leader</option>
                        </select>
                        <label style="padding-right: 10px" for="Gender">Gender<sup style="color: red">*</sup> : </label>
                        <select class="form-control" name="gender" required>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="dob">Date of Birth<sup style="color: red">*</sup> : </label>
                        <input type="text" class="form-control date datepicker" name="dob" required>
                    </div>

                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="hire_date">Hire Date<sup style="color: red">*</sup> : </label>
                        <input type="text" class="form-control date datepicker" name="hire_date" required>
                    </div>
                    <div class="form-group ">
                        <label style="padding-right: 10px" class="form-inline" for="hire_date">Monthly Leave<sup style="color: red">*</sup> : </label>
                        <input style="margin-right: 10px" type="text" class="form-control" placeholder="" name="monthly_leave" required>
                    </div>
                    <div class="form-group">
                        <label style="padding-right: 3%" for="Status">Status<sup style="color: red">*</sup> : </label>
                        <select class="form-control" name="status" style="margin-right: 10%" required>
                            <option value="Working">Working</option>
                            <option value="Left">Left</option>
                            <option value="Resign">Resign</option>
                        </select>
                    </div>


                    <div class="text-right">

                        <button type="submit" class="btn btn-primary">Submit</button>

                        <a href="{{url('/employees')}}"  class="btn btn-secondary">Cancel</a>


                    </div>

                </form>

            </div>
        </div>

    </div>


@endsection