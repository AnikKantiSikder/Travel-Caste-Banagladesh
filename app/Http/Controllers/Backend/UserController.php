<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function view(){

    	// $data['allData']= User::where('user_type', 'Admin')->where('status', '1')->get();
    	
		$data['allData']= User::where('user_type', 'Admin')->get();
    	return view('Backend.User.view_user', $data);
    }

    //Add new user
    public function add(){

    	return view('Backend.User.add_user');
    }

    //Store user
    public function store(Request $request){

    	$this->validate($request, [
    		'name'=> 'required',
    		'email'=> 'required|unique:users',
    		'userrole'=> 'required',
    		'password'=> 'required| min:6',
            'password_confirmation'=> 'required| min:6'
    		
    	]);

    	$data= new User();

        $data->user_type= 'Admin';
    	$data->name= $request->name;
    	$data->email= $request->email;
    	$data->role= $request->userrole;
    	$data->password= bcrypt($request->password_confirmation);

    	// return response()->json($data);
    	$data->save();

    	return redirect()->route('users.view')->with('success','User added successfully');
    }

    //Edit uder
    public function edit($id){

        $editData= User::find($id);
        //Add and edit in under one page
        return view('Backend.User.edit_user', compact('editData')); 
    }

    //Update user
    public function update(Request $request, $id){

        $updateData= User::find($id);

        $updateData->role= $request->userrole;
        $updateData->name= $request->name;
        $updateData->email= $request->email;
        $updateData->save();

        return redirect()->route('users.view')->with('success', 'Data updated successfully');
    }

    //Delete user
    public function delete($id){
        $userData= User::find($id);
        $userData->delete();
        return redirect()->route('users.view')->with('success', 'User removed successfully');
    }



//Ends here    
}
