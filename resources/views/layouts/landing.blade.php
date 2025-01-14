<!DOCTYPE html>
<html>
<head>
        <title>Dianterin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css')}}">
        <!-- Bootstrap Select Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css')}}">
        <!-- Fonts Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/font-awesome-4.6.1/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/font-elegant/elegant.css')}}">
        <!-- OwlCarousel2 Slider Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/owl.carousel.2/assets/owl.carousel.css')}}">


        <!-- Animate Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">

        <!-- Main Css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme.css')}}">

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
    </head>
    <body>
        @include('layouts.landing.navbar')
        @yield('content')
        @include('layouts.landing.footer')

     <!-- Main Jquery JS -->
     <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
     <!-- Bootstrap JS -->
     <script src="{{asset('assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js')}}" type="text/javascript"></script>
     <!-- Bootstrap Select JS -->
     <script src="{{asset('assets/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
     <!-- OwlCarousel2 Slider JS -->
     <script src="{{asset('assets/plugins/owl.carousel.2/owl.carousel.min.js')}}" type="text/javascript"></script>
     <!-- Sticky Header -->
     <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
     <!-- Wow JS -->
     <script src="{{asset('assets/plugins/WOW-master/dist/wow.min.js')}}" type="text/javascript"></script>
     <!-- Data binder -->
     <script src="{{asset('assets/plugins/data.binder.js/data.binder.js')}}" type="text/javascript"></script>

     <!-- Slider JS -->


     <!-- Theme JS -->
     <script src="{{asset('assets/js/theme.js')}}" type="text/javascript"></script>
    </body>
</html>
