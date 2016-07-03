<div class="top-bar-right">
    <ul class="dropdown menu" data-dropdown-menu>

        @if ($studentSignedIn)

            <li class="has-submenu">
                <a href="#" class="loggedin-user-name">{{ $user->name }}</a>
                <ul class="menu submenu vertical" data-submenu>
                    <li><a href="{{ route('user-profile', $user->id) }}">Profile</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>

        @elseif($adminSignedIn)

            <li class="has-submenu">
                <a href="#" class="loggedin-user-name">{{ $admin->name }}</a>
                <ul class="menu submenu vertical" data-submenu>
                    <li><a href="{{ route('user-profile', $admin->id) }}">Profile</a></li>
                    <li><a href="{{ url('admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>
        @else

            <li class="has-submenu">
                <a class="user-dropdown" href="#">Student</a>
                <ul class="menu submenu vertical" data-submenu>
                    <li class="login"><a href="{{ url('/login') }}">Login</a></li>
                    <li class="register"><a href="{{ url('/register') }}">Register</a></li>
                </ul>
            </li>

            <li class="has-submenu user-holder">
                <a class="admin-dropdown" href="#">Admin</a>
                <ul class="menu submenu vertical" data-submenu>
                    <li class="login"><a href="{{ url('admin/login') }}">Login</a></li>
                    <li class="register"><a href="{{ url('admin/register') }}">Register</a></li>
                </ul>
            </li>

            {{--<li class="login"><a href="{{ url('/login') }}">Login</a></li>--}}
            {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}

        @endif

    </ul>
</div>