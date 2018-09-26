<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Feature;

class FeatureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function viewFeatures()
    {
        $features = Feature::orderBy('features_id')->paginate(5);
        return view('admin.maintenance.features', ['features' => $features]);
    	
    }

    public function storeFeature(Request $request)
    {	
        $this->validate($request, [
  			'title' => 'required|string|max:5000',
  			'description' => 'required|string|max:5000',
  			'fileFeatureImg' => 'image|nullable|max:10000',
            
  		]);

      try 
      {
  		$feature = new Feature;
  		$feature->feature_title = $request->title;
  		$feature->feature_description = $request->description;
        $feature->status = 0;
        

        if ($feature->save()) {
        	return redirect()->back()->with('success', 'feature added!');
        }

        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        } 
    }

    public function edit($id)
    {
        $feature = Feature::findOrFail($id);
        return view('admin.maintenance.edit-feature', compact('feature', 'id'));
    }

    public function editFeature(Request $request, $id)
    {
        // return $request;
       $this->validate($request, [
            'title' => 'required|string|max:5000',
            'description' => 'required|string|max:5000',
            'fileFeatureImg' => 'nullable|max:10000'
        ]);

        $feature = Feature::findOrFail($id);
        $feature->feature_title = $request->title;
        $feature->feature_description = $request->description;
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
            $feature->feature_image = $featureImgNameToStore;
        }
        if ($feature->save()) {
            return redirect()->back()->with('success', 'feature Updated!');
        }
    }

    public function deleteFeature($id)
    {
        try
        {
            $feature = Feature::find($id);
            $feature->status = 1;

            if ($feature->save())
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
