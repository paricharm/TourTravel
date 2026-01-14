<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membership Registration | Tourism</title>

    <!-- Your CSS & dependencies -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.3/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.theme.default.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        /* Registration Page Custom Styling */
        #registration-section {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            margin-top: 40px;
            margin-bottom: 40px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.12);
        }

        .section-title {
            font-weight: 700;
            font-size: 22px;
            color: #2c3e50;
            border-left: 6px solid #3b9132;
            padding-left: 12px;
            margin-bottom: 22px;
        }

        .child-card {
            background: #eef6ec;
            border-left: 5px solid #3b9132;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 12px;
        }

        .btn-add-child {
            background: #3b9132;
            color: white;
            border-radius: 6px;
        }

        .btn-add-child:hover {
            background: #317c2a;
        }
        .is-invalid {
            border-color: #dc3545 !important;
        }
</style>
</head>

<body style="background-color: #fdfafa;">

    @include('frontend.include.navbar')

    <!-- ======================= PAGE TITLE ======================= -->
    <section id="gallerytop" class="container-fluid mb-3">
        <div class="container col-lg-6 text-white">
            <h2 class="text-center heading">Membership Registration</h2>
            <div class="d-flex justify-content-between col-3 mx-auto">
                <a href="{{ route('home') }}" class="text-light text-decoration-none">Home</a>
                <span>/</span>
                <a href="#" class="text-light text-decoration-none">Registration</a>
            </div>
        </div>
    </section>

    <!-- ======================= REGISTRATION FORM ======================= -->
    <section class="container col-lg-7 col-md-9 col-11" id="registration-section">
        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        {{-- Error Message --}}
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        
        {{-- Validation Errors --}}
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        <h3 class="text-center fw-bold mb-4">Complete Your Membership</h3>

        <form method="POST" action="{{ route('signup') }}" enctype="multipart/form-data">
            @csrf
        
            <!-- Adults -->
            <div class="section-title">Primary Member Details</div>
        
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Person 1 Name *</label>
                    <input type="text" class="form-control @error('name1') is-invalid @enderror"
                           name="name1" value="{{ old('name1') }}">
                    @error('name1')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
        
                <div class="col-md-6 mb-3">
                    <label>Person 1 Age *</label>
                    <input type="number" class="form-control @error('age1') is-invalid @enderror"
                           name="age1" value="{{ old('age1') }}">
                    @error('age1')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
        
                <div class="col-md-6 mb-3">
                    <label>Person 2 Name *</label>
                    <input type="text" class="form-control @error('name2') is-invalid @enderror"
                           name="name2" value="{{ old('name2') }}">
                    @error('name2')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
        
                <div class="col-md-6 mb-3">
                    <label>Person 2 Age *</label>
                    <input type="number" class="form-control @error('age2') is-invalid @enderror"
                           name="age2" value="{{ old('age2') }}">
                    @error('age2')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        
            <!-- Contact -->
            <div class="section-title">Contact Details</div>
        
            <div class="mb-3">
                <label>Contact Number *</label>
                <input type="tel" class="form-control @error('contact') is-invalid @enderror"
                       name="contact" value="{{ old('contact') }}">
                @error('contact')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        
            <div class="mb-3">
                <label>Email (Optional)</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        
            <div class="mb-3">
                <label>Upload Photo *</label>
                <input type="file" class="form-control @error('userimage') is-invalid @enderror"
                       accept=".png,.jpg,.jpeg" name="userimage">
                @error('userimage')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        
            <div class="mb-3">
                <label>Residential Address *</label>
                <textarea class="form-control @error('address') is-invalid @enderror"
                          name="address" rows="3">{{ old('address') }}</textarea>
                @error('address')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        
            <!-- Children -->
            <div class="section-title">Children Details (If Any)</div>
        
            <div id="childrenContainer">
                {{-- children will append here --}}
            </div>
        
            <button type="button" class="btn btn-add-child mb-3" id="addChildBtn">
                + Add Child
            </button>
        
            <button class="btn btn-primary w-100 py-2 mt-3">Submit Registration</button>
            
        </form>
        @if(session('success'))
        
        <div class="my-3">
            <label class="form-label">Choose Payment Method:</label><br>
        
            <input type="radio" name="payment_method" id="online" value="online">
            <label for="online">Online Payment</label><br>
        
            <input type="radio" name="payment_method" id="cash" value="cash">
            <label for="cash">Cash Payment</label>
        </div>
        
        <!-- Online Payment Button -->
        <div id="onlinePaymentBtn" style="display: none;">
            <a href="{{ route('payment') }}" class="btn btn-primary w-100 py-2 mt-3">
                Make Payment
            </a>
        </div>
        
        <!-- Cash Payment Message -->
        <div id="cashMessage" style="display: none;">
            <div class="alert alert-info mt-3">
                Please call our support team to complete the cash payment.
            </div>
        </div>
        
        @endif

                            <div class="alert alert-info text-center rounded-3 mt-3" @if(session('success')) style="display:none" @endif>
                                After submit details please wait for make payment option
                            </div>
    </section>

    @include('frontend.include.footer')

    <!-- JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/js/register.js') }}"></script>

</body>

</html>