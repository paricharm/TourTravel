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
    <section id="google-map" class="container-fluid">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.147156991244!2d86.98961657484342!3d23.670694891832582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f719309c175c51%3A0xd8c0b692eb7fbe8a!2sMXCR%2B7VM%20Chakraborty%20More%2C%20opposite%20of%20yuba%20saranee%20club%2C%20Mohishila%20Colony%2C%20JalaramHousing%2C%20Ushagram%2C%20Asansol%2C%20West%20Bengal%20713303!5e0!3m2!1sen!2sin!4v1763017697643!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="true" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section id="contact" class="container-fluid py-5">
        <div class="container col-lg-9">
            <div class="row gx-4 gy-4 justify-content-center">
    
                <!-- Phone Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="smallbox text-center p-4">
                        <div class="row">
                            <div class="col-12">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="partition mx-auto"></div>
                            <div class="contact-info">
                                <span>+91 85976 34161</span>
                                <span>+91 85976 34161</span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Address Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="smallbox text-center p-4">
                        <div class="row">
                            <div class="col-12">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="partition mx-auto"></div>
                            <div class="contact-info">
                                <span>1 No Mohishila Colony,</span>
                                <span>Chakarbati More, Asansol</span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Email Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="smallbox text-center p-4">
                        <div class="row">
                            <div class="col-12">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="partition mx-auto"></div>
                            <div class="contact-info">
                                <span>demo@gmail.com</span>
                                <span>info@travelworld.com</span>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    <section id="contactForm" class="container-fluid py-5">
        <div class="container col-lg-8">
          <div class="text-center mb-4">
            <h2 class="fw-bold">Get in touch</h2>
            <p class="text-muted">
              If you have any questions, just fill in the contact form, and we will answer you shortly.
            </p>
          </div>
      
          <form id="contact-form" novalidate>
            <div class="row g-4">
              <!-- Name -->
              <div class="col-md-4">
                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                <div class="invalid-feedback">The text field is required.</div>
              </div>
      
              <!-- Email -->
              <div class="col-md-4">
                <input type="email" class="form-control" id="email" placeholder="E-mail" required>
                <div class="invalid-feedback">The text field is required.</div>
              </div>
      
              <!-- Phone -->
              <div class="col-md-4">
                <input type="tel" class="form-control" id="phone" placeholder="Phone" pattern="[0-9]+" required>
                <div class="invalid-feedback">Only numbers are required.</div>
              </div>
      
              <!-- Message -->
              <div class="col-12">
                <textarea class="form-control" id="message" rows="6" placeholder="Message" required></textarea>
                <div class="invalid-feedback">The text field is required.</div>
              </div>
      
              <!-- Submit Button -->
              <div class="col-12">
                <button type="submit" class="btn send-btn">Send Message</button>
              </div>
            </div>
          </form>
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
    <script src="assets/js/script.js"></script>
</body>

</html>