

<!-- header -->
<header>
    <!-- logo -->
    <div class="logo">
        <h1>
            <a href="{{ route('/index') }}" class="text-center">
                beauty
                <span class="d-block">Blog</span>
            </a>
        </h1>
    </div>
    <!-- //logo -->
    <!-- search -->
    <div class="w3ls_search">
        <div class="cd-main-header">
            <ul class="cd-header-buttons">
                <li>
                    <a class="cd-search-trigger" href="#cd-search">
                        <span></span>
                    </a>
                </li>
            </ul>
            <!-- cd-header-buttons -->
        </div>
        <div id="cd-search" class="cd-search">
            <form action="#" method="post">
                <input name="Search" type="search" placeholder="search site">
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- //search -->
    <!-- menu -->
    <div class="side_menu">
        <div class="burger_box">
            <div class="menu-icon-container">
                <a href="#" class="menu-icon js-menu_toggle closed">
                        <span class="menu-icon_box">
                            <span class="menu-icon_line menu-icon_line--1"></span>
                            <span class="menu-icon_line menu-icon_line--2"></span>
                            <span class="menu-icon_line menu-icon_line--3"></span>
                        </span>
                </a>
            </div>
        </div>
        <div class="container">
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="{{ route('/index') }}">
                        <span>Home</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="{{ route('about') }}">
                        <span>About</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="{{ route('blog') }}">
                        <span>Default Blog</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="{{ route('typo') }}">
                        <span>Typography</span>
                    </a>
                </li>
                <li class="treeview   active">
                    <a href="{{ route('contact') }}">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- //menu -->
</header>
<!-- //header -->
<!-- banner-slider -->
<section class="diagonal-stripe-one inner-bg">
    <div class="container">
        <div class="ml-md-5 pl-md-5">
        </div>
    </div>
</section>
<!-- banner-slider -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('/index') }}">@yield('ptitle')</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">@yield('atitle')</li>
    </ol>
</nav>
