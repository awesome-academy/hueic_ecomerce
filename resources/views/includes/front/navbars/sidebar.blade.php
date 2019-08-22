<nav class="sidebar">
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span> @lang('profile.manage_profile') {{ Auth::user()->name }} </span>
    </h6>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">
                @lang('profile.profile')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                @lang('profile.my_cart')
            </a>
        </li>

    </ul>
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span> @lang('profile.my_order')</span>
    </h6>
    <ul class="nav flex-column mb-2">
        <li class="nav-item">
        <a class="nav-link" href="#">
            @lang('profile.orders_returned')
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">
            @lang('profile.orders_canceled')
        </a>
        </li>
    </ul>
</nav>
