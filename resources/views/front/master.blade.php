
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
    <link href="{{ asset('/') }}front/css/SidebarNav.min.css" media='all' rel='stylesheet' type='text/css' />
    <!-- //side nav css file -->
    <link href="{{ asset('/') }}front/css/style.css" rel='stylesheet' type='text/css' />
    <!-- font-awesome icons -->
    <link href="{{ asset('/') }}front/css/fontawesome-all.min.css" rel="stylesheet">
    {{--<!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">--}}
</head>

<body>

@include('front.includes.header')

@yield('body')


@include('front.includes.footer')


<!-- js-->
<script src="{{ asset('/') }}front/js/jquery-2.2.3.min.js"></script>
<!-- menu -->
<script src="{{ asset('/') }}front/js/menu.js"></script>
<!-- //menu -->
<!-- side nav js -->
<script src='{{ asset('/') }}front/js/SidebarNav.min.js'></script>
<script>
    $('.sidebar-menu').SidebarNav()
</script>
<!-- //side nav js -->
<!-- search-bar -->
<script src="{{ asset('/') }}front/js/main.js"></script>
<!-- //search-bar-->
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
