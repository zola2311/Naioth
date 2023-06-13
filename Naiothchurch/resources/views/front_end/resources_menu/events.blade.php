@extends('front_end.body.links')

{{--Extends the contents from the links.blade.php file --}}

@section('main')

    @section('title')
        Naioth in Ramah | Events
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
                    <img src= "{{asset('front_end/assets/img/naioth-logo-inverted.png')}}" class="img-fluid mb-3 mb-lg-0" alt="church logo">
                </div>

            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= Videos - From About Us Section ======= -->
        <section id="about" class="about pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2> Recordings </h2>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-4 position-relative align-self-start order-lg-last order-first">
                        <img src="{{asset('front_end/assets/img/hero-img.png')}}" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=sFuwFhGcmGM" class="glightbox play-btn"></a>
                    </div>

                    <div class="col-lg-4 position-relative align-self-start order-lg-last order-first">
                        <img src="{{asset('front_end/assets/img/hero-img.png')}}" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=sFuwFhGcmGM" class="glightbox play-btn"></a>
                    </div>

                    <div class="col-lg-4 position-relative align-self-start order-lg-last order-first">
                        <img src="{{asset('front_end/assets/img/hero-img.png')}}" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=sFuwFhGcmGM" class="glightbox play-btn"></a>
                    </div>
                </div>
        </section><!-- End About Us Section -->

    </main><!-- End #main -->

@endsection
