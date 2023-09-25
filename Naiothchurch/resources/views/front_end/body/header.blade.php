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

{{--                <li><a class="get-a-quote" href="{{route('contact')}}">አማርኛ/English</a></li>--}}
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- End Header -->
