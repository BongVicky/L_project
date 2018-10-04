@extends('main')

@section('title', ' Employees List')
@section('content')

    {{--To view all employees info--}}

    <div class="col-md-10">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif

                <h5>Employees List</h5>

            <div class="form-group form-inline">
                <a href="{{action('EmployeeController@create')}}" class="form-inline">
                    <button style="margin-right: 10px" class="btn btn-primary" type="submit" style="margin-bottom: 10px">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </button>
                </a>
                <br>

                {{-- Status filter --}}
                <select style="padding-right: 10px"  class="form-control" id="status-select">
                    <option disabled selected>Filter by status</option>
                    <option value="Working">Working</option>
                    <option value="Resign">Resign</option>
                    <option value="Left">Left</option>
                </select>
            </div>



                {{--{{action('employees.createEmp')}}--}}
                <table class="table"  id="table_id">



                    <thead class="thead-dark">
                    <tr>
                        <th scope="">#</th>
                        <th scope="">Name</th>
                        <th scope="">Gender</th>
                        <th scope="">Email</th>
                        <th scope="">Position</th>
                        <th scope="">Action</th>
                    </tr>
                    </thead>

                    <tbody class="employee-table-body">


                    <?php
                    $i=1;
                    ?>
                    @foreach($employees as $employee)
                        @php
                            $date=date('Y-m-d', $employee['date']);
                        @endphp

                        <tr class="">
                            <td class="index-column">{{$i}}</td>
                            <?php
                            $i++;
                            ?>
                            <td>{{$employee['firstname']}} {{$employee['lastname']}}</td>
                            @if ($employee->gender == 1)
                                <td>Male</td>
                            @else
                                <td>Female</td>
                            @endif
                            <td>{{$employee['email']}}</td>
                            <td>{{$employee['position']}}</td>
                            <td>

                                <a href="{{action('EmployeeController@show', $employee['id'])}}">
                                    <button class="btn btn-primary" type="submit">
                                      View
                                    </button>
                                </a>
                                  <a href="{{action('EmployeeController@edit', $employee['id'])}}">
                                    <button class="btn btn-primary" type="submit">
                                        Edit
                                    </button>
                                </a>

                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>



    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>


    <script>
        var employees = {!!$employees!!} ;

        $('#status-select').change(function(){
            $('tbody').children('tr').show();
            var i,j=1;
            for(i=0;i<employees.length;i++) {
                employee = employees[i];
                var row = $('tbody').children('tr').eq(i);
                if(employee.status !== $(this).val()) {
                    row.hide();
                }
                else {
                    row.children('.index-column').text(j);
                    j++;
                }
            }
        });
        function resetFiler() {
            for(i=0;i<employees.length;i++) {
                var row = $('tbody').children('tr').eq(i);
                row.children('.index-column').text(i+1);
            }
            $('tbody').children('tr').show();
        }
    </script>

@endsection
