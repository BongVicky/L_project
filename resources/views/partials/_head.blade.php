<head>

    <title>HR | @yield('title')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/datatables.min.css')}}">
    <link href="{{asset('css/bootstrap/css/bootstrap-datepicker.css')}}" rel="stylesheet">
{{--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>--}}

{{--<!-- Fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

    <script type="text/javascript">
        $(document).ready(function () {
            $(function() {

                // page is now ready, initialize the tasks...

                $('#tasks').fullCalendar({
                    weekends: false // will hide Saturdays and Sundays
                });
                $('#tasks').fullCalendar({
                    dayClick: function() {
                        alert('a day has been clicked!');
                    }
                });
            });
        })
    </script>
<style type="text/css">
    .alignright{
        text-align: right;
    }
    select.form-control:not([size]):not([multiple]) {
        height: 34px;
    }
    html {
        overflow-y: scroll;
    }
</style>

</head>