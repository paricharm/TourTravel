<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tourism | Details Users</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include("backend.include.navbar")

  @include("backend.include.sidebar")

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
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
        <div class="card shadow col-12 col-lg-12">
          <div class="card-header">
            <div class="row">
                <div class="col-lg-6 col-6">
                    <a href="{{ route('admin.all.users') }}" class="btn btn-success">Back</a>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="text-center">
                        <h4>User Details</h4>
                    </div>
                </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>First Person Name:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->firstusername }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>First Person Age:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->firstuserage }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Second Person Name:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->secondusername }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Second Person Age:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->seconduserage }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>First Child Name:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->firstchildname }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>First Child Age:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->firstchildage }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Second Child Name:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->secondchildname }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Second Child Age:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->secondchildage }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Third Child Name:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->thirdchildname }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Third Child Age:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->thirdchildage }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Forth Child Name:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->forthchildname }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Forth Child Age:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->forthchildage }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Address:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->address }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Email:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->emaill ?? null }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Contact:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ $details->mobile }}"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                    <div class="row">
                        <div class="col-3"><span>Image:</span></div>
                        <div class="col-7"><input type="file" class="form-control"></div>
                        <div class="col-2"><img src="{{ asset($details->userimage) }}" class="img-fluid" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Register Date:</span></div>
                    <div class="col-9"><input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($details->created_at)->format('F d, Y') }}
                        "></div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include("backend.include.footer")

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
</body>
</html>
