<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us | Best Tour & Travel Agency</title>

    <!-- Your existing CSS & CDN links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.3/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background-color: #fdfafa;">
    @include('frontend.include.navbar')

    <!-- =====================================
                ABOUT US SECTION
    ====================================== -->
    <section class="py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="row align-items-center" data-aos="fade-up">
                <div class="col-md-6 mb-4">
                    <h1 class="fw-bold" style="font-family: 'Montserrat'; font-size: 42px; color:#333;">
                        About <span style="color:#ff7a00;">Our Travel Agency</span>
                    </h1>
                    <p class="mt-3" style="font-size:17px; font-family:'Open Sans'; color:#555; line-height:1.7;">
                        For over <strong>17+ years</strong>, we have proudly served as one of the most trusted and
                        customer-focused tour & travel booking companies. Our mission is simple — to make every journey
                        joyful, stress-free, and unforgettable.
                    </p>

                    <p style="font-size:17px; font-family:'Open Sans'; color:#555; line-height:1.7;">
                        From international vacations to domestic getaways, luxury stays, honeymoon packages, family
                        tours, flight bookings, hotel reservations, and custom-made itineraries — we bring everything
                        under one roof with unmatched convenience and transparency.
                    </p>

                    <p style="font-size:17px; font-family:'Open Sans'; color:#555; line-height:1.7;">
                        With a strong network of trusted partners, certified tour operators, and experienced travel
                        experts, we ensure you always experience <strong>comfort, safety, and excellence</strong> at
                        every step of your journey.
                    </p>

                    <div class="mt-4">
                        <a href="{{ route('contact') }}" class="btn btn-warning px-4 py-2"
                            style="font-weight:600; border-radius:50px;">Contact Us</a>
                        <a href="{{ route('destination') }}" class="btn btn-outline-dark px-4 py-2"
                            style="font-weight:600; border-radius:50px; margin-left:10px;">Explore Packages</a>
                    </div>
                </div>

                <div class="col-md-6 text-center" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1"
                        class="img-fluid rounded shadow" alt="About Travel Agency">
                </div>
            </div>
        </div>
    </section>


    <!-- =====================================
            WHY CHOOSE US SECTION
    ====================================== -->
    <section class="py-5" style="background-color:#f8f6f4;">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" style="font-family: 'Montserrat';">Why Choose Us?</h2>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="p-4 text-center bg-white shadow-sm rounded">
                        <i class="fas fa-calendar-check fa-3x mb-3 text-warning"></i>
                        <h5 class="fw-bold">17+ Years of Experience</h5>
                        <p class="mt-2 text-muted">Proven excellence in delivering world-class travel services.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="p-4 text-center bg-white shadow-sm rounded">
                        <i class="fas fa-hotel fa-3x mb-3 text-warning"></i>
                        <h5 class="fw-bold">Best Hotels Guaranteed</h5>
                        <p class="mt-2 text-muted">Handpicked premium hotels for ultimate comfort.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 text-center bg-white shadow-sm rounded">
                        <i class="fas fa-route fa-3x mb-3 text-warning"></i>
                        <h5 class="fw-bold">Tailor-Made Travel Plans</h5>
                        <p class="mt-2 text-muted">Customized itineraries designed exactly for your travel style.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="450">
                    <div class="p-4 text-center bg-white shadow-sm rounded">
                        <i class="fas fa-headset fa-3x mb-3 text-warning"></i>
                        <h5 class="fw-bold">24/7 Customer Support</h5>
                        <p class="mt-2 text-muted">We’re here whenever you need help or guidance.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="p-4 text-center bg-white shadow-sm rounded">
                        <i class="fas fa-plane-departure fa-3x mb-3 text-warning"></i>
                        <h5 class="fw-bold">Affordable Travel Deals</h5>
                        <p class="mt-2 text-muted">Best prices with no hidden charges.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="750">
                    <div class="p-4 text-center bg-white shadow-sm rounded">
                        <i class="fas fa-users fa-3x mb-3 text-warning"></i>
                        <h5 class="fw-bold">Trusted by Thousands</h5>
                        <p class="mt-2 text-muted">A large and growing family of satisfied travelers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.include.footer')

    <!-- Existing Scripts -->
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
    <script src="assets/js/script.js"></script>

</body>

</html>
