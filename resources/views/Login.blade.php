@extends('main')
@section('content')

    <form>
        <div class="imgcontainer">
            <img src="{{ URL::to('image/allweb-192x192.jpg') }}" alt="Logo" class="avatar">
        </div>

        <div class="container">
            @if($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    <strong>{{$messager}}</strong>
                </div>
            @endif
            @if (count(@errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <button type="submit">Login</button>

        </div>
    </form>
@endsection