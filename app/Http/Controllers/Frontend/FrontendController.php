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
use DB;
use Auth;
use Mail;

class FrontendController extends Controller
{
    public function index(){

    	$data['logo']= Logo::first();
        $data['sliders']= Slider::all();
        $data['contact']= Contact::first();
        $data['categories']= Location::select('category_id')->groupBy('category_id')->get();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['locations']= Location::orderBy('id','desc')->paginate(6);

    	return view('Frontend.Layouts.home',$data);
    }

    //All location list
    public function locationList(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Location::select('category_id')->groupBy('category_id')->get();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['locations']= Location::orderBy('id','desc')->paginate(12);

        return view('Frontend.SinglePages.location_list',$data);
    }

    //Category wise location list
    public function categoryWiseLocationList($category_id){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Location::select('category_id')->groupBy('category_id')->get();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['locations']= Location::orderBy('id','desc')->paginate(12);

        return view('Frontend.SinglePages.category_wise_location_list',$data);
    }

    //Find best places
    public function find(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        return view('Frontend.Findbestplace.find_best_place',$data);
    }

    //See post details
    public function seePostDetails(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
    	return view('Frontend.SinglePages.see_post_details',$data);
    }

    //Contact us
    public function contactUs(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        return view('Frontend.SinglePages.contact_us', $data);
    }

    //About us
    public function aboutUs(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['aboutUs']= About::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        return view('Frontend.SinglePages.about_us', $data);
    }



}
