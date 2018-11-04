<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use DB;
use App\Company;
use \Input as Input;
use App\User;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{

    public function editAccount() 
    {
	    return view('admin.maintenance.account');
    }

    public function updateProfile(Request $request, $id)
    {
    	$this->validate($request, [
    		'profileImage' => 'image|mimes:jpeg,png,jpg|required|max:1500',
    		'txtUsername' => 'required'
    	]);
    	$user = User::findOrFail($id);
    	$user->username = $request->txtUsername;
    	// Handle file upload for profile image
    	if($request->hasFile('profileImage')){
    	    // Get the file's extension
    	    $fileExtension = $request->file('profileImage')
    	        ->getClientOriginalExtension();
    	    // Create a filename to store(database)
    	    $profImageNameToStore = $request->txtUsername
    	        .'_'.'profileImage'.'_'.time().'.'.$fileExtension;
    	    // Upload file to system
    	    $path = $request->file('profileImage')
    	        ->storeAs('public/images/profile', $profImageNameToStore);
    	    $user->profile_image_code = $profImageNameToStore;
    	}
    	if ($user->save()) {
	   		return redirect()->back()->with('success', 'Your account has been updated!');
    	}
    }

    public function changePassword(Request $request, $id)
    {
    	$this->validate($request, [
    		'currentPassword' => 'required',
            'newPassword' => 'required|string|min:6'

    	]);

    	$current_password = auth()->user()->password;           
		if(Hash::check($request->currentPassword, $current_password)) {           
			$user_id = auth()->user()->id;                       
			$obj_user = User::find($user_id);
			$obj_user->password = Hash::make($request->newPassword); 
			if($obj_user->save()) {
		   		return redirect()->back()->with('success', 'Your account password has been updated!');
			}
		} else {           
	   		return redirect()->back()->with('error', 'Current password authentication failed!');
		}

    }
}
