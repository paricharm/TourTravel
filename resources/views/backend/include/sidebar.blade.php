<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('assets/img/logo.png')}}" alt="wing tourism Logo" class="brand-image img-circle elevation-3" style="">
    <span class="brand-text font-weight-light">Wing Tourism</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      {{-- <div class="image">
      </div> --}}
      <div class="info">
        <a href="#" class="d-block">Admin Panel</a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.tourist.places') }}" class="nav-link {{ request()->is('admin/tourist/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-landmark"></i>
            <p>
              Tourist Places
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.tourist.hotels') }}" class="nav-link {{ request()->is('admin/hotels/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Tourist Hotels
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.all.users') }}" class="nav-link {{ request()->is('admin/users/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-user-plus"></i>
            <p>
              User Registered
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.all.payments') }}" class="nav-link {{ request()->is('admin/payments/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Payment
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.all.bookings') }}" class="nav-link {{ request()->is('admin/bookings/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-envelope"></i>
            <p>
              Bookings
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link">
            <i class="nav-icon fas fa-signoutw"></i>
            <p>
              Logout
            </p>
          </a>

        </li>
       
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>