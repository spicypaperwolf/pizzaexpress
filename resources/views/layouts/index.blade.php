<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pizza Express</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}"> <!--Icon-->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"> <!--Effect-->
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"> <!--Slider-->
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}"> <!--Slider-->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"> <!--???-->

    <link rel="stylesheet" href="{{asset('css/aos.css')}}"> <!--Animate on Scroll-->

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}"> <!--Icons-->

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"> <!--Icons-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}"> <!--Icons-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
	@include('layouts.header')
    <script src="{{asset('js/jquery.min.js')}}"></script>
	@yield('home')
    @yield('menu')
    @yield('about')
    @yield('contact')
    @yield('billing')
    @yield('cart')
    @yield('billing1')

    @yield('log-in')
    @yield('register')
	@include('layouts.footer')


  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script> <!--???-->
  <script src="{{asset('js/popper.min.js')}}"></script> 
  <script src="{{asset('js/bootstrap.min.js')}}"></script> 
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script> 
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script> 
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script> <!--Parallax???-->
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script> <!--???-->
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script> <!--Counter using-->
  <script src="{{asset('js/bootstrap-datepicker.js')}}"></script> 
  <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('js/scrollax.min.js')}}"></script> 
{{--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>--}}
{{--  <script src="{{asset('js/google-map.js')}}"></script>--}}
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>