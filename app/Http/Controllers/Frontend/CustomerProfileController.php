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
use App\User;
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
        //User data 
        $data['userData']= Auth::user();


        
        return view('Frontend.Customerprofile.view_customer_profile', $data);
    }

    //Edit user profile
    public function editProfile(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        //User data 
        $data['editData']= User::find(Auth::user()->id);
        return view('Frontend.Customerprofile.edit_customer_profile',$data);
    }

    //Customer update profile
    public function updateProfile(Request $request){

        $user= User::find(Auth::user()->id);

        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required|unique:users,email,'.$user->id,
            'mobile'=> 'required|unique:users,mobile,'.$user->id
        ]);

        $user->user_type= 'Customer';
        $user->name= $request->name;
        $user->email= $request->email;
        $user->mobile= $request->mobile;
        $user->address= $request->address;
        $user->gender= $request->gender;
        $user->profession= $request->profession;
        $user->about= $request->about;
        $user->bio= $request->bio;
        $user->facebook= $request->facebook;
        $user->instagram= $request->instagram;
        $user->youtube= $request->youtube;
        $user->skill= $request->skill;
        

        if($request->file('image')){
            $file= $request->file('image');
            @unlink(public_path('Upload/User_images/'.$user->image));
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Upload/User_images'), $filename);
            $user['image']= $filename;
        }

        // return response()->json($user);
        $user->save();

        return redirect()->route('customerprofiles.view')->with('success', 'Profile updated successfully');

    }

    //Customer change password
    public function changeCustomerPassword(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();

        return view('Frontend.Customerprofile.customer_edit_passwprd',$data);
    }

    //Customer update password
    public function updateCustomerPassword(Request $request){

        if(Auth::attempt(['id'=> Auth::user()->id, 'password'=>$request->current_password])){

            $user= User::find(Auth::user()->id);
            $user->password= bcrypt($request->new_password);
            $user->save();
            return redirect()->route('customerprofiles.view')->with('success', 'Password updated successfully');
        }
        else{
            return redirect()->back()->with('error', 'Sorry! your current password does not match');
        }
    }

}
