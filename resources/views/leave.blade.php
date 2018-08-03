@extends('main')
@section('navheader')
    @include('partial.nav')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <fieldset class="box">
                <legend align="center"><h1>Annual leave application form</h1></legend>
                <div class="jumbotron">
                    <p>This form is for employees to use to apply to take annual leave.</p>
                    <blockquote style="border-left: 3px solid #333333;">
                        <p>- Employee has 18 days for year for their annual leave</p>
                        <p>- More information</p>
                    </blockquote>
                    <p>For more information about this application, please contact directly to HR department</p>
                </div>
                <hr>
                <h2> Employee's detail</h2>
                <br>
                {!! Form::open(['url' => 'foo/bar']) !!}
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::label('employee_name','Employee_Name:', array('style' => 'font-size: 20px;')) }}
                    </div>
                    <div class="col-md-8">
                        {{ Form::text('employee',null, array('class' => 'form-control', 'placeholder' => 'auto fill'))}}
                    </div>
                </div>
                {!! Form::close() !!}
                {!! Form::open(['url' => 'foo/bar']) !!}

                <div class="row">
                    <div class="col-md-4">
                        {{ Form::label('position','Position:', array('style' => 'font-size: 20px;')) }}
                    </div>
                    <div class="col-md-8">
                        {{ Form::text('position',null, array('class' => 'form-control', 'placeholder' => 'auto fill'))}}
                    </div>
                </div>
                {!! Form::close() !!}
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::label('contact_number','Mobile Phone:', array('style' => 'font-size: 20px;')) }}
                    </div>
                    <div class="col-md-8">
                        {{ Form::text('contact_number',null, array('class' => 'form-control', 'placeholder' => 'auto fill'))}}
                    </div>
                </div>
                {!! Form::close() !!}
                <hr>

                <h2> Leave type</h2>
                <br>
                {!! Form::open(['url' => 'foo/bar']) !!}
                <div class="row">
                    <div class="col-md-1">
                        {{ Form::label('type','Kind:', array('style' => 'font-size: 20px;')) }}
                    </div>
                    <div class="col-md-5">
                        {{ Form::text('type',null, array('class' => 'form-control', 'placeholder' => 'half day'))}}
                    </div>
                    <div class="col-md-1">
                        {{ Form::label('type','Type:', array('style' => 'font-size: 20px;')) }}
                    </div>
                    <div class="col-md-5">
                        {{ Form::text('pay_type',null, array('class' => 'form-control', 'placeholder' => 'sick leave'))}}
                    </div>
                </div>
                {!! Form::close() !!}
                {!! Form::open(['url' => 'foo/bar']) !!}
                <div class="row">
                    <div class="col-md-1">
                        {{ Form::label('from_date','From:', array('style' => 'font-size: 20px;')) }}
                    </div>
                    <div class="col-md-5">
                        {{ Form::text('from_date',null, array('class' => 'form-control','placeholder' => 'yyyy/mm/dd'))}}
                    </div>
                    <div class="col-md-1">
                        {{ Form::label('to_date','To:', array('style' => 'font-size: 20px;')) }}
                    </div>
                    <div class="col-md-5">
                        {{ Form::text('to_date',null, array('class' => 'form-control','placeholder' => 'yyyy/mm/dd'))}}
                    </div>
                </div>
                {!! Form::close() !!}
                {!! Form::open(['url' => 'foo/bar']) !!}
                <div class="row">
                    <div class="col-md-4 table-responsive">
                        {{ Form::label('hour_off','Total number of working days off:', array('style' => 'font-size: 20px')) }}
                    </div>
                    <div class="col-md-8">
                        {{ Form::text('hour_off',null, array('class' => 'form-control'))}}
                    </div>
                </div>
                {!! Form::close() !!}
                <hr>
                <h2>Reason:</h2>
                <br>
                {!! Form::open(['url' => 'foo/bar']) !!}
                {{ Form::textarea('reason',null, array('class' => 'form-control'))}}
                {!! Form::close() !!}
                <br>
                {{ Form::submit('Request', array('class'=>'btn btn-success btn-block btn-lg')) }}
                {!! Form::close() !!}
            </fieldset>
        </div>
    </div>
@endsection