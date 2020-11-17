<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Contact;

class UserProfileController extends Controller
{
    //View profile
    public function viewProfile(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        return view('Frontend.SinglePages.view_user_profile',$data);
    }

    //Edit user profile
    public function editProfile(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        return view('Frontend.SinglePages.edit_user_profile',$data);
    }


    //Share user experience
    public function shareExperience(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
    	return view('Frontend.SinglePages.share_experience',$data);
    }

    //Create event
    public function createEvent(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
    	return view('Frontend.SinglePages.create_event',$data);
    }
}
