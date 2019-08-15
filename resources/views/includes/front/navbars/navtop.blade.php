<nav class="navbar w-100">
    <ul class="nav ">
        <li class="nav-item"><a href="{{ route('admin') }}">@lang('Manage')</a></li>
    </ul>
    <ul class="nav ml-auto ">
        @if(auth()->check())
            <li class="nav-item"><a href=""><i class="fa fa-home"></i> @lang('My Account')</a></li>
            <li class="nav-item ml-1"><a href=""><i class="fa fa-sign-out"></i> @lang('Logout')</a></li>
        @else
            <li class="nav-item"><a href="{{ route('login') }}"> @lang('Login')</a></li>
            <li class="nav-item ml-1"><a href="{{ route('register') }}"> | @lang('Register')</a></li>
        @endif
    </ul>
</nav>
