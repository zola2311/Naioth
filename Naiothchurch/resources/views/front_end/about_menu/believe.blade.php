@extends('front_end.body.links')

@section('main')

    @section('title')
        Naioth in Ramah | Believe
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
                        <h2> What we believe </h2>
                        <p> As an Evangelical church our beliefs and creeds align with the evangelical doctrine. We also believe that the Holy Spirit dispenses spiritual
                            gifts to believers as he deems fit for the time and the body. </p>
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
                    <li> What we believe </li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-6">

                <div class="col-lg-10 content order-last  order-lg-first">

                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h5> The Bible </h5>
                                <p>
                                    We teach the Bible is Holy Scripture and consists of the sixty-six books of the Old and New Testaments.
                                    The Bible alone is the Word of God, verbally inspired by God, without error in the original manuscripts,
                                    and the complete, sufficient, and only infallible rule of faith, life, and practice for every believer
                                    (2 Timothy 3:16- 17; Hebrews 4:12; 2 Peter 1:19-21; John 10:35; Revelation 22:18-19).
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-fullscreen-exit"></i>
                            <div>
                                <h5> The Triune God </h5>
                                <p>
                                    We teach that there is only one living and true God, Who is unchanging, self-existent, infinite, holy, an all-knowing Spirit,
                                    perfect in all His attributes, one in essence, eternally existing as three distinct Persons—Father, Son, and Holy Spirit—each
                                    equally deserving worship and obedience
                                    (Deuteronomy 6:4; Isaiah 46:9-10; John 4:24; Matthew 28:19; 1 Corinthians 8:4; 2 Corinthians 13:14).
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-broadcast"></i>
                            <div>
                                <h5> God the Father </h5>
                                <p>
                                    We teach that God the Father, the first Person of the Trinity, orders and disposes all things according to His own
                                    purpose and grace; He is the Creator of all things. As the absolute and omnipotent Ruler of the universe,
                                    He is sovereign in creation, providence, and redemption. As Creator He is Lord of all people and spiritual Father
                                    only to believers. He has decreed for His own glory all things that come to pass, knowing infinitely all things,
                                    from beginning to end. He continually upholds, directs, and governs all creatures and events.
                                    In His sovereignty He is neither the author nor approver of sin, yet he preserves the accountability of moral,
                                    intelligent creatures. He has graciously chosen from eternity past those whom He would have as His own;
                                    He saves from sin all who come to Him in faith through Jesus Christ; He adopts as His own all those who come to Him;
                                    and He becomes, upon adoption, Father to His own
                                    (Genesis 1:1-31; Psalm 103:19; 136:1; 145:8-9; 1 Chronicles 29:11; Habakkuk 1:13; Isaiah 6:1- 13; John 1:12; 8:38-47;
                                    Romans 8:14-15; 11:36; 1 Corinthians 8:6; 2 Corinthians 6:18; Galatians 4:5; Ephesians 1:4-11; 3:9; 4:6; 1 Timothy 1:17;
                                    1 Peter 1:17; Hebrews 12:5-9; 1 John 4:7-8).
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-plus-lg"></i>
                            <div>
                                <h5> Jesus Christ </h5>
                                <p>
                                    We teach that Jesus Christ is the second Person of the Trinity, possesses all the divine attributes,
                                    and in these He is coequal, consubstantial, and coeternal with the Father—He is God and is worthy of worship.
                                    Through Him all things were created and are presently sustained. We teach that God became a man in the Person of
                                    Jesus Christ (the Incarnation). As the Father’s only-begotten Son, Jesus was conceived by the Holy Spirit,
                                    was miraculously born of a virgin named Mary, lived a sinless life, and performed miracles. Jesus took on a
                                    human nature while maintaining His complete deity in an indivisible union. The purpose of this Incarnation was
                                    to reveal God, redeem humanity, and rule over God’s kingdom. As the God-Man, Jesus voluntarily died on the cross,
                                    in fulfillment of Scripture, as the only perfect and final substitute for sinful men. In His sacrificial,
                                    substitutionary death, Christ absorbed the full wrath of God on behalf of sinful humanity. He rose bodily from
                                    the grave on the third day, ascended into heaven to the right hand of the Father where He makes intercession for
                                    His people as their Advocate and High Priest; He is the only mediator between God the Father and humanity.
                                    He will return again physically to reward His saints ('saints' are people who have been born again through faith in \
                                    the gospel; i.e., "all believers"), to judge His enemies, and to reign as King of Kings. (Psalm 2:7-9; Matthew 2:11;
                                    John 1:1- 18, 5:23, 10:30, 14:9; 28; Luke 1:26-35; Romans 5:8; 1 Corinthians 15:1-3; 2 Corinthians 5:21; Philippians
                                    2:5-11; Colossians 1:15-17, 2:9; 1 Timothy 2:5; Revelation 19:1-21).
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="600">
                            <i class="bi bi-fire"></i>
                            <div>
                                <h5> The Holy Spirit </h5>
                                <p>
                                    We teach the Holy Spirit is the third Person of the Trinity. He is eternal, underived, possessing all the attributes
                                    of personality and deity. As a spirit, He possesses no body. Although distinct from the Father and the Son as a person
                                    and in function, He is coequal and consubstantial with Them in divine attributes. We recognize His sovereign activity
                                    in the creation (Genesis 1:2); the incarnation (Matthew 1:18); the resurrection of Christ (Romans 8:11); the written
                                    revelation (2 Peter 1:20-21); and the work of salvation (John 3:5-7). Under the Old Covenant economy, He did not \
                                    permanently indwell people, but came upon certain people for unique times and purposes. We teach a unique work of
                                    the Holy Spirit in this age began at Pentecost when He came from the Father as promised by Christ
                                    (John 14:16-17, 15:26; Acts 1:1-2:47) to initiate and complete the building of the body of Christ
                                    (Ephesians 4:12-13). His ministry includes convicting the world of sin, of righteousness, and of judgment;
                                    glorifying the Father (John 4:23, 14:16) and the Lord Jesus Christ (John 16:7-9; Acts 1:5, 2:4);
                                    baptizing all believers into the body of Christ (1 Corinthians 12:12); giving spiritual gifts to Christians as
                                    He wills (1 Corinthians 12:1-31); indwelling believers at the moment of salvation, and sealing them until the day of
                                    redemption, while leading, sanctifying, instructing, comforting and empowering them for service
                                    (Romans 8:9-11, 29; 2 Corinthians 3:6; Ephesians 1:13).
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

</main><!-- End #main -->

@endsection
