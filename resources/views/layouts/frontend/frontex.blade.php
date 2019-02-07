<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Xavat - Saas Landing HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.ico') }}img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    @stack('css')
</head>
<body>
<!-- preloader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>
<!-- preloader-end -->
<!-- header -->
<header id="header-sticky" class="transparent-header header-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('frontend/img/logo/logo.png') }}" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="main-menu">
                    <nav id="mobile-menu">
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="{{ URL::to('/about') }}">About</a></li>
                            <li><a href="{{ URL::to('/service') }}">Services</a></li>
                            <li><a href="{{ URL::to('/portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ URL::to('/team') }}">Team</a></li>
                            <li><a href="{{ URL::to('/contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-1 d-none d-lg-block text-right">
                <div class="menu-icon">
                    <a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a>
                </div>
                <!-- Modal Search -->
                <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form>
                                <input type="text" placeholder="Search here...">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
<main>
@yield('content')
</main>
<!-- brand-area -->
<div class="brand-area pt-100 pb-100" style="background-image:url({{ asset('frontend/img/bg/brand_bg.jpg') }})">
    <div class="container">
        <div class="row brand-active">
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ asset('frontend/img/brand/brand_01.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ asset('frontend/img/brand/brand_02.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ asset('frontend/img/brand/brand_03.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ asset('frontend/img/brand/brand_04.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ asset('frontend/img/brand/brand_05.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ asset('frontend/img/brand/brand_06.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ asset('frontend/img/brand/brand_02.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand-area-end -->
<!-- footer -->
<footer class="footer-bg pt-140 pb-140">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 text-center">
                <div class="footer-logo mb-45">
                    <a href="index.html"><img src="{{ asset('frontend/img/logo/white_logo.png') }}" alt=""></a>
                </div>
                <div class="footer-content mb-45">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                </div>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-end -->


<!-- JS here -->
<script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('frontend/js/ajax-form.js') }}"></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/js/parallax.min.js') }}"></script>
<script src="{{ asset('frontend/js/rellax.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5c3e0d82ab5284048d0d1837/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
@stack('scripts')
</body>
</html>
