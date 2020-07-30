<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- logo -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo2.png') }}">
    <!-- end logo -->

    <!-- css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/template/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/slicknav.css') }} ">
      <link rel="stylesheet" href="{{ asset('css/template/flaticon.css') }} ">
      <link rel="stylesheet" href="{{ asset('css/template/progressbar_barfiller.css') }} ">
      <link rel="stylesheet" href="{{ asset('css/template/gijgo.css') }} ">
      <link rel="stylesheet" href="{{ asset('css/template/animate.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/template/animated-headline.css') }}">
  	<link rel="stylesheet" href="{{ asset('css/template/magnific-popup.css') }}">
  	<link rel="stylesheet" href="{{ asset('css/template/fontawesome-all.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('css/template/themify-icons.css') }}">
  	<link rel="stylesheet" href="{{ asset('css/template/slick.css') }} ">
  	<link rel="stylesheet" href="{{ asset('css/template/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
    <!-- end css -->
  </head>
  <body>
    <!-- preloader -->
      @include('base.preloader')
    <!-- end preloader -->

    <!-- header -->
      @include('base.header')
    <!-- end header -->

    <a href="" class="btn">testing</a>

    <!-- content -->
    <main>
      @yield('content')
    </main>
    <!-- end content -->

    <!-- footer -->
      @include('base.footer')
    <!-- end footer -->

    <!-- scrollTop -->
      @include('base.scrollTop')
    <!-- end scrollTop -->

    <!-- JavaScript -->
      <script src="{{ asset('js/template/vendor/modernizr-3.5.0.min.js') }}"></script>
      <!-- Jquery, Popper, Bootstrap -->
      <script src="{{ asset('js/template/vendor/jquery-1.12.4.min.js') }}"></script>
      <script src="{{ asset('js/template/popper.min.js') }}"></script>
      <script src="{{ asset('js/template/bootstrap.min.js') }}"></script>
      <!-- Jquery Mobile Menu -->
      <script src="{{ asset('js/template/jquery.slicknav.min.js') }}"></script>

      <!-- Jquery Slick , Owl-Carousel Plugins -->
      <script src="{{ asset('js/template/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/template/slick.min.js') }}"></script>
      <!-- One Page, Animated-HeadLin -->
      <script src="{{ asset('js/template/wow.min.js') }}"></script>
      <script src="{{ asset('js/template/animated.headline.js') }}"></script>
      <script src="{{ asset('js/template/jquery.magnific-popup.js') }}"></script>

      <!-- Date Picker -->
      <script src="{{ asset('js/template/gijgo.min.js') }}"></script>
      <!-- Nice-select, sticky -->
      <script src="{{ asset('js/template/jquery.nice-select.min.js') }}"></script>
      <script src="{{ asset('js/template/jquery.sticky.js') }}"></script>
      <!-- Progress -->
      <script src="{{ asset('js/template/jquery.barfiller.js') }}"></script>

      <!-- counter , waypoint,Hover Direction -->
      <script src="{{ asset('js/template/jquery.counterup.min.js') }}"></script>
      <script src="{{ asset('js/template/waypoints.min.js') }}"></script>
      <script src="{{ asset('js/template/jquery.countdown.min.js') }}"></script>
      <script src="{{ asset('js/template/hover-direction-snake.min.js') }}"></script>

      <!-- contact js -->
      <script src="{{ asset('js/template/contact.js') }}"></script>
      <script src="{{ asset('js/template/jquery.form.js') }}"></script>
      <script src="{{ asset('js/template/jquery.validate.min.js') }}"></script>
      <script src="{{ asset('js/template/mail-script.js') }}"></script>
      <script src="{{ asset('js/template/jquery.ajaxchimp.min.js') }}"></script>

      <!-- Jquery Plugins, main Jquery -->
      <script src="{{ asset('js/template/plugins.js') }}"></script>
      <script src="{{ asset('js/template/main.js') }}"></script>

      <!-- Every Page -->
      @yield('js')
    <!-- end JavaScript -->
  </body>
</html>
