<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title> <!-- This yields a dynamic title on each page -->
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    {{--  {{asset()}}} is a keyword to indicate resource locations --}}
    <link href = "{{asset('front_end/assets/img/favicon.png')}}" rel="icon">
    <link href = "{{asset('front_end/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('front_end/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/assets/vendor/aos/aos.css" rel="stylesheet')}}">

    <!-- Template Main CSS File -->
    <link href="{{asset('front_end/assets/css/gallery.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('/freebie-4-bootstrap-gallery-templates/grid/gallery-grid.css')}}">
    <!-- =======================================================
    * Template Name: Logis - v1.1.0
    * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

@php
    $route=Route::current()->getName();
@endphp
    <!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{route('home')}}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Naioth in Ramah</h1>
        </a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('home')}}" class='{{($route=='home')?'active':' '}}'>Home</a></li>
                <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{route('about')}}" class='{{($route=='about')?'active':' '}}'> About Naoith in Ramah </a></li>
                        <li><a href="{{route('believe')}}" class='{{($route=='believe')?'active':' '}}'> What we believe </a></li>
                        <li><a href="{{route('members')}}" class='{{($route=='members')?'active':' '}}'>Our members</a></li>
                        <li><a href="{{route('testimonies')}}" class='{{($route=='testimonies')?'active':' '}}'>Testimonies</a></li>
                    </ul>
                </li>
                <li><a href="{{route('gallery')}}" class='{{($route=='gallery')?'active':' '}}'>Gallery</a></li>
                <li><a href="{{route('worships')}}" class='{{($route=='worships')?'active':' '}}'>Worships-Songs</a></li>
                <li class="dropdown"><a href="#"><span>Resources</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{route('prayers')}}" class='{{($route=='prayers')?'active':' '}}'> Prayers </a></li>
                        <li class="dropdown"><a href="#"><span>Teachings</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="{{route('sermons')}}" class='{{($route=='sermons')?'active':' '}}'> Sunday Sermons </a></li>
                                <li><a href="{{route('shorts')}}" class='{{($route=='shorts')?'active':' '}}'> Short Messages </a></li>
                                <li><a href="{{route('series')}}" class='{{($route=='series')?'active':' '}}'> Series</a></li>
                                <li><a href="{{route('articles')}}" class='{{($route=='articles')?'active':' '}}'> Articles </a></li>
                                <li><a href="{{route('others')}}" class='{{($route=='others')?'active':' '}}'> Other Collections </a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('worships')}}" class='{{($route=='worships')?'active':' '}}'> Worships-Songs </a></li>
                        <li><a href="{{route('testimonies')}}" class='{{($route=='testimonies')?'active':' '}}'> Testimonies </a></li>
                        <li><a href="{{route('events')}}" class='{{($route=='events')?'active':' '}}'> Events </a></li>
                    </ul>
                </li>
                <li><a href="{{route('contact')}}"class='{{($route=='contact')?'active':' '}}'>Contact</a></li>

                <li><a class="get-a-quote" href="{{route('contact')}}">አማርኛ/English</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- End Header -->


{{--// Yield here the contents from main--}}
@section('title')
        Naioth in Ramah | Categories
    @endsection

        @php
            $route = Route::current()->getName();
        @endphp
<br>
<br>
        <div class="container gallery-container">
            @foreach ($category as $catego)
                <h1>{{ $catego->name }}</h1>
            @endforeach

            <div class="tz-gallery">
                @foreach ($category as $categor)
                    @foreach ($categor->galleries as $gallery)
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="{{asset($gallery->images)}}">
                                <img src="{{asset($gallery->images)}}" alt="Park">
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>


        </div>


<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>Naoith in Ramah</span>
                </a>
                <p>We would like minister you and for you to minister to us. We are based in Japan</p>
                <div class="social-links d-flex mt-4">
                    {{--                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>--}}
                    {{--                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>--}}
                    {{--                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>--}}
                    <a href="https://www.youtube.com/@pastorkidustsegayeofficial3813" class="youtube"><i class="bi bi-youtube"></i></a>
                    <a href="https://www.facebook.com/NaiothTheRamah" class="facebook"><i class="bi bi-facebook"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="{{route('home')}}" class='{{($route=='home')?'active':' '}}'>Home</a></li>
                    <li><a href="{{route('about')}}" class='{{($route=='about')?'active':' '}}'>About us</a></li>
                    <li><a href="{{route('prayers')}}" class='{{($route=='prayers')?'active':' '}}'> Prayers </a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="{{route('members')}}" class='{{($route=='members')?'active':' '}}'>Our members</a></li>
                    <li><a href="{{route('testimonies')}}" class='{{($route=='testimonies')?'active':' '}}'>Testimonies</a></li>
                    <li><a href="{{route('gallery')}}" class='{{($route=='gallery')?'active':' '}}'>Gallery</a></li>
                    <li><a href="{{route('worships')}}" class='{{($route=='worships')?'active':' '}}'>Worships-Songs</a></li>
                    <li><a href="{{route('sermons')}}" class='{{($route=='sermons')?'active':' '}}'> Sunday Sermons </a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>
                    Higashiyotsugichiku Community Center, 2nd Floor<br>
                    124-0014, 1-20-4 Katsushika City<br>
                    Japan <br><br>
                    <strong>Phone:</strong> +81 9091925271<br>
                    <strong>Email:</strong> kiduskkk@yahoo.com<br>
                </p>

            </div>

        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span> Happy Creatives </span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>

</footer><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

{{-- Enable preloader for loading animation

<div id="preloader"></div>--}}

<!-- Vendor JS Files -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

        <script>
            baguetteBox.run('.tz-gallery');
        </script>
<script src="{{asset('front_end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('front_end/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('front_end/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('front_end/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front_end/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('front_end/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('front_end/assets/js/main.js')}}"></script>


</body>
</html>




