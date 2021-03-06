<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Contact;
use App\Model\About;
use App\Model\Location;
use App\Model\Category;
use App\Model\Division;
use App\Model\Hotel;
use App\Model\LocationCategory;
use App\Model\LocationSubImage;
use App\Http\Requests\LocationRequest;
use App\User;
use DB;
use Auth;
use Mail;
class CustomerPostController extends Controller
{
    //View all posts(Customer)
    public function viewPost(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Category::all();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();

        $data['allData']= Location::where('created_by',auth()->user()->id)->where('approval','1')->get();
        // $data['allData']= Location::where('created_by',auth()->user()->id)->get();
        
        return view('Frontend.Customerpost.view_personal_post_list', $data);
    }

    //Customer add post
    public function addPost(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Category::all();
        $data['divisionData']= Division::all();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['userData']= Auth::user();

    	return view('Frontend.Customerpost.add_post',$data);
    }

    //Customer store post 
    public function storePost(Request $request){

        DB::transaction(function() use($request){

            $this->validate($request,[
            'location_name' => 'required|unique:locations,location_name',
            'category_id'=> 'required',
            'division_id'=> 'required',
            'district_name'=> 'required',
            'description'=> 'required',
            'suggestion'=> 'required',
        ]);

        $post= new Location();

        $post->location_name= $request->location_name;
        $post->slug= str_slug($request->location_name);
        $post->category_id= $request->category_id;
        $post->division_id= $request->division_id;
        $post->district_name= $request->district_name;
        $post->description= $request->description;
        $post->suggestion= $request->suggestion;
        $post->latitude= $request->latitude;
        $post->longitude= $request->longitude;
        $post->approval= 0;
        $post->created_by= Auth::user()->id;
        $img= $request->file('image');

        if($img) {
            $imgName= date('YmdHi').$img->getClientOriginalName();
            //$img->move(public_path('public/Upload/location_images/'), $imgName);
            $img->move('public/Upload/Location_images/',$imgName);
            $post['image']= $imgName;
        }

        if($post->save()){
            //Sub image insert-------------------------------------------------------------------------
            $files= $request->sub_image;

            if(!empty($files)){
                foreach ($files as $file) {

                    $imgName= date('YmdHi').$file->getClientOriginalName();
                    //$file->move(public_path('public/Upload/location_images/location_sub_images/'), $imgName);
                    $file->move('public/Upload/Location_images/Location_sub_images', $imgName);
                    $subImage['sub_image']= $imgName;

                    $subImage= new LocationSubImage();
                    $subImage->location_id= $post->id;
                    $subImage->sub_image= $imgName;
                    $subImage->save();
                }
            }       

        }else{
            return redirect()->back()->with('error', 'sorry! Data not uploaded');
        }

        });
        

        return redirect()->route('posts.view')->with('success','Post added successfully.Please wait for admin approval');
    }

    //Customer edit post------------------------------------------------
    public function editPost($id){

        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Category::all();
        $data['divisionData']= Division::all();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['userData']= Auth::user();
        $data['editPostData']= Location:: find($id);

        return view('Frontend.Customerpost.edit_post', $data);
    }

    //Customer update post--------------------------------------------------------------------------
    public function updatePost(LocationRequest $request, $id){

        DB::transaction(function() use($request, $id){

        $post= Location::find($id);

        $post->location_name= $request->location_name;
        $post->slug= str_slug($request->location_name);
        $post->category_id= $request->category_id;
        $post->division_id= $request->division_id;
        $post->district_name= $request->district_name;
        $post->description= $request->description;
        $post->suggestion= $request->suggestion;
        $post->latitude= $request->latitude;
        $post->longitude= $request->longitude;
        $post->updated_by= Auth::user()->id;
        $img= $request->file('image');

        if($img) {
            $imgName= date('YmdHi').$img->getClientOriginalName();
            $img->move('public/Upload/Location_images/',$imgName);
            //Unlink photos
            if (file_exists('public/Upload/Location_images/'.$post->image) AND ! empty($post->image)) {
                unlink('public/Upload/Location_images/'.$post->image);
            }
            $post['image']= $imgName;
        }

        //Sub image update-------------------------------------------------------------------------
        if($post->save()){
        
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
                    $subImage->location_id= $post->id;
                    $subImage->sub_image= $imgName;
                    $subImage->save();
                }
            }     

        }else{
            return redirect()->back()->with('error', 'sorry! Data not updated');
        }

        });
        

        return redirect()->route('customerprofiles.view')->with('success','Post updated successfully');
    }


    //Customer delete post-------------------------------------------------------------------------------
    public function deletePost($id){

        $postData= Location::find($id);

        if (file_exists('public/Upload/Location_images/'.$postData->image) AND ! empty($postData->image)) {
            unlink('public/Upload/Location_images/'.$postData->image);
        }

        $subImage= LocationSubImage::where('location_id', $postData->id)->get()->toArray();

        if (!empty($subImage)) {
            
            foreach ($subImage as $value) {
                if (!empty($value)) {
                    unlink('public/Upload/Location_images/Location_sub_images/'.$value['sub_image']);
                }
            }
        }

        LocationSubImage::where('location_id', $postData->id)->delete();
        $postData->delete();


        return redirect()->route('customerprofiles.view')->with('success', 'Post deleted successfully');
    }




}
