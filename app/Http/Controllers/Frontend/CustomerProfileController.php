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

class CustomerProfileController extends Controller
{
    //View customer profile
    public function customerProfile(){
        
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Location::select('category_id')->groupBy('category_id')->get();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['locations']= Location::orderBy('id','desc')->paginate(6);
        
        return view('Frontend.Customerprofile.view_user_profile', $data);
    }

    //Edit user profile
    public function editProfile(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        return view('Frontend.Customerprofile.edit_user_profile',$data);
    }


    //Share user experience
    public function shareExperience(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
    	return view('Frontend.Customerprofile.share_experience',$data);
    }

    //Create event
    public function createEvent(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
    	return view('Frontend.Customerprofile.create_event',$data);
    }
}
