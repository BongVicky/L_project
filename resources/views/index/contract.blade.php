<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index2 Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Employee ID</th>
            <th>Salary</th>
            <th>From date</th>
            <th>To date</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($contracts as $contract)
            @php
                $date=date('Y-m-d', $contract['date']);
            @endphp
            <tr>
                <td>{{$contract['emp_id']}}</td>
                <td>{{$contract['salary']}} $$</td>
                <td>{{$contract['from_date']}}</td>
                <td>{{$contract['to_date']}}</td>


                <td><a href="{{action('ContractsController@edit', $contract['id'])}}" class="btn btn-warning">Edit</a></td>
                <td onclick="Do you want to delete this?">
                    <form action="{{action('ContractsController@destroy', $contract['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>