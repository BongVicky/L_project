@extends('main')

@section('title', ' View')

@section('content')

        <div class="col-md-10">


            <div class="card">
                <div class="card-body">
                    <h5>Alissa Violet</h5>
                    <h6>Employee ID: AW-0321</h6>
                    <p><b>Total Annual Leave : </b>13 days</p>
                    <hr>

                    <p><b>Date of Birth : </b>21 August 1995</p>
                    <p><b>Gender : </b>Female</p>
                    <p><b>Address : </b>#20, St 241 Sangkat Veal Vong, Khan 7 Makara, Phnom Penh</p>
                    <p><b>Phone Number : </b>012 345 678</p>
                    <p><b>Email : </b>example@anything.com</p>
                    <hr>
                    <h5>Leave History</h5>

                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="">#</th>
                            <th scope="">Name</th>
                            <th scope="">Leave Type</th>
                            <th scope="">Date</th>
                            <th scope="">Reason</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr class="">
                            <th scope="row">
                                1
                            </th>
                            <td>Alissa Violet</td>
                            <td>Casual Leave</td>
                            <td>24 July, 2018 to 26 July, 2018</td>
                            <td>Going to Family Function</td>

                        </tr>
                        <tr class="">
                            <th scope="row">
                                2
                            </th>
                            <td>Alissa Violet</td>
                            <td>Sick Leave</td>
                            <td>21 July, 2018 to 26 July, 2018</td>
                            <td>Going to Development</td>
                        </tr>
                        <tr class="">
                            <th scope="row">
                                3
                            </th>
                            <td>Alissa Violet</td>
                            <td>Casual Leave</td>
                            <td>11 Aug, 2018 to 21 Aug, 2018</td>
                            <td>Going to Holiday</td>
                        </tr>
                        <tr class="">
                            <th scope="row">
                                4
                            </th>
                            <td>Alissa Violet</td>
                            <td>Casual Leave</td>
                            <td>15 Aug, 2018 to 25 Aug, 2018</td>
                            <td>Going to Holiday</td>
                        </tr>


                        </tbody>

                    </table>
                    <div class="col-md-12 text-right">
                        <a href="/employees">
                        <button class="btn btn-primary text-right" type="submit">
                            Back
                        </button>
                        </a>
                    </div>

                </div>
            </div>

        </div>

@endsection