<div class="top-bar-right">

    @if ($signedIn)

        <ul class="menu">
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
        </ul>

    @else

        <ul class="menu">
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        </ul>

    @endif

</div>