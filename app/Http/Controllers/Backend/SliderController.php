<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Slider;

class SliderController extends Controller
{
    //View sliders-----------------------------------------------------------------------
    public function view(){

    	$data['allData']= Slider::all();

    	return view('Backend.Slider.view_slider', $data);
    }

    //Add sliders-------------------------------------------------------------------------
    public function add(){
    	return view('Backend.Slider.add_slider');
    }

    //Store sliders
    public function store(Request $request){

    	$data= new Slider();

    	$data->short_title= $request->short_title;
    	$data->long_title= $request->long_title;
        $data->created_by= Auth::user()->id;

    	if($request->file('image')){
    		$file= $request->file('image');
    		$filename= date('YmdHi').$file->getClientOriginalName();
    		$file-> move(public_path('Upload/Slider_images'), $filename);
    		$data['image']= $filename;  
    	}

    	// return response()->json($data);
    	$data->save();

    	return redirect()->route('sliders.view')->with('success','Data added successfully');

    }

    //Edit Slider----------------------------------------------------------------------------
    public function edit($id){

       $editSliderData= Slider:: find($id);
       
       return view('Backend.Slider.edit_slider', compact('editSliderData'));
    }


    //Update Slider--------------------------------------------------------------------------
    public function update(Request $request, $id){

    	$data= Slider:: find($id);

    	$data->updated_by= Auth::user()->id;
        $data->short_title= $request->short_title;
    	$data->long_title= $request->long_title;

    	if($request->file('image')){
    		$file= $request->file('image');
    		@unlink(public_path('Upload/Slider_images/'.$data->image));
    		$filename= date('YmdHi').$file->getClientOriginalName();
    		$file-> move(public_path('Upload/Slider_images'), $filename);
    		$data['image']= $filename;
    	}
       
    	$data->save();

    	return redirect()->route('sliders.view')->with('success', 'Data updated successfully');
    }

    //Delete Slider-------------------------------------------------------------------------------
    public function delete($id){

    	$slider= Slider:: find($id);

    		if(file_exists('public/Upload/Slider_images/'. $slider->image) AND ! empty($slider->image) ){

    			unlink('public/Upload/Slider_images/'.$slider->image);
    		}

    	$slider->delete(); 

    	return redirect()->route('sliders.view')->with('success', 'Slider deleted successfully');
    }
}
