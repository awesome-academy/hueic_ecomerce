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
<nav class="navbar navbar-expand py-4 col-12">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-fill" id="navbar-main">
        <a class="navbar-brand mr-auto px-3 text-light" href="{{ route('home') }}">{{ config('app.name') }}</a>
        {!! Form::open(['method' => 'post', 'routes' => 'password.email', 'class' => 'form-inline flex-fill px-5'])!!}
            {{ Form::text('search', '', ['class' => 'form-control flex-fill mr-sm-2', 'aria-label' => 'Search', 'placeholder' => 'Search'])}}
            {{ Form::button(trans('Search'), ['class' => 'btn btn-outline-light my-2 my-sm-0 text-white']) }}
        {!! Form::close() !!}
        <a href="" title="View Cart" class="awemenu-icon menu-shopping-cart ml-auto px-5">
            <i class="fa fa-shopping-cart text-light" aria-hidden="true"></i>
            <span class="cart-number"></span>
        </a>
    </div>

</nav>
