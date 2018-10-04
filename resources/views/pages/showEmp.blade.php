@extends('main')

@section('title', ' Employee Information')

@section('content')

    <div class="col-md-10">


        <div class="card">
            <div class="card-body">

                <h5>{{$employee->firstname}} {{$employee->lastname}}</h5>
                <h6>Employee ID: {{$employee->id}}</h6>
                <p><b>Total Annual Leave : </b>18 days</p>
                <hr>

                <p><b>Date of Birth : </b>{{$employee->dob}}</p>
                <p><b>Gender : </b> @if ($employee->gender == 1)
                        Male
                    @else
                        Female
                    @endif
                </p>
                <p><b>Phone Number : </b>{{$employee->number}}</p>
                <p><b>Email : </b>{{$employee->email}}</p>
                <p><b>Position : </b>{{$employee->position}}</p>
                <p><b>Monthly Leave : </b>{{$employee->monthly_leave}}</p>
                <p><b>Hire Date : </b>{{$employee->hire_date}}</p>
                <p><b>Status : </b>{{$employee->status}}</p>
                <h5>Leave History</h5>
                <?php
                $i = 0;
                ?>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="">#</th>
                        <th scope="">Name</th>
                        <th scope="">Leave Type</th>
                        <th scope="">Date</th>
                        <th scope="">Reason</th>

                    </tr>
                    </thead>

                    @foreach($attendances as $attendance)
                        <tbody>

                        <tr class="">
                            <th scope="row">

                                {{++$i}}
                            </th>

                            <td>{{$employee->firstname}} {{$employee->lastname}}</td>
                            <td>{{$attendance->leave_type}}</td>
                            <td>{{$attendance->leave_date}} to {{$attendance->return_date}}</td>
                            <td>{{$attendance->reason}}</td>

                        </tr>

                        </tbody>
                    @endforeach

                </table>

                <br>
                <hr>
                <br>
                <h5>Contract History</h5>

                <?php
                $i = 0;
                ?>
                <table class="table" id="">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="">#</th>
                        <th scope="">Name</th>
                        <th scope="">Salary</th>
                        <th scope="">Hire Date</th>
                        <th scope="">Expire Date</th>


                    </tr>
                    </thead>

                    @foreach($contracts as $contract)
                    <tbody>

                    <tr class="">
                        <th scope="row">

                            {{++$i}}
                        </th>

                        <td>{{$employee->firstname}} {{$employee->lastname}}</td>
                        <td>$ {{$contract->salary}}</td>
                        <td>{{$contract->from_date}}</td>
                        <td>{{$contract->to_date}}</td>



                    </tr>

                    </tbody>
                    @endforeach
                </table>

                <hr>
                <div class="col-md-12 text-right">
                    <a href="{{action('EmployeeController@index')}}">
                        <button class="btn btn-primary text-right" type="submit">
                            Back
                        </button>
                    </a>
                </div>


            </div>
        </div>

    </div>

@endsection