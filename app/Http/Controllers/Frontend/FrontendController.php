<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Contact;
use App\Model\About;

class FrontendController extends Controller
{
    public function index(){

    	$data['logo']= Logo::first();
        $data['sliders']= Slider::all();
        $data['contact']= Contact::first();
    	return view('Frontend.Layouts.home',$data);
    }

    //Find best places
    public function find(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        return view('Frontend.SinglePages.find_best_place',$data);
    }

    //Tour events
    public function tourEvent(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
    	return view('Frontend.SinglePages.tour_events',$data);
    }

    //Tour event details
    public function tourEventDetails(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
    	return view('Frontend.SinglePages.tour_events_details',$data);
    }

    //See post details
    public function seePostDetails(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
    	return view('Frontend.SinglePages.see_post_details',$data);
    }

    //Contact us
    public function contactUs(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        return view('Frontend.SinglePages.contact_us', $data);
    }

    //About us
    public function aboutUs(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['aboutUs']= About::first();
        return view('Frontend.SinglePages.about_us', $data);
    }



}
