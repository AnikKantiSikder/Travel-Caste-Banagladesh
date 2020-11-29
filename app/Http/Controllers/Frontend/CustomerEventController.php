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
use App\Model\Event;
use App\Model\EventSubImage;
use App\Http\Requests\LocationRequest;
use App\User;
use DB;
use Auth;
use Mail;

class CustomerEventController extends Controller
{
	//Customer view event
	public function viewEvents(){
		$data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['allData']= Event::where('created_by',auth()->user()->id)->where('approval','1')->get();
        

        return view('Frontend.Customerevent.view_personal_event_list', $data);
	}

    //Create event
    public function createEvent(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Category::all();
        $data['divisionData']= Division::all();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['userData']= Auth::user();
        
    	return view('Frontend.Customerevent.customer_create_event',$data);
    }

    //Store event
    public function storeEvent(Request $request){

        DB::transaction(function() use($request){

            $this->validate($request,[
            'event_name' => 'required',
            'event_date' => 'required',
            'category_id'=> 'required',
            'division_id'=> 'required',
            'district_name'=> 'required',
            'details'=> 'required',
            'suggestion'=> 'required',
            'no_members'=> 'required',
            'cost'=> 'required',
            'contact_number'=> 'required',
        ]);

        $event= new Event();

        $event->event_date = $request->event_date ;
        $event->event_name= $request->event_name;
        $event->slug= str_slug($request->event_name);
        $event->category_id= $request->category_id;
        $event->division_id= $request->division_id;
        $event->district_name= $request->district_name;
        $event->details= $request->details;
        $event->suggestion = $request->suggestion ;
        $event->no_members= $request->no_members;
        $event->cost= $request->cost;
        $event->contact_number= $request->contact_number;
        $event->approval= 0;
        $event->created_by= Auth::user()->id;
        $img= $request->file('image');

        if($img) {
            $imgName= date('YmdHi').$img->getClientOriginalName();
            $img->move('public/Upload/Event_images/',$imgName);
            $event['image']= $imgName;
        }

        if($event->save()){
            //Sub image insert-------------------------------------------------------------------------
            $files= $request->sub_image;

            if(!empty($files)){
                foreach ($files as $file) {

                    $imgName= date('YmdHi').$file->getClientOriginalName();
                    $file->move('public/Upload/Event_images/Event_sub_images', $imgName);
                    $subImage['sub_image']= $imgName;

                    $subImage= new EventSubImage();
                    $subImage->event_id= $event->id;
                    $subImage->sub_image= $imgName;
                    $subImage->save();
                }
            }       

        }else{
            return redirect()->back()->with('error', 'sorry! Something is wrong');
        }

        });
        

        return redirect()->route('events.view')->with('success','Event created successfully');
    }


    //Customer edit event

    public function editEvent($id){

        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['categories']= Category::all();
        $data['divisionData']= Division::all();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        $data['userData']= Auth::user();
        $data['editEventData']= Event:: find($id);

        return view('Frontend.Customerevent.customer_edit_event', $data);
    }


    //Customer update event
    public function updateEvent(Request $request, $id){

        DB::transaction(function() use($request, $id){

        $event= Event::find($id);

        $event->event_date = $request->event_date ;
        $event->event_name= $request->event_name;
        $event->slug= str_slug($request->event_name);
        $event->category_id= $request->category_id;
        $event->division_id= $request->division_id;
        $event->district_name= $request->district_name;
        $event->details= $request->details;
        $event->suggestion = $request->suggestion ;
        $event->no_members= $request->no_members;
        $event->cost= $request->cost;
        $event->contact_number= $request->contact_number;
        $event->approval= 0;
        $event->updated_by= Auth::user()->id;
        $img= $request->file('image');

        if($img) {
            $imgName= date('YmdHi').$img->getClientOriginalName();
            $img->move('public/Upload/Event_images/',$imgName);
            //Unlink photos
            if (file_exists('public/Upload/Event_images/'.$event->image) AND ! empty($event->image)) {
                unlink('public/Upload/Event_images/'.$event->image);
            }
            $event['image']= $imgName;
        }

        //Sub image update-------------------------------------------------------------------------
        if($event->save()){
        
            $files= $request->sub_image;
            //Sub images unlink
            if (!empty($files)) {
                $subImage= EventSubImage::where('event_id', $id)->get()->toArray();
                foreach ($subImage as $value) {
                    if (!empty($value)) {
                        unlink('public/Upload/Event_images/Event_sub_images/'.$value['sub_image']);
                    }
                }
                EventSubImage::where('event_id', $id)->delete();
            }
            //New sub images insert
            if(!empty($files)){
                foreach ($files as $file) {

                    $imgName= date('YmdHi').$file->getClientOriginalName();
                    
                    $file->move('public/Upload/Event_images/Event_sub_images', $imgName);
                    $subImage['sub_image']= $imgName;

                    $subImage= new EventSubImage();
                    $subImage->event_id= $event->id;
                    $subImage->sub_image= $imgName;
                    $subImage->save();
                }
            }     

        }else{
            return redirect()->back()->with('error', 'sorry! Data not updated');
        }

        });
        

        return redirect()->route('customerprofiles.view')->with('success','Event updated successfully');
    }


    //Customer delete event
    public function deleteEvent($id){

        $eventData= Event::find($id);

        if (file_exists('public/Upload/Event_images/'.$eventData->image) AND ! empty($eventData->image)) {
            unlink('public/Upload/Event_images/'.$eventData->image);
        }

        $subImage= EventSubImage::where('event_id', $eventData->id)->get()->toArray();

        if (!empty($subImage)) {
            
            foreach ($subImage as $value) {
                if (!empty($value)) {
                    unlink('public/Upload/Event_images/Event_sub_images/'.$value['sub_image']);
                }
            }
        }

        EventSubImage::where('event_id', $eventData->id)->delete();
        $eventData->delete();


        return redirect()->route('events.view')->with('success', 'Event removed successfully');
    }



    
}
