@extends ('frontend.layouts.app')
@section('content')

    <!-- START SECTION ABOUT -->
    <section id="about_section" class="no-padding small_pt small_pb overflow-hidden">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center intro_desc">
                        <h1>Demos <span>&</span> Videos</h1>
                    </div>
                </div>
            </div>
            <div class="row no-gutters align-items-center">
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <div class="vertical-img">
                        <div class="img-item">
                            <a href="#" target="_blank">
                                <img src="{{asset('assets/images/boom2.png')}}" alt="">
                                <button class="btn btn-default btn-sm">Select</button>
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="boom4" class="vidClick">
                                <img src="{{asset('assets/images/boom4.png')}} " alt="">
                                <button class="btn btn-default btn-sm">Select</button>
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="boom5" class="vidClick">
                                <img src="{{asset('assets/images/boom5.png')}}" alt="">
                                <button class="btn btn-default btn-sm">Select</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-12">
                    <div class="video-container">
                        <iframe class="video_popup video_play" width="660" height="390"
                                src="https://www.youtube.com/embed/W9hUFpt-tac" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen id="boom1">
                        </iframe>
                        <iframe class="video_popup video_play" width="660" height="390"
                                src="https://www.youtube.com/embed/7Dqgr0wNyPo" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen id="boom2">
                        </iframe>
                        <iframe class="video_popup video_play" width="660" height="390"
                                src="https://www.youtube.com/embed/y2ak_oBeC-I" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen id="boom3">
                        </iframe>
                        <iframe class="video_popup video_play" width="660" height="390"
                                src="https://www.youtube.com/embed/10yrPDf92hY" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen id="boom4">
                        </iframe>
                        <iframe class="video_popup video_play" width="660" height="390"
                                src="https://www.youtube.com/embed/xlCmQcRPtRg" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen id="boom5">
                        </iframe>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <div class="vertical-img">
                        <div class="img-item">
                            <a href="#" data-id="boom3" class="vidClick">
                                <img src="{{asset('assets/images/boom3.png')}}" alt="">
                                <img data-id="boom3" class="vidClick" src="{{asset('assets/images/ircbo/images23.gif')}}">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="https://demo.ircboboom.solutions:8031/ISMSDEMO/index.xhtml" data-id="boom2"
                               class="vidClick">
                                <img src="{{asset('assets/images/boom1.png')}}" alt="">
                                <img data-id="boom2" class="vidClick" src="{{asset('assets/images/ircbo/images23.gif')}}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
