@extends('main')

@section('title','Create Employee Performance')

@section('content')

    <div class="col-md-10">

        <h4>Create Employee's Performance</h4>
        <br>
        <div class="card">
            <div class="card-body">

                <form method="post" action="{{url('attendances')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" >
                        <label style="padding-right: 10px" class="form-inline" for="Name">Name : </label>
                        <input type="text" class="form-control" placeholder="Name" name="name" required>

                    </div>
                    <div class="form-group form-inline">
                        <label style="padding-right: 10px" for="id" for="ID">Employee ID : </label>
                        <input style="margin-right: 10px" type="tel" class="form-control" placeholder="ID" name="id" required>
                    </div>
                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="leave_date">Leave Date : </label>
                        <input type="text" class="form-control date datepicker" name="leave_date" required>
                    </div>
                    {{--<div class="row">--}}
                    {{--<div class="col-md-4"></div>--}}
                    {{--<div class="form-group col-md-4">--}}
                    {{--<strong>Date : </strong>--}}
                    {{--<input class="date form-control"  type="text" id="datepicker" name="date">--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="return_date">Return Date : </label>
                        <input type="text" class="form-control date datepicker" name="return_date" required>
                    </div>
                    <div class="form-group form-inline">
                        <label style="padding-right: 10px" for="numday">Number of Day(s) : </label>
                        <input style="margin-right: 10px" type="text" class="form-control" placeholder="Number of Day(s)" name="numberofday" required>

                        <label style="padding-right: 10px" for="Leave_type">Leave Type : </label>
                        <select class="form-control" name="leave_type" required>
                            <option value="Casual leave">Casual Leave</option>
                            <option value="Sick Leave">Sick Leave</option>
                            <option value="Unpaid Leave">Unpaid Leave</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="reason">Reason : </label>
                        <textarea class="form-control" name="reason" required></textarea>
                    </div>
                    <div class="text-right">

                        <button type="submit" class="btn btn-primary">Submit</button>

                        <button class="btn btn-secondary">Cancel</button>


                    </div>

                </form>

            </div>
        </div>

    </div>


@endsection