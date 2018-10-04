@extends('main')

@section('title', 'Calendar')

@section('content')

    <div class="col-md-10">

                    <div class="panel panel-default">
                        <div class="panel-heading">Full Calendar Example</div>
                        <div class="panel-body">
                            {!! $calendar->calendar() !!}
                        </div>
                    </div>
        {!! $calendar->script() !!}
    </div>

@endsection