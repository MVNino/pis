<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\About;

class AboutController extends Controller
{
    public function viewAbout()
    {
        $about = About::all();
        if ($about->count() > 0)
        {
    		$aboutMaxId = About::max('about_id');
    		$about = About::findOrFail($aboutMaxId);
    		return view('admin.maintenance.about', ['about' => $about]);
        }
        else
        {
	        return view('admin.maintenance.about');
    	}
    }

    public function addAbout(Request $request)
    {
        $this->validate($request, [
    		'aboutTitle' => 'required|string',
            'aboutDescription' => 'required|string',
            'aboutImage' => 'image|nullable|max:3000'
        ]);

        try
        {
            $about = new About;
            $about->about_title = $request->input('aboutTitle');
            $about->about_desc = $request->input('aboutDescription');
            // Handle file upload for news image
            if($request->hasFile('aboutImage')){
                // Get the file's extension
                $fileExtension = $request->file('logo')
                    ->getClientOriginalExtension();
                // Create a filename to store(database)
                $aboutImgNameToStore = $request->title
                    .'_'.'aboutImage'.'_'.time().'.'.$fileExtension;
                // Upload file to system
                $path = $request->file('aboutImage')
                    ->storeAs('public/images/about', $aboutImgNameToStore);
                $about->about_image = $aboutImgNameToStore;
            }

            if ($about->save())
            {
                return redirect()->back()->with('success', 'About Details Updated!');
            }
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
}
