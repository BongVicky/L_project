@extends('main')

@section('title', ' Edit Contract Info')

@section('content')

    <div class="col-md-10">

        <h4>Edit Contract Form</h4>
        <br>
        <div class="card">
            <div class="card-body">
                <form method="post" action="/contracts/{{$id}}" enctype="multipart/form-data">

                    <input name="_method" type="hidden" value="PATCH">
                    @csrf
                    <div class="form-group form-inline">
                        <label style="padding-right: 10px" class="form-inline" for="Name">Name : </label>
                        {{ $contracts->employee->firstname}} {{ $contracts->employee->lastname}}
                    </div>
                    <div class="form-group form-inline">
                        <label style="padding-right: 10px">Employee ID : </label>
                        {{$contracts->employee->id}}
                    </div>

                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="from_date">From Date : </label>
                        <input type="text" class="form-control date datepicker" value="{{$contracts->from_date}}" name="from_date" required>
                    </div>


                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="to_date">To Date : </label>
                        <input type="text" class="form-control date datepicker" value="{{$contracts->to_date}}" name="to_date" required>
                    </div>
                    <div class="form-group">
                        <label style="padding-right: 10px" for="salary">Salary : </label>
                        <input style="margin-right: 10px" type="text" class="form-control" value="{{$contracts->salary}}" name="salary" required>
                    </div>



                    <div class="text-right">



                        <button type="submit" class="btn btn-primary">Submit</button>

                        <a  href="{{ URL::to( '/contracts') }}" class="btn btn-secondary">Cancel</a>


                    </div>

                </form>

            </div>
        </div>

    </div>


@endsection