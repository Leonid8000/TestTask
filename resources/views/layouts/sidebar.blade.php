<div class="sidebar">
    <div class="wrapper">
        <a href="{{route('home')}}"><i class="fa fa-home"></i> Cabinet</a>

        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                <i class="fa fa-user"></i> Profile
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a href="{{ route('info') }}">Info</a>
                <a href="{{ route('preferences') }}">Preferences</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                <i class="fa fa-cog"></i> Settings
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a href="{{route('settings')}}">Security</a>

            </div>
        </li>


    </div>
</div>