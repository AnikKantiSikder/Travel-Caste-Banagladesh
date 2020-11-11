<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Locationtype;
use App\Http\Requests\LocationtypeRequest;

class LocationTypeController extends Controller
{
    //View location type
    public function view(){

    	$data['allData']= Locationtype::all();

    	return view('Backend.Locationtype.view_locationtype', $data);
    }

    //Add location type
    public function add(){
    	return view('Backend.Locationtype.add_locationtype');
    }

    //Store location type
    public function store(Request $request){

    	$this->validate($request,[
    		'name' => 'required|unique:locationtypes,name'
    	]);

    	$data= new Locationtype();

    	$data->name= $request->name; 
        $data->created_by= Auth::user()->id;
    	// return response()->json($data);
    	$data->save();

    	return redirect()->route('locationtypes.view')->with('success','Data added successfully');
    }

    //Edit location type----------------------------------------------------------------------------
    public function edit($id){

       $editData= Locationtype:: find($id);
       
    	return view('Backend.Locationtype.add_locationtype', compact('editData'));
    	//Add and edit in under one page
    }


    //Update location type--------------------------------------------------------------------------
    public function update(LocationtypeRequest $request, $id){

    	$data= Locationtype:: find($id);

    	$data->name= $request->name;
    	$data->updated_by= Auth::user()->id;

    	$data->save();

    	return redirect()->route('locationtypes.view')->with('success', 'Data updated successfully');
    }

    //Delete location type-------------------------------------------------------------------------------
    public function delete($id){

    	$type= Locationtype:: find($id);

    	$type->delete(); 

    	return redirect()->route('locationtypes.view')->with('success', 'Locationtype deleted successfully');
    }
//Ends here
}
