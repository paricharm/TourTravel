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

    <section id="gallerytop" class="container-fluid mb-3">
        <div class="container col-lg-6 col-12 text-white">
            <h2 class="text-center heading">Premium Travel Membership</h2>
            <p class="fs-5 mt-3 text-center">Travel More, Spend Less — Enjoy Free Stay, Food & Tour Benefits</p>
        </div>
    </section>
    
    <section class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
    
                <div class="membership-card shadow-lg p-4 rounded bg-white">
    
                    <!-- Price -->
                    <div class="text-center mb-4">
                        <h2 class="fw-bold heading">₹5000 / 1 Year</h2>
                        <p class="text-muted">(2 Adults + 1 Child Under 5 Years)</p>
                    </div>
    
                    <hr>
    
                    <!-- Included Packages -->
                    <h4 class="fw-bold mb-3 heading_text">Membership Includes</h4>
    
                    <ul class="benefits-list">
                        <li><i class="fa-solid fa-mountain icon"></i> <b>Hill Station Package:&nbsp;&nbsp;</b> 3 Nights / 4 Days Food & Lodging Free</li>
                        <li><i class="fa-solid fa-umbrella-beach icon"></i> <b>Sea Beach Package:&nbsp;&nbsp;</b> 3 Nights / 4 Days Food & Lodging</li>
                        <li><i class="fa-solid fa-landmark icon"></i> <b>Tarapith & Deoghar:&nbsp;&nbsp;</b> 3 Nights / 4 Days Food & Lodging</li>
                        <li><i class="fa-solid fa-tree icon"></i> <b>Forest Package:&nbsp;&nbsp;</b> 3 Nights / 4 Days Food & Lodging </li>
                    </ul>
    
                    <hr>
    
                    <!-- More Details -->
                    <h4 class="fw-bold mt-4 heading_text">Membership Details</h4>
    
                    <ul class="benefits-list">
                        <li><i class="fa-solid fa-calendar-check icon"></i> Validity: 1 Year</li>
                        <li><i class="fa-solid fa-clock icon"></i> Booking must be done within 60 days</li>
                        <li><i class="fa-solid fa-hotel icon"></i> Choose from partner Hotels / Homestays</li>
                        <li><i class="fa-solid fa-users icon"></i> For 2 Adults + 1 Child (Below 5 years)</li>
                        <li><i class="fa-solid fa-phone icon"></i> 24/7 Phone Support Available</li>
                        <li><i class="fa-solid fa-globe icon"></i> Assistance from our Tourism Support Website</li>
                    </ul>
    
                    <hr>
    
                    <!-- Terms & Conditions Section -->
                    <div class="mt-4 mb-3 p-3 rounded" style="background:#f8f9fa; border:1px solid #ddd;">
                        <h5 class="fw-bold heading_text mb-2">Terms & Conditions</h5>

                        <ul class="mb-3" style="padding-left: 18px;">
                            <li>Hotel room check-in and check-out timings are fully decided by the hotel management.</li>
                            <li>Guests must carry valid ID proof during check-in.</li>
                        </ul>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="termsCheck">
                            <label class="form-check-label" for="termsCheck" style="cursor:pointer;">
                                I agree to the 
                                <a href="#" target="_blank" class="text-primary">Terms & Conditions</a>
                            </label>
                        </div>
                    </div>

    
                    <div class="text-center mt-4">
                        <a id="buyBtn"
                           href="{{ route('register') }}"
                           class="btn btn-primary px-5 py-2 disabled"
                           style="pointer-events: none; opacity: 0.6;">
                            Buy Membership
                        </a>
                    </div>
    
                </div>
    
            </div>
        </div>
    </section>
    
    
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Typed.js v2.1.0 -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- SweetAlert2 v11.23.0 -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/condition.js') }}"></script>
    <script src="{{ asset('assets/js/cookie.js') }}"></script>
</body>

</html>