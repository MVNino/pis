<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Feature;

class FeatureController extends Controller
{
    public function viewFeatures()
    {
    	$feature = Feature::all()->toArray();
      return view('admin.maintenance.features', compact('feature'));
    }

    public function storeFeature(Request $request)
    {	
  		$this->validate($request, [
  			'title' => 'required',
  			'description' => 'required',
  			'fileFeatureImg' => 'image|nullable|max:3000'
  		]);

      try 
      {
  		$feature = new Feature;
  		$feature->title = $request->title;
  		$feature->description = $request->description;
        // Handle file upload for feature image
        if($request->hasFile('fileFeatureImg')){
            // Get the file's extension
            $fileExtension = $request->file('fileFeatureImg')
                ->getClientOriginalExtension();
            // Create a filename to store(database)
            $featureImgNameToStore = $request->title
                .'_'.'FeatureImg'.'_'.time().'.'.$fileExtension;
            // Upload file to system
            $path = $request->file('fileFeatureImg')
                ->storeAs('public/images/feature', $featureImgNameToStore);
            $feature->image = $featureImgNameToStore;
        }
        if ($feature->save()) {
        	return redirect()->back()->with('success', 'feature added!');
        }

        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        } 
    }

    public function editFeature(Request $request)
    {
        return 123;
    }

    public function deleteFeature($id)
    {
        try
        {
            $feature = Feature::find($id);

            if ($feature->delete())
            {
                return redirect()->back()->with('success', 'Removed Successfully!');
            }

        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

}
