<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Logo;

class LogoController extends Controller
{
	//View logo
    public function view(){

        $data['countlogo']= Logo::count();
        // dd( $dat['countlogo']);
    	$data['allData']= Logo::all();

    	return view('Backend.Logo.view_logo', $data);
    }

    //Add logos
    public function add(){
    	return view('Backend.Logo.add_logo');
    }

    //Store logos
    public function store(Request $request){

    	$data= new Logo();

    	if($request->file('image')){
    		$file= $request->file('image');
    		$filename= date('YmdHi').$file->getClientOriginalName();
    		$file-> move(public_path('Upload/Logo_images'), $filename);
    		$data['image']= $filename;
    	}

    	// return response()->json($data);
    	$data->save();

    	return redirect()->route('logos.view')->with('success','Data added successfully');
    }

    //Edit Logo
    public function edit($id){

       $allData= Logo:: find($id);
       
       return view('Backend.Logo.edit_logo', compact('allData'));
    }

    //Update Logo
    public function update(Request $request, $id){

    	$data= Logo:: find($id);

    	if($request->file('image')){
    		$file= $request->file('image');
    		@unlink(public_path('Upload/Logo_images/'.$data->image));
    		$filename= date('YmdHi').$file->getClientOriginalName();
    		$file-> move(public_path('Upload/Logo_images'), $filename);
    		$data['image']= $filename;
    	}
       
    	$data->save();

    	return redirect()->route('logos.view')->with('success', 'Data updated successfully');
    }

    //Delete logo
    public function delete($id){

    	$logo= Logo:: find($id);

    		if(file_exists('public/Upload/Logo_images/'. $logo->image) AND ! empty($logo->image) ){

    			unlink('public/Upload/Logo_images/'.$logo->image);
    		}

    	$logo->delete(); 

    	return redirect()->route('logos.view')->with('success', 'Logo deleted successfully');
    }


//Ends here
}
