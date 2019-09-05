
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Beauty Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom CSS -->
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/') }}front/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- side nav css file -->
    <link href='{{ asset('/') }}front/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- //side nav css file -->
    <link href="{{ asset('/') }}front/css/style.css" rel='stylesheet' type='text/css' />
    <!-- font-awesome icons -->
    <link href="{{ asset('/') }}front/css/fontawesome-all.min.css" rel="stylesheet">
    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
<!-- banner -->
<div class="w3l-hear-top">
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
                    <li class="treeview   active">
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
                    <li class="treeview">
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
    <div class="w3l_banner_info">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="slider-img b1">
                            <div class="container">
                                <div class="slider_banner_info ml-md-5 pl-md-5">
                                    <h4 class="text-uppercase font-weight-light">
                                        lisa's blog
                                    </h4>
                                    <h3 class="bnr">lifestyle & beauty</h3>
                                    <a href="{{ route('about') }}" class="w3ls-button">
                                        <span>read more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-img b2">
                            <div class="container">
                                <div class="slider_banner_info ml-md-5 pl-md-5">
                                    <h4 class="text-uppercase font-weight-light">
                                        lisa's blog
                                    </h4>
                                    <h3 class="bnr">lifestyle & beauty</h3>
                                    <a href="{{ route('about') }}" class="w3ls-button">
                                        <span>read more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-img b3">
                            <div class="container">
                                <div class="slider_banner_info ml-md-5 pl-md-5">
                                    <h4 class="text-uppercase font-weight-light">
                                        lisa's blog
                                    </h4>
                                    <h3 class="bnr">lifestyle & beauty</h3>
                                    <a href="{{ route('about') }}" class="w3ls-button">
                                        <span>read more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- banner-slider -->
</div>
<!-- //banner -->

@yield('body')


<!-- footer -->
<div class="footer pt-lg-5 text-center">
    <div class="container">
        <!-- logo -->
        <div class="logo">
            <h2>
                <a href="{{ route('/index') }}" class="text-center">
                    beauty
                    <span class="d-block">Blog</span>
                </a>
            </h2>
        </div>
        <!-- //logo -->
        <ul class="list-agileits py-4 border-bottom">
            <li>
                <a href="{{ route('/index') }}">
                    Home
                </a>
            </li>
            <li class="my-3">
                <a href="{{ route('about') }}" class="mx-4">
                    About Us
                </a>
            </li>
            <li class="mb-3">
                <a href="{{ route('blog') }}" class="mr-4">
                    Blog
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}">
                    Contact Us
                </a>
            </li>
        </ul>
        <div class="footerv2-w3ls pt-4">
            <h3 class="w3f_title">Socialize with Us</h3>
            <ul class="social-iconsv2 agileinfo pt-3">
                <li>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-top my-3">
            <p class="mx-auto">Donec consequat sapien ut leo cursus rhoncus.Curabitur aliquet quam id dui posuere blandit. Nullam dui mi.
            </p>
        </div>
    </div>
    <div class="p-sm-5 px-3 py-5">
        <!-- footer right -->
        <div class="col-md-8 mx-auto">
            <h3 class="mb-3 w3f_title">Contact Us</h3>
            <div class="row">
                <div class="col-lg-4 fv3-contact">
                    <span class="fas fa-envelope-open mr-2 my-3"></span>
                    <p>
                        <a href="mailto:example@email.com">info@example.com</a>
                    </p>
                    <p>
                        <a href="mailto:example@email.com">info@example.com</a>
                    </p>
                </div>
                <div class="col-lg-4 fv3-contact my-lg-0 my-4">
                    <span class="fas fa-phone-volume mr-2 my-3"></span>
                    <p>+456 123 7890</p>
                    <p>+456 123 7890</p>
                </div>
                <div class="col-lg-4 fv3-contact">
                    <span class="fas fa-home mr-2 my-3"></span>
                    <address>71 Pilgrim Avenue ,44 Shirley Ave. Goldfield Rd. Broome St, California.</address>
                </div>
            </div>
            <!-- //footer right -->
        </div>
        <!-- //footer row -->
    </div>
    <!-- copyright -->
    <div class="cpy-right text-center py-3 bg-theme">
        <p class="text-white">© 2018 Beauty Blog. All rights reserved | Design by
            <a href="http://w3layouts.com" class="text-white"> W3layouts.</a>
        </p>
    </div>
    <!-- //copyright -->
    <!-- //footer container -->
</div>
<!-- //footer -->
<!-- js-->
<script src="{{ asset('/') }}front/js/jquery-2.2.3.min.js"></script>
<!-- menu -->
<script src="{{ asset('/') }}front/js/menu.js"></script>
<!-- //menu -->
<!-- banner responsiveslides -->
<script src="{{ asset('/') }}front/js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!-- //banner responsiveslides -->
<!-- side nav js -->
<script src='{{ asset('/') }}front/js/SidebarNav.min.js'></script>
<script>
    $('.sidebar-menu').SidebarNav()
</script>
<!-- //side nav js -->
<!-- search-bar -->
<script src="{{ asset('/') }}front/js/main.js"></script>
<!-- //search-bar-->
<!-- flexisel -->
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });
    });
</script>
<script>
    $(window).load(function () {
        $("#flexiselDemo2").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 736,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<script src="{{ asset('/') }}front/js/jquery.flexisel.js"></script>
<!-- move-top -->
<script src="{{ asset('/') }}front/js/move-top.js"></script>
<!-- easing -->
<script src="{{ asset('/') }}front/js/easing.js"></script>
<!--  necessary snippets for few javascript files -->
<script src="{{ asset('/') }}front/js/Beautyblog.js"></script>
<!-- smooth scroll -->
<script src="{{ asset('/') }}front/js/SmoothScroll.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/') }}front/js/bootstrap.js "></script>
</body>

</html>
