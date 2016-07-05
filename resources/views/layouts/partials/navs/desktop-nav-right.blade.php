<div class="top-bar-right">
    <ul class="dropdown menu" data-dropdown-menu>

        @if ($studentSignedIn)

            <li class="has-submenu">
                <a href="#" class="loggedin-user-name">{{ $user->name }}</a>
                <ul class="menu submenu vertical" data-submenu>
                    <li><a href="{{ route('user-profile', $user->id) }}">Profile</a></li>
                    <li><a href="{{ route('user-dashboard', $user->id) }}">Dashboard</a></li>
                    <li><a href="{{ route('user-settings', $user->id) }}">Settings</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>

        @elseif($teacherSignedIn)

            <li class="has-submenu">
                <a href="#" class="loggedin-user-name">{{ $teacher->name }}</a>
                <ul class="menu submenu vertical" data-submenu>
                    <li><a href="{{ route('user-profile', $teacher->id) }}">Profile</a></li>
                    <li><a href="{{ url('teacher/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>
        @else

            <li class="how-it-works has-submenu">
                <a class="user-dropdown" href="{{ route('how-it-works') }}">How it works?</a>
            </li>

            <li class="has-submenu">
                <a class="user-dropdown" href="#">Student</a>
                <ul class="menu submenu vertical" data-submenu>
                    <li class="login"><a href="{{ url('/login') }}">Login</a></li>
                    <li class="register"><a href="{{ url('/register') }}">Register</a></li>
                </ul>
            </li>

            <li class="has-submenu user-holder">
                <a class="admin-dropdown" href="#">Teacher</a>
                <ul class="menu submenu vertical" data-submenu>
                    <li class="login"><a href="{{ url('teacher/login') }}">Login</a></li>
                    <li class="register"><a href="{{ url('teacher/register') }}">Register</a></li>
                </ul>
            </li>

        @endif

    </ul>
</div>