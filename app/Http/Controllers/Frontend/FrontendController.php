<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Notice;
use App\Model\Contact;
use App\Model\About;
use App\Model\Location;
use App\Model\Category;
use App\Model\Division;
use App\Model\Hotel;
use App\Model\LocationSubImage;
use App\Model\Event;
use App\Model\EventSubImage;
use App\Model\Communicate;
use App\User;
use DB;
use Auth;
use Mail;
class FrontendController extends Controller
{
    //All home page contents(logo,slider,contact us,about us,home page locations.tour events)
    public function index(){

    	$data['logo']= Logo::first();
        $data['sliders']= Slider::all();
        $data['notices']= Notice::all();
        $data['contact']= Contact::first();
        $data['categories']= Location::select('category_id')->groupBy('category_id')->get();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['locations']= Location::where('approval','1')->orderBy('id','desc')->paginate(9);
        $data['eventsData']= Event::where('approval','1')->orderBy('created_at','desc')->paginate(2);

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

        //The user who posted the location or post
        $data['postedBy']= User::where('id',$data['location']->created_by)->first();

    	return view('Frontend.Location.location_details',$data);
    }

    //Tour events(home page section)
    public function tourEvent(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Location::select('category_id')->groupBy('category_id')->get();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['events']= Event::where('approval','1')->orderBy('id','desc')->get();

        return view('Frontend.Tourevent.tour_events',$data);
    }

    //Tour event details
    public function tourEventDetails($slug){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Event::select('division_id')->groupBy('division_id')->get();
        $data['categories']= Event::select('category_id')->groupBy('category_id')->get();
        $data['event']= Event::where('slug', $slug)->first();
        $data['event_sub_images']= EventSubImage::where('event_id',$data['event']->id)->get();

        //The user who created the event
        $data['eventBy']= User::where('id',$data['event']->created_by)->first();

        return view('Frontend.Tourevent.tour_events_details',$data);
    }

    //About us
    public function aboutUs(){
        $logo= Logo::first();
        $contact= Contact::first();
        $divisions= Location::select('division_id')->groupBy('division_id')->get();

        $aboutUs= About::first();

        return view('Frontend.Aboutus.about_us',compact('logo','contact','divisions','aboutUs'));
    }



    //View blogger's profile(Who has an account on the site and shared experiences)
    public function bloggerProfile($id){
        $data['logo']= Logo::first();
        $data['aboutUs']= About::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['postCount']= Location::select('id')->where('created_by',$id)
                            ->where('approval','1')->count();
        $data['eventCount']= Event::where('created_by',$id)->where('approval','1')->count();
        
        

        $data['bloggerData']= User::where('id',$id)->first();

        return view('Frontend.Location.blogger_profile', $data);
    }


    //View all posts(blogger)
    public function bloggerPosts($id){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Category::all();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();

        $data['bloggerPostsData']= Location::where('created_by',$id)->where('approval','1')->get();
        
        return view('Frontend.Location.bloggers_post_list', $data);
    }

    //View all events(blogger)
    public function bloggerEvents($id){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Category::all();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();

        $data['bloggerEventsData']= Event::where('created_by',$id)->where('approval','1')->get();
        
        return view('Frontend.Location.bloggers_event_list', $data);
    }



}
