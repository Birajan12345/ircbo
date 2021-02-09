@extends ('frontend.layouts.app')
@section('content')


    <!-- START SECTION BREADCRUMB -->
    <section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50"
             data-parallax-bg-image="assets/images/about_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <div class="page-title">
                        <h1>Management System Standard</h1>
                    </div>
                </div>
                <div class="col-sm-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Management System Standard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BANNER -->

    <!-- START SECTION Services details  -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="single_course">
                        <div class="course_img">
                            <a>
                                <img src="assets/images/ircbo/image2.gif" alt="course_img_big">
                            </a>

                        </div>
                        <div class="course_detail alert-warning">
                            <div class="course_title">
                                <h2>Management System Standard</h2>
                            </div>

                        </div>
                        <div class="course_tabs">

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab1">

                                    <div class="border radius_all_5 tab_box">
                                        <p>RCBO helps to optimize your business through Integrity, Resilience, and Compliance.
                                            We are a catalyst for a safer world for the next generation.</p>

                                        <p>Backed by more than 75 man years of collective experience in IT, Hardware, Software and Service sectors,
                                            we provide frontline assistance in specialized consultancy services.
                                            We are reputed for providing high quality solutions in International Certification for Management Systems,
                                            Benchmarking and Performance Ratings for organizations</p>
                                        <p>The organizations are having issues pertaining to understanding the relevance of key aspects of different
                                            Quality aspects with respect to Capability and Capacities. Generally organizations Quality perception considered
                                            are pertaining to font end like Process & Product Quality, as customers are looking at these and these contribute
                                            to their satisfactions. Our Company Name is based on Basic Business Practices - PRINCIPLES of IRCBO (Integrity,
                                            Resilience, Compliance, Business Optimization).
                                            All products of IRCBO are based and Designed & Delivered as per Principles.</p>
                                    </div>

                                </div>


                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-4 pt-3 pt-lg-0">
                    <div class="sidebar">
                        <div class="widget widget_categories">
                            <h5 class="widget_title">Solutions</h5>
                            <ul>
                                <li><a href="#"><span class="categories_name">Software</span></a></li>
                                <li><a href="#"><span class="categories_name">Consulting</span></a></li>
                                <li><a href="#"><span class="categories_name">Outsourcing</span></a></li>
                                <li><a href="#"><span class="categories_name">Training</span></a></li>
                                <li><a href="#"><span class="categories_name">Third Party Certification</span></a></li>
                            </ul>
                        </div>
                        <div class="widget widget_recent_post">
                            <h5 class="widget_title">Recent Post</h5>
                            <ul class="recent_post border_bottom_dash list_none">
                                <li>
                                    <div class="post_footer">
                                        <div class="post_img">
                                            <a href="#"><img src="assets/images/letest_post1.jpg" alt="letest_post1"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                            <span class="post_date">April 14, 2018</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post_footer">
                                        <div class="post_img">
                                            <a href="#"><img src="assets/images/letest_post2.jpg" alt="letest_post1"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                            <span class="post_date">April 14, 2018</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post_footer">
                                        <div class="post_img">
                                            <a href="#"><img src="assets/images/letest_post3.jpg" alt="letest_post1"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                            <span class="post_date">April 14, 2018</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- END SECTION COURSE DETAIL -->


    @endsection
