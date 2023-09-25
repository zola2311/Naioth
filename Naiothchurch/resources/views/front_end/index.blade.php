@extends('front_end.body.links')

{{--Extends the contents from the links.blade.php file --}}

@section('main')

    @section('title')
        Naioth in Ramah | Home
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp

    <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center">
            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up"> International Evangelical Church </h2>
                        <h6 data-aos="fade-up" data-aos-delay="100"> Naioth that is translated as the dwelling place of prophets (1st Samuel 19:18-24), our congregation is an assembly of Christians filled by the Holy Spirit in this day and age. </h6>

                        <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                                    <p> Years in Ministry </p>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                                    <p> Members </p>
                                </div>
                            </div><!-- End Stats Item -->

                        </div>
                    </div>
                    <!-- Replace with church logo -->
                    <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src= "{{asset('front_end/assets/img/naioth-logo-inverted.png')}}" class="img-fluid mb-3 mb-lg-0" alt="church logo">
                    </div>
                </div>
            </div>
        </section><!-- End Hero Section -->

        <main id="main">

            <!-- ======= Services Section ======= -->
            <section id="service" class="services pt-0">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <span>Church Ministry</span>
                        <h2>Church Ministry</h2>

                    </div>

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('front_end/assets/img/800X600.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3><a href="{{route('sermons')}}" class='{{($route=='sermons')?'active':' '}}' class="stretched-link"> Sermons </a></h3>
                                <p>In our church we regularly learn the word of God for instruction, encouragement and strengtheining our faith.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('front_end/assets/img/800X600.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3><a href="{{route('testimonies')}}" class='{{($route=='testimonies')?'active':' '}}' class="stretched-link"> Testimonies </a></h3>
                                <p> Here we hear the works of the Lord through the testimonies of the members of our church. </p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('front_end/assets/img/800X600.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3><a href="{{route('worships')}}" class='{{($route=='worships')?'active':' '}}' class="stretched-link"> Worship </a></h3>
                                <p>Worshiping the Lord our God through music and hymns.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('front_end/assets/img/800X600.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3><a href="{{route('prayers')}}" class='{{($route=='prayers')?'active':' '}}' class="stretched-link"> Prayer </a></h3>
                                <p>Coming to the throne of God to commune with our God and find Grace for our daily lives.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('front_end/assets/img/800X600.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3><a href="{{route('series')}}" class='{{($route=='series')?'active':' '}}' class="stretched-link"> Expositions </a></h3>
                                <p> Expositions on Christian living, discipleship, etc.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('front_end/assets/img/800X600.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3><a href="{{route('others')}}" class='{{($route=='others')?'active':' '}}' class="stretched-link"> Other Collections </a></h3>
                                <p> Special Church events, birthdays, stories of our church members</p>
                            </div>
                        </div><!-- End Card Item -->

                    </div>

                </div>
            </section><!-- End Services Section -->

            <!-- ======= About Us Section ======= -->
            <section id="about" class="about pt-0">
                <div class="container" data-aos="fade-up">
                    <div class="row gy-4">

{{--                        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">--}}
{{--                            <img src="assets/img/about.jpg" class="img-fluid" alt="">--}}
{{--                            <img src="{{asset('assets/img/Amelkihalehu.jpg')}}" class="img-fluid" alt="">--}}
{{--                            <a href="https://youtu.be/sdSMkICrssc" class="glightbox play-btn"></a>--}}
{{--                        </div>--}}

                        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                            <img src="{{asset('front_end/assets/img/Amelkihalehu.jpg')}}" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=sFuwFhGcmGM" class="glightbox play-btn"></a>
                        </div>

                        <div class="col-lg-6 content order-last  order-lg-first">
                            <h3>About Us</h3>
                            <p>
                                We are Ethiopian Christians gathered together in the name of our Lord and Savior Jesus Christ. Here in Japan we commune together to strengthen each other in our faith and serve one another as members of the body of Christ.
                            </p>
                            <ul>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <i class="bi bi-diagram-3"></i>
                                    <div>
                                        <h5>Who we are?</h5>
                                        <p> It has been 20 years since Naoith in Ramah came to be. How the church came about to be and all - include a hyperlink to the full topic in about.html</p>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-fullscreen-exit"></i>
                                    <div>
                                        <h5>What we believe</h5>
                                        <p>We as an Evangelical Church believe in the Triune nature of the One true God. - hyperlink here</p>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-broadcast"></i>
                                    <div>
                                        <h5>Our mission</h5>
                                        <p>As the local manifestation of the universal body of Christ we are ambassadors of the Eternal Devine King. - hyperlink here</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section><!-- End About Us Section -->

            <!-- ======= Call To Action Section ======= -->
            <section id="call-to-action" class="call-to-action">
                <div class="container" data-aos="zoom-out">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h3>In a foreign land God is our Solace</h3>
                            <p> We would like to invite you to come and serve the Lord Jesus Christ with us. You can also support our mission through prayers and financial/material support.</p>
                            <a class="cta-btn" href="{{route('contact')}}" class='{{($route=='contact')?'active':' '}}'>Contact Us</a>
                         </div>
                        </div>
                    </div>
            </section><!-- End Call To Action Section -->

            <!-- ======= Features Section ======= -->
            <section id="features" class="features">
                <div class="container">

                    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                        <div class="section-header">
                            <span> Our Programs </span>
                            <h2> Our Programs </h2>
                        </div>

                        <div class="col-md-5">
                            <img src = "{{asset('front_end/assets/img/875x592.webp')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7">
                            <h3>Sunday we have our regular worship service.</h3>
                            <p class="fst-italic">
                                We cherish our Sunday because it's the day where we take a break from our busy lives to come together face to face and commune
                            </p>
                            <ul>
                                <li><i class="bi bi-check"></i> We pray together believing that God will provide.</li>
                                <li><i class="bi bi-check"></i> We worship God through music and hymns.</li>
                                <li><i class="bi bi-check"></i> We hear to the Word of God.</li>
                            </ul>
                        </div>
                    </div><!-- Features Item -->

                    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                        <div class="col-md-5 order-1 order-md-2">
                            <img src = "{{asset('front_end/assets/img/875x592.webp')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 order-2 order-md-1">
                            <h3>Every Tuesday we have group prayer </h3>
                            <p class="fst-italic">
                                On Tuesdays we take time to seek God through prayer. We pray for each other and for our country, for Japan and seek the will of God in our lives.
                                We also share a quick word of encouragement and instruction from the bible.
                            </p>
                        </div>
                    </div><!-- Features Item -->

                    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                        <div class="col-md-5">
                            <img src = "{{asset('front_end/assets/img/875x592.webp')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7">
                            <h3>Every Saturday we have our Bible Study Session.</h3>
                            <p>On Saturdays we thoroughly explore a book in the Bible and discuss the what is written therein.</p>
                            <ul>
                                <li><i class="bi bi-check"></i> First we take the other days of the week to study and prepare on our own</li>
                                <li><i class="bi bi-check"></i> When we gather together we share with one another what we have meditated upon</li>
                                <li><i class="bi bi-check"></i> Led by our pastor we will refine and deepen our understanding of the passages </li>
                            </ul>
                        </div>
                    </div><!-- Features Item -->

                    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                        <div class="col-md-5 order-1 order-md-2">
                            <img src = "{{asset('front_end/assets/img/875x592.webp')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 order-2 order-md-1">
                            <h3>Birthdays, wedding anniversaries, graduations, welcome and farewell parties</h3>
                            <p class="fst-italic">
                                As brothers and sisters in Christ we strengthen our bond through social events.
                            </p>
                            <p>
                                Standing with each other in happy times and sad we strive to fulfill the commandment that Christ our Lord gave us to
                                love one another as He has Loved us.
                            </p>
                        </div>
                    </div><!-- Features Item -->

                </div>
            </section><!-- End Features Section -->

            <!-- ======= Pricing Section was here but removed ======= -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
                <div class="container">

                    <div class="slides-1 swiper" data-aos="fade-up">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
{{--                                    <img src="{{asset('front_end/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">--}}
                                    <h3>Kidus Tsegaye</h3>
                                    <h4> Pastor </h4>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        God has opened a door for us to minister in Japan fellow Ethiopians and to the Japanese people in General.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
{{--                                    <img src="{{asset('front_end/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">--}}
                                    <h3> Salome Werede </h3>
                                    <h4> Naiothian </h4>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Through Naoith in Ramah I have found the strength to continue in my faith and serve with fellow brothers and sisters.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
{{--                                    <img src="{{asset('front_end/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">--}}
                                    <h3> Salome Werede </h3>
                                    <h4> Naiothian </h4>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Through Naoith in Ramah I have found the strength to continue in my faith and serve with fellow brothers and sisters.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
{{--                                    <img src="{{asset('front_end/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">--}}
                                    <h3> HelenBirhan  </h3>
                                    <h4> Naiothian </h4>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Through Naoith in Ramah I have found the strength to continue in my faith and serve with fellow brothers and sisters.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
{{--                                    <img src="{{asset('front_end/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">--}}
                                    <h3> Gelaye </h3>
                                    <h4> Naiothian </h4>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Through Naoith in Ramah I have found the strength to continue in my faith and serve with fellow brothers and sisters.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section was here ======= -->

    </main><!-- End #main -->

@endsection
