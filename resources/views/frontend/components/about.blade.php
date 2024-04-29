@extends('layouts.app')
@section('content')

    <header class="page-header">
        <div class="container">
            <h1>{{ __('components.about') }}</h1>
            <h6>{{ __('about.aboutTitleText') }} {{ __('about.aboutTitleText2') }} </h6>
            <ul>
                <li><a href="#">{{ __('components.about') }}</a></li>
                <li>ABOUT COMPANY</li>
            </ul>
        </div>
        <!-- end container -->
    </header>
    <!-- end page-header -->
    <section class="content-section no-bottom-spacing">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="section-title text-left">

                        <h6>{{ __('about.ourHistory') }}</h6>
                        <h2>{{ __('about.aboutTitleText') }} <br/> {{ __('about.aboutTitleText2') }} </h2>
                    </div>
                    <!-- end section-title -->

                    <!-- end col-5 -->
                </div>
                <section class="content-section white-space-top" data-background="">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="video-box"> <a href="{{ asset('assets/videos/aboutVideoHD.mp4') }}" data-fancybox data-width="640" data-height="360" class="play-btn"><i class="lni lni-play"></i></a>
                                    <video src="{{ asset('assets/videos/aboutVideoHD.mp4') }}" autoplay muted loop playsinline></video>
                                </div>
                                <!-- end video-box -->
                            </div>
                            <div class="col-12">
                                <div class="testimonials-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial">
                                                <p>{{ __('about.completeSolutions') }}</p>
                                                <i class="lni lni-quotation"></i>
                                                <h6>{{ __('about.whyCaspian') }}</h6>
                                            </div>
                                            <!-- end testimonial -->
                                        </div>
                                        <!-- end swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="testimonial">
                                                <p>{{ __('about.happyCustomers') }}</p>
                                                <i class="lni lni-quotation"></i>
                                                <h6>{{ __('about.whyCaspian') }}</h6>
                                            </div>
                                            <!-- end testimonial -->
                                        </div>
                                    </div>
                                    <!-- end swiper-wrapper -->
                                    <div class="controls">
                                        <div class="button-prev"><i class="lni lni-arrow-left"></i></div>
                                        <!-- end button-prev -->
                                        <div class="button-next"><i class="lni lni-arrow-right"></i></div>
                                        <!-- end button-next -->
                                    </div>
                                    <!-- end controls -->
                                </div>
                                <!-- end testimonials-slider -->
                            </div>
                            <!-- end col-12 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <p>{{ __('about.aboutText1') }}</p>
                <p>{{ __('about.aboutText2') }}</p>
                <p>{{ __('about.aboutText3') }}</p>


            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne"> <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{ __('about.collapseTitle1') }}<i class="lni lni-arrow-right"></i></a> </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">{{ __('about.collapseText1') }}</div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> {{ __('about.collapseTitle2') }}<i class="lni lni-arrow-right"></i></a> </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">{{ __('about.collapseText2') }}  </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree"> <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> {{ __('about.collapseTitle3') }} <i class="lni lni-arrow-right"></i></a> </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">{{ __('about.collapseText3') }}</div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header" role="tab" id="headingFour"> <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> {{ __('about.collapseTitle4') }}<i class="lni lni-arrow-right"></i></a> </div>
                            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">{{ __('about.collapseText4') }}</div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingFive"> <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> {{ __('about.collapseTitle5') }}<i class="lni lni-arrow-right"></i></a> </div>
                            <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body">{{ __('about.collapseText5') }}</div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingSix"> <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> {{ __('about.collapseTitle6') }}<i class="lni lni-arrow-right"></i></a> </div>
                            <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                                <div class="card-body">{{ __('about.collapseText6') }}</div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end accordion -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box"> <span class="odometer" data-count="50" data-status="yes">0</span> <span class="value">+</span>
                        <h6>{{ __('about.productionAreas') }}</h6>
                        <p>{{ __('about.productionAreasText') }}</p>
                    </div>
                    <!-- end counter-box -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box"> <span class="odometer" data-count="150" data-status="yes">0</span> <span class="value">+ </span>
                        <h6>{{ __('about.moulding') }}</h6>
                        <p>{{ __('about.mouldingText') }}</p>
                    </div>
                    <!-- end counter-box -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box"> <span class="odometer" data-count="15" data-status="yes">0</span> <span class="value">+</span>
                        <h6>{{ __('about.otherManufacturing') }}</h6>
                        <p>{{ __('about.otherManufacturingText') }}</p>
                    </div>
                    <!-- end counter-box -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box"> <span class="odometer" data-count="16" data-status="yes">0</span> <span class="value">+</span>
                        <h6>{{ __('about.experience') }}</h6>
                        <p>{{ __('about.experienceText') }}</p>
                    </div>
                    <!-- end counter-box -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <div class="content-section no-spacing">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-2 col-md-4 col-6">
                    <figure style="width: 120px;" class="logo-item">
                        <a href="https://www.smb.gov.az/az">
                        <img src="{{ asset('assets/images/partners/kobia.svg') }}" alt="Image">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-6">

                    <figure class="logo-item">
                        <a href="https://marsol.az">
                        <img src="{{ asset('assets/images/partners/marsol.png') }}" alt="Image">
                        </a>
                    </figure>

                </div>
                <!-- end col-2 -->

                <!-- end col-2 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <figure class="logo-item"> <img src="{{ asset('assets/images/partners/birbank.svg') }}" alt="birbank"> </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <figure class="logo-item"> <img src="{{ asset('assets/images/partners/arlex.png') }}" alt="arlex"> </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <figure class="logo-item"> <img src="{{ asset('assets/images/partners/netstal.svg') }}" alt="netstal"> </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <figure class="logo-item"> <img src="{{ asset('assets/images/partners/stp.png') }}" alt="Stp"> </figure>
                </div>

                <!-- end col-2 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end content-section -->
    <section class="content-section white-space-top" data-background="#f7f6f1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-box"> <a href="{{ asset('assets/videos/video.mp4') }}" data-fancybox data-width="640" data-height="360" class="play-btn"><i class="lni lni-play"></i></a>
                        <video src="{{ asset('assets/videos/video.mp4') }}" autoplay muted loop playsinline></video>
                    </div>
                    <!-- end video-box -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->


@endsection
