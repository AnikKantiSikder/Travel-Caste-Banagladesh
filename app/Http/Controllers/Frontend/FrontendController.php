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

class FrontendController extends Controller
{
    //All home page contents(logo,slider,contact us,about us,home page locations.tour events)
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

        return view('Frontend.Location.all_location_list',$data);
    }

    //Category wise location list
    public function categoryWiseLocationList($category_id){

        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Location::select('category_id')->groupBy('category_id')->get();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['locations']= Location::where('category_id', $category_id)->orderBy('id','desc')->get();

        return view('Frontend.Location.category_wise_location_list',$data);
    }

    //Division wise location list
    public function divisionWiseLocationList($division_id){

        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Location::select('category_id')->groupBy('category_id')->get();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['locations']= Location::where('division_id', $division_id)->orderBy('id','desc')->get();

        return view('Frontend.Location.division_wise_location_list',$data);
    }

    //Location details
    public function locationDetails($slug){

        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['location']= Location::where('slug', $slug)->first();
        $data['hotels']= Hotel::where('location_id',$data['location']->id)->get();
        $data['location_sub_images']= LocationSubImage::where('location_id',$data['location']->id)->get();

    	return view('Frontend.Location.location_details',$data);
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
