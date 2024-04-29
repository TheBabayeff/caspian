@extends('layouts.app')

@section('content')

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
@endsection
