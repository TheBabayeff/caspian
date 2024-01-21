@extends('layouts.app')

@section('content')


    <header class="page-header">
        <div class="container">
            <h1>{{ $manufacture->title }}</h1>
            <h6 style="font-family: 'Nunito', sans-serif">
                Caspian Express kimi, təqdim etdiyimiz istehsal xətləri zəngin təcrübəmiz və yüksək texniki biliklərimizlə formalaşmışdır.</h6>
            <ul style="font-family: 'Nunito', sans-serif">
                <li><a href="{{ route('welcome') }}">Əsas səhifə</a></li>
                <li><a href="{{ route('manufactures') }}">Istehsal Sahələri</a></li>
            </ul>
        </div>
        <!-- end container -->
    </header>
    <!-- end page-header -->
    <section class="content-section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="news-box">
                        <figure>
                            <img src="{{ asset("storage/" . $manufacture->images[0]) }}" alt="Image">
                        </figure>
                        <div class="content">
                          <p style="font-family: 'Nunito', sans-serif">{!! markdown($manufacture->description) !!}</p>
                        </div>
                        <!-- end content -->
                    </div>
                    <!-- end news-box -->

                </div>
                <!-- end col-8 -->
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="widget">
                            <h6 class="widget-title">Axtarış</h6>
                            <form>
                                <input type="search"  style="font-family: 'Nunito', sans-serif" placeholder="Nə axtarırıq ?">
                                <input type="submit" value="Axtar">
                            </form>
                        </div>
                        <!-- end widget -->

                        <!-- end widget -->

                        <div class="widget">
                            <h6 class="widget-title">GALLERY</h6>
                            @foreach($manufactures AS $factory)
                            <figure>
                                <a href="{{ route('manufacture.show' , $factory->slug) }}"><img src="{{ asset("storage/" . $factory->images[0]) }}" alt="Image"></a>
                            </figure>
                            @endforeach
                        </div>
                        <!-- end widget -->
                    </aside>
                    <!-- end sidebar -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
@endsection
