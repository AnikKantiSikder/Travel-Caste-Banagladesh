<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //View profile
    public function viewProfile(){
      return view('Frontend.SinglePages.view_user_profile');
    }

    //Edit user profile
    public function editProfile(){
       return view('Frontend.SinglePages.edit_user_profile');
    }


    //Share user experience
    public function shareExperience(){
    	return view('Frontend.SinglePages.share_experience');
    }

    //Create event
    public function createEvent(){
    	return view('Frontend.SinglePages.create_event');
    }
}
