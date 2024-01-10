@extends('layouts.app')

@section('content')
    <header class="page-header">
        <div class="container">
            <h1>Xidmət Sektorları</h1>
            <h6>Plastik Sahəsində xidmət göstərdiyimiz sahələr ilə yaxından tanış ola bilərsiniz . Plastik harda varsa Caspian Plastik orada var. </h6>
            <ul>
                <li><a style="font-family: 'Nunito', sans-serif;" href="{{ route('welcome') }}">Ana səhifə</a></li>
                <li style="font-family: 'Nunito', sans-serif;">Xidmət sektorları</li>
            </ul>
        </div>
        <!-- end container -->
    </header>
    <!-- end page-header -->
    <section class="content-section ">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <ul class="projects">
                        @foreach($manufactures AS $manufacture)
                        <li class="one">
                            <figure class="project-box"> <a href="{{ route('manufacture.show', $manufacture->slug) }}"><img src="{{ asset("storage/" . $manufacture->images[0]) }}" alt="Image"></a>
                                <figcaption>
                                    <h5>{{ $manufacture->title }}</h5>
                                </figcaption>
                            </figure>
                            <!-- end project-box -->
                        </li>
                        <!-- end li -->
                        @endforeach
                    </ul>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
