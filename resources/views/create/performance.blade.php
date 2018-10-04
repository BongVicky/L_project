@extends('main')
@section('title', 'Performances')
@section('content')
    <div class="col-md-10">
        <h2> Performance System </h2>
        <form method="post" action="{{url('performances')}}" enctype="multipart/form-data">
            @csrf
            <table class="table">
                <thead class="thead-dark">
                <tr class="widthh">
                    <th scope="">Employee</th>
                    <th scope="">Job Knowledge</th>
                    <th scope="">Work Quality</th>
                    <th scope="">Attendance</th>
                    <th scope="">Communication and Listening</th>
                    <th scope="">Dependability</th>
                    <th scope="">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="widthh">
                    <td>
                        <select name="emp_id" id="emp_id" style="width: 100%" class="form-control">
                            @foreach($employees as $values)
                                <option value="{{ $values->id }}">{{ $values->first_name }}&nbsp;{{ $values->last_name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="job_knowledge" class="form-control">
                            <option value="null"> default</option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                        </select>
                    </td>
                    <td>
                        <select name="work_quality" class="form-control">
                            <option value="null"> default</option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                        </select>
                    </td>
                    <td>
                        <select name="attendance" class="form-control">
                            <option value="null"> default</option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                        </select>
                    </td>
                    <td>
                        <select name="com_listen" class="form-control">
                            <option value="null"> default</option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                        </select>
                    </td>
                    <td>
                        <select name="dependability" class="form-control">
                            <option value="null"> default</option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                        </select>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-warning">Create</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection