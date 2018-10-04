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
                <th scope="">From Date</th>
                <th scope="">To Date</th>
                <th scope="">Action</th>


            </tr>
            </thead>
            <tbody>
            <?php
            $i=0;
            ?>
            @foreach($contracts as $contract)
                @php
                    $date=date('Y-m-d', $contract['date']);
                @endphp
                <tr class="">
                    <td>{{++$i}}</td>
                    <td>{{$contract->employee->firstname}} {{$contract->employee->lastname}}</td>
                    <td>${{$contract['salary']}}</td>
                    <td>{{$contract['from_date']}}</td>
                    <td>{{$contract['to_date']}}</td>

                    <td>

                        <a href="{{action('ContractsController@show', $contract['id'])}}">
                            <button class="btn btn-primary" type="submit">
                                View
                            </button>
                        </a>
                        <a href="{{action('ContractsController@edit', $contract['id'])}}">
                            <button class="btn btn-primary" type="submit">
                                Edit
                            </button>
                        </a>

                        <form class="crud" action="{{action('ContractsController@destroy', $contract['id'])}}" method="post">

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