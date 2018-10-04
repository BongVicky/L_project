<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

<title>Test</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/chartist/dist/chartist.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/toastr/build/toastr.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/color_skins.css')}}">


</head>

<body class="theme-blue">
<div id="wrapper">
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand">
                <a href="#"><img src="{{asset('img/logo-icon.jpg')}}" alt="Lucid Logo" class="img-responsive logo"></a>
            </div>

            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="fa fa-calendar" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="icon-menu d-none d-sm-block"><i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="icon-menu d-none d-sm-block"><i class="fa fa-envelope-o" aria-hidden="true"></i><span class="notification-dot"></span></a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="fa fa-bell-o" aria-hidden="true"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="header"><strong>You have 4 new Notifications</strong></li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-warning"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                <span class="timestamp">10:00 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-like text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                <span class="timestamp">11:30 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-pie-chart text-info"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                <span class="timestamp">04:00 PM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Error on website analytics configurations</p>
                                                <span class="timestamp">Yesterday</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-equalizer"></i></a>
                            <ul class="dropdown-menu user-menu menu-icon">
                                <li class="menu-heading">ACCOUNT SETTINGS</li>
                                <li><a href="javascript:void(0);"><i class="icon-note"></i> <span>Basic</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-equalizer"></i> <span>Preferences</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-lock"></i> <span>Privacy</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-bell"></i> <span>Notifications</span></a></li>
                                <li class="menu-heading">BILLING</li>
                                <li><a href="javascript:void(0);"><i class="icon-credit-card"></i> <span>Payments</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-printer"></i> <span>Invoices</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-refresh"></i> <span>Renewals</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="icon-menu"><i class="icon-login"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

{{--JavaScripts--}}
<link rel="stylesheet" type="text/css" href="{{asset('js/bundles/libscripts.bundle.js')}}">
{{--<link rel="stylesheet" type="text/css" href="{{asset('js/bundles/vendorscripts.bundle.js')}}">--}}

{{--<link rel="stylesheet" type="text/css" href="{{asset('js/toastr/toastr.min.js')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('js/bundles/chartist.bundle.js')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('js/bundles/knob.bundle.js')}}">--}}

{{--<link rel="stylesheet" type="text/css" href="{{asset('js/bundles/mainscripts.bundle.js')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('js/index.js')}}">--}}





</body>
</html>