{{--NavBar--}}
<nav class="navbar navbar-light bg-light">

    <a class="navbar-brand" href="/home">
        <img src="{{asset('img/logo-icon.jpg')}}" width="60" alt="ALLWEB Co., Ltd.">
    </a>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-comments-o" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell-o" aria-hidden="true"></i> </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-envelope-o" aria-hidden="true"></i> </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </form>

</nav>
{{--End NavBar--}}
<br>