@extends('main')

@section('title',' Add New' )


@section('content')

    <div class="col-md-10">

        <h4>Add New Employee</h4>
        <br>
        <div class="card">
            <div class="card-body">

                <form>
                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline">Name : </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Email address : </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group form-inline">
                        <label style="padding-right: 10px">Phone Number : </label>
                        <input style="margin-right: 10px" type="tel" class="form-control" placeholder="Phone Number">

                        <label style="padding-right: 10px">Employee ID : </label>
                        <input type="tel" class="form-control" placeholder="Employee ID">
                    </div>
                    <div class="form-group form-inline">
                        <label style="padding-right: 10px">Join Date : </label>
                        <input style="margin-right: 10px" type="tel" class="form-control" placeholder="Join Date">

                        <label style="padding-right: 10px">Role : </label>
                        <input type="tel" class="form-control" placeholder="Role">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="cancel" class="btn btn-secondary">Cancel</button>
                    </div>

                </form>

            </div>
        </div>

    </div>
@endsection