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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body style="background-color: #fdfafa;">
    @include('frontend.include.navbar')

    <section id="gallerytop" class="container-fluid mb-3">
        <div class="container col-lg-4 col-12 text-white">
            <h2 class="text-center heading">Room Details</h2>
            <div class="d-flex justify-content-between container col-7 col-lg-5">
                <a href="index.html" class="text-light text-decoration-none">Home</a>
                <span>/</span>
                <a href="gallery.html" class="text-light text-decoration-none">Room Detail</a>
            </div>
        </div>
    </section>

    @foreach ($hotels as $hotel)    
        <section id="hotelDetails" class="container col-lg-9 my-5">
        
            <!-- Hotel Banner -->
            <div class="hotel-banner mb-4">
                <img src="{{ asset('hotels/'.$hotel->img1) }}" class="img-fluid rounded w-100" style="height:350px; object-fit:cover;" loading='lazy'>
            </div>
        
            <!-- Title + Rating + Buttons -->
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center mb-3">
                <div>
                    <h2 class="fw-bold">{{$hotel->name}}</h2>
                    <p class="text-warning fs-5 mb-1">★★★★★
                        <span class="text-muted fs-6"> (234 Reviews)</span>
                    </p>
                    <p class="text-muted mb-0"><i class="fa-solid fa-location-dot me-2"></i>{{$hotel->address}}</p>
                </div>
        
                <div class="mt-3 mt-lg-0">
                    <button id="viewDetailsBtn" class="btn btn-primary px-4 me-2">View Details</button>
                    <a href="{{ route('membership') }}" class="btn btn-success px-4">Get Membership</a>
                </div>
            </div>
        
            <hr>
        
            <!-- ROOM IMAGES SECTION (Initially Hidden) -->
            <div id="roomGallery" class="my-4" style="display:none;">
                <h4 class="fw-bold mb-3">Room Gallery</h4>
        
                <div class="row g-4">
                    <!-- Room 1 -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <img src="{{ asset('hotels/'.$hotel->img1) }}" class="img-fluid rounded shadow-sm"
                            style="height:220px; object-fit:cover;" loading="lazy">
                    </div>
        
                    <!-- Room 2 -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <img src="{{ asset('hotels/'.$hotel->img2) }}" class="img-fluid rounded shadow-sm"
                            style="height:220px; object-fit:cover;" loading="lazy">
                    </div>
        
                    <!-- Room 3 -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <img src="{{ asset('hotels/'.$hotel->img3) }}" class="img-fluid rounded shadow-sm"
                            style="height:220px; object-fit:cover;" loading="lazy">
                    </div>
                </div>
        
                <hr class="my-4">
            </div>
        
            <!-- ABOUT HOTEL -->
            <div class="about-hotel my-4">
                <h4 class="fw-bold mb-3">About This Hotel</h4>
                <p class="text-muted">
                    {{ $hotel->short_desc }}
                </p>
            </div>
        
            <!-- AMENITIES -->
            <div class="hotel-amenities my-4">
                <h4 class="fw-bold mb-3">Amenities</h4>
        
                <div class="row g-3">
                    
                    <div class="col-md-3 col-6"><i class="fa-solid fa-swimmer text-success me-2"></i> Swimming Pool</div>
                    <div class="col-md-3 col-6"><i class="fa-solid fa-utensils text-success me-2"></i> Restaurant</div>
                    <div class="col-md-3 col-6"><i class="fa-solid fa-car text-success me-2"></i> Parking</div>
                    <div class="col-md-3 col-6"><i class="fa-solid fa-tv text-success me-2"></i> LED TV</div>
                    <div class="col-md-3 col-6"><i class="fa-solid fa-concierge-bell text-success me-2"></i> Room Service</div>
                    <div class="col-md-3 col-6"><i class="fa-solid fa-shield-halved text-success me-2"></i> 24x7 Security</div>
                </div>
            </div>
        
        </section>
    @endforeach
    
    @include('frontend.include.footer')

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
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
    <script>
        $(document).ready(function(){
            $("#viewDetailsBtn").click(function () {
                $("#roomGallery").slideToggle(400);

                // Change Button Text
                if ($(this).text() === "View Details") {
                    $(this).text("Hide Details");
                } else {
                    $(this).text("View Details");
                }
                     });
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Typed.js v2.1.0 -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- SweetAlert2 v11.23.0 -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>