@extends('main')
@section('content')
    @if(isset(Auth::user()->name))
        <div class="alert-danger alert success-block">
            <strong>Welcome {{Auth::user()->name }}</strong>
            <br />
            <a href="{{url('/main/logout')}}">Logout</a>
        </div>
        else
            <script>window.location . = . "/main";</script>
        @endif

    <h1>Hello world</h1>
@endsection