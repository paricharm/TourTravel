<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best Tour & Travel Agency</title>
    <!-- Font Awesome v6 (via Kit or CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.3/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Owl Carousel v2.3.4 -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body style="background-color: #fdfafa;">
    @include('frontend.include.navbar')
    <!-- navbar end -->
    <section id="main" class="container-fluid">
        <!-- slider section -->
        <div class="owl-carousel vertical-slider">
            <div class="item slide1">
                <div class="description">
                    <span class="text-uppercase heading_text" style="font-size: 16px;font-weight:500">build your next
                        holiday trip with us</span>
                    <h2 class="heading my-3 d-lg-none d-block" style="font-size: 45px;">Create <span
                            style="font-weight: 800;">Your Tour</span>
                    </h2>
                    <h2 class="heading my-3 d-none d-lg-block" style="font-size: 75px;">Create <span
                            style="font-weight: 800;">Your Tour</span>
                    </h2>
                    <div class="touchbtn">
                        <span>Get in touch</span>
                    </div>
                </div>
            </div>
            <div class="item slide2">
                <div class="description">
                    <span class="text-uppercase heading_text" style="font-size: 16px;font-weight:500">a team of
                        professional travel experts</span>
                    <h2 class="heading my-3 d-lg-none d-block" style="font-size: 45px;">Trust <span
                            style="font-weight: 800;">Our Experience</span>
                    </h2>
                    <h2 class="heading my-3 d-none d-lg-block" style="font-size: 75px;">Trust <span
                            style="font-weight: 800;">Our Experience</span>
                    </h2>
                    <div class="touchbtn">
                        <span>Get in touch</span>
                    </div>
                </div>
            </div>
            <div class="item slide3">
                <div class="description">
                    <span class="text-uppercase heading_text" style="font-size: 16px;font-weight:500">build your next
                        holiday trip with us</span>
                    <h2 class="heading my-3 d-lg-none d-block" style="font-size: 45px;">Explor <span
                            style="font-weight: 800;">The World</span>
                    </h2>
                    <h2 class="heading my-3 d-lg-block d-none" style="font-size: 75px;">Explor <span
                            style="font-weight: 800;">The World</span>
                    </h2>
                    <div class="touchbtn">
                        <span>Get in touch</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- OUR TOUR SECTION -->
        <div class="container col-lg-9 col-12" id="our_tour">
            <div class="ourtour-desktop d-none d-lg-flex justify-content-between w-100 row gx-5">
                <div class="col-lg-4">
                    <div class="owl-carousel tour-slider col-lg-12">
                        @foreach ($sea as $val)    
                        <div class="tours">
                           <img src="{{ asset($val->image) }}" class="img-fluid"
                                loading="lazy"> 
                                <div class="tour-caption">{{$val->name}}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="owl-carousel tour-slider col-lg-12">
                        @foreach ($religious as $val)    
                        <div class="tours">
                           <img src="{{ asset($val->image) }}" class="img-fluid"
                                loading="lazy"> 
                                <div class="tour-caption">{{$val->name}}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="owl-carousel tour-slider col-lg-12">
                        @foreach ($forest as $val)    
                        <div class="tours">
                           <img src="{{ asset($val->image) }}" class="img-fluid"
                                loading="lazy"> 
                                <div class="tour-caption">{{$val->name}}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="ourtour-mobile d-lg-none my-3">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="owl-carousel tour-slider col-lg-12">
                            @foreach ($sea as $val)    
                            <div class="tours">
                               <img src="{{ asset($val->image) }}" class="img-fluid"
                                    loading="lazy"> 
                                    <div class="tour-caption">{{$val->name}}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="owl-carousel tour-slider col-lg-12">
                            @foreach ($forest as $val)    
                            <div class="tours">
                               <img src="{{ asset($val->image) }}" class="img-fluid"
                                    loading="lazy"> 
                                    <div class="tour-caption">{{$val->name}}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="owl-carousel tour-slider col-lg-12">
                            @foreach ($religious as $val)    
                            <div class="tours">
                               <img src="{{ asset($val->image) }}" class="img-fluid"
                                    loading="lazy"> 
                                    <div class="tour-caption">{{$val->name}}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                    {{-- <div class="col-12 tours" data-aos="fade-down" data-aos-delay="350">
                        <img src="{{ asset('assets/img/beach.jpg') }}" alt="Beach Tour" loading="lazy">
                        <div class="tour-caption">Beach Tours</div>
                    </div> --}}
                </div>

                <!-- "Other Tours" link -->
                <div class="text-center mt-lg-0 mt-4">
                    <a class="text-decoration-none othertour heading_text text-dark" href="{{ route('destination') }}">
                        Other Tours <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- ✅ Desktop “Other Tours” link -->
        <div class="container d-none d-lg-block text-center my-3">
            <a class="text-decoration-none othertour heading_text text-dark" href="{{ route('destination') }}">
                Other Tours <i class="fas fa-arrow-right"></i>
            </a>
        </div>

    </section>
    <section id="body" class="container-fluid py-5">
        <!-- short description -->
        <div class="container col-lg-9 mb-5">
            <div class="row gx-5 align-items-center">

                <!-- Left Image -->
                <div class="col-lg-6 col-12 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="400">
                    <img src="assets/img/blog-post-4-568x492.jpg" loading="lazy" class="img-fluid rounded shadow-sm"
                        alt="Discover New Horizons">
                </div>

                <!-- Right Content -->
                <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="420">
                    <h2 class="text-sm-start text-center fw-bold mb-4">Discover New Horizons</h2>

                    <div id="tourTabs">
                        <!-- Tab Header -->
                        <div class="tab-header position-relative mb-4 text-uppercase">
                            <div class="tab-btn active" data-tab="tab1">About Us</div>
                            <div class="tab-btn" data-tab="tab2">Why Choose Us</div>
                            <div class="tab-btn" data-tab="tab3">Our Mission</div>
                            <div class="tab-underline"></div>
                        </div>

                        <!-- Tab Content -->
                        <div class="tab-content text-dark">
                            <div class="tab-panel active" id="tab1">
                                <p class="text-center text-sm-start">Wonder Tour is committed to bringing our clients
                                    the best in value and quality travel
                                    arrangements. We are passionate about travel and sharing the world's wonders with
                                    you.
                                </p>
                                <div class="mt-5 row">
                                    <div class="col-12 col-lg-6 text-sm-start text-center "><a href="#"
                                            class="tab-link1">Get in Touch</a></div>
                                    <div class="col-12 col-lg-6 text-sm-start text-center  mt-5 mt-lg-0"><a href="#"
                                            class="tab-link2">Read More</a></div>
                                </div>
                            </div>

                            <div class="tab-panel" id="tab2">
                                <p class="text-center text-sm-start">We are proud to offer excellent quality and value
                                    for money in our tours, giving you
                                    the
                                    chance to experience your chosen destination in an authentic and exciting way.</p>
                                <div class="row mt-5">
                                    <div class="col-12 col-lg-6 text-sm-start text-center"><a href="#"
                                            class="tab-link1">Get in Touch</a></div>
                                    <div class="col-12 col-lg-6 text-sm-start text-center mt-5 mt-lg-0"><a href="#"
                                            class="tab-link2">Read More</a></div>
                                </div>
                            </div>

                            <div class="tab-panel" id="tab3">
                                <p class="text-center text-sm-start">Our mission is to provide the ultimate travel
                                    planning experience while becoming a
                                    one-stop shop for every travel service available in the industry.</p>
                                <div class="row mt-5">
                                    <div class="col-12 col-lg-6 text-sm-start text-center"><a href="#"
                                            class="tab-link1">Get in Touch</a></div>
                                    <div class="col-12 col-lg-6 text-sm-start text-center mt-5 mt-lg-0"><a href="#"
                                            class="tab-link2">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our services -->
        <div class="container col-lg-9 my-3" id="our_service">
            <h2 class="heading text-center mb-5">Our Services</h2>
            <div class="row gx-5 gy-5 justify-content-center">

                <div class="col-12 col-md-6 col-lg-4 service">
                    <div class="service_inner text-center">
                        <div class="service_icon mb-3">
                            <i class="fa-solid fa-sliders"></i>
                        </div>
                        <h5 class="heading_text fw-bold">Personalised Matching</h5>
                        <p>Our unique matching system lets you find just the tour you want for your next holiday.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 service">
                    <div class="service_inner text-center">
                        <div class="service_icon mb-3">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <h5 class="heading_text fw-bold">Wide variety of Tours</h5>
                        <p>We offer a wide variety of personally picked tours with destinations all over the globe.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 service">
                    <div class="service_inner text-center">
                        <div class="service_icon mb-3">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <h5 class="heading_text fw-bold">24/7 Support</h5>
                        <p>You can always get professional support from our staff 24/7 and ask any question you have.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 service">
                    <div class="service_inner text-center">
                        <div class="service_icon mb-3">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h5 class="heading_text fw-bold">High Qualified Service</h5>
                        <p>Our tour managers are qualified, skilled, and friendly to bring you the best service.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 service">
                    <div class="service_inner text-center">
                        <div class="service_icon mb-3">
                            <i class="fa-solid fa-fire"></i>
                        </div>
                        <h5 class="heading_text fw-bold">Handpicked Hotels</h5>
                        <p>Our team offers only the best selection of affordable and luxury hotels to our clients.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 service">
                    <div class="service_inner text-center">
                        <div class="service_icon mb-3">
                            <i class="fa-solid fa-wallet"></i>
                        </div>
                        <h5 class="heading_text fw-bold">Best Price Gurantee</h5>
                        <p>If you find tours that are cheaper than ours, we will compensate the difference.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter section -->
        <div class="container col-lg-9 my-5" id="counter">
            <h2 class="heading_text text-center mb-5">7 Years of Dream of Following The Dream</h2>
            <div class="d-lg-flex justify-content-lg-between gx-5 w-100">
                <div class="col-lg-4 col-12 col-md-6 counter-outer">
                    <div class="counter-inner">
                        <div class="counter-content">
                            <i class="fa-solid fa-user-plus"></i>
                            <h3 class="count-num" data-count="2500">0</h3>
                            <p class="heading_text fs-5 fw-bold">Happy Travelars</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 col-md-6 counter-outer">
                    <div class="counter-inner">
                        <div class="counter-content">
                            <i class="fa-solid fa-users"></i>
                            <h3 class="count-num" data-count="2500">0</h3>
                            <p class="heading_text fs-5 fw-bold">Team Members</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 col-md-6 counter-outer">
                    <div class="counter-inner">
                        <div class="counter-content">
                            <i class="fa-solid fa-award"></i>
                            <h3 class="count-num" data-count="2500">0</h3>
                            <p class="heading_text fs-5 fw-bold">Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="book_tour" class="container-fluid">
        <div class="container col-lg-5 col-12 text-center">
            <h3 class="heading">First-class Impressions
                are Waiting for You!</h3>
            <h5 class="heading_text">Our agency offers travelers various tours and excursions with destinations all over
                the world. Browse our website to
                find your dream tour!</h5>
            <a href="{{ route('destination') }}" class="bookbutton num_button">Book a Tour Now</a>
        </div>
    </section>
    <section id="hotel_rooms" class="container col-lg-9 my-5">
        <h2 class="heading text-center mb-5">Featured Hotel Rooms</h2>

        @foreach ($places as $place)    
        <!-- ==================== PURI ==================== -->
        <div class="room-cards d-flex flex-lg-row flex-column shadow-sm overflow-hidden my-4" data-category="{{ $place->type }}">

            <!-- Owl Carousel Slider -->
            <div class="room-image col-lg-6 col-12">
                <div class="owl-carousel room-slider">
                    @foreach ($place->hotels as $val)    
                    <div>
                       <a href="{{ route('details',$val->unique_id) }}"><img src="{{ asset('hotels/'.$val->img1) }}" class="img-fluid w-100 h-100 object-fit-cover"
                            loading="lazy"></a> 
                        
                    </div>
                    <div>
                       <a href="{{ route('details',$val->unique_id) }}"><img src="{{ asset('hotels/'.$val->img2) }}" class="img-fluid w-100 h-100 object-fit-cover"
                            loading="lazy"></a> 
                        
                    </div>
                    <div>
                       <a href="{{ route('details',$val->unique_id) }}"><img src="{{ asset('hotels/'.$val->img3) }}" class="img-fluid w-100 h-100 object-fit-cover"
                            loading="lazy"></a> 
                        
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Room Content -->
            <div class="room-info col-lg-6 col-12 d-flex flex-column justify-content-center p-4 bg-white">
                <h4 class="fw-bold mb-2">{{$place->name}}</h4>
                <p class="text-warning mb-1">
                    ★★★★★ <span class="text-muted fs-6">128 reviews</span>
                </p>
                <p class="text-muted mb-4">
                    {{ $place->short_desc }}
                </p>
                <a href="{{ route('destination') }}" class="book-btn btn btn-primary col-lg-4 col-12">Buy This Package</a>
            </div>

        </div>
    @endforeach

        <div class="container col-12 col-lg-3 text-center">
            <div class="text-center mt-lg-0 mt-4">
                <a class="text-decoration-none othertour heading_text text-dark" href="{{ route('destination') }}">
                    Other Packages <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <section id="offer" class="container-fluid">
        <div class="container col-lg-5 col-12 text-center">
            <h2 class="heading_text">Sign Up for 25% Discount</h2>
            <p>Want to get an instant discount for your next tour? Leave your email and sign up for our newsletter with
                25% off all our
                offers.</p>
            <form action="" method="post">
                <div class="row gx-1">
                    <div class="col-8"><input type="text" placeholder="Enter your email" class="subscribetxt"></div>
                    <div class="col-4"><button type="submit" name="subscribe" class="subscribe-btn px-2">Subscribe</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section id="gallery" class="container col-lg-9 my-5">
        <h2 class="heading text-center mb-5">Our Travel Gallery</h2>

        <div class="owl-carousel gallery-slider">
            <div class="gallery-item"><img src="{{asset('assets/img/blog-post-1-568x492.jpg')}}" alt="Beach Tour"></div>
            <div class="gallery-item"><img src="{{asset('assets/img/beach.jpg')}}" alt="Mountain View"></div>
            <div class="gallery-item"><img src="{{asset('assets/img/maldives-islands-ocean-tropical-beach-600nw-1938868960.webp')}}"
                    alt="Temple"></div>
            <div class="gallery-item"><img src="{{asset('assets/img/mountain.jpg')}}" alt="City Night View"></div>
            <div class="gallery-item"><img src="{{asset('assets/img/sea-rzmc4vt49ysdefo2.jpg')}}" alt="Desert Safari"></div>
            <div class="gallery-item"><img src="{{asset('assets/img/blog-post-1-568x492.jpg')}}" alt="Beach Tour"></div>
        </div>

        <!-- Lightbox -->
        <div id="lightbox" class="lightbox">
            <span class="close">&times;</span>
            <img class="lightbox-img" src="" alt="Zoomed Image">
        </div>
    </section>

    @include('frontend.include.footer')

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.23.0/dist/sweetalert2.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $(document).ready(function(){
            AOS.init({
                once: true,
                duration: 800
            });
        $('.tour-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
        0: { items: 1 },
        576: { items: 1 },
        992: { items: 1 }
    }
    });
      $(".room-slider").owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 2500,
      autoplayHoverPause: true,
      dots:false,
      touchDrag:true
  });
        })
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cookieBox = document.getElementById("cookieConsent");
            const acceptBtn = document.getElementById("acceptCookies");
            const declineBtn = document.getElementById("declineCookies");

            // Check if user has already made a choice
            if (!localStorage.getItem("cookieConsent")) {
                cookieBox.style.display = "block";
            }

            acceptBtn.addEventListener("click", function () {
                localStorage.setItem("cookieConsent", "accepted");
                cookieBox.style.display = "none";
            });

            declineBtn.addEventListener("click", function () {
                localStorage.setItem("cookieConsent", "declined");
                cookieBox.style.display = "none";
            });
        });
    </script>
    <script>
    
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Typed.js v2.1.0 -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- SweetAlert2 v11.23.0 -->
    <script src="{{ asset("assets/js/script.js") }}"></script>
</body>

</html>