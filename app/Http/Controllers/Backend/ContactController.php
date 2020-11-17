<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Contact;
use App\Model\Communicate;
use Mail;

class ContactController extends Controller
{
    //View contact-----------------------------------------------------------------------
    public function view(){

        $data['countContact']= Contact::count();
    	$data['allData']= Contact::all();

    	return view('Backend.Contact.view_contact', $data);
    }

    //Add contact-------------------------------------------------------------------------
    public function add(){
    	return view('Backend.Contact.add_contact');
    }

    //Store contact
    public function store(Request $request){

    	$data= new Contact();

    	$data->email= $request->email;
    	$data->mobile= $request->mobile;
    	$data->address= $request->address;
    	$data->facebook= $request->facebook;
    	$data->twitter= $request->twitter;
    	$data->youtube= $request->youtube;
    	$data->google_plus= $request->google_plus;
        $data->created_by= Auth::user()->id;

    	// return response()->json($data);
    	$data->save();

    	return redirect()->route('contacts.view')->with('success','Data added successfully');

    }

    //Edit contact----------------------------------------------------------------------------
    public function edit($id){

       $editContactData= Contact:: find($id);
       
       return view('Backend.Contact.edit_contact', compact('editContactData'));
    }


    //Update contact--------------------------------------------------------------------------
    public function update(Request $request, $id){

    	$data= Contact:: find($id);

    	$data->email= $request->email;
    	$data->mobile= $request->mobile;
    	$data->address= $request->address;
    	$data->facebook= $request->facebook;
    	$data->twitter= $request->twitter;
    	$data->youtube= $request->youtube;
    	$data->google_plus= $request->google_plus;
    	$data->updated_by= Auth::user()->id;

    	$data->save();

    	return redirect()->route('contacts.view')->with('success', 'Data updated successfully');
    }

    //Delete contact-------------------------------------------------------------------------------
    public function delete($id){

    	$slider= Contact:: find($id);

    	$slider->delete(); 

    	return redirect()->route('contacts.view')->with('success', 'Slider deleted successfully');
    }

    //View user communicate
    public function viewCommunicate(){

        $allData= Communicate::orderBy('id', 'desc')->get();

        return view('Backend.Contact.view_communicate', compact('allData'));
    }

    //Delete user communicate
    public function deleteCommunicate($id){

        $communicateData= Communicate::find($id);
        $communicateData->delete();
        return redirect()->route('contacts.communicate')->with('success', 'Data deleted successfully');
    }



//Ends here
}
