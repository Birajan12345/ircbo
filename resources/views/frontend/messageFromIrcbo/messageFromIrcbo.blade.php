@extends ('frontend.layouts.app')
@section('content')

    <!-- START SECTION MESSAGE FROM IRCBO -->
    <section class="no-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center intro_desc">
                        <h1>Message From <span>IRCBO</span></h1>
                    </div>
                </div>
            </div>
            <div class="row title_row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                                <div class="course_categories message_sec_item carousel_slider owl-carousel owl-theme nav_style1"
                                     data-margin="15"
                                     data-loop="true" data-nav="false" data-dots="false" data-autoplay="true"
                                     data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "576":{"items": "1"}, "1199":{"items": "1"}, "1199":{"items": "1"}}'>
                                    <div class="item">
                                        <a href="#">
                                            <img alt="logo" src="assets/images/boom1.png"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img alt="logo" src="assets/images/boom2.png"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img alt="logo" src="assets/images/boom3.png"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img alt="logo" src="assets/images/boom4.png"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img alt="logo" src="assets/images/boom5.png"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-6">
                            <div class="teacher_desc mt-4 mt-md-0">
                                <video width="100%" height="100%" autoplay loop>
                                    <source src="assets/images/ircbo/MessagefromIRCBO2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION MESSAGE FROM IRCBO -->


    @endsection