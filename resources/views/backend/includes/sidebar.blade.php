<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Main Menu</div>
        <ul class="pcoded-item pcoded-left-item">
            <!-- <li class=" {{ active_class(Active::checkUriPattern('admin/dashboard*')) }}">
                <a href="{{ url('dashboard') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="pcoded-hasmenu {{ active_class(Active::checkUriPattern('users*')) }}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                    <span class="pcoded-mtext">Users</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{ url('users') }}">
                            <span class="pcoded-mtext">User List</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('users/reports') }}">
                            <span class="pcoded-mtext">Reports</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('users/attendance') }}">
                            <span class="pcoded-mtext">Attendance</span>
                        </a>
                    </li>
                </ul>
            </li> -->
            <li class=" {{ active_class(Active::checkUriPattern('admin/products*')) }}">
                <a href="{{ url('admin/products') }}">
                    <span class="pcoded-micon"><i class="ti ti-shopping-cart"></i></span>
                    <span class="pcoded-mtext">Products</span>
                </a>
            </li>
            <li class=" {{ active_class(Active::checkUriPattern('admin/categories*')) }}">
                <a href="{{ url('admin/categories') }}">
                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                    <span class="pcoded-mtext">Categories</span>
                </a>
            </li>
        </ul>

    </div>
</nav>