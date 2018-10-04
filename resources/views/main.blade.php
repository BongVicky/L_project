<!doctype html>
<html lang="{{ app()->getLocale() }}">
@yield('style')
@include('partials._head')

<body>

@include('partials._nav')
<div class="container-fluid">
    <div class="row">

        @include('partials._bar')
        @yield('content')

    </div>
</div>

@include('partials._javascripts')
</body>

</html>