<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tourism | Places</title>

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
            <h1 class="m-0">Tourist Places</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tourist Places</li>
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
            <div class="text-center">
                <h4>Add Tourist Place</h4>
            </div>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.add.new.places') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Name:</span></div>
                    <div class="col-9"><input type="text" class="form-control" name="place_name"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Description :</span></div>
                    <div class="col-9"><input type="text" class="form-control" name="short_desc"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Image:</span></div>
                    <div class="col-9"><input type="file" class="form-control" name="place_img" accept=".png,.jpg,.jpeg"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Img1:</span></div>
                    <div class="col-9"><input type="file" class="form-control" name="img1" accept=".png,.jpg,.jpeg"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Img2:</span></div>
                    <div class="col-9"><input type="file" class="form-control" name="img2" accept=".png,.jpg,.jpeg"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Img3:</span></div>
                    <div class="col-9"><input type="file" class="form-control" name="img3" accept=".png,.jpg,.jpeg"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Img4:</span></div>
                    <div class="col-9"><input type="file" class="form-control" name="img4" accept=".png,.jpg,.jpeg"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Img5:</span></div>
                    <div class="col-9"><input type="file" class="form-control" name="img5" accept=".png,.jpg,.jpeg"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2">
                  <div class="row">
                    <div class="col-3"><span>Type:</span></div>
                    <div class="col-9">
                      <select name="place_type" class="form-control" id="">
                        <option value="">select</option>
                        <option value="hill">hill-station</option>
                        <option value="forest">forest</option>
                        <option value="religious">religious</option>
                        <option value="sea">sea</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-12 mt-2 mt-sm-3">
                  <div class="row">
                    <div class="col-3"></div>
                    <div class="col-9"><input type="submit" class="btn btn-default btn-outline-success btn-block" name="Submit"></div>
                  </div>
                </div>
              </div>
            </form>
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

</body>
</html>
