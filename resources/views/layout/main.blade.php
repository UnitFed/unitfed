
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UnitFed | Gestion d'unité locale fédéré</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">

  @stack('css')

  <body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
      @include('layout.navbar')
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
      @yield('content')
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    @include('layout.sidebar')
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('layout.footer')
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <!-- <script src="{{ asset('js/adminlte.js') }}"></script> -->

  @stack('js')

</body>
</html>
