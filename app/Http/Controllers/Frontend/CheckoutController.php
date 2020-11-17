<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Contact;
class CheckoutController extends Controller
{
    //Customer login
    public function customerLogin(){
    	$data['logo']= Logo::first();
        $data['contact']= Contact::first();
    	return view('Frontend.Checkout.customer_login',$data);
    }

    //Customer signup
    public function customersignup(){
    	$data['logo']= Logo::first();
        $data['contact']= Contact::first();
    	return view('Frontend.Checkout.customer_signup',$data);
    }
}
