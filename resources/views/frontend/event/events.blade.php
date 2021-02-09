@extends ('frontend.layouts.app')
@section('content')

    <!-- START SECTION EVENT -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <!--            <div class="col-xl-6 col-lg-8">-->
                <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <img src="{{asset('assets/images/event.gif')}} " class="img-responsive" alt="">
                        <h2>Upcoming events (Free Webinars & Trainings)</h2>
                    </div>
                </div>
                <!--            </div>-->
            </div>
            <div class="row justify-content-center">
                @foreach($events as $data)
                    <div class="col-lg-4 col-sm-6">
                        <div class="content_box hover_style1 event_box radius_all_10 box_shadow1 animation"
                             data-animation="fadeInUp" data-animation-delay="0.02s">
                            <div class="content_img radius_ltrt_10">
                                @if(!empty($data->image->path))
                                    <a><img src="{{asset($data->image->path)}}" alt="event_img1"/></a>
                                @endif
                                <div class="event_date radius_all_5">
                                    <h5><span>{{$data->date->format('d')}}</span> </h5>
                                    <span class="event_time radius_lbrb_5 bg_default"> {{$data->date->format('M')}}</span>
                                </div>
                            </div>
                            <div class="content_desc">
                                <h4 class="content_title">
                                    <a href="{{route('events',$data->slug )}}">
                                        {{$data->title}}
                                    </a>
                                </h4>
                                {{--                                <ul class="list_none content_meta">--}}
                                {{--                                    <li><i class="ti-user"></i> <a class="text_default">John Wood</a></li>--}}
                                {{--                                    <li><i class="ti-location-pin"></i><span class="text_default">New York City</span>--}}
                                {{--                                    </li>--}}
                                {{--                                </ul>--}}
                                <p>{!! $data->meta_description !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- START SECTION EVENT -->


@endsection
