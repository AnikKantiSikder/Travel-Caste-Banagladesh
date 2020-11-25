<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Contact;
use App\Model\About;
use App\Model\Location;
use App\Model\Category;
use App\Model\Division;
use App\Model\Hotel;
use App\Model\LocationSubImage;
use DB;
use Auth;
use Mail;


class TourEventController extends Controller
{
    //Tour events
    public function tourEvent(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
    	return view('Frontend.Tourevent.tour_events',$data);
    }

    //Tour event details
    public function tourEventDetails(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
    	return view('Frontend.Tourevent.tour_events_details',$data);
    }
}
