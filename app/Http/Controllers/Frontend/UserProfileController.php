<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Contact;
use App\Model\Location;

class UserProfileController extends Controller
{
    //View profile
    public function viewProfile(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        return view('Frontend.Customerprofile.view_user_profile',$data);
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
