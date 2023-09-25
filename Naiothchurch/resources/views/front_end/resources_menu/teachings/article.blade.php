@extends('front_end.body.links')

{{--Extends the contents from the links.blade.php file --}}

@section('main')

    @section('title')
        Naioth in Ramah | Prayers
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp

        <!-- ======= Hero Section ======= -->

    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Ethiopian Evangelical Church in Japan</h2>
                    <h6 data-aos="fade-up" data-aos-delay="100"> Naioth that is translated as the dwelling place of prophets (1st Samuel 19:18-24), our congregation is an assembly of Christians filled by the Holy Spirit in this day and age. </h6>
                </div>
                <!-- Replace with church logo -->
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src= "{{asset('front_end/assets/img/naioth-logo-inverted.png')}}" class="img-fluid mb-3 mb-lg-0" alt="church logo" >
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
        <section id="service-details" class="service-details">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-1">
{{--                        <h4>{{ $article->articles_title}}us</h4>--}}
{{--                        <p>{{ $article->articles_description}}</p>--}}
                    </div>

                    <div class="col-lg-10">
                        <h1>{{ $article->articles_title}}</h1>
                        <img src="{{ asset($article -> article_image) }}" alt="" class="img-fluid services-img">

                        <p> {!! $article->articles_detail !!} </p>

                    </div>
                    <div class="col-lg-1">
                    </div>

                </div>

            </div>
        </section><!-- End Service Details Section -->

    </main><!-- End #main -->

@endsection
