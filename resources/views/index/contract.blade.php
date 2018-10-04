@extends('main')
@section('title', ' Contract List')
@section('content')
    <div class="col-md-10">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif

        <h5>Contract List</h5>

        <table class="table" id="table_id">
            <a href="{{action('ContractsController@create')}}">
                <button class="btn btn-primary" type="submit" style="margin-bottom: 10px">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </button>
            </a>
            <thead class="thead-dark">
            <tr>
                <th scope="">#</th>
                <th scope="">Name</th>
                <th scope="">Salary</th>
                <th scope="">Start Date</th>
                <th scope="">End Date</th>
                <th scope="">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i=0;
            ?>
            @foreach($contracts as $contract)
                <tr class="">
                    <td>{{++$i}}</td>
                    <td>{{$contract->first_name}} {{$contract->last_name}}</td>
                    <td>${{$contract->salary}}</td>
                    <td>{{$contract->from_date}}</td>
                    <td>{{$contract->to_date}}</td>

                    <td>

                        <a href="{{action('ContractsController@show', $contract->id)}}">
                            <button class="btn btn-primary" type="submit">
                                View
                            </button>
                        </a>
                        <a href="{{action('ContractsController@edit', $contract->id)}}">
                            <button class="btn btn-danger" type="submit">
                                Edit
                            </button>
                        </a>

                        <form class="crud" action="{{action('ContractsController@destroy', $contract->id)}}" method="post">
                            @csrf
                            <button onclick="return confirm('Are you sure you want to delete this item?');" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                Delete
                            </button>
                            <input name="_method" type="hidden" value="DELETE">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <br>
        <h5> 6 months or less </h5>
            <table class="table" id="table_id">
                <thead class="thead-dark">
                <tr>
                    <th scope="">#</th>
                    <th scope="">Name</th>
                    <th scope="">Salary</th>
                    <th scope="">End Date</th>
                    <th scope="">Status</th>
                    <th scope="">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i=0;
                ?>
                @foreach($crons as $cron)
                    <tr class="">
                        <td>{{++$i}}</td>
                        <td>{{$cron->first_name}} {{$cron->last_name}}</td>
                        <td>${{$cron->salary}}</td>
                        <td>{{$cron->to_date}}</td>
                        <td>Pending</td>
                        <td>
                            <a href="{{action('ContractsController@show', $contract->id)}}">
                                <button class="btn btn-primary" type="submit">
                                    View
                                </button>
                            </a>
                            <a href="{{action('ContractsController@edit', $contract->id)}}">
                                <button class="btn btn-danger" type="submit">
                                    Edit
                                </button>
                            </a>
                            <form class="crud" action="{{action('ContractsController@destroy', $contract->id)}}" method="post">
                                @csrf
                                    <button onclick="return confirm('Are you sure you want to delete this item?');" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                    Delete
                                </button>
                                <input name="_method" type="hidden" value="DELETE">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
    </div>


@endsection