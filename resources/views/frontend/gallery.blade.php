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
            <h2 class="text-center heading">Our Gallery</h2>
            <div class="d-flex justify-content-between container col-3">
                <a href="{{ route('home') }}" class="text-light text-decoration-none">Home</a>
                <span>/</span>
                <a href="{{ route('gallery') }}" class="text-light text-decoration-none">Gallery</a>
            </div>
        </div>
    </section>

    <section id="photoGallery" class="container col-lg-9 my-5">
    
        <!-- Filter Buttons -->
        <div class="text-center mb-4">
            <button class="btn filter-btn active" data-filter="all">All</button>
            <button class="btn filter-btn" data-filter="hill">Hill</button>
            <button class="btn filter-btn" data-filter="sea">Sea Beach</button>
            <button class="btn filter-btn" data-filter="forest">Forest</button>
            <button class="btn filter-btn" data-filter="religious">Religious</button>
        </div>
    
        <!-- Gallery Grid -->
        <div class="row g-3 gallery-grid">
            
            @foreach ($gallery as $val)    
                <div class="col-lg-4 col-md-6 gallery-item" data-category="{{ $val->type }}">
                    <img src="{{ asset($val->image) }}" class="gallery-img" alt="{{ $val->name }}">
                </div>
                <div class="col-lg-4 col-md-6 gallery-item" data-category="{{ $val->type }}">
                    <img src="{{ asset($val->img1) }}" class="gallery-img" alt="{{ $val->name }}">
                </div>
                <div class="col-lg-4 col-md-6 gallery-item" data-category="{{ $val->type }}">
                    <img src="{{ asset($val->img2) }}" class="gallery-img" alt="{{ $val->name }}">
                </div>
                <div class="col-lg-4 col-md-6 gallery-item" data-category="{{ $val->type }}">
                    <img src="{{ asset($val->img3) }}" class="gallery-img" alt="{{ $val->name }}">
                </div>
                <div class="col-lg-4 col-md-6 gallery-item" data-category="{{ $val->type }}">
                    <img src="{{ asset($val->img4) }}" class="gallery-img" alt="{{ $val->name }}">
                </div>
                <div class="col-lg-4 col-md-6 gallery-item" data-category="{{ $val->type }}">
                    <img src="{{ asset($val->img5) }}" class="gallery-img" alt="{{ $val->name }}">
                </div>
            @endforeach
        </div>
    </section>
    
    @include('frontend.include.footer')

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function () {

            // Filter Images
            $('.filter-btn').click(function () {
                let filter = $(this).data('filter');

                $('.filter-btn').removeClass('active');
                $(this).addClass('active');

                if (filter === "all") {
                    $('.gallery-item').fadeIn();
                } else {
                    $('.gallery-item').hide();
                    $(`.gallery-item[data-category*="${filter}"]`).fadeIn();
                }
            });

            // Lightbox
            $(".gallery-img").click(function () {
                let src = $(this).attr("src");
                $("#lightboxImage").attr("src", src);
                $("#lightboxOverlay").fadeIn();
            });

            $("#lightboxClose, #lightboxOverlay").click(function () {
                $("#lightboxOverlay").fadeOut();
            });

        });
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