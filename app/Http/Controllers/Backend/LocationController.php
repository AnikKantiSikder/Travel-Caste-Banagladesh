<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Model\Location;
use App\Model\Category;
use App\Model\Division;
use App\Model\LocationCategory;
use App\Model\LocationSubImage;
use App\Http\Requests\LocationRequest;


class LocationController extends Controller
{
    //View location-----------------------------------------------------------------------
    public function view(){

    	$data['allData']= Location::orderBy('id','desc')->get();

    	return view('Backend.Location.view_location', $data);
    }


    //Add location-------------------------------------------------------------------------
    public function add(){

    	$data['categories']= Category::all();
        $data['divisions']= Division::all();
    	return view('Backend.Location.add_location', $data);
    }

    //Store location
    public function store(Request $request){

    	DB::transaction(function() use($request){

    		$this->validate($request,[
    		'location_name' => 'required|unique:locations,location_name',
    		'category_id'=> 'required',
            'division_id'=> 'required',
    		'district_name'=> 'required',
    		'description'=> 'required',
    		'suggestion'=> 'required',
    	]);

    	$location= new Location();

    	$location->location_name= $request->location_name;
        $location->slug= str_slug($request->location_name);
    	$location->category_id= $request->category_id;
        $location->division_id= $request->division_id;
    	$location->district_name= $request->district_name;
    	$location->description= $request->description;
    	$location->suggestion= $request->suggestion;
        $location->latitude= $request->latitude;
        $location->longitude= $request->longitude;
        $location->approval= 1 ;
    	$location->created_by= Auth::user()->id;
    	$img= $request->file('image');

    	if($img) {
    		$imgName= date('YmdHi').$img->getClientOriginalName();
    		//$img->move(public_path('public/Upload/location_images/'), $imgName);
    		$img->move('public/Upload/Location_images/',$imgName);
    		$location['image']= $imgName;
    	}

    	if($location->save()){
            //Sub image insert-------------------------------------------------------------------------
    		$files= $request->sub_image;

    		if(!empty($files)){
    			foreach ($files as $file) {

    				$imgName= date('YmdHi').$file->getClientOriginalName();
    				//$file->move(public_path('public/Upload/location_images/location_sub_images/'), $imgName);
    				$file->move('public/Upload/Location_images/Location_sub_images', $imgName);
    				$subImage['sub_image']= $imgName;

    				$subImage= new LocationSubImage();
    				$subImage->location_id= $location->id;
    				$subImage->sub_image= $imgName;
    				$subImage->save();
    			}
    		}		

    	}else{
    		return redirect()->back()->with('error', 'sorry! Data not uploaded');
    	}

    	});
    	

    	return redirect()->route('locations.view')->with('success','Data added successfully');

    }


    //Edit location(Add and edit in one page)------------------------------------------------
    public function edit($id){

        $location['editLocationData']= Location:: find($id);
        $location['categories']= Category::all();
        $location['divisions']= Division::all();

        return view('Backend.Location.add_location', $location);
    }


    //Update location--------------------------------------------------------------------------
    public function update(LocationRequest $request, $id){

        DB::transaction(function() use($request, $id){

        $location= Location::find($id);

    	$location->location_name= $request->location_name;
        $location->slug= str_slug($request->location_name);
    	$location->category_id= $request->category_id;
        $location->division_id= $request->division_id;
    	$location->district_name= $request->district_name;
    	$location->description= $request->description;
    	$location->suggestion= $request->suggestion;
        $location->latitude= $request->latitude;
        $location->longitude= $request->longitude;
    	$location->updated_by= Auth::user()->id;
    	$img= $request->file('image');

        if($img) {
            $imgName= date('YmdHi').$img->getClientOriginalName();
            $img->move('public/Upload/Location_images/',$imgName);
            //Unlink photos
            if (file_exists('public/Upload/Location_images/'.$location->image) AND ! empty($location->image)) {
                unlink('public/Upload/Location_images/'.$location->image);
            }
            $location['image']= $imgName;
        }

        //Sub image update-------------------------------------------------------------------------
        if($location->save()){
        
            $files= $request->sub_image;
            //Sub images unlink
            if (!empty($files)) {
                $subImage= LocationSubImage::where('location_id', $id)->get()->toArray();
                foreach ($subImage as $value) {
                    if (!empty($value)) {
                        unlink('public/Upload/Location_images/Location_sub_images/'.$value['sub_image']);
                    }
                }
                LocationSubImage::where('location_id', $id)->delete();
            }
            //New sub images insert
            if(!empty($files)){
                foreach ($files as $file) {

                    $imgName= date('YmdHi').$file->getClientOriginalName();
                    //$file->move(public_path('public/Upload/Product_images/Product_sub_images/'), $imgName);
                    $file->move('public/Upload/Location_images/Location_sub_images', $imgName);
                    $subImage['sub_image']= $imgName;

                    $subImage= new LocationSubImage();
                    $subImage->location_id= $location->id;
                    $subImage->sub_image= $imgName;
                    $subImage->save();
                }
            }     

        }else{
            return redirect()->back()->with('error', 'sorry! Data not updated');
        }

        });
        

        return redirect()->route('locations.view')->with('success','Data updated successfully');
    }

    //Delete location-------------------------------------------------------------------------------
    public function delete($id){

    	$locationData= Location::find($id);

        if (file_exists('public/Upload/Location_images/'.$locationData->image) AND ! empty($locationData->image)) {
            unlink('public/Upload/Location_images/'.$locationData->image);
        }

        $subImage= LocationSubImage::where('location_id', $locationData->id)->get()->toArray();

        if (!empty($subImage)) {
            
            foreach ($subImage as $value) {
                if (!empty($value)) {
                    unlink('public/Upload/Location_images/Location_sub_images/'.$value['sub_image']);
                }
            }
        }

        LocationSubImage::where('location_id', $locationData->id)->delete();
        $locationData->delete();


    	return redirect()->route('locations.view')->with('success', 'Location deleted successfully');
    }


    //Location details------------------------------------------------------------------------------
    public function details($id){
    	
        $detailsData= Location::find($id);
        return view('Backend.Location.location_details', compact('detailsData'));
    }


}
