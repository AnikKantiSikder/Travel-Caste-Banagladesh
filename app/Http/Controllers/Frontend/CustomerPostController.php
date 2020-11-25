<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
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
class CustomerPostController extends Controller
{
    //View all posts(Customer)
    public function viewPost(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Category::all();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();

        $data['allData']= Location::orderBy('id','desc')->get();
        return view('Frontend.Customerpost.view_post_of_customer', $data);
    }

    //Customer add post
    public function addPost(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Category::all();
        $data['divisionData']= Division::all();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();

    	return view('Frontend.Customerpost.add_post',$data);
    }

    //Create event
    public function createEvent(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        
    	return view('Frontend.Customerpost.create_event',$data);
    }
}
