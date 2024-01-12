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

    <section class="content-section " style="font-family: 'Nunito', sans-serif">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title">
                        <h6>Bakı şəhəri, Məmmədli kəndi</h6>
                        <h2>İstehsal sahəmiz,<br>
                            Xidmətlərimiz</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-lg-6">
                    <figure class="side-image"><img src="assets/images/plass.png" alt="Image"></figure>
                    <!-- end side-image -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6">
                    <div class="side-content">
                        <h5>Caspian Express - Öz İstehsalatımız</h5>
                        <p>
                            Caspian Express, hər zaman yenilikçi yanaşmaları və yüksək texnoloji həlləri ilə tanınıb. Müəssisəmizdə istehsal olunan məhsulların hər biri, müxtəlif sahələrdəki ehtiyacları qarşılayan keyfiyyət və effektivliklə seçilir.
                            Biz, müasir avadanlıqlar və dərin texniki biliklərə əsaslanaraq, müştərilərimizə ən yaxşı məhsulları və xidmətləri təqdim etmək üçün çalışırıq. Təcrübəli komandamız, məhsullarımızın hər mərhələsində yüksək standartlara riayət edir, bu da bizim istehsalımızın etibarlılığını və dayanıqlığını təmin edir.

                            Müəssisəmiz, müxtəlif növ plastik məhsulların istehsalında ixtisaslaşmışdır, və biz həm yerli, həm də beynəlxalq bazarlara xidmət göstəririk. Bizim əsas məqsədimiz, müştərilərimizin tələblərinə uyğun olaraq mükəmməl məhsullar təqdim etməkdir.

                            Məmmədli kəndindəki müəssisəmiz, sənaye sektorunda etibarlı bir tərəfdaş kimi tanınır və biz bu etibarı qorumağa və daha da artırmağa sadiqik. Təşəkkür edirəm ki, bizə inanırsınız və bizimlə birlikdə işləyirsiniz.
                        </p>
                        <figure><img src="assets/images/signature.png" alt="Image"></figure>
                        <h6>İsmayıl Orucov</h6>
                        <small>Owner , Ceo - Caspian Express</small> </div>
                    <!-- end side-content -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="content-section">
        <div class="container">
            <div class="section-title" style="font-family: 'Nunito', sans-serif">
                <h6>Son Prosessə qədər yanınızdayıq !</h6>
                <h2>Bir Toxunuşla istehsala başla</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8" style="font-family: 'Nunito', sans-serif">
                    <div class="accordion" id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne"> <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Planlaşdırma və Layihələndirmə:<i class="lni lni-arrow-right"></i></a> </div>
                            <div id="collapseOne" class="collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">İstehsalın ilk və ən vacib addımı, detallı bir planlaşdırma və layihələndirmə prosesidir. Bu mərhələdə, məqsədlərinizi, ehtiyaclarınızı və gözləntilərinizi dəqiqləşdirir, mümkün çətinlikləri və həll yollarını müəyyən edirik.</div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Xammalın Seçimi və Təchizatı<i class="lni lni-arrow-right"></i></a> </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body"> Keyfiyyətli bir məhsulun əsası, yüksək standartlarda xammaldan keçir. Biz sizə xammal seçimində və təchizatında lazımi dəstəyi təmin edirik, bu da istehsal prosesinin etibarlılığını və davamlılığını təmin edir.</div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree"> <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Avadanlıq və Texnologiya <i class="lni lni-arrow-right"></i></a> </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body"> Müasir avadanlıq və texnologiyaların seçimi, istehsalın effektivliyini və keyfiyyətini artırır. Biz sizin üçün ən uyğun avadanlıq və texnologiyaları təklif edirik və onların quraşdırılmasında sizə kömək edirik.</div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header" role="tab" id="headingFour"> <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> İstehsalın Başlanması və İdarəetməsi <i class="lni lni-arrow-right"></i></a> </div>
                            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">  Planlaşdırma və hazırlıq mərhələləri tamamlandıqdan sonra, istehsalın başlanması və səmərəli idarə edilməsi prosesi başlayır. Biz, istehsal prosesinizin hər addımında sizə dəstək olmağa hazırıq.</div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end accordion -->
                </div>
                <div class="col-lg-4">

                    <figure class="side-image"><img src="{{ asset( 'assets/images/server2.png') }}" alt="Image"></figure>

                    <!-- end side-image -->
                </div>



                <!-- end col-8 -->
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
                    <div class="section-title" style="font-family: 'Nunito', sans-serif">
                        <h6>Plastik Məhsullar</h6>
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

                @foreach($products AS $product)
                <div class="swiper-slide">
                    <b>{{$product->title}}</b>
                    <figure><img src="{{ asset("storage/" . $product->image) }}" alt="Image"></figure>
                    <p>{{ \Illuminate\Support\Str::limit($manufacture->description , 100) }}</p>
                </div>
                @endforeach
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
