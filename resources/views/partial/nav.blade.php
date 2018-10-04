<div style="background-color: #f1f1f1">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="collapse navbar-collapse headerr">
                <ul>
                    <a class="navbar-brand" href="/profile"><img
                                src="http://www.allweb.com.kh/themes/allweb/assets/images/allweb.png" alt="Allweb"
                                width="70%"></a>
                </ul>
                <ul class="navbar-nav nav navbar-right" style="padding-right: 15px;">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item">
                            <a class="nav fontt" href="/user">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav fontt" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </ul>
            </div>
        </nav>
    </div>
</div>