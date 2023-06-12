@extends('front_end.body.links')

@section('main')

    @section('title')
        Naioth in Ramah | About
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('{{asset('front_end/assets/img/page-header.jpg')}}');">
            <link href = "#" rel="icon">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>About</h2>
                        <p> We are Ethiopian Christians gathered together in the name of our Lord and Savior Jesus Christ. Here in Japan we commune together to strengthen each other in our faith and serve one another as members of the body of Christ. </p>
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
                                <p> It has been 20 years since Naoith in Ramah came to be. How the church came about to be and all - include a hyperlink to the full topic in about.html </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-broadcast"></i>
                            <div>
                                <h5>Our mission</h5>
                                <p>As the local manifestation of the universal body of Christ we are ambassadors of the Eternal Devine King.
                                    Our church stands to strengthen and build up the individual members to grown in their walk of faith. Also, we
                                    consider it our mission to serve the Lord our God in our lives and spread the good new of his Kingdom. hyperlink here</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Frequently Asked Questions</span>
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-10">

                    <div class="accordion accordion-flush" id="faqlist">

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Where are you located?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    We are located in Tokyo, Japan in a city called Katsushika-ku. We regularly commune at the Higashi-Yotsugichiku - a community center 10 minutes
                                    away from Yotsugi station, every Sunday.
                                    The full address is as follows:
                                    <br> 〒124-0014 Tokyo, Katsushika City, Higashiyotsugi, 1 Chome−20−4, Tokyo, Japan
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    How can we contact you?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    You can contact our pastor Kidus Tsegaye via his phone number and his email.
                                    <br> Phone Number: +819091925271
                                    <br> Email: kiduslord@gmail.com
                                    <br> Email: kiduskkk@yahoo.com
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    What are your programs?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Our weekly programs are as follows:
                                        <ol>
                                            <li> Sunday worship Service (1 PM to 4 PM) </li>
                                            <li> Tuesday group prayer (7 PM to 8:30 PM) </li>
                                            <li> Saturday bible study (8 PM to 9 PM) </li>
                                        </ol>
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    We want to support your ministry. Do you have an official bank account information?
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    We do have an official bank account. Please contact us directly to receive further information.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->

@endsection
