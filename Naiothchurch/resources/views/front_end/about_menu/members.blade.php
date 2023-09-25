@extends('front_end.body.links')

@section('main')

    @section('title')
        Naioth in Ramah | Members
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('{{asset('front_end/assets/img/1920X800.webp')}}');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Members</h2>
                        <p> Over the span of 20 years our church has had several beloved members who ministered the body of Christ. They faith
                            and the grace of God through them has made Naoith in Ramah what it is today.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li> <a href ="{{route('home')}}"> Home </a> </li>
                    <!-- <li><a href="{{url('/')}}">Home</a></li> -->
                    <!-- a href ="{{ URL::to('/contact')}}">  contact </a> -->
                    <li>Members</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Members ======= -->
    <section id="team" class="team pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Members</span>
                <h2>Members</h2>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                @foreach($members as $item)
                <div class="col-lg-4 col-md-6 d-flex">

                    <div class="member">
                        <img src="{{asset($item->member_image)}}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>{{$item->name}}</h4>
                            <span> {{$item->name}}</span>
                            <p>
                                {!! $item->description !!}
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->
                @endforeach


            </div>

        </div>
    </section><!-- End Our Team Section -->


</main><!-- End #main -->

@endsection
