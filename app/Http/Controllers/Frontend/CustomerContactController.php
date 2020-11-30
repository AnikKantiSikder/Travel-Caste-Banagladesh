<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Contact;
use App\Model\About;
use App\Model\Location;
use App\Model\Category;
use App\Model\Division;
use App\Model\Hotel;
use App\Model\LocationSubImage;
use App\Model\Event;
use App\Model\EventSubImage;
use App\Model\Communicate;
use DB;
use Auth;
use Mail;

class CustomerContactController extends Controller
{
    //Contact us
    public function contactUs(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
        $data['divisions']= Location::select('division_id')->groupBy('division_id')->get();
        return view('Frontend.Contactus.contact_us', $data);
    }

    //Contact store
	public function contactStore(Request $request){
		
		$contact= new Communicate();

		$contact->name= $request->name;
		$contact->email= $request->email;
		$contact->mobile_no= $request->mobile_no;
		$contact->address= $request->address;
		$contact->msg= $request->msg;
		$contact->save();

		$data= array(
			'name'=> $request->name,
			'email'=> $request->email,
			'mobile_no'=> $request->mobile_no,
			'address'=> $request->address,
			'msg'=> $request->msg
		);

		Mail::send('Frontend.Gmails.contact_us_confirmation', $data, function($message) use($data) {

			$message-> from('kantiamitsikder66146@gmail.com', 'TravelCasteBangladesh');
			$message-> to($data['email']);
			$message-> subject('Thanks for contacting us');
		});


		return redirect()->back()->with('success', 'Your message has been sent successfully');
	}
}
