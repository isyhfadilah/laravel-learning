<nav class="navbar is-fixed-top lg:mx-4">
    <div class="navbar-brand">
        <a class="navbar-item mobile-aside-button">
            <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
        </a>
        <div class="navbar-item">
            <h1 class="text-2xl capitalize"><b> {{Auth::user()->name}} </b></h1>
        </div>    
    </div>
    <div class="navbar-brand is-right">
        <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
            <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
        </a>
    </div>
    <div class="navbar-menu" id="navbar-menu">
        <div class="navbar-end">
            <div class="navbar-item dropdown has-divider has-user-avatar">
                <a class="navbar-link">
                    <div class="user-avatar">
                        <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe"
                        class="rounded-full">
                    </div>
                    <div class="is-user-name"><span> {{Auth::user()->email}}</span></div>
                    <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{route('actionlogout')}}">
                    <span class="icon"><i class="mdi mdi-logout"></i></span>
                    <span>Log Out</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
        Admin <b class="font-black">One</b>
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li class="active">
                <a href="{{route('home')}}">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-label">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Menu</p>
        <ul class="menu-list">
            <li class="--set-active-index-html">
                <a href="{{route('barang.index')}}">
                    <span class="icon"><i class="mdi mdi-table"></i></span>
                    <span class="menu-item-label">Barang</span>
                </a>
            </li>
            <li class="--set-active-profile-html">
                <a href="#">
                    <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                    <span class="menu-item-label">User</span>
                </a>
            </li>
        </ul>
    </div>
</aside>