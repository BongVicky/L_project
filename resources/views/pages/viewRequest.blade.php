@extends('main')

@section('title', ' Request')

@section('content')


    <div class="col-md-10">


        <div class="card">
            <div class="card-body">
                <h5>Alissa Violet</h5>
                <h6>Employee ID: AW-0321</h6>
                <p><b>Total Annual Leave Left: </b>13 days</p>
                <hr>
                <p><b>Alissa Violet</b>
                    would like to ask for <b>3</b> day(s) off from <b>21 July, 2018</b> to <b>24 July, 2018</b>.
                </p>
                <p><b>Type of Leave: </b> Casual Leave</p>
                <p><b>Reason(s) : </b>
                    There are many variations of passages of Lorem Ipsum available,
                    but the majority have suffered alteration in some form, by injected humour,
                    or randomised words which don't look even slightly believable.
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                    anything embarrassing hidden in the middle of text. </p>
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
                    <a href="/leaveRequest">
                        <button class="btn btn-primary text-right" type="submit">
                            Approved
                        </button>
                    </a>
                    <a href="/leaveRequest">
                        <button class="btn btn-danger text-right" type="submit">
                            Declined
                        </button>
                    </a>
                </div>

            </div>
        </div>

    </div>




@endsection