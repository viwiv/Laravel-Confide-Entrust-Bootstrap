<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">Title</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li @if(Request::is('/'))class="active"@endif><a href="{{ URL::to('/') }}">Home</a></li>
                <li @if(Request::is('link1'))class="active"@endif><a href="{{ URL::to('/') }}">Link 1</a></li>
                <li @if(Request::is('link2'))class="active"@endif><a href="{{ URL::to('/') }}">Link 2</a></li>
                <li @if(Request::is('link3'))class="active"@endif><a href="{{ URL::to('/') }}">Link 3</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                @if(!Confide::user())
                    <li @if(Request::is('/user/login'))class="active"@endif><a href="{{ URL::to('/user/login') }}">Log In</a></li>
                    <li @if(Request::is('/user/create'))class="active"@endif><a href="{{ URL::to('/user/create') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Dropdown
                        <b class="caret"></b>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::to('/') }}">Link 4</a></li>
                        <li><a href="{{ URL::to('/') }}">Link 5</a></li>
                        <li><a href="{{ URL::to('/user/logout')}}">Log Out</a>
                    </ul>

                </li>
                @endif
            </ul>

        </div>
    </div>
</nav>