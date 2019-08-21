<nav class="navbar navbar-expand py-4 col-12">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-fill" id="navbar-main">
        <a class="navbar-brand mr-auto px-3 text-light" href="{{ route('home') }}">{{ config('app.name') }}</a>
        {!! Form::open(['method' => 'post', 'routes' => 'search', 'class' => 'form-inline flex-fill px-5'])!!}
            {{ Form::text('search', '', ['class' => 'form-control flex-fill mr-sm-2', 'aria-label' => 'Search', 'placeholder' => 'Search'])}}
            {{ Form::button(trans('Search'), ['class' => 'btn btn-outline-light my-2 my-sm-0 text-white']) }}
        {!! Form::close() !!}
        <a href="" title="View Cart" class="awemenu-icon menu-shopping-cart ml-auto px-5">
            <i class="fa fa-shopping-cart text-light" aria-hidden="true"></i>
            <span class="cart-number"></span>
        </a>
    </div>

</nav>
