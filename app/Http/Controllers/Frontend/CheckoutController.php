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
use App\User;
use Session;
use DB;
use Auth;
use Mail;

class CheckoutController extends Controller
{
    //Customer login
    public function customerLogin(){
    	$data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
    	return view('Frontend.Checkout.customer_login',$data);
    }

    //Customer signup
    public function customersignup(){
    	$data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
    	return view('Frontend.Checkout.customer_signup',$data);
    }

    //Customer signup store
    public function signupStore(Request $request){
        
        DB::transaction(function() use($request){
            $this->validate($request, [
                'name'=> 'required',
                'email'=> 'required|unique:users,email',
                'mobile'=> 'required|unique:users,mobile',
                'password'=> 'min:8|required_with:confirmation_password|same:confirmation_password',
                'confirmation_password'=> 'min:8'
            ]);
        });

        $verificaitonCode= rand(0000,9999);

        $user= new User();

        $user->name= $request->name;
        $user->email= $request->email;
        $user->mobile= $request->mobile;
        $user->password= bcrypt($request->password);
        $user->verification= $verificaitonCode;
        $user->status= '0';
        $user->user_type= 'Customer';
        $user->save();

        $data= array(
            'email'=> $request->email,
            'verification'=> $verificaitonCode
        );

        Mail::send('Frontend.Gmails.verify_email', $data, function($message) use($data) {

            $message-> from('kantiamitsikder66146@gmail.com', 'TravelCasteBangladesh');
            $message-> to($data['email']);
            $message-> subject('Please verify your email address');
        });


        return redirect()->route('email.verify')->with('success', 'Your have succesfully signed up.Please verify your email !');
    }

    //Customer email verification
    public function emailVerify(){

        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        return view('Frontend.Gmails.customer_email_verification', $data);
    }


    //Customer email verification store
    public function storeVerification(Request $request){

        $this->validate($request, [
            'email'=> 'required',
            'verificaiton'=> 'required',
        ]);

        $checkData= User::where('email', $request->email)->where('verification', $request->verificaiton)->first();

        if($checkData){
            
            $checkData->status= '1';
            $checkData->save();
            return redirect()->route('customer.login')->with('success', 'You have successfully verified.Please log in');
        }
        else{
            return redirect()->back()->with('error','Sorry! Email or verificaiton code does not match');
        }
    }





//Ends here    
}
