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

class CustomerPostRequestController extends Controller
{
    //Pending post list
    public function pendingList(){

        $data['posts']= Location::where('approval','0')->get();
        return view('Backend.CustomerPostRequest.pending_post_list', $data);
    }


    //Approved post list
    public function approvedList(){

        $data['posts']= Location::where('approval','1')->get();
        return view('Backend.CustomerPostRequest.approved_post_list', $data);
    }

    //Post details
    public function details($id){

   		$data['postDetails']= Location::find($id);
        return view('Backend.CustomerPostRequest.customer_post_details', $data);
    }

    //Approve customer post
    public function approvePost(Request $request){

    	
    }

    //Delete customer post
    public function deletePost(Request $request){

    	return redirect()->route('posts.pending.list')->with('success', 'Post deleted successfully');
    }
}
