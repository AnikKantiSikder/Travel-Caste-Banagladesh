<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use Carbon\Carbon;

class CustomerController extends Controller
{
    //View customer
    public function view(){

    	$allCustomerData= User::where('user_type', 'Customer')->where('status', '1')->get();
    	return view('Backend.Customer.view_customer', compact('allCustomerData'));
    }

    //Draft customer
    public function draftView(){

    	$allCustomerData= User::where('user_type', 'Customer')->where('status', '0')->get();
    	return view('Backend.Customer.draft_customer', compact('allCustomerData'));
    }

    //Delete customer
    public function delete($id){

    	$draftCustomerData= User:: find($id);

    	if(file_exists('public/Upload/User_images/'.$draftCustomerData->image) AND !empty($draftCustomerData->image))
    		{
                unlink('public/Upload/User_images/'.$draftCustomerData->image);
            }

    	$draftCustomerData->delete();
    	return redirect()->route('customers.draft.view')->with('success', 'Data deleted successfully');
    }
}
