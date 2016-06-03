<div class="top-bar-right">
    <ul class="dropdown menu" data-dropdown-menu>

        @if ($signedIn)

            <li class="has-submenu user-holder">
                <a href="#">{{ $user->name }}</a>
                <ul class="menu submenu vertical" data-submenu>
                    <li><a href="{{ route('user-profile', $user->id) }}">Profile</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>

        @else

            <li class="login"><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>

        @endif

    </ul>
</div>