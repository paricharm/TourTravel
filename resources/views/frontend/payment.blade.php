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
    <section class="py-5" style="background:#f8f9fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
    
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-body p-4">
    
                            <h3 class="text-center mb-3" style="font-weight:700;">
                                Make Payment
                            </h3>
                            <p class="text-center text-muted">
                                Pay securely to <strong>Bhabani Tour & Travels</strong>
                            </p>
    
                            <!-- QR Code Box -->
                            <div class="text-center my-4">
                                <div class="p-3 border rounded-4 shadow-sm bg-white">
                                        <img src="{{ asset('assets/img/qrcode.png')}}" alt="Payment"
                                            style="width:220px;" loading="lazy">
                                    <p class="mt-2 mb-0 fw-bold">Scan & Pay</p>
                                    <small class="text-muted">(UPI / Wallet / Bank App)</small>
                                </div>
                            </div>
    
                            <!-- Account Details -->
                            <h5 class="mt-4 fw-bold">Bank Account Details:</h5>
    
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Account Holder</span>
                                    <strong>Bhabani Tour & Travels</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Bank Name</span>
                                    <strong>State Bank of India</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Account Number</span>
                                    <strong id="accNo">12345678901234</strong>
                                    <button class="btn btn-sm btn-outline-primary" onclick="copyText('accNo')">
                                        Copy
                                    </button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>IFSC Code</span>
                                    <strong id="ifsc">SBIN0001234</strong>
                                    <button class="btn btn-sm btn-outline-primary" onclick="copyText('ifsc')">
                                        Copy
                                    </button>
                                </li>
                            </ul>
    
                            <!-- UPI ID -->
                            <h5 class="fw-bold">UPI Payment:</h5>
                            <div class="d-flex justify-content-between align-items-center border p-2 rounded mb-3">
                                <strong id="upiId">bhabani@upi</strong>
                                <button class="btn btn-sm btn-outline-primary" onclick="copyText('upiId')">
                                    Copy
                                </button>
                            </div>
    
                            <!-- Note -->
                            <div class="alert alert-info text-center rounded-3">
                                After payment, please share the screenshot with our support team for confirmation and within 24hrs your details sent to whatsapp and email shortly.
                            </div>
    
                        </div>
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
        function copyText(id) {
            let text = document.getElementById(id).innerText;
            navigator.clipboard.writeText(text);
    
            Swal.fire({
                icon: 'success',
                title: 'Copied!',
                text: text + ' copied to clipboard',
                timer: 1500,
                showConfirmButton: false
            });
        }
    </script>
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
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>