<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
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
            <th>ID</th>
            <th>First name</th>
            <th>last name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Number</th>
            <th>Birth date</th>
            <th>Hire date</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($employees as $employee)
            @php
                $date=date('Y-m-d', $employee['date']);
            @endphp
            <tr>
                <td>{{$employee['id']}}</td>
                <td>{{$employee['first_name']}}</td>
                <td>{{$employee['last_name']}}</td>
                <td>{{$employee['gender']}}</td>
                <td>{{$employee['email']}}</td>
                <td>{{$employee['number']}}</td>
                <td>{{$employee['dob']}}</td>
                <td>{{$employee['hire_date']}}</td>


                <td><a href="{{action('EmployeesController@edit', $employee['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('EmployeesController@destroy', $employee['id'])}}" method="post">
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