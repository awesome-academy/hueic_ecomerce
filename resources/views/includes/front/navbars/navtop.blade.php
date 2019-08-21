<nav class="navbar w-100">
    <ul class="nav ">
        <li class="nav-item"><a href="{{ route('admin') }}">@lang('Manage')</a></li>
    </ul>
    <ul class="nav ml-auto ">
        @if(auth()->check())
            <li class="nav-item"><a href="">@lang('auth.My Account') </a></li>
            <li class="nav-item ml-1"><a href="" id="logout">| @lang('auth.Logout')</a></li>
        @else
            <li class="nav-item"><a href="{{ route('login') }}"> @lang('Auth.Login')</a></li>
            <li class="nav-item ml-1"><a href="{{ route('register') }}"> | @lang('Auth.Register')</a></li>
        @endif
    </ul>
</nav>
