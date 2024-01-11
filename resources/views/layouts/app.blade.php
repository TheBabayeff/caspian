
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#feed01"/>
    <title>Caspian Express | Plastic Manufacturing</title>
    <meta name="author" content="TheBabayeff">
    <meta name="description" content="Caspian Express | Azərbaycanda istehsalın inkişafında lider. Istehsal avadanlıqları gətirilməsi, quraşdırılması və mütəxəssis təminatı. ">
    <meta name="keywords" content="istehsal, business, construction, company, industrial, avadanliq, projects, corporate, makina, flat, condo, brick, website, design, animation, transition, themezinho">





    <!-- FAVICON FILES -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="ico/favicon.png" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<div class="first-transition"></div>
<!-- end first-transition -->
<div class="page-transition"></div>
<!-- end page-transition -->
<div class="search-box" style="font-family: 'Nunito', sans-serif">
    <div class="inner">
        <form>
            <input type="search" placeholder="Axtarmaq istədiyinizi yazın">
            <input type="submit" value="Axtarış">
        </form>
    </div>
</div>
<!-- end search-box -->
<aside class="side-widget" style="font-family: 'Nunito', sans-serif">
    <div class="inner">
        <div class="logo" > <a href="{{ route('welcome') }}"><img src="assets/images/logo5.png" alt="Image"></a> </div>
        <!-- end logo -->
        <div class="hide-mobile">
            <p>Caspian Express, sizə en son texnoloji avadanlıqlarla işlərinizi asanlaşdırmaq üçün yenilikçi yollar təqdim edir.Plastik istehsalında İnnovativ həllər bizdə !</p>
            <figure class="gallery"><img src="assets/images/slide02.jpg" alt="Image"><img src="assets/images/slide03.jpg" alt="Image"></figure>
            <h6 class="widget-title">ADDRESS</h6>
            <address class="address">
                <p>Sport Plaza 11-ci mərtəbə. Metro Koroğlu stansiyası yaxınlığı</p>
                <p>+994 55 222 2008</p>
            </address>
            <h6 class="widget-title">FOLLOW US</h6>
            <ul class="social-media">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
        <!-- end hide-mobile -->
        <div class="show-mobile">
            <div class="languages">
                <ul>
                    <li><a href="#">en</a></li>
                    <li><a href="#">ru</a></li>
                </ul>
            </div>
            <!-- end languages -->
            <div class="site-menu" style="font-family: 'Nunito', sans-serif">
                <ul>
                    <li><a href="#">Caspian Express</a><i class="lni lni-chevron-down-circle"></i>

                    </li>
                    <li><a href="#">Xidmətlər
                    <li><a href="#">İstehsal xəttləri</a></li>
                    <li><a href="#">Xəbərlər</a></li>
                    <li><a href="#">Əlaqə</a></li>
                </ul>
            </div>
            <!-- end site-menu -->
        </div>
        <!-- end show-mobile -->
        <small>© 2023 Caspian Express Company</small> </div>
    <!-- end inner -->
</aside>
<!-- end side-widget -->
<nav class="navbar">
    <div class="container">
        <div class="logo">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('assets/images/logo5.png') }}" style="height: 60px;" alt="CaspianExpress">
            </a>
        </div>
        <!-- end logo -->
{{--        <div class="languages">--}}
{{--            <ul>--}}
{{--                <li><a href="#">en</a></li>--}}
{{--                <li><a href="#">ru</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
        <!-- end languages -->
        <div class="site-menu">
            <ul>
                <li><a href="{{ route('welcome') }}">Əsas səhifə</a>
                </li>
                <li><a href="{{ route('sectors') }}">Xidmətlər</a></li>
                <li><a href="projects.html">Məhsullar</a></li>
                <li><a href="news.html">Xəbərlər</a></li>
                <li><a href="contact.html">Əlaqə</a></li>
            </ul>
        </div>
        <!-- end site-menu -->
        <div class="search"> <i class="lni lni-search-alt"></i> </div>
        <!-- end search -->

        <div class="hamburger">
            <div id="hamburger"> <span></span> <span></span> <span></span> </div>
            <div id="cross"> <span></span> <span></span> </div>
        </div>
        <!-- end hamburger -->
        <!-- end hamburher -->
        <a href="#sales-specialist-form" class="navbar-button" data-fancybox><i class="lni lni-mobile"></i> <span>Ödənişsiz Konsultasiya</span></a> </div>
    <!-- end container -->
</nav>

@yield('content')


<section class="footer-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="logo"> <img src="assets/images/logo5.png" alt="Image"> </figure>
                <h2>Live <b>better</b> and <b>beautiful</b></h2>
                <a href="#" class="button">GET A CONSULTATION <i class="lni lni-arrow-right"></i></a>
                <div class="sales-representive">
                    <figure> <img src="assets/images/logo5.png" alt="Image"> </figure>
                    Sales representative <b>+99455222 2008</b> free call ! </div>
                <!-- end sales-representive -->
            </div>
            <!-- end col-12  -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end footer-bar -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <h6 class="widget-title">HEADQUARTER</h6>
                <address>
                    <p>Bakı şəhəri, Sport Plaza <br>
                        11-ci mərtəbə</p>
                    <p>+99455 222 2008</p>
                    <a href="https://www.google.com/maps/search/?api=1&query=centurylink+field" data-fancybox data-width="640" data-height="360">FIND US ON MAP</a>
                </address>
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 col-md-6">
                <h6 class="widget-title">SALES OFFICES</h6>
                <address>
                    <p>Bakı şəhəri, Sport Plaza 11-ci mərtəbə</p>
                    <p>+99455 222 2008</p>
                    <a href="https://www.google.com/maps/search/?api=1&query=centurylink+field" data-fancybox data-width="640" data-height="360">FIND US ON MAP</a>
                </address>
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <h6 class="widget-title">SUBSCRIPTION</h6>
                <p>For more information, please join us.</p>
                <form>
                    <input type="email" placeholder="Type your e-mail">
                    <input type="submit" value="JOIN NOW">
                </form>
            </div>
            <!-- end col-4 -->
            <div class="col-12">
                <div class="footer-bottom"> <span>© 2023 Caspian Express Company</span>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </div>
                <!-- end footer-bottom -->
            </div>
            <!-- end col-12  -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <a href="#" class="scroll-top"><i class="lni lni-arrow-up"></i> <small>Scroll Up</small> </a>
    <!-- end scroll-top -->
</footer>
<!-- end footer -->
<div id="sales-specialist-form">
    <form>
        <div class="form-group"> <span>Full Name</span>
            <input type="text">
        </div>
        <!-- end form-group -->
        <div class="form-group"> <span>Phone Number</span>
            <input type="text">
        </div>
        <!-- end form-group -->
        <div class="form-group"> <span>Current E-mail</span>
            <input type="email">
        </div>
        <!-- end form-group -->
        <div class="form-group">
            <input type="submit" value="REQUEST A CALL">
        </div>
        <!-- end form-group -->
    </form>
</div>
<!-- end sales-specialist-form -->

<!-- JS FILES -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>
</html>
