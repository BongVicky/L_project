@extends('main')

@section('title', ' Leave Request')
@section('content')

        {{--To view employees info and their annual leave--}}

        <div class="col-md-10">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
            @endif

                   <h5>Leaving Request</h5>
                <hr>
                <div class="form-group form-inline">
                    <a href="{{action('AttendanceController@create')}}">
                        <button style="margin-right: 10px"  class="btn btn-primary" type="submit" style="margin-bottom: 10px">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </button>
                    </a>
                    <br>

                    <label style="padding-right: 10px" for="Leave_type">Employee : </label>
                    <select style="padding-right: 10px"  name="emp_id" id="emp_id" class="form-control">
                        @foreach($employees as $values)
                            <option value="{{ $values->id }}">{{ $values->firstname }}&nbsp;{{ $values->lastname }}</option>
                        @endforeach
                    </select>
                </div>

                    <table class="table" id="table_id">

                        <thead class="thead-dark">
                        <tr>
                            <th scope="">#</th>
                            <th scope="">Name</th>
                            <th scope="">Leave Date</th>
                            <th scope="">Return Date</th>
                            <th scope="">Leave Type</th>
                            <th scope="">Reason</th>
                            <th scope="">Status</th>
                            <th scope="">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=0;
                        ?>
                        @foreach($attendances as $attendance)
                            @php
                                $date=date('Y-m-d', $attendance['date']);
                            @endphp
                        <tr class="">
                            <td>{{++$i}}</td>
                            <td>{{$attendance->emp->firstname}} {{$attendance->emp->lastname}}</td>
                            <td>{{$attendance['leave_date']}}</td>
                            <td>{{$attendance['return_date']}}</td>
                            <td>{{$attendance['leave_type']}}</td>
                            <td>{{$attendance['reason']}}</td>
                            @if ($attendance['status'] == '1')
                                <td>Approved</td>
                            @elseif($attendance['status'] == '0')
                                <td>Declined</td>
                            @else
                                <td>Pending</td>

                            @endif
                            <td>

                                <a href="{{action('AttendanceController@edit', $attendance['id'])}}">
                                    <button class="btn btn-primary" type="submit">
                                        View
                                    </button>
                                </a>

                                 <form class="crud" action="{{action('AttendanceController@destroy', $attendance['id'])}}" method="post">

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