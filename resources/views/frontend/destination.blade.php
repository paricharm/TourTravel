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
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body style="background-color: #fdfafa;">
    @include('frontend.include.navbar')

    <section id="gallerytop" class="container-fluid mb-3">
        <div class="container col-lg-6 col-12 text-white">
            <h2 class="text-center heading">Explore Top Destinations</h2>
            <!-- <p class="text-white text-center">Discover beautiful places for your next holiday</p> -->
            <div class="d-flex justify-content-between container col-3">
                <a href="{{ route('home') }}" class="text-light text-decoration-none">Home</a>
                <span>/</span>
                <a href="{{ route('destination') }}" class="text-light text-decoration-none">Destination</a>
            </div>
        </div>
    </section>

    <section id="hotel_rooms" class="container col-lg-9 my-5">

        <!-- Filter Tabs -->
        <div class="my-4">
            <ul id="destinationTabs" class="nav nav-pills justify-content-center gap-2">
                <li class="nav-item">
                    <button type="button" class="nav-link active filter-btn" data-filter="all">All</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link filter-btn" data-filter="hill">Hill Stations</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link filter-btn" data-filter="sea">Sea Beach</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link filter-btn" data-filter="religious">Religious Places</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link filter-btn" data-filter="forest">Forest & Wildlife</button>
                </li>
            </ul>
        </div>

        @foreach ($places as $place)    
            <!-- ==================== PURI ==================== -->
            <div class="room-card d-flex flex-lg-row flex-column shadow-sm overflow-hidden my-4" data-category="{{ $place->type }}">
                <!-- Owl Carousel Slider -->
                <div class="room-image col-lg-6 col-12">
                    <div class="owl-carousel room-slider">
                           
                        <div>
                           <img src="{{ asset($place->image) }}" class="img-fluid w-100 h-100 object-fit-cover"
                                loading="lazy">
                            
                        </div>
                        <div>
                           <img src="{{ asset($place->img1) }}" class="img-fluid w-100 h-100 object-fit-cover"
                                loading="lazy">
                            
                        </div>
                        <div>
                           <img src="{{ asset($place->img2) }}" class="img-fluid w-100 h-100 object-fit-cover"
                                loading="lazy">
                            
                        </div>
                        <div>
                           <img src="{{ asset($place->img3) }}" class="img-fluid w-100 h-100 object-fit-cover"
                                loading="lazy">
                            
                        </div>
                        <div>
                           <img src="{{ asset($place->img4) }}" class="img-fluid w-100 h-100 object-fit-cover"
                                loading="lazy">
                            
                        </div>
                        <div>
                           <img src="{{ asset($place->img5) }}" class="img-fluid w-100 h-100 object-fit-cover"
                                loading="lazy">
                            
                        </div>
                        
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
                    <a href="{{ route('membership') }}" class="book-btn btn btn-primary col-lg-4 col-12">Buy This Package</a>
                </div>

            </div>
        @endforeach



    </section>

    @include('frontend.include.footer')

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function () {
            // Default show all
            $(".room-card").addClass("show");

            $(".filter-btn").click(function () {
                let filterValue = $(this).data("filter");

                $(".filter-btn").removeClass("active");
                $(this).addClass("active");

                $(".room-card").removeClass("show");

                if (filterValue === "all") {
                    $(".room-card").addClass("show");
                } else {
                    $(`.room-card[data-category="${filterValue}"]`).addClass("show");
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.23.0/dist/sweetalert2.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800
        });
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Typed.js v2.1.0 -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- SweetAlert2 v11.23.0 -->
    <script src="assets/js/script.js"></script>
</body>

</html>