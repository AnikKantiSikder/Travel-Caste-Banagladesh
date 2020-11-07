<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //Customer login
    public function customerLogin(){

    	return view('Frontend.Checkout.customer_login');
    }

    //Customer signup
    public function customersignup(){

    	return view('Frontend.Checkout.customer_signup');
    }
}
