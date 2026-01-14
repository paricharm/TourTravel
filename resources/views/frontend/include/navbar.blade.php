<div class="container-fluid" id="header">
    <!-- navbar start desktop only -->
    <div class="col-lg-9 d-none d-lg-block">
        <div class="row">

            <div class="col-lg-4 logo col-8">
                    <a href="#" class="text-decoration-none "><img src="{{ asset('assets/img/logo.png') }}" alt="wingtourism" loading="lazy" style="height: 65px;width:135px"></a>
            </div>

            <div class="col-lg-3 d-none d-lg-block" style="border-right: 1px solid #3b9132;">
                <div class="center">
                    <div class="col-2"><i class="fas fa-clock colo fs-5 "></i></div>
                    <div class="col-9"><span style="font-size: 16px;" class="num_button"> 09:00 AM - 05:00 PM</span>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 d-none d-lg-block d-lg-flex justify-content-center align-items-center">
                <!-- <div class="center"> -->
                <div class="col-2"><i class="fa-solid fa-phone colo fs-5 "></i></div>
                <div class="col-6 text-center"><span style="font-size: 16px;" class="num_button"> +91 85976 34161</span></div>
                <!-- </div> -->
            </div>
            <div class="col-lg-2 d-none d-lg-block">
                <div class="button">
                    <span class="num_button">Get a Free Quote</span>
                </div>
            </div>

        </div>
    </div>
    <!-- for mobile device only -->
    <div class="container d-lg-none d-block">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-2">
                <i class="fas fa-bars fs-5" id="menubtn"></i>
            </div>
            <div class="logo col-9">
                <a href="#" class="text-decoration-none "><img src="{{ asset('assets/img/logo.png') }}" alt="wingtourism" loading="lazy" style="height: 65px;width:135px"></a>
            </div>
            <div class="col-1">
                <i class="fa-solid fa-ellipsis-vertical fs-5" id="sidebtn"></i>
            </div>
        </div>
    </div>
</div>

<!-- navbar menu -->
<div class="container-fluid" id="navbar">
    <!-- Desktop Navbar -->
    <div class="container d-none d-lg-flex justify-content-between align-items-center" style="height: 55px;">

        <!-- Menu -->
        <div class="col-lg-6">
            <ul class="menu d-flex justify-content-around align-items-center mb-0" style="list-style: none;">
                <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                <li class="{{ request()->routeIs('membership') ? 'active' : '' }}"><a href="{{ route('membership') }}" class="nav-link">Membership</a></li>
                <li class="{{ request()->routeIs('hotel') ? 'active' : '' }}"><a href="{{ route('hotel') }}" class="nav-link">Hotels</a></li>
                <li class="{{ request()->routeIs('destination') ? 'active' : '' }}"><a href="{{ route('destination') }}" class="nav-link">Destination</a></li>
                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>

        <!-- Social Icons -->
        <div class="col-lg-2">
            <ul class="d-flex align-items-center mb-0 justify-content-around" style="list-style: none;">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Mobile Navbar -->
    <div class="col-12 bg-light shadow d-lg-none" id="navmobile">
        <div class="container-fluid d-flex justify-content-around align-items-center"
            style="height: 80px; border-bottom:1px solid rgba(0,0,0,0.5)">
            <ul class="d-flex align-items-center mb-0 justify-content-around" style="list-style: none;width:70%">
                <li><a href="#"><i class="fa-brands fa-facebook text-dark"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-google text-dark"></i></a></li>
                <li><a href="#"><i class="fas fa-envelope text-dark"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram text-dark"></i></a></li>
            </ul>
        </div>
        <div class="container-fluid my-4">
            <ul class="d-flex text-dark mb-0 mobilemenuitem"
                style="list-style: none;flex-direction:column;gap:10px;width:100%">
                <li class="mitem {{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="mitem {{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="mitem {{ request()->routeIs('gallery') ? 'active' : '' }}"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                <li class="mitem {{ request()->routeIs('membership') ? 'active' : '' }}"><a href="{{ route('membership') }}" class="nav-link">Membership</a></li>
                <li class="mitem {{ request()->routeIs('hotel') ? 'active' : '' }}"><a href="{{ route('hotel') }}" class="nav-link">Hotels</a></li>
                <li class="mitem {{ request()->routeIs('destination') ? 'active' : '' }}"><a href="{{ route('destination') }}" class="nav-link">Destination</a></li>
                <li class="mitem {{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Mobile Details -->
    <div class="col-12 bg-light shadow my-4 d-lg-none" id="mobiledetail" style="display: none;">
        <div class="col-11 container mobilesidemenu py-2">
            <div class="row">
                <div class="col-2"><i class="fas fa-clock colo fs-5" style="color: #3b9132;"></i></div>
                <div class="col-10"><span style="font-size: 16px;" class="num_button text-dark">
                        09:00 AM - 05:00 PM
                    </span></div>
            </div>
        </div>
        <div class="col-11 container mobilesidemenu py-2">
            <div class="row">
                <div class="col-2"><i class="fa-solid fa-phone colo fs-5" style="color: #3b9132;"></i></div>
                <div class="col-10"><span style="font-size: 16px;" class="num_button text-dark">
                        +91 85976 34161
                    </span></div>
            </div>
        </div>
        <div class="col-11 container mobilesidemenu">
            <div class="button">
                <span class="num_button ">Get a Free Quote</span>
            </div>
        </div>
    </div>
</div>