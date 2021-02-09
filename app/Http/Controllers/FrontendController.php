<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function homepage()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about.about');
    }

    public function consulting()
    {
        return view('frontend.consulting.consulting');
    }

    public function contact()
    {
        return view('frontend.contact.contact');
    }

    public function events($slug = null)
    {
        if($slug){

            $event = Event::where('slug', $slug)->first();
            $events = Event::where('is_published', 1)->limit(4)->whereNotIn('id',[$event->id])->get();
            return view('frontend.event.events_detail',compact('event','events'));
        }
        else
        {
            $events = Event::where('is_published', 1)->get();
            return view('frontend.event.events',compact('events'));
        }

//        return view('frontend.event.events');
    }

    public function managementSystemStandard()
    {
        return view('frontend.managementSystemStandard.managementSystemStandard');
    }

    public function messageFromIrcbo()
    {
        return view('frontend.messageFromIrcbo.messageFromIrcbo');
    }

    public function outsourcing()
    {
        return view('frontend.outsourcing.outsourcing');
    }

    public function qualityManagementSystem()
    {
        return view('frontend.qualityManagementSystem.qualityManagementSystem');
    }

    public function software()
    {
        return view('frontend.software.software');
    }

    public function solution()
    {
        return view('frontend.solution.solution');
    }

    public function training()
    {
        return view('frontend.training.training');
    }

    public function webinars()
    {
        return view('frontend.webinars.webinars');
    }


}
