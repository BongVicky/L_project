<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cron Page</title>
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

            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($crons as $cron)

            <tr>
                <td>{{$cron['contract_id']}}</td>
                <td>{{$cron['send']}}</td>
                <td><a href="{{action('CronsController@edit', $cron['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('CronsController@destroy', $cron['id'])}}" method="post">
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