<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Hotel;
use App\Model\Location;
use App\Http\Requests\HotelRequest;

class HotelController extends Controller
{
    //View hotels
    public function view(){

    	$data['allData']= Hotel::all();

    	return view('Backend.Hotel.view_hotel', $data);
    }

    //Add hotels
    public function add(){

        $data['locations']= Location::all();
    	return view('Backend.Hotel.add_hotel', $data);
    }

    //Store hotels
    public function store(Request $request){

    	$this->validate($request,[
            'location_id'=> 'required',
    		'hotel_name' => 'required|unique:hotels,hotel_name', 
    		'hotel_address' => 'required',
    		'hotel_type' => 'required'

    	]);

    	$data= new Hotel();
        $data->location_id= $request->location_id;
    	$data->hotel_name= $request->hotel_name;
    	$data->hotel_address= $request->hotel_address;
    	$data->hotel_type= $request->hotel_type;
        $data->created_by= Auth::user()->id;
    	// return response()->json($data);
    	$data->save();

    	return redirect()->route('hotels.view')->with('success','Hotel added successfully');
    }

    //Edit hotels----------------------------------------------------------------------------
    public function edit($id){

        // $editData= Hotel:: find($id);

        $data['editData']= Hotel:: find($id);
        $data['locations']= Location::all();
       
        return view('Backend.Hotel.add_hotel', $data);
    	// return view('Backend.Hotel.add_hotel', compact('editData'));
    	//Add and edit in under one page
    }


    //Update hotels--------------------------------------------------------------------------
    public function update(HotelRequest $request, $id){

    	$data= Hotel::find($id);
        $data->location_id= $request->location_id;
    	$data->hotel_name= $request->hotel_name;
    	$data->hotel_address= $request->hotel_address;
    	$data->hotel_type= $request->hotel_type;
    	$data->updated_by= Auth::user()->id;

    	$data->save();

    	return redirect()->route('hotels.view')->with('success', 'Data updated successfully');
    }

    //Delete hotels-------------------------------------------------------------------------------
    public function delete($id){

    	$type= Hotel:: find($id);

    	$type->delete(); 

    	return redirect()->route('hotels.view')->with('success', 'Hotel deleted successfully');
    }
//Ends here
}
