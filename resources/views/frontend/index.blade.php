@extends('layouts.app')
@section('content')
    <section class="slider content-section white-space-bottom" style="margin-bottom: 350px; padding-top: 200px;">
        <!-- end container -->
        <div class="swiper-container project-slider">
            <div class="swiper-wrapper">
                @foreach($manufactures AS $manufacture)
                    <div class="swiper-slide">
                        <figure class="project-box"> <a href="{{ route('manufacture.show' , $manufacture->slug) }}"><img src="{{ asset("storage/" . $manufacture->images[0]) }}" alt="Image"></a>
                            <figcaption>
                                <h5>{{ $manufacture->title }}</h5>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
                <!-- end swiper-slide -->
            </div>
            <div class="section-title">
                <a href="{{ route('manufactures') }}" class="custom-button center top-spacing" style="font-family: 'Nunito', sans-serif">{{ __('components.seeAll') }}<i class="lni lni-arrow-right"></i></a>
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
                        <h2>{{ __('components.sectorsWeServe') }}</h2>
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
            <a href="{{ route('sectors') }}" class="custom-button top-spacing">{{ __('components.seeAll') }}<i class="lni lni-arrow-right"></i></a>
        </div>
    </section>

    <!-- end navbar -->
    <header class="slider white-space-bottom" style="    margin-bottom: 100px;">
        <div class="container">
            <div class="swiper-container slider-main">
                <div class="swiper-wrapper">
                    @foreach($slides AS $slideImg)
                        <div class="swiper-slide">
                            <div class="slide-image" data-background="{{ asset("storage/" . $slideImg->image) }}"></div>
                        </div>
                    @endforeach
                    <!-- end swiper-slide -->
                </div>
                <!-- end header-box -->
            </div>
            <div class="swiper-container slider-content">
                <div class="swiper-wrapper">
                    @foreach($slides AS $slide)

                    <div class="swiper-slide">
                        <div class="inner">
                            <h2>{{ $slide->title }} </h2>
                            <p>{{ $slide->text }} </p>
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

            <!-- end slider-main -->
        </div>
        <!-- end container -->
    </header>
    <!-- end slider -->





@endsection
