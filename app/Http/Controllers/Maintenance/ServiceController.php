<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\OtherService;
use App\SpecialtyService;

class ServiceController extends Controller
{
    public function viewServices()
    {
    	return view('admin.maintenance.service');
    }

    public function addSpecialty(Request $request)
    {
        return $request->file('fileServiceVid');
    	$this->validate($request, [
    		'txtTitle' => 'required',
    		'txtareaDescription' => 'required',
    		'txtVideoLink' => 'required',
            'fileServiceImg' => 'image|nullable|max:2000'
    	]);

        // Insert record to database
    	$service = new SpecialtyService;
    	$service->spec_title = $request->txtTitle;
    	$service->spec_desc = $request->txtareaDescription;
    	$service->spec_vidlink = $request->txtVideoLink;
    	// Handle file upload for specialty service image
        if($request->hasFile('fileServiceImg')){
            // Get the file's extension
            $fileExtension = $request->file('fileServiceImg')
                ->getClientOriginalExtension();
            // Create a filename to store(database)
            $serviceImgNameToStore = $request->txtTitle
                .'_'.'SpecialtyServiceImg'.'_'.time().'.'.$fileExtension;
            // Upload file to system
            $path = $request->file('fileServiceImg')
                ->storeAs('public/images/service/specialty/', $serviceImgNameToStore);
            $service->spec_image_icon = $serviceImgNameToStore;
        }
        // Handle file upload for specialty service image
        if($request->hasFile('fileServiceVid')){
            // Get the file's extension
            $fileExtension = $request->file('fileServiceVid')
                ->getClientOriginalExtension();
            // Create a filename to store(database)
            $serviceVidNameToStore = $request->txtTitle
                .'_'.'SpecialtyServiceVid'.'_'.time().'.'.$fileExtension;
            // Upload file to system
            $path = $request->file('fileServiceVid')
                ->storeAs('public/images/service/specialty/', $serviceVidNameToStore);
            $service->spec_video = $serviceVidNameToStore;
        }
    	if ($service->save()) {
    		return redirect()->back()
    			->with('success', 'Specialty service added!');
    	}
    }

    public function addOtherService(Request $request)
    {
    	$this->validate($request, [
    		'txtTitle' => 'required',
    		'txtareaDescription' => 'required',
    		'txtVideoLink' => 'required',
            'fileServiceImg' => 'image|nullable|max:2000'
    	]);

        // Insert record to database
    	$service = new OtherService;
    	$service->other_title = $request->txtTitle;
    	$service->other_desc = $request->txtareaDescription;
    	$service->other_vidlink = $request->txtVideoLink;
    	// Handle file upload for specialty service image
        if($request->hasFile('fileServiceImg')){
            // Get the file's extension
            $fileExtension = $request->file('fileServiceImg')
                ->getClientOriginalExtension();
            // Create a filename to store(database)
            $serviceImgNameToStore = $request->txtTitle
                .'_'.'OtherServiceImg'.'_'.time().'.'.$fileExtension;
            // Upload file to system
            $path = $request->file('fileServiceImg')
                ->storeAs('public/images/service/other/', $serviceImgNameToStore);
            $service->other_image = $serviceImgNameToStore;
        }
        // Save record
    	if ($service->save()) {
    		return redirect()->back()
    			->with('success', 'Other service added!');
    	}
    }
}
