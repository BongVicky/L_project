{{--LeftBar--}}
<div class="col-md-2">
    <div class="row">
        <div class="col-md-4">
            <img src="{{asset('img/xs/avatar1.png')}}" width="100%">
        </div>

        <div class="col-md-8 navbar navbar-light ">
            <ul class="nav justify-content-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        Johnny Depp </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">View my profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <hr>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
               aria-selected="true">HR</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
               aria-selected="false">Project</a>
        </li>
    </ul>
    <div class="tab-content" id="myTab ">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div id="myDIV">
                <a class=" btn btn-outline-primary button-space btn-sm btn-block text-left  " width="100%" href="/home">
                    <i class="fa fa-tachometer icon-space" aria-hidden="true"></i>HR Dashboard
                </a>
                <a href="/holiday" class="btn btn-outline-primary button-space btn-sm btn-block text-left">

                    <i class="fa fa-list icon-space" aria-hidden="true"></i>Holiday

                </a>
                <a href="/calendar" class="btn btn-outline-primary button-space btn-sm btn-block text-left">
                    <i class="fa fa-calendar icon-space" aria-hidden="true"></i>Calendar
                </a>
                <li class="{{Request::path() == '/employees' ? 'active' : ''}}">
                    <a href="{{url('/employees')}}"
                       class="btn btn-outline-primary button-space btn-sm btn-block text-left">
                        <i class="fa fa-users icon-space" aria-hidden="true"></i>Employees
                    </a>
                </li>
                <li class="{{ Request::path() == '/attendances' ? 'active' : '' }}">
                    <a href="{{('/attendances')}}"
                       class="btn btn-outline-primary button-space btn-sm btn-block text-left">

                        <i class="fa fa-suitcase icon-space" aria-hidden="true"></i>Leave Request
                    </a>
                </li>

                <a href="/" class="btn btn-outline-primary button-space btn-sm btn-block text-left">

                    <i class="fa fa-bar-chart icon-space" aria-hidden="true"></i>Report
                </a>

                <a href="/contracts" class="btn btn-outline-primary button-space btn-sm btn-block text-left">

                    <i class="fa fa-lock icon-space" aria-hidden="true"></i>Contracts

                </a>
                <a href="/performances" class="btn btn-outline-primary button-space btn-sm btn-block text-left">

                    <i class="fa fa-lock icon-space" aria-hidden="true"></i>Performances

                </a>
                <a href="/companies" class="btn btn-outline-primary button-space btn-sm btn-block text-left">

                    <i class="fa fa-lock icon-space" aria-hidden="true"></i>Edit Company Profile
                </a>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <br>
            <button type="button" class="btn btn-outline-primary btn-sm btn-block text-left">
                <i class="fa fa-tachometer icon-space" aria-hidden="true"></i>Dashboard
            </button>
            <button type="button" class="btn btn-outline-primary btn-sm btn-block text-left">
                <i class="fa fa-envelope-o icon-space" aria-hidden="true"></i>Inbox
            </button>
            <button type="button" class="btn btn-outline-primary btn-sm btn-block text-left">
                <i class="fa fa-comments-o icon-space" aria-hidden="true"></i>Chat
            </button>
            <button type="button" class="btn btn-outline-primary btn-sm btn-block text-left">
                <i class="fa fa-list icon-space" aria-hidden="true"></i>Projects
            </button>
            <button type="button" class="btn btn-outline-primary btn-sm btn-block text-left">
                <i class="fa fa-users icon-space" aria-hidden="true"></i>Clients
            </button>
            <button type="button" class="btn btn-outline-primary btn-sm btn-block text-left">
                <i class="fa fa-tags icon-space" aria-hidden="true"></i>Taskboard
            </button>

        </div>
    </div>


</div>
{{--End LeftBar--}}