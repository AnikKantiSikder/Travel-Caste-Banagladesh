<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddNewHotelController extends Controller
{
     public function addNewHotel(){

    	return view('Backend.SinglePages.add_new_hotel');
    }
}
