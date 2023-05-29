<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin') ? 'active' : ''}}" aria-current="page" href="/cgv/admin">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/users*') ? 'active' : ''}}" href="/cgv/admin?p=users">
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/products*') ? 'active' : ''}}" href="/cgv/admin?p=movies">
                    Movies
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/pesanan*') ? 'active' : ''}}" href="/admin/pesanan">
                    Pesanan
                </a>
            </li>
        </ul>
    </div>
</nav>