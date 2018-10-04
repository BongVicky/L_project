@extends('partial.main')
@section('navheader')
    @include('partial.nav')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <fieldset class="box">
                <legend align="center"><h1>Annual leave application form</h1></legend>
                <div class="jumbotron">
                    <p>This form is for employees to use to apply to take annual leave.</p>
                    <blockquote style="border-left: 3px solid #333333;">
                        <p>- Employee has 18 days for year for their annual leave</p>
                        <p>- More information</p>
                    </blockquote>
                    <p>For more information about this application, please contact directly to HR department</p>
                </div>
                <hr>
                <h2> Employee's detail</h2>
                <br>
                <form method="post" action="{{url('profile')}}" enctype="multipart/form-data" style="font-size: 20px;">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="name">Employee Name: </label>
                        </div>
                        <div class="col-md-8">
                            <strong>
                                {{ Auth::user()->employee->first_name }} {{ Auth::user()->employee->last_name }}
                            </strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="position">Position: </label>
                        </div>
                        <div class="col-md-8">
                            <strong>
                                {{ Auth::user()->employee->position }}
                            </strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="number">Mobile Phone: </label>
                        </div>
                        <div class="col-md-8">
                            <strong>
                                {{ Auth::user()->employee->number}}
                            </strong>
                        </div>
                    </div>
                    <hr>
                    <h2> Leave type</h2>
                    <br>
                    <div class="row">
                        <div class="col-md-1">
                            <label for="from_date">From:</label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control date datepicker" name="leave_date">
                        </div>
                        <div class="col-md-1">
                            <label for="to_date">To: </label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control date" id="datepicker1" name="return_date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 table-responsive">
                            <label for="type">Leave Type: </label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="leave_type">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 table-responsive">
                            <label for="hour_off">Total number of leaving days: </label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="hour_off">
                        </div>
                    </div>
                    <hr>
                    <h2>Reason:</h2>
                    <br>
                    <textarea class="form-control" name="reason"></textarea>
                    <br>
                    <button type="submit" class="btn btn-success btn-block btn-lg">Request</button>
                </form>
            </fieldset>
        </div>
    </div>
    <script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
        $('#datepicker1').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
    </script>
@endsection