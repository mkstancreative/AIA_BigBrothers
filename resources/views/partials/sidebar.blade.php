<nav class="sidebar">
    <div class="navbrand">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/images/logos/logo-2.png') }}" alt="logo" />
        </a>
        <p>Admin DashBoard</p>
    </div>
    <h6 class="sidebar-text">Navigation</h6>
    <div class="sidebar-menu-items">
        <ul>
            <li class="sidebar-menu">
                <a href="{{ route('dashboard') }}" class="nav-links">
                    <span><i class="ri-dashboard-3-line"></i></span>
                    <span class="">DashBoard</span></a>
            </li>
            <li class="sidebar-menu has-dropdown">
                <a href="#" class="dropdown-toggle">
                    <span><i class="ri-group-3-line"></i></span>
                    <span>Officials</span>
                    <span><i class="ri-arrow-left-s-line arrow-icon"></i></span>
                </a>
                <ul class="sidebar-menu-dropdown">
                    <li><a href="{{ route('officials.index') }}">Manage Officials</a></li>
                </ul>
            </li>
            <li class="sidebar-menu has-dropdown">
                <a href="#" class="dropdown-toggle">
                    <span><i class="ri-group-3-line"></i></span>
                    <span>Member</span>
                    <span><i class="ri-arrow-left-s-line arrow-icon"></i></span>
                </a>
                <ul class="sidebar-menu-dropdown">
                    <li><a href="{{ route('members.index') }}">Manage Members</a></li>
                </ul>
            </li>
            <li class="sidebar-menu has-dropdown">
                <a href="" class="dropdown-toggle">
                    <span><i class="ri-group-3-line"></i></span>
                    <span>Blogs</span>
                    <span><i class="ri-arrow-left-s-line arrow-icon"></i></span>
                </a>
                <ul class="sidebar-menu-dropdown">
                    <li><a href="{{ route('blogs.index') }}">Manage Blog</a></li>
                </ul>
            </li>
            <li class="sidebar-menu">
                <a href="{{ route('change-password') }}" class="nav-links">
                    <span><i class="ri-lock-2-line"></i></span>
                    <span class="">Change Password</span></a>
            </li>
            <li class="sidebar-menu">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <a href="#" class="nav-links">
                        <span><i class="ri-logout-circle-line"></i>
                            <button type="submit">Logout</button>
                    </a>
                </form>
            </li>
        </ul>
    </div>
</nav>
