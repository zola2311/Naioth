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
                    <img src= "{{asset('front_end/assets/img/naioth-logo-inverted.png')}}" class="img-fluid mb-3 mb-lg-0" alt="church logo">
                </div>

            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Church Ministry</span>
                    <h2>Church Ministry</h2>

                </div>


                <div class="row gy-4">
                    @foreach($articles as $item)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="card-img">
                                    @if($item->article_image)
                                        <img src="{{ asset($item->article_image) }}" class="img-fluid" alt="">
                                    @else
                                        <img src="{{ url('upload/800x600.webp') }}" class="img-fluid" alt="">
                                    @endif
                                </div>
                                <h3><a href="{{ route('opened.article',$item->id) }}" class="stretched-link"> {{$item->articles_title}} </a></h3>
                                <p>{!! $item->articles_description !!}</p>
                            </div>
                        </div><!-- End Card Item -->
                    @endforeach
                </div>






            </div>
        </section><!-- End Services Section -->
        <!-- ======= Videos - From About Us Section ======= -->


    </main><!-- End #main -->

@endsection
