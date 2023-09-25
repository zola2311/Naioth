@extends('front_end.body.links')

{{--Extends the contents from the links.blade.php file --}}

@section('main')

    @section('title')
        Naioth in Ramah | Galleries
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



        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">



                <div class="row gy-4">
                    <section id="portfolio" class="portfolio" data-aos="fade-up">
                        <div class="container">
                            <div class="section-header">
                                    @foreach ($category as $catego)
                                <h2>{{ $catego->name }}</h2>
                                <p>{!! $catego->description !!}  </p>
                                @endforeach
                            </div>
                        </div>

                        <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

                            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">


                                <div class="row g-0 portfolio-container">
                                    @foreach ($category as $categor)
                                          @foreach ($categor->galleries as $gallery)

                                            <a class="col-xl-3 col-lg-4 col-md-6 filter-app portfolio-item glightbox preview-link" href="{{ asset($gallery->images) }}">
                                                <img src="{{asset($gallery->images)}}" class="img-fluid" alt="Gallery Images">
                                            </a>
{{--                                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--                                        <img src="{{asset('assets/img/portfolio/app-1.jpg')}}" class="img-fluid" alt="">--}}
{{--                                        <div class="portfolio-info">--}}
{{--                                            <h4>App 1</h4>--}}
{{--                                            <a href="{{asset('assets/img/portfolio/app-1.jpg')}}" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- End Portfolio Item -->--}}
                                                        @endforeach
                                                    @endforeach
                                    {{--    <div class="tz-gallery">--}}
                                    {{--        @foreach ($category as $categor)--}}
                                    {{--            @foreach ($categor->galleries as $gallery)--}}
                                    {{--                <div class="col-sm-6 col-md-4">--}}
                                    {{--                    <a class="lightbox" href="{{asset($gallery->images)}}">--}}
                                    {{--                        <img src="{{asset($gallery->images)}}" alt="Park">--}}
                                    {{--                    </a>--}}
                                    {{--                </div>--}}
                                    {{--            @endforeach--}}
                                    {{--        @endforeach--}}
                                    {{--    </div>--}}



{{--                                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">--}}
{{--                                        <img src="{{asset('assets/img/portfolio/product-1.jpg')}}" class="img-fluid" alt="">--}}
{{--                                        <div class="portfolio-info">--}}
{{--                                            <h4>Product 1</h4>--}}
{{--                                            <a href="{{asset('assets/img/portfolio/product-1.jpg')}}" title="Product 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- End Portfolio Item -->--}}


                                </div><!-- End Portfolio Container -->

                            </div>

                        </div>
                    </section>
                    {{--<div class="container gallery-container">--}}
                    {{--    @foreach ($category as $catego)--}}
                    {{--        <h1>{{ $catego->name }}</h1>--}}
                    {{--    @endforeach--}}

                    {{--    <div class="tz-gallery">--}}
                    {{--        @foreach ($category as $categor)--}}
                    {{--            @foreach ($categor->galleries as $gallery)--}}
                    {{--                <div class="col-sm-6 col-md-4">--}}
                    {{--                    <a class="lightbox" href="{{asset($gallery->images)}}">--}}
                    {{--                        <img src="{{asset($gallery->images)}}" alt="Park">--}}
                    {{--                    </a>--}}
                    {{--                </div>--}}
                    {{--            @endforeach--}}
                    {{--        @endforeach--}}
                    {{--    </div>--}}


                    {{--</div>--}}


                </div>




            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->
@endsection
