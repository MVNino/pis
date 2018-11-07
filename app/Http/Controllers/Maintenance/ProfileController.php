<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Profile;
use \Input as Input;

class ProfileController extends Controller
{

    public function viewProfile() 
    {
        try
        {
            $profile = Profile::all();

            if ($profile->count() > 0)
            {
                $profileMaxId = Profile::max('profile_id');
                $profile = Profile::findOrFail($profileMaxId);
                return view('admin.maintenance.profile', ['profile' => $profile]);
            }
            else
            {
                return redirect()->back()->with('error', 'No Profile Record');
            }
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateProfile (Request $request)
    {
        $this->validate($request, [
    		'introduction' => 'required',
            'skill' => 'required',
            'title' => 'nullable',
            'name' => 'required',
            'profilepic' => 'image|nullable|max:10000'
        ]);

        try
        {
            $profile = new Profile;

            $profile->name = $request->input('name');
            $profile->title = $request->input('title');
            $profile->introduction = $request->input('introduction');
            $profile->skills = $request->input('skill');
            $profile->status = 0;

            // Handle file upload for file image
            if($request->hasFile('profilepic'))
            {
                // Get the file's extension
                $fileExtension = $request->file('profilepic')
                    ->getClientOriginalExtension();
                // Create a filename to store(database)
                $profilepicNameToStore = 'profilePic'.'_'.time().'.'.$fileExtension;
                // Upload file to system
                $path = $request->file('profilepic')
                    ->storeAs('public/images/profile', $profilepicNameToStore);
                $profile->picture = $profilepicNameToStore;
            }
            else
            {
                $profile->picture = $request->input('uploaded');
            }

            if ($profile->save())
                {
                    return redirect()->back()->with('success', 'Profile Updated!');
                }
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }

	    return view('admin.maintenance.profile');
    }
}
