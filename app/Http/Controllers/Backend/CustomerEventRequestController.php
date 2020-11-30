<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Mail;
use App\User;
use App\Model\Location;
use App\Model\Event;
use App\Model\Category;
use App\Model\Division;
use App\Model\LocationCategory;
use App\Model\LocationSubImage;
use App\Model\EventSubImage;
use App\Http\Requests\LocationRequest;

class CustomerEventRequestController extends Controller
{
    //Pending event list
    public function pendingEventList(){

        $data['events']= Event::where('approval','0')->get();
        return view('Backend.CustomerEventRequest.pending_event_list', $data);
    }

    //Approved event list
    public function approvedEventList(){


        $data['events']= Event::join('users','events.created_by','=','users.id')->select('events.*')
                            ->where(['events.approval'=>'1'])->get();
        
        return view('Backend.CustomerEventRequest.approved_event_list', $data);
    }

    //Event details
    public function details($id){

   		$data['eventDetails']= Event::find($id);
        return view('Backend.CustomerEventRequest.customer_event_details', $data);
    }

    //Approve customer event
    public function approveEvent(Request $request){

    	$approve= Event::find($request->id);
        $approve->approval= '1';
        $approve->save();
        return redirect()->route('events.approved.list')->with('success', 'Event approved successfully');
    }

    //Delete customer event
    public function deleteEvent($id){

        $deleteEvent= Event::find($id);
        $deleteEvent->delete();
    	return redirect()->route('posts.pending.list')->with('success', 'Event deleted successfully');
    }
}
