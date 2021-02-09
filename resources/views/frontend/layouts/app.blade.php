<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="IRCBO" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IRCBO">
    <meta name="keywords"
          content="academy, course, education, elearning, learning, education, university, college, school, online education, tution center">
    <!-- SITE TITLE -->
    <title>IRCBO</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href=" {{asset('assets/images/favicon.png')}}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}} "/>
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}} "/>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet"/>
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}} "/>
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}} "/>
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}} "/>
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.carousel.min.css')}} "/>
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.theme.css')}} "/>
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.theme.default.min.css')}} "/>
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}} "/>
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}} "/>
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}} "/>
    <link rel="stylesheet" id="layoutstyle" href="{{asset('assets/color/theme.css')}} "/>
    <script>
        var sc_project = 11981757;
        var sc_invisible = 1;
        var sc_security = "35d2687e";
        var sc_https = 1;
    </script>
    <!--    <script src="../../../www.statcounter.com/counter/counter.js" async></script>-->
</head>
<body>
<!-- LOADER -->
<div id="preloader">
    <span class="spinner"></span>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- END LOADER -->

<div>
    @include('frontend.layouts.partials.header')
{{--    @include('frontend.layouts.partials.menubar')--}}

    @yield('content')

    @include('frontend.layouts.partials.footer')
</div>


<!-- END FOOTER -->
<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
<!-- Latest jQuery -->
<script src="{{asset('assets/js/jquery-1.12.4.min.js')}} "></script>
<!-- jquery-ui -->
<script src="{{asset('assets/js/jquery-ui.js')}} "></script>
<!-- popper min js -->
<script src="{{asset('assets/js/popper.min.js')}} "></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}} "></script>
<!-- owl-carousel min js  -->
<script src="{{asset('assets/owlcarousel/js/owl.carousel.min.js')}} "></script>
<!-- magnific-popup min js  -->
<script src="{{asset('assets/js/magnific-popup.min.js')}} "></script>
<!-- waypoints min js  -->
<script src="{{asset('assets/js/waypoints.min.js')}} "></script>
<!-- parallax js  -->
<script src="{{asset('assets/js/parallax.js')}} "></script>
<!-- countdown js  -->
<script src="{{asset('assets/js/jquery.countdown.min.js')}} "></script>
<!-- jquery.counterup.min js -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}} "></script>
<!-- imagesloaded js -->
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}} "></script>
<!-- isotope min js -->
<script src="{{asset('assets/js/isotope.min.js')}} "></script>
<!-- jquery.parallax-scroll js -->
<script src="{{asset('assets/js/jquery.parallax-scroll.js')}} "></script>
<!-- jquery.zaccordion js -->
<script src="{{asset('assets/js/jquery.zaccordion.min.js')}} "></script>
<!-- scripts js -->
<script src="{{asset('assets/js/scripts.js')}} "></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#example2").zAccordion({
            startingSlide: 1,
            auto: false,
            tabWidth: "15%",
            width: "100%",
            speed: 600,
            height: 520,
            trigger: "mouseover"
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#example4").zAccordion({
            startingSlide: 3,
            auto: false,
            tabWidth: "23%",
            width: "100%",
            speed: 600,
            height: 320,
            trigger: "mouseover"
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#boom1').show();
        $('#boom2').hide();
        $('#boom3').hide();
        $('#boom4').hide();
        $('#boom5').hide();
        var vidId = '';
        $('.vertical-img .vidClick').on('click', function (e) {
            e.preventDefault();
            vidId = $(this).data('id');
            $(".about_img iframe").each(function (index) {
                var controlID = $(this).attr('id');
                if (vidId === controlID) {
                    $('#' + controlID).fadeIn();
                } else {
                    $('#' + controlID).fadeOut();
                }
            });
        });
    });
</script>
</body>
</html>