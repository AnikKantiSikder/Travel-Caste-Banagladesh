<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
    	
    	return view('Frontend.Layouts.home');
    }

    //Find best places
    public function find(){
      return view('Frontend.SinglePages.find_best_place');
    }

    //Tour events
    public function tourEvent(){
    	return view('Frontend.SinglePages.tour_events');
    }

    //Tour event details
    public function tourEventDetails(){
    	return view('Frontend.SinglePages.tour_events_details');
    }

    //See post details
    public function seePostDetails(){
    	return view('Frontend.SinglePages.see_post_details');
    }



}
