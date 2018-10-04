@extends('main')

@section('title', ' Edit Leave Form')

@section('content')

    <div class="col-md-10">

        <h4>Edit Leave Request Form</h4>
        <br>
        <div class="card">
            <div class="card-body">
                <form method="post" action="/attendances/{{$id}}" enctype="multipart/form-data">

                    <input name="_method" type="hidden" value="PATCH">
                    @csrf
                    <div class="form-group form-inline">
                            <label style="padding-right: 10px" class="form-inline" for="Name">Name : </label>
                        {{ $attendance->emp->firstname}} {{ $attendance->emp->lastname}}
                    </div>
                    <div class="form-group form-inline">
                        <label style="padding-right: 10px">Employee ID : </label>
                        {{$attendance->emp->id}}
                    </div>
                    <div class="form-group form-inline">
                        <label style="padding-right: 10px" >Status : </label>
                        @if ($attendance['status'] == '1')
                            <td>Approved</td>
                        @elseif($attendance['status'] == '0')
                            <td>Declined</td>
                        @else
                            <td>Pending</td>

                        @endif
                    </div>
                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="leave_date">Leave Date : </label>
                        <input type="text" class="form-control date datepicker" value="{{$attendance->leave_date}}" name="leave_date" required>
                    </div>


                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="return_date">Return Date : </label>
                        <input type="text" class="form-control date datepicker" value="{{$attendance->return_date}}" name="return_date" required>
                    </div>
                    <div class="form-group form-inline">
                        <label style="padding-right: 10px" for="numday">Number of Day(s) : </label>
                        <input style="margin-right: 10px" type="text" class="form-control" placeholder="Number of Day(s)" value="{{$attendance->numday}}" name="numday" required>

                        <label style="padding-right: 10px" for="Leave_type">Leave Type : </label>
                        <select class="form-control" name="leave_type" required>
                            <option value="Casual Leave" @if($attendance->leave_type == "Casual Leave") selected @endif>Casual Leave</option>
                            <option value="Sick Leave" @if($attendance->leave_type == "Sick Leave") selected @endif>Sick Leave</option>
                            <option value="Unpaid Leave" @if($attendance->leave_type == "Unpaid Leave") selected @endif>Unpaid Leave</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="reason">Reason : </label>
                        <textarea class="form-control" name="reason" required>{{$attendance->reason}}</textarea>
                        
                    </div>
                    <div class="text-right">


                        <button type="submit" class="btn btn-primary" value="1" name="status">Approve</button>
                        <button type="submit" class="btn btn-danger" value="0" name="status">Decline</button>

                        <a  href="{{ URL::to( '/attendances') }}" class="btn btn-secondary">Cancel</a>


                    </div>

                </form>

            </div>
        </div>

    </div>


@endsection