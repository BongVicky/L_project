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
            <th>Job Knowledge</th>
            <th>Work Quality</th>
            <th>Attendance</th>
            <th>Communication and Listening</th>
            <th>Dependability</th>

            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($performances as $performance)
            <tr>
                <td>{{$performance['id']}}</td>
                echo $employee->id;
                <td>{{$performance['job_knowledge']}}</td>
                <td>{{$performance['work_quality']}}</td>
                <td>{{$performance['attendance']}}</td>
                <td>{{$performance['com_listen']}}</td>
                <td>{{$performance['dependability']}}</td>

                <td><a href="{{action('PerformancesController@edit', $performance['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('PerformancesController@destroy', $performance['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Job Knowledge</th>
            <th>Work Quality</th>
            <th>Attendance</th>
            <th>Communication and Listening</th>
            <th>Dependability</th>

            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        {{--@foreach($performances as $performance)--}}
            {{--<tr>--}}
                {{--<td>{{$performance['id']}}</td>--}}
                {{--<td>{{$employee['name']}}</td>--}}
                {{--<td>{{$performance['job_knowledge']}}</td>--}}
                {{--<td>{{$performance['work_quality']}}</td>--}}
                {{--<td>{{$performance['attendance']}}</td>--}}
                {{--<td>{{$performance['com_listen']}}</td>--}}
                {{--<td>{{$performance['dependability']}}</td>--}}

                {{--<td><a href="{{action('PerformancesController@edit', $performance['id'])}}" class="btn btn-warning">Edit</a></td>--}}
                {{--<td>--}}
                    {{--<form action="{{action('PerformancesController@destroy', $performance['id'])}}" method="post">--}}
                        {{--@csrf--}}
                        {{--<input name="_method" type="hidden" value="DELETE">--}}
                        {{--<button class="btn btn-danger" type="submit">Delete</button>--}}
                    {{--</form>--}}
                {{--</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        </tbody>
    </table>
</div>
</body>
</html>