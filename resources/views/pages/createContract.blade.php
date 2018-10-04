@extends('main')

@section('title', ' Create Contract')

@section('content')

    <div class="col-md-10">

        <h4>New Contract</h4>
        <br>
        <div class="card">
            <div class="card-body">

                <form method="post" action="{{url('contracts')}}" enctype="multipart/form-data">
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
                        <label style="padding-right: 10px" class="form-inline" for="from_date">From Date<sup style="color: red">*</sup> : </label>
                        <input type="text" class="form-control date datepicker" name="from_date" required>
                    </div>

                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="to_date">To Date<sup style="color: red">*</sup> : </label>
                        <input type="text" class="form-control date datepicker" name="to_date" required>
                    </div>
                    <div class="form-group ">
                        <label style="padding-right: 10px" class="form-inline" for="salary">Salary<sup style="color: red">*</sup> : </label>
                        <input style="margin-right: 10px" type="text" class="form-control" placeholder="Salary" name="salary" required>
                    </div>

                    <div class="text-right">

                        <button type="submit" class="btn btn-primary">Submit</button>

                        <button href="" class="btn btn-secondary">Cancel</button>


                    </div>

                </form>

            </div>
        </div>

    </div>


@endsection