@extends('layouts.app')
@section('content')


    <!-- end navbar -->
    <header class="slider white-space-bottom">
        <div class="container">
            <div class="swiper-container slider-content">
                <div class="swiper-wrapper">
                    @foreach($slides AS $slide)

                    <div class="swiper-slide">
                        <div class="inner">
                            <h2>{{ $slide->title }} </h2>
                            <p>{{ $slide->text }} </p>
                            <a href="#">Ətraflı  <i class="lni lni-arrow-right"></i></a>
                        </div>
                        <!-- end inner -->
                    </div>
                    @endforeach

                    <!-- end swiper-slide -->

                </div>
                <!-- end swiper-wrapper -->
                <div class="controls">
                    <div class="swiper-pagination"></div>
                    <!-- end swiper-pagination -->
                    <div class="button-prev"><i class="lni lni-arrow-left"></i></div>
                    <!-- end button-prev -->
                    <div class="button-next"><i class="lni lni-arrow-right"></i></div>
                    <!-- end button-next -->
                </div>
                <!-- end controls -->

            </div>
            <!-- end slider-content -->
            <div class="swiper-container slider-main">
                <div class="swiper-wrapper">
                    @foreach($slides AS $slideImg)
                    <div class="swiper-slide">
                        <div class="slide-image" data-background="{{ asset("storage/" . $slideImg->image) }}"></div>
                    </div>
                    @endforeach
                    <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->
                <div class="header-box"> <b>20</b> <small>YEARS OF EXPERIENCE</small> </div>
                <!-- end header-box -->
            </div>
            <!-- end slider-main -->
        </div>
        <!-- end container -->
    </header>
    <!-- end slider -->
{{--    <div class="section-note">This section contains your estimated account balance from the legacy <u>Constro platform</u>, cumulated with your sales</div>--}}
    <!-- end section-note -->
    <section class="content-section">
        <div class="container">
            <div class="section-title">
                <h2>Bir Toxunuşla istehsala başla</h2>
            </div>
            <div class="row align-items-center">

                <div class="col-lg-5">

                    <figure class="side-image"><img src="{{ asset( 'assets/images/server2.png') }}" alt="Image"></figure>

                    <!-- end side-image -->
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <ul class="custom-list">
                        <li><i class="lni lni-checkmark"></i> Dedication to client satisfaction</li>
                        <li><i class="lni lni-checkmark"></i> Teamwork and collabration</li>
                        <li><i class="lni lni-checkmark"></i> Culture of mutual trust and respect</li>
                        <li><i class="lni lni-checkmark"></i> Being leader in our profession</li>
                        <li><i class="lni lni-checkmark"></i> Pride in our works and excellences</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section Products-->

    <section class="content-section white-space-bottom" data-background="#f7f6f1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title text-left">
                        <h2>İstehsalat Xətləri</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-7 -->
                <div class="col-lg-5">
                    <p style="font-family: 'Nunito', sans-serif;">Caspian Express kimi, təqdim etdiyimiz istehsal xətləri zəngin təcrübəmiz və yüksək texniki biliklərimizlə formalaşmışdır.</p>


                </div>
                <!-- end col-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="swiper-container project-slider">
            <div class="swiper-wrapper">
                @foreach($manufactures AS $manufacture)
                <div class="swiper-slide">
                    <figure class="project-box"> <a href="{{ route('manufacture.show' , $manufacture->slug) }}"><img src="{{ asset("storage/" . $manufacture->images[0]) }}" alt="Image"></a>
                        <figcaption>
                            <h5>{{ $manufacture->title }}</h5>
                            <p>{{ \Illuminate\Support\Str::limit($manufacture->description , 200) }}</p>
                        </figcaption>
                    </figure>
                </div>
                @endforeach
                <!-- end swiper-slide -->
            </div>
            <div class="section-title">
                <a href="{{ route('manufactures') }}" class="custom-button center top-spacing" style="font-family: 'Nunito', sans-serif">Hamısına bax<i class="lni lni-arrow-right"></i></a>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- end project-slider -->
    </section>



    <!-- end content-section -->
    <section class="content-section ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Xidmət göstərdiyimiz sahələr</h2>
                    </div>
                </div>
                <!-- end col-12 -->
                <div class="col-12">
                    <ul class="projects">
                        @foreach($sectors AS $sector)
                        <li class="one">
                            <figure class="project-box">
                                <a href="{{ route('sector.show', $sector->slug) }}">
                                    <img src="{{ asset("storage/" . $sector->image) }}" alt="Image">
                                </a>
                                <figcaption>
                                    <h5>{{ $sector->title }}</h5>
                                </figcaption>
                            </figure>
                            <!-- end project-box -->
                        </li>
                        @endforeach

                    </ul>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="col-12 text-center">
            <a href="{{ route('sectors') }}" class="custom-button top-spacing">Bütün sektorlara bax<i class="lni lni-arrow-right"></i></a>
        </div>
    </section>


    <!-- end content-section -->

    <section class="content-section no-spacing white-space-top" data-background="#f7f6f1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-box"> <a href="assets/videos/video.mp4" data-fancybox data-width="640" data-height="360" class="play-btn"><i class="lni lni-play"></i></a>
                        <video src="assets/videos/video.mp4" autoplay muted loop playsinline></video>
                    </div>
                    <!-- end video-box -->
                </div>
                <!-- end col-12 -->
                <div class="col-12">
                    <div class="testimonials-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <p>Consto Construction is one of the best general contractors we've worked with. The entire team tactfully delivered a project of exceptional quality while staying on schedule and under budget. We hope to work with Consto again in the near future!</p>
                                    <i class="lni lni-quotation"></i>
                                    <h6>William James</h6>
                                    <small>Life Touch LLC</small> </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <p>Consto was completely respectful of the building and its surroundings - they immediately became part of our team and they know teamwork! They kept the jobsite clean and safe; working with Consto is nothing short of a first class experience!</p>
                                    <i class="lni lni-quotation"></i>
                                    <h6>William James</h6>
                                    <small>Life Touch LLC</small> </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <p>Thank you for all of your hard work on our project…I seriously don’t know how you did it but it came together SO WELL. I know we are a particular bunch and want things a certain way but you guys did such an amazing job!</p>
                                    <i class="lni lni-quotation"></i>
                                    <h6>William James</h6>
                                    <small>Life Touch LLC</small> </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <p>I was truly impressed with Consto’s quality workmanship and the final product. Caspian provided an outstanding team that completed our project on-time and on schedule with no disruption to the staff.</p>
                                    <i class="lni lni-quotation"></i>
                                    <h6>William James</h6>
                                    <small>Life Touch LLC</small> </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
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
    <!-- end content-section -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title" style="font-family: 'Nunito', sans-serif">
                        <h6>Yenilikliklərdən xəbərdar olun</h6>
                        <h2>Ən Son Xəbərlər</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                @foreach($news AS $new)
                <div class="col-lg-4" style="font-family: 'Nunito', sans-serif">
                    <div class="recent-news">
                        <figure> <img src="{{ asset("storage/" . $new->image) }}" alt="Image"> </figure>
                        <div class="content"> <small>29 February, 2020</small>
                            <h3><a href="#">{{ $new->title }}</a></h3>
                            <div class="author"> <img src="assets/images/logo5.png" alt="Image"> <span>by <b>Marketing Team</b></span> </div>
                            <!-- end author -->
                        </div>
                        <!-- end content -->
                    </div>
                    <!-- end recent-news -->
                </div>
                @endforeach
                <!-- end col-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h6>Arlex Makina</h6>
                        <h2>Bir Makinanın Min Marifəti</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="our-history">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <b>Arlex 250 Tonluq</b>
                    <figure><img src="{{ asset( 'assets/images/arlex/arlex1.png') }}" alt="Image"></figure>
                    <p>We know our customers are real people with specific goals and unique preferences.</p>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <b>June 2011</b>
                    <figure><img src="{{ asset( 'assets/images/arlex/arlex2.png') }}" alt="Image"></figure>
                    <p>We know our customers are real people with specific goals and unique preferences.</p>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <b>September 2012</b>
                    <figure><img src="{{ asset( 'assets/images/arlex/arlex7.png') }}" alt="Image"></figure>
                    <p>We know our customers are real people with specific goals and unique preferences.</p>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <b>February 2013</b>
                    <figure><img src="{{ asset( 'assets/images/arlex/arlex8.png') }}" alt="Image"></figure>
                    <p>We know our customers are real people with specific goals and unique preferences.</p>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <b>November 2017</b>
                    <figure><img src="{{ asset( 'assets/images/arlex/arlex5.png') }}" alt="Image"></figure>
                    <p>We know our customers are real people with specific goals and unique preferences.</p>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <b>November 2018</b>
                    <figure><img src="{{ asset( 'assets/images/arlex/arlex6.png') }}" alt="Image"></figure>
                    <p>We know our customers are real people with specific goals and unique preferences.</p>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <b>March 2020</b>
                    <figure><img src="{{ asset( 'assets/images/arlex/arlex3.png') }}" alt="Image"></figure>
                    <p>We know our customers are real people with specific goals and unique preferences.</p>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <b>March 2020</b>
                    <figure><img src="{{ asset( 'assets/images/arlex/arlex4.png') }}" alt="Image"></figure>
                    <p>We know our customers are real people with specific goals and unique preferences.</p>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <b>March 2020</b>
                    <figure><img src="{{ asset( 'assets/images/arlex/arlex3.png') }}" alt="Image"></figure>
                    <p>We know our customers are real people with specific goals and unique preferences.</p>
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->
            <div class="swiper-pagination"></div>
            <!-- end swiper-pagination -->
            <div class="controls">
                <div class="button-prev"><i class="lni lni-arrow-left"></i></div>
                <!-- end button-prev -->
                <div class="button-next"><i class="lni lni-arrow-right"></i></div>
                <!-- end button-next -->
            </div>
            <!-- end controls -->
        </div>
        <!-- end our-history -->


    </section>
    <!-- end content-section -->

@endsection
