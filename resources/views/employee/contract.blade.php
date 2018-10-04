<div class="row" style="margin-top: 40px; margin-bottom: 30px;">
    <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 col-xs-1">
        <h1><strong> My Contract </strong></h1>
        <hr>
        <div class="wizard">

            <form role="form">
                <h2 style="margin-top: 20px;">This is the contract of ALLWEB CO,.LTD with employee.</h2>
                <p><strong>The application below will display all rule of the contract that the employee will make withthe company.</strong></p>
                <br>
                <table cellpadding="30" class="table-responsive table fonttt">
                    <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>:</td>
                        <td>{{ Auth::user()->employee->first_name }} {{ Auth::user()->employee->last_name }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Place of Work</th>
                        <td>:</td>
                        <td> ALLWEB Co,.LTD</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Job Position</th>
                        <td>:</td>
                        <td>{{ Auth::user()->employee->position }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Start date</th>
                        <td>:</td>
                        <td>{{ Auth::user()->contract->from_date }} </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">End date</th>
                        <td>:</td>
                        <td> {{ Auth::user()->contract->to_date }} </td>
                    </tr>
                    <tr>
                        <th scope="row">Salary</th>
                        <td>:</td>
                        <td>  {{ Auth::user()->contract->salary }} $</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>

                </table>
            </form>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6" style="text-align: center;">
                <h2><strong>Contract Countdown</strong></h2>
                <p id="countdown" style="font-size: 25px;"></p>
            </div>
        </div>
    </div>
</div>