

<!-- START HEADER -->
<header class="header_wrap dark_skin">
    <div class="top-header light_skin background_bg bg_blue2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ul class="contact_detail list_none text-center text-md-left">
                        <li><a href="tel:+91 11 4160 3275"><i class="ti-mobile"></i>+91 11 4160 3275</a></li>
                        <li><a href="mailto:support@ircbo.solutions"><i class="ti-email"></i>support@ircbo.solutions</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-md-end justify-content-center mt-2 mt-md-0">
                        <ul class="list_none social_icons social_white text-center text-md-right">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <!-- <li><a href="#"><i class="ion-social-googleplus"></i></a></li> -->
                            <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
                        </ul>
                        <!--                        <ul class="list_none header_list border_list ml-1">-->
                        <!--                            <li><a href="#" class="btn btn-default btn-sm">Register Now</a></li>-->
                        <!--                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{route('homepage')}}">
                <!--                <img class="logo_light" src="assets/images/ircbo/Picture1.png" alt="IRCBO"/>-->
                <img class="logo_dark" src="{{asset('assets/images/ircbo/Picture1.png')}} " alt="IRCBO"/>
                <!--                <img class="logo_default" src="assets/images/ircbo/Picture1.png" alt="IRCBO"/>-->
            </a>
            <?php
            $url = parse_url($_SERVER['REQUEST_URI']);

            if ($url != '/') {
                $uri = str_replace('.php','',$url['path']);
            }
            ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="ion-android-menu"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link <?php if(strpos($uri,'index')){ ?>active<?php } ?>" href="{{route('homepage')}}">HOME</a>
                    </li>
                    <li>
                        <a class="nav-link <?php if(strpos($uri,'message')){ ?>active<?php } ?>" href="{{route('messageFromIrcbo')}}">Message From IRCBO</a>
                    </li>
                    <!--                    <li>-->
                    <!--                        <a class="nav-link" href="managementSystemStandard.php">Management System Standard</a>-->
                    <!--                    </li>-->
                    <li>
                        <a class="nav-link <?php if(strpos($uri,'solution')){ ?>active<?php } ?>" href="{{route('solution')}}">SOLUTIONS</a>
                    </li>
                    <li>
                        <a class="nav-link <?php if(strpos($uri,'webinars')){ ?>active<?php } ?>" href="{{route('events')}}">EVENTS</a>
                    </li>
                    <li>
                        <a class="nav-link <?php if(strpos($uri,'about')){ ?>active<?php } ?>" href="{{route('about')}}">Demos & Videos</a>
                    </li>
                    <li>
                        <a class="nav-link <?php if(strpos($uri,'contact')){ ?>active<?php } ?>" href="{{route('contact')}}">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- END HEADER -->