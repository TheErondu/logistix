<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{ asset('dashboard/main/images/favicon.ico') }}" type="image/ico">
  <title>{{ Auth::user()->name }}'s Dashboard</title><!-- Bootstrap -->
  <link href="{{ asset('dashboard/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet"><!-- Font Awesome -->
  <link href="{{ asset('dashboard/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"><!-- NProgress -->
  <link href="{{ asset('dashboard/vendors/nprogress/nprogress.css') }}" rel="stylesheet"><!-- iCheck -->
  <link href="{{ asset('dashboard/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet"><!-- bootstrap-progressbar -->
  <link href="{{ asset('dashboard/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet"><!-- JQVMap -->
  <link href="{{ asset('dashboard/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"><!-- bootstrap-daterangepicker -->
  <link href="{{ asset('dashboard/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"><!-- Custom Theme Style -->
  <!-- Animate.css -->
  <link href="{{ asset('dashboard/vendors/animate.css/animate.min.css') }}" rel="stylesheet">
       <!-- Custom Theme Style -->
  <link href="{{ asset('dashboard/build/css/custom.min.css') }}" rel="stylesheet">
  <!-- PNotify -->
    <link href="{{ asset('dashboard/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">

</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cc10492d6e05b735b442a30/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('welcome') }}" class="site_title"><img src="{{ asset('dashboard/img/logo.png') }}" width="170" height="34" alt="logo"> <span>Dashboard</span></a>
          </div>

@yield('content')
    <script src="{{ asset('dashboard/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script> <!-- FastClick -->

    <script src="{{ asset('dashboard/vendors/fastclick/lib/fastclick.js') }}"></script> <!-- NProgress -->

    <script src="{{ asset('dashboard/vendors/nprogress/nprogress.js') }}"></script> <!-- Chart.js -->

    <script src="{{ asset('dashboard/vendors/Chart.js/dist/Chart.min.js') }}"></script> <!-- gauge.js -->

    <script src="{{ asset('dashboard/vendors/gauge.js/dist/gauge.min.js') }}"></script> <!-- bootstrap-progressbar -->

    <script src="{{ asset('dashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script> <!-- iCheck -->

    <script src="{{ asset('dashboard/vendors/iCheck/icheck.min.js') }}"></script> <!-- Skycons -->

    <script src="{{ asset('dashboard/vendors/skycons/skycons.js') }}"></script> <!-- Flot -->

    <script src="{{ asset('dashboard/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/Flot/jquery.flot.resize.js') }}"></script> <!-- Flot plugins -->

    <script src="{{ asset('dashboard/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/flot.curvedlines/curvedLines.js') }}"></script> <!-- DateJS -->

    <script src="{{ asset('dashboard/vendors/DateJS/build/date.js') }}"></script> <!-- JQVMap -->

    <script src="{{ asset('dashboard/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script> <!-- bootstrap-daterangepicker -->

    <script src="{{ asset('dashboard/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script> <!-- Custom Theme Scripts -->
    <script src="{{ asset('dashboard/build/js/custom.min.js') }}"></script>
</div>
</body>
</html>
