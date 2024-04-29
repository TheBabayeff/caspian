
<!doctype html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-18D2L1VLWE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-18D2L1VLWE');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#feed01"/>
    <title>Caspian Express | Istehsal</title>
    <meta name="author" content="TheBabayeff">
    <meta name="description" content="Caspian Express | Azərbaycanda istehsalın inkişafında lider. Istehsal avadanlıqları gətirilməsi, quraşdırılması və mütəxəssis təminatı. ">
    <meta name="keywords" content="istehsal, business, construction, company, industrial, avadanliq, projects, corporate, makina, flat, condo, brick, website, design, animation, transition, themezinho">





    <!-- FAVICON FILES -->
    <link href="{{ asset('assets/ico/favicon.png') }}" rel="apple-touch-icon" sizes="144x144">
    <link href="{{ asset('assets/ico/favicon.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('assets/ico/favicon.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('assets/ico/favicon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('assets/ico/favicon.png') }}" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P4BCZG89');</script>
    <!-- End Google Tag Manager -->
</head>
<body>

<div class="first-transition"></div>
<!-- end first-transition -->
<div class="page-transition"></div>
<!-- end page-transition -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4BCZG89"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
        <div class="logo" > <a href="{{ route('welcome') }}"><img src="{{ asset('assets/images/logo5.png') }}" alt="Image"></a> </div>
        <!-- end logo -->

        <div class="hide-mobile">
            <p>{{ __('about.sidebarText') }}</p>
            <figure class="gallery"><img src="{{ asset('assets/images/slide02.jpg') }}" alt="Image"><img src="{{ asset('assets/images/slide03.jpg') }}" alt="Image"></figure>
            <h6 class="widget-title">ADDRESS</h6>
            <address class="address">
                <p>Sport Plaza 11-ci mərtəbə. Metro Koroğlu stansiyası yaxınlığı</p>
                <p>+994 55 222 2008</p>
            </address>
            <h6 class="widget-title">FOLLOW US</h6>
            <ul class="social-media">
                <li><i class="fa fa-facebook" aria-hidden="true"></i><a href="https://www.facebook.com/caspianexpres">Facebook</a></li>
                <li><a href="http://instagram.com/caspianexpres">Instagram</a></li>
                <li><a href="https://www.tiktok.com/@caspianexpres">TikTok</a></li>
                <li><a href="https://www.linkedin.com/company/caspian-express-co-ltd/mycompany/">LinkedIn</a></li>
            </ul>
        </div>
        <!-- end hide-mobile -->
        <div class="show-mobile">
            <div class="languages">
                <ul>
                    <li><a href="{{ url('/language/az') }}"><img src="{{ asset('assets/images/az.svg') }}" alt=""></a></li>
                    <li><a href="{{ url('/language/tr') }}"><img src="{{ asset('assets/images/tr.png') }}" width="28px;" alt=""></a></li>
                    <li><a href="{{ url('/language/en') }}"><img src="{{ asset('assets/images/en.svg') }}" width="28px;" alt=""></a></li>
                    <li><a href="{{ url('/language/ch') }}"><img src="{{ asset('assets/images/ch.png') }}" width="28px;" alt=""></a></li>
                    <li><a href="{{ url('/language/ru') }}"><img src="{{ asset('assets/images/ru.svg') }}" width="28px;" alt=""></a></li>
                </ul>
            </div>
            <!-- end languages -->
            <div class="site-menu" style="font-family: 'Nunito', sans-serif">
                <ul>
                    <li><a href="{{ route('welcome') }}">{{ __('components.home') }}</a></li>
                    <li><a href="{{ route('manufactures') }}">{{ __('components.catalog') }}</a></li>
                    <li><a href="{{ route('about') }}">{{ __('components.about') }}</a></li>
                    <li><a href="#sales-specialist-form" data-fancybox >{{ __('components.contact') }}</a></li>
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
        <div class="languages">
            <ul>
                <li><a href="{{ url('/language/az') }}"><img src="{{ asset('assets/images/az.svg') }}" alt=""></a></li>
                <li><a href="{{ url('/language/tr') }}"><img src="{{ asset('assets/images/tr.png') }}" width="28px;" alt=""></a></li>
                <li><a href="{{ url('/language/en') }}"><img src="{{ asset('assets/images/en.svg') }}" width="28px;" alt=""></a></li>
                <li><a href="{{ url('/language/ch') }}"><img src="{{ asset('assets/images/ch.png') }}" width="28px;" alt=""></a></li>
                <li><a href="{{ url('/language/ru') }}"><img src="{{ asset('assets/images/ru.svg') }}" width="28px;" alt=""></a></li>

            </ul>
        </div>
        <!-- end languages -->
        <div class="site-menu">
            <ul>
                <li><a href="{{ route('welcome') }}">{{ __('components.home') }}</a></li>
                <li><a href="{{ route('manufactures') }}">{{ __('components.catalog') }}</a></li>
                <li><a href="{{ route('about') }}">{{ __('components.about') }}</a></li>
                <li><a href="#sales-specialist-form" data-fancybox >{{ __('components.contact') }}</a></li>
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
        <a href="#sales-specialist-form" class="navbar-button" data-fancybox>
            <i class="lni lni-mobile"></i> <span>{{ __('components.getConsultation') }}</span>
        </a>
    </div>
    <!-- end container -->
</nav>

@yield('content')


<!-- end footer-bar -->
<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <h6 class="widget-title">{{ __('components.salesOffice') }}</h6>
                <address>
                    <p>Bakı şəhəri, Sport Plaza 11-ci mərtəbə</p>
                    <p>+99499 991 1666</p>
                    <p>info@CaspianExpress.az</p>
                </address>
            </div>
            <!-- end col-4 -->

            <div class="col-lg-4 col-md-6">
                <h6 class="widget-title">{{ __('components.ourFactory') }}</h6>
                <address>
                    <p>Bakı şəhəri, Məmmədli qəsəbəsi</p>
                    <p>+99455 222 2008</p>
                    <p>info@CaspianExpress.az</p>
                </address>
            </div>

            <div class="col-12">
                <div class="footer-bottom"> <span>© 2023 Caspian Express Company</span>
                    <ul>
                        <li><a href="https://www.facebook.com/caspianexpres">Facebook</a></li>
                        <li><a href="http://instagram.com/caspianexpres">Instagram</a></li>
                        <li><a href="https://www.tiktok.com/@caspianexpres">TikTok</a></li>
                        <li><a href="https://www.linkedin.com/company/caspian-express-co-ltd/mycompany/">LinkedIn</a></li>
                    </ul>
                </div>
                <!-- end footer-bottom -->
            </div>
            <!-- end col-12  -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <a href="#" class="scroll-top"><i class="lni lni-arrow-up"></i> <small>{{ __('components.up') }}</small> </a>
    <!-- end scroll-top -->
</footer>
<!-- end footer -->
<div id="sales-specialist-form" style="font-family: 'Nunito', sans-serif">
    <form action="{{ route('request.call') }}" method="POST">
        @csrf
        <div class="form-group"> <span>Adınız və Soyadınız</span>
            <input type="text" name="name">
        </div>
        <!-- end form-group -->
        <div class="form-group"> <span>Telefon Nömrəniz</span>
            <input type="text" name="phone">
        </div>
        <!-- end form-group -->
        <div class="form-group"> <span>Qeyd:</span>
            <input type="text" name="description">
        </div>
        <!-- end form-group -->
        <div class="form-group">
            <input type="submit" value="Müraciət Göndər">
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
