@extends('main')

@section('title', 'Holiday')

@section('content')
    <div class="col-md-10">
        <h4>Holidays</h4>
        <br>
        <div class="card">
            <div class="card-body">
                <h5>Holiday List</h5>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Day</th>
                        <th scope="col">Date</th>
                        <th scope="col">Holiday Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="text-danger">
                        <th scope="row">
                            1
                        </th>
                        <td>Friday</td>
                        <td>22/04/2018</td>
                        <td>Visak Bochea</td>
                    </tr>
                    <tr class="text-success">
                        <th scope="row">
                            2
                        </th>
                        <td>Monday</td>
                        <td>14/04/2018</td>
                        <td>Khmer New Year</td>
                    </tr>
                    <tr class="text-success">
                        <th scope="row">
                            3
                        </th>
                        <td>Tuesday</td>
                        <td>15/04/2018</td>
                        <td>Khmer New Year</td>

                    </tr>
                    <tr class="text-success">
                        <th scope="row">
                            4
                        </th>
                        <td>Wednesday</td>
                        <td>16/04/2018</td>
                        <td>Khmer New Year</td>

                    </tr>
                    <tr>
                        <th scope="row">
                            5
                        </th>
                        <td>Friday</td>
                        <td>21/05/2018</td>
                        <td>King Birthday</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            6
                        </th>
                        <td>Friday</td>
                        <td>01/06/2018</td>
                        <td>International Children Day</td>

                    </tr>
                    <tr>
                        <th scope="row">
                            7
                        </th>
                        <td>Wednesday</td>
                        <td>18/06/2018</td>
                        <td>Queen Birthday</td>

                    </tr>
                    <tr class="text-danger">
                        <th scope="row">
                            8
                        </th>
                        <td>Saturday</td>
                        <td>22/06/2018</td>
                        <td>Trump Birthday</td>

                    </tr>
                    <tr>
                        <th scope="row">
                            9
                        </th>
                        <td>Tuesday</td>
                        <td>14/07/2018</td>
                        <td>Lorem Ipsum</td>

                    </tr>
                    <tr>
                        <th scope="row">
                            10
                        </th>
                        <td>Thursday</td>
                        <td>21/08/2018</td>
                        <td>Serious Content</td>

                    </tr>
                    <tr>
                        <th scope="row">
                            11
                        </th>
                        <td>Monday</td>
                        <td>17/09/2018</td>
                        <td>Pchum Ben</td>

                    </tr>
                    <tr>
                        <th scope="row">
                            12
                        </th>
                        <td>Tuesday</td>
                        <td>18/09/2018</td>
                        <td>Pchum Ben</td>

                    </tr>
                    <tr>
                        <th scope="row">
                            13
                        </th>
                        <td>Wednesday</td>
                        <td>19/09/2018</td>
                        <td>Pchum Ben</td>

                    </tr>

                    <hr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>

@endsection