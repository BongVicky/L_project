<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partial.head')
</head>
<body>
@yield('navheader')

<div class="container">
    @yield('content')
</div>

<hr style="margin-top: 20px;">
<p class="text-center">Copyright ALLWEB - All Rights Reserved </p>
@include('partial.script')
</body>
</html>