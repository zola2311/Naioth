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
        <div class="page-header d-flex align-items-center" style="background-image: url('{{asset('front_end/assets/img/page-header.jpg')}}');">
            <link href = "{{asset('front_end/assets/img/favicon.png')}}" rel="icon">
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
                    <li>About</li>
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

                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="{{asset('front_end/assets/img/members/pa_kidus.jpg')}}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Kidus Tsegaye</h4>
                            <span> Kidus Tsegaye </span>
                            <p>
                                Kidus Tsegaye has been ministering the church as the lead pastor for over 10 years now.
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

                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="{{asset('front_end/assets/img/members/tsion.jpg')}}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Tsion Ambachew</h4>
                            <span> Tsion Ambachew </span>
                            <p>
                                Tsion Ambachew has serving at Naoith in Ramah for over ten years now. She is the pastor's wife and
                                communes with the church.
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

                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="{{asset('front_end/assets/img/members/salome.jpg')}}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Salome Werede</h4>
                            <span> Salome Werede </span>
                            <p>
                                Salome has been with Naoith in Ramah for over 15 years now. She has faithfully served the saints
                                at Naioth in Ramah and actively conducts bible study sessions and much more.
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

                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="{{asset('front_end/assets/img/members/helen.jpg')}}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Helenbirhanu WoldeMariam</h4>
                            <span> Helenbirhanu WoldeMariam </span>
                            <p>
                                Helen has been with Naoith in Ramah for over 10 years. She has served and ministered the Lord and his saints
                                through prayer, hymns, and bible studies.
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

                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="{{asset('front_end/assets/img/members/gelaye.png')}}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4> Gelaye </h4>
                            <span> Gelaye </span>
                            <p>
                                Gelaye has been a beloved member of Naoith in Ramah. Known for her cheerful attitude she has been serving the
                                saints of the Lord for over 10 years now.
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

                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="{{asset('front_end/assets/img/members/bruke.png')}}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4> Bruk Tadesse </h4>
                            <span> Bruk Tadesse </span>
                            <p>
                                Bruk has been with Naoith in Ramah for over 10 years now. She has been a beloved and faithful sister to Naoithians.
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

            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="slides-1 swiper" data-aos="fade-up">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

</main><!-- End #main -->

@endsection
