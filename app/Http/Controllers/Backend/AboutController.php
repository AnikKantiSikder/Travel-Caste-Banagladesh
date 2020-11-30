<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\About;

class AboutController extends Controller
{
        //View about us-----------------------------------------------------------------------
    public function view(){

    	$data['countAbout']= About::count();
    	$data['allData']= About::all();

    	return view('Backend.About.view_about', $data);
    }


    //Add about us-------------------------------------------------------------------------
    public function add(){
    	return view('Backend.About.add_about');
    }

    //Store contact
    public function store(Request $request){

    	$data= new About();

    	$data->introduction= $request->introduction;
        $data->service= $request->service;
        $data->instruction= $request->instruction;
        $data->enjoy= $request->enjoy;
        $data->conclusion= $request->conclusion;
        $data->created_by= Auth::user()->id;

    	// return response()->json($data);
    	$data->save();

    	return redirect()->route('abouts.view')->with('success','Data added successfully');

    }

    //Edit about us----------------------------------------------------------------------------
    public function edit($id){

       $editAboutData= About:: find($id);
       
       return view('Backend.About.edit_about', compact('editAboutData'));
    }


    //Update contact--------------------------------------------------------------------------
    public function update(Request $request, $id){

    	$data= About:: find($id);

    	$data->introduction= $request->introduction;
        $data->service= $request->service;
        $data->instruction= $request->instruction;
        $data->enjoy= $request->enjoy;
        $data->conclusion= $request->conclusion;

    	$data->updated_by= Auth::user()->id;

    	$data->save();

    	return redirect()->route('abouts.view')->with('success', 'Data updated successfully');
    }

    //Delete contact-------------------------------------------------------------------------------
    public function delete($id){

    	$about= About:: find($id);

    	$about->delete(); 

    	return redirect()->route('abouts.view')->with('success', 'Data deleted successfully');
    }
}
