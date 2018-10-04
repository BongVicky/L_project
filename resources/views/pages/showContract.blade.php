@extends('main')

@section('title', ' Contract Information')

@section('content')

    <div class="col-md-10">


        <div class="card">
            <div class="card-body">

                <h5>{{ $contracts->employee->lastname}} {{ $contracts->employee->firstname}}</h5>
                <h6>Employee ID: {{ $contracts->employee->id}} </h6>
                <hr>
                <?php
                $i = 0;
                ?>
                <a href="{{action('ContractsController@create')}}">
                    <button class="btn btn-primary" type="submit" style="margin-bottom: 10px">
                        <i class="fa fa-plus" aria-hidden="true"></i> Renew Contract
                    </button>
                </a>

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


                        <tbody>

                        <tr class="">
                            <th scope="row">

                                {{++$i}}
                            </th>

                            <td>{{ $contracts->employee->lastname}} {{ $contracts->employee->firstname}}</td>
                            <td>{{ $contracts->salary}}</td>
                            <td>{{ $contracts->from_date}}</td>
                            <td>{{ $contracts->to_date}}</td>



                        </tr>

                        </tbody>
                </table>


                <div class="col-md-12 text-right">
                    <a href="{{action('ContractsController@index')}}">
                        <button class="btn btn-primary text-right" type="submit">
                            Back
                        </button>
                    </a>
                </div>


            </div>
        </div>

    </div>

@endsection