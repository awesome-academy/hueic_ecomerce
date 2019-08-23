<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                @lang('sidebar_admin.dashboard')
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file"></span>
                @lang('sidebar_admin.orders')
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                @lang('sidebar_admin.products')
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                @lang('sidebar_admin.customers')
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                @lang('sidebar_admin.reports')
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.index')}}">
                    <span data-feather="users"></span>
                    @lang('sidebar_admin.user')
                </a>
            </li>
        </ul>
    </div>
</nav>
