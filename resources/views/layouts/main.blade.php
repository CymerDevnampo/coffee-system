<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('coffee-master/img/fav.png') }}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Mag Cup'𝓮</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="{{ asset('coffee-master/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee-master/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee-master/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee-master/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee-master/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee-master/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee-master/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee-master/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @stack('css')
</head>

<body>

    @yield('content')

    <script src="{{ asset('coffee-master/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{ asset('coffee-master/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('coffee-master/js/easing.min.js') }}"></script>
    <script src="{{ asset('coffee-master/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('coffee-master/js/superfish.min.js') }}"></script>
    <script src="{{ asset('coffee-master/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('coffee-master/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('coffee-master/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('coffee-master/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('coffee-master/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('coffee-master/js/parallax.min.js') }}"></script>
    <script src="{{ asset('coffee-master/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('coffee-master/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('coffee-master/js/mail-script.js') }}"></script>
    <script src="{{ asset('coffee-master/js/main.js') }}"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script> <!-- Include this para mo work ang vue -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- Include this para mo work ang axios --> --}}
    @stack('js')
</body>

</html>
