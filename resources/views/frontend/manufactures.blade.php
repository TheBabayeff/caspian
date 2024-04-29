@extends('layouts.app')

@section('content')
    <header class="page-header" style="height: 280px;">
        <div class="container">
            <h1>İstehsalat Sahələri</h1>
            <h6>Caspian Express | Katalog | İstehsalat Sahələri</h6>

        </div>
        <!-- end container -->
    </header>
    <!-- end page-header -->
    <section class="content-section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="margin-bottom: 15px;">
                    <aside class="sidebar" style="margin-top: 0px;">
                        <div class="accordion" id="accordion" role="tablist" >
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne"> <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Kataloq <i class="lni lni-arrow-down"></i></a> </div>
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        @foreach($manufactures AS $manufacture)
                                            <li><a href="{{ route('manufacture.show', $manufacture->slug) }}" style="font-size: 15px;">{{ \Illuminate\Support\Str::limit($manufacture->title , 35) }}</a></li>
                                        @endforeach
                                    </div>
                                    <!-- end card-body -->
                                </div>
                            </div>
                        </div>

                        <!-- end widget -->


                    </aside>
                    <!-- end sidebar -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-8">
                    <ul class="projects">
                        @foreach($manufactures AS $manufacture)
                        <li class="one">
                            <figure class="project-box" > <a href="{{ route('manufacture.show', $manufacture->slug) }}"><img src="{{ asset("storage/" . $manufacture->images[0]) }}" alt="Image"></a>
                                <figcaption style="border-radius: 16px;">
                                    <h5 style="font-size: 15px;">{{ \Illuminate\Support\Str::limit($manufacture->title , 35) }}</h5>
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
