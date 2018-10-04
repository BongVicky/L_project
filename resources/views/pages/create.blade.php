@extends('main')

@section('title', ' Leave Form')

@section('content')

    <div class="col-md-10">

        <h4>Vacation/Leave Request Form</h4>
        <br>
        <div class="card">
            <div class="card-body">

                <form method="post" action="{{ url('attendances') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" >

                        <div class="form-group" >
                            <label style="padding-right: 10px" class="form-inline" for="Name">Name : </label>
                            <select name="emp_id" id="emp_id" style="width: 100%" class="form-control">
                                @foreach($employees as $values)
                                    <option value="{{ $values->id }}">{{ $values->firstname }}&nbsp;{{ $values->lastname }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="leave_date">Leave Date : </label>
                        <input type="text" class="form-control date datepicker" name="leave_date" id="leave_date" required>
                    </div>
                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="return_date">Return Date : </label>
                        <input type="text" class="form-control date datepicker" name="return_date" id="return_date" required>
                    </div>


                    <div class="form-group form-inline">
                        <label style="padding-right: 10px" for="numday">Number of Day(s) : </label>
                        <input style="margin-right: 10px" type="text" id="numday" class="form-control" placeholder="Number of Day(s)" name="numday" required>

                        <label style="padding-right: 10px" for="Leave_type">Leave Type : </label>
                        <select class="form-control" name="leave_type" required>
                            <option value="Casual leave">Casual Leave</option>
                            <option value="Sick Leave">Sick Leave</option>
                            <option value="Unpaid Leave">Unpaid Leave</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="reason">Reason : </label>
                        <textarea class="form-control" name="reason" id="reason" required></textarea>
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