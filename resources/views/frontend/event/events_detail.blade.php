@extends ('frontend.layouts.app')
@section('content')


    <!-- START SECTION BREADCRUMB -->
    <section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50"
             data-parallax-bg-image="{{asset('assets/images/about_bg.jpg')}} ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h1>Event</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Event</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BANNER -->

    <!-- START SECTION COURSE DETAIL -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="single_event">
                        <div class="content_img">
                            @if(!empty($event->image->path))
                                <a href="#">
                                    <img src="{{asset($event->image->path)}}" alt="course_img_big">
                                </a>
                            @endif
                            <div class="event_date radius_all_5">
                                <h5><span>{{$event->date->format('d')}}</span> </h5>
                                <span class="event_time radius_lbrb_5 bg_default"> {{$event->date->format('M')}}</span>
                            </div>
                        </div>
                        <div class="event_title">
                            <div class="row align-items-end">
                                <div class="col-md-12">
                                    <h2>{{$event->title}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="entry_content">
                            <p>{!! $event->content !!}</p>
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
                                            <a href="#"><img src="{{asset('assets/images/letest_post1.jpg')}} "
                                                             alt="letest_post1"></a>
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
                                            <a href="#"><img src="{{asset('assets/images/letest_post2.jpg')}} "
                                                             alt="letest_post1"></a>
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
                                            <a href="#"><img src="{{asset('assets/images/letest_post3.jpg')}} "
                                                             alt="letest_post1"></a>
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
    </section>
    <!-- END SECTION COURSE DETAIL -->


@endsection
