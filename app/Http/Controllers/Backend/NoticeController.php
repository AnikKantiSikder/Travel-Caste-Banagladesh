<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Notice;

class NoticeController extends Controller
{
    //View notice-----------------------------------------------------------------------
    public function view(){

    	$data['countNotice']= Notice::count();
    	$data['allData']= Notice::all();

    	return view('Backend.Notice.view_notice', $data);
    }


    //Add notice-------------------------------------------------------------------------
    public function add(){
    	return view('Backend.Notice.add_notice');
    }

    //Store notice
    public function store(Request $request){

    	$this->validate($request,[
    		'heading' => 'required|unique:notices,heading'
    	]);

    	$data= new Notice();

    	$data->heading= $request->heading;
        $data->details= $request->details;
        $data->created_by= Auth::user()->id;

    	// return response()->json($data);
    	$data->save();

    	return redirect()->route('notices.view')->with('success','Data added successfully');

    }

    //Edit notice----------------------------------------------------------------------------
    public function edit($id){

       $editNoticeData= Notice:: find($id);
       
       return view('Backend.Notice.edit_notice', compact('editNoticeData'));
    }


    //Update contact--------------------------------------------------------------------------
    public function update(Request $request, $id){

    	$data= Notice:: find($id);

    	$data->introduction= $request->introduction;
        $data->service= $request->service;
        $data->instruction= $request->instruction;
        $data->enjoy= $request->enjoy;
        $data->conclusion= $request->conclusion;

    	$data->updated_by= Auth::user()->id;

    	$data->save();

    	return redirect()->route('notices.view')->with('success', 'Data updated successfully');
    }

    //Delete contact-------------------------------------------------------------------------------
    public function delete($id){

    	$Notice= Notice:: find($id);

    	$Notice->delete(); 

    	return redirect()->route('notices.view')->with('success', 'Data deleted successfully');
    }
}
