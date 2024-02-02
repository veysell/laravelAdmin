<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fundraiser &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>





        <div class="bg-primary py-3 top-bar shadow d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-md-left pl-0">
                        <a href="#" class=" pr-3 pl-0">Home</a>
                        <a href="#" class="p-3">Events</a>
                        <a href="#" class="p-3">Become A Volunteer</a>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <a href="#" class="p-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="p-3"><span class="icon-facebook"></span></a>
                    </div>
                </div>
            </div>
        </div>


        @include('frontend.inc.header')

        @yield('content');

        @include('frontend.inc.footer')


        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/aos.js"></script>

        <script src="js/main.js"></script>

</body>

</html>
