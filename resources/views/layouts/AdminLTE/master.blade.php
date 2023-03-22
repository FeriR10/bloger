<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin - @yield('title') - {{env('APP_NAME')}}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('assets/AdminLTE')}}/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  @yield('link_style')
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/AdminLTE')}}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('assets/AdminLTE')}}/dist/css/skins/_all-skins.min.css">
  <!-- Pace Style -->
  <link rel="stylesheet" href="{{asset('assets/AdminLTE')}}/plugins/pace/pace.min.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  @yield('style')
</head>
<body class="hold-transition skin-green fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    
@include('layouts.AdminLTE.navbar')

  <!-- =============================================== -->

@include('layouts.AdminLTE.sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('title')
        <small>{{env('APP_NAME')}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> {{env('APP_NAME')}}</a></li>
        <li class="active">@yield('title')</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    @include('layouts.feedback')
    @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      {{Carbon::now()->format('l, d/m/Y H:i')}}
    </div>
    <strong>{{env('APP_NAME')}} &copy; {{Carbon::now()->format('Y')}}
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('assets/AdminLTE')}}/plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="{{asset('assets/AdminLTE')}}/bootstrap/js/bootstrap.min.js"></script>
<!-- PACE -->
<script src="{{asset('assets/AdminLTE')}}/plugins/pace/pace.min.js"></script>
@yield('link_script')
<!-- SlimScroll -->
<script src="{{asset('assets/AdminLTE')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{asset('assets/AdminLTE')}}/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/AdminLTE')}}/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/AdminLTE')}}/dist/js/demo.js"></script>
<!-- Sweetalert2 -->
<script src="{{ asset('assets/AdminLTE') }}/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script>
    $(document).ajaxStart(function() { Pace.restart(); });
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
</script>
@yield('script')
</body>
</html>
