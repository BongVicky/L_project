<div class="col-md-12" style="padding-right: 45px;">
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br/>
    @endif
    <div class="card">
        <div class="card-body">
            <h3>LEAVE</h3>
            <?php
            $i = 1;
            ?>
            <a href="{{action('RequestsController@create')}}">
                <button class="btn btn-primary float-right" type="submit" style="margin-bottom: 10px; width: 243px;">
                    <i class="fa fa-plus" aria-hidden="true"></i> Request new leave
                </button>
            </a>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="">No</th>
                    <th scope="">Name</th>
                    <th scope="">Leave Date</th>
                    <th scope="">Leave Type</th>
                    <th scope="">Reason</th>
                </tr>
                </thead>
                <tbody>
                @foreach($requests as $request)
                    @php
                        $date=date('Y-m-d', $request['date']);
                    @endphp
                    <tr class="">
                        <th scope="row">
                            {{$i}}
                            <?php
                            $i++;
                            ?>
                        </th>
                        <td>{{ Auth::user()->employee->first_name }} {{ Auth::user()->employee->last_name }}</td>
                        <td>{{$request['leave_date']}}</td>
                        <td>{{$request['leave_type']}}</td>
                        <td>{{$request['reason']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>