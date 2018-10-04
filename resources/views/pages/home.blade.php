@extends('main')

@section('title', 'Homepage')

@section('content')
    <div class="col-md-10">

        <h4>Taskboard</h4>
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

                    <hr>
                    </tbody>
                </table>

            </div>
        </div>

        <br>
        <hr>
        <br>
        <div class="card">
            <div class="card-body">
                <h5>Employee Absence</h5>
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Avatar</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Number of Absence</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <img src="{{asset('img/xs/avatar1.png')}}" class="img-size">
                        </th>
                        <td>Mark Print</td>
                        <td>02/08/2018</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="{{asset('img/xs/avatar2.png')}}" class="img-size">
                        </th>
                        <td>Jacob Tedd</td>
                        <td>03/08/2018</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="{{asset('img/xs/avatar3.png')}}" class="img-size">
                        </th>
                        <td>Larry Style</td>
                        <td>05/08/2018</td>
                        <td>3</td>
                    </tr>
                    <hr>
                    </tbody>
                </table>

            </div>
        </div>

        <br>
        <hr>
        <br>
        <div class="card">
            <div class="card-body">
                <h5>Employee Contract</h5>
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Avatar</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">End Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <img src="{{asset('img/xs/avatar1.png')}}" class="img-size">
                        </th>
                        <td>Mark Print</td>
                        <td>UX/UI Designer</td>
                        <td>02/08/2019</td>

                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="{{asset('img/xs/avatar2.png')}}" class="img-size">
                        </th>
                        <td>Jacob Tedd</td>
                        <td>Team Leader</td>
                        <td>03/08/2020</td>

                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="{{asset('img/xs/avatar3.png')}}" class="img-size">
                        </th>
                        <td>Larry Style</td>
                        <td>Assistant</td>
                        <td>05/08/2019</td>

                    </tr>
                    <hr>
                    </tbody>
                </table>

            </div>
        </div>


    </div>

@endsection