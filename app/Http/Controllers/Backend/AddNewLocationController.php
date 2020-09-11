<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddNewLocationController extends Controller
{
    public function addNewLocation(){

    	return view('Backend.SinglePages.add_new_location');
    }
}
