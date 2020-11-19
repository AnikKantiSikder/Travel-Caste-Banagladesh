<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Division;
use App\Http\Requests\DivisionRequest;

class DivisionController extends Controller
{
    //View division
    public function view(){

    	$data['allData']= Division::all();

    	return view('Backend.Division.view_division', $data);
    }

    //Add division
    public function add(){
    	return view('Backend.Division.add_division');
    }

    //Store division
    public function store(Request $request){

    	$this->validate($request,[
    		'name' => 'required|unique:divisions,name'
    	]);

    	$data= new Division();

    	$data->name= $request->name; 
        $data->created_by= Auth::user()->id;
    	// return response()->json($data);
    	$data->save();

    	return redirect()->route('divisions.view')->with('success','Data added successfully');
    }

    //Edit division----------------------------------------------------------------------------
    public function edit($id){

        $editData= Division:: find($id);
       
    	return view('Backend.Division.add_division', compact('editData'));
    	//Add and edit in under one page
    }


    //Update category--------------------------------------------------------------------------
    public function update(DivisionRequest $request, $id){

    	$data= Division:: find($id);

    	$data->name= $request->name;
    	$data->updated_by= Auth::user()->id;

    	$data->save();

    	return redirect()->route('divisions.view')->with('success', 'Data updated successfully');
    }

    //Delete category-------------------------------------------------------------------------------
    public function delete($id){

    	$type= Category:: find($id);

    	$type->delete(); 

    	return redirect()->route('divisions.view')->with('success', 'Division deleted successfully');
    }
//Ends here
}
