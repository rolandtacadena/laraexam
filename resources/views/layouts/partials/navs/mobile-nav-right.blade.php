<div class="top-bar-right">

    @if ($studentSignedIn)

        <ul class="menu">
            <li><a href="{{ route('user-profile', $user->id) }}">Profile</a></li>
            <li><a href="{{ route('user-dashboard', $user->id) }}">Dashboard</a></li>
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
        </ul>

    @elseif ($teacherSignedIn)

        <ul class="menu">
            <li><a href="{{ url('teacher/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            <li><a href="{{ route('user-profile', $teacher->id) }}">Profile</a></li>
        </ul>

    @else

        <ul class="vertical menu" data-accordion-menu>

            <li class="how-it-works has-submenu">
                <a class="user-dropdown" href="{{ route('how-it-works') }}">How it works?</a>
            </li>

            <li>
                <a href="#">User</a>
                <ul class="menu vertical nested">
                    <li class="login"><a href="{{ url('/login') }}">Login</a></li>
                    <li class="register"><a href="{{ url('/register') }}">Register</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Admin</a>
                <ul class="menu vertical nested">
                    <li class="login"><a href="{{ url('teacher') }}">Login</a></li>
                    <li class="register"><a href="{{ url('admin/register') }}">Register</a></li>
                </ul>
            </li>
        </ul>

    @endif

</div>