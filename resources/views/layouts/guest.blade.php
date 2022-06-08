<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>TP3036</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Favicons -->
        <link href="static/img/favicon.png" rel="icon">
        <link href="static/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="static/css/animate.min.css" rel="stylesheet">
        <link href="static/css/aos.css" rel="stylesheet">
        <link href="static/css/bootstrap-icons.css" rel="stylesheet">
        <link href="static/css/app.min.css" rel="stylesheet">
        <link href="static/css/icons.min.css" rel="stylesheet">
        <link href="static/css/boxicons.min.css" rel="stylesheet">
        <link href="static/css/glightbox.min.css" rel="stylesheet">
        <link href="static/css/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="static/css/stylerestaurant.css" rel="stylesheet">
          <link href="static/css/style.css" rel="stylesheet">

          <link href="static/css/style.css" rel="stylesheet">
          <link rel="stylesheet" href="static/css/fontawesome.css">
          <link rel="stylesheet" href="static/css/templatemo-plot-listing.css">
          <link rel="stylesheet" href="static/css/animated.css">
          <link rel="stylesheet" href="static/css/owl.css">

        
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <!-- Vendor JS Files 
        <script src="assets/vendor/php-email-form/validate.js"></script>-->
        <script src="static/js/aos.js"></script>
        <script src="static/js/bootstrap.bundle.min.js"></script>
        <script src="static/js/glightbox.min.js"></script>
        <script src="static/js/isotope.pkgd.min.js"></script>
        <script src="static/js/swiper-bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="static/js/main.js"></script>

        <!-- jquery -->
        <script src="static/js/jquery-3.5.1.min.js"></script>
        <!-- appear -->
        <script src="static/vendor/appear/jquery.appear.js"></script>
        <!--bootstrap-->
        <script src="static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- countTo -->
        <script src="static/vendor/counter/jquery.countTo.js"></script>
        <!-- typed -->
        <script src="static/vendor/typed/typed.js"></script>
        <!-- owl-carousel -->
        <script src="static/vendor/owl-carousel/js/owl.carousel.min.js"></script>
        <!-- magnific -->
        <script src="static/vendor/magnific/jquery.magnific-popup.min.js"></script>
        <!-- isotope -->
        <script src="static/vendor/isotope/isotope.pkgd.min.js"></script>
        <!-- svg-injector -->
        <script src="static/vendor/svginjector/svg-injector.min.js"></script>
        <!-- jarallax -->
        <script src="static/vendor/jarallax/jarallax-all.js"></script>
        <!-- count-down -->
        <script src="static/vendor/count-down/jquery.countdown.min.js"></script>
        <!-- One Page -->
        <script src="static/vendor/one-page/scrollIt.min.js"></script>
        <!-- working form -->
        <script src="static/vendor/mail/js/form.min.js"></script>
        <script src="static/vendor/mail/js/script.js"></script>
        <!-- Theme Js -->
        <script src="static/js/custom.js"></script>

        @livewireScripts
    </body>
</html>
