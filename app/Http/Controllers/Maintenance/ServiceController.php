<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\OtherService;
use App\OtherServiceVideo;
use App\SpecialtyService;
use App\SpecialtyServiceVideo;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function viewServices()
    {
        $otherServices = OtherService::orderBy('other_services_id', 'desc')
                ->paginate(5);
        $specialtyServices = SpecialtyService::orderBy('spec_service_id', 'desc')
                ->paginate(5);
    	return view('admin.maintenance.service', 
            ['otherServices' => $otherServices,
            'specialtyServices' => $specialtyServices]);
    }

    public function addSpecialty(Request $request)
    {
    	$this->validate($request, [
    		'txtTitle' => 'required',
    		'txtareaDescription' => 'required|string|max:5000',
    		'txtVideoLink' => 'required',
            'fileServiceImg' => 'image|nullable|max:10000'
    	]);

        // Insert record to database
    	$service = new SpecialtyService;
    	$service->spec_title = $request->txtTitle;
    	$service->spec_desc = $request->txtareaDescription;
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
            $latestSpecId = SpecialtyService::max('spec_service_id');
            $specialtyServiceVid = new SpecialtyServiceVideo;
            $specialtyServiceVid->specialty_service_id = $latestSpecId;
            $specialtyServiceVid->video = $request->txtVideoLink;
            if ($specialtyServiceVid->save()) {
                return redirect()->back()->with('success', 'Service successfully added!');
            }
    	}
    }

    public function addOtherService(Request $request)
    {
    	$this->validate($request, [
    		'txtTitle' => 'required',
    		'txtareaDescription' => 'required|string|max:5000',
    		'txtVideoLink' => 'required',
            'fileServiceImg' => 'image|nullable|max:10000'
    	]);

        // Insert record to database
    	$service = new OtherService;
    	$service->other_title = $request->txtTitle;
    	$service->other_desc = $request->txtareaDescription;
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

            $latestOtherId = OtherService::max('other_services_id');
            $otherServiceVid = new OtherServiceVideo;
            $otherServiceVid->other_service_id = $latestOtherId;
            $otherServiceVid->video = $request->txtVideoLink;
            if ($otherServiceVid->save()) {
                return redirect()->back()->with('success', 'Service successfully added!');
            }
    	}
    }

    // Edit Services
    public function editSpecialty($id)
    {
        $specialtyService = SpecialtyService::findOrFail($id);
        return view('admin.maintenance.edit-special-service', 
            ['specialtyService' => $specialtyService]);
    }

    public function updateSpecialty(Request $request, $id)
    {
        $this->validate($request, [
            'txtTitle' => 'required',
            'txtAreaDescription' => 'required|string|max:5000',
            'fileServiceImg' => 'image|nullable|max:10000'
        ]);

        // Insert record to database
        $service = SpecialtyService::findOrFail($id);
        $service->spec_title = $request->txtTitle;
        $service->spec_desc = $request->txtAreaDescription;
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
                ->with('success', 'Specialty service has been updated!');
        }
    }

    public function deleteSpecialty($id)
    {
        try
        {
            $specService = SpecialtyService::findOrFail($id);

            if ($specService->delete())
            {
                return redirect()->back()->with('success', 
                    'Specialty service removed successfully!');
            }
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function editMainService($id)
    {
        $mainService = OtherService::findOrFail($id);
        return view('admin.maintenance.edit-main-service', 
            ['mainService' => $mainService]);
    }

    public function updateMainService(Request $request, $id)
    {
        $this->validate($request, [
            'txtTitle' => 'required',
            'txtareaDescription' => 'required|string|max:5000',
            'fileServiceImg' => 'image|nullable|max:10000'
        ]);

        // Insert record to database
        $service = OtherService::findOrFail($id);
        $service->other_title = $request->txtTitle;
        $service->other_desc = $request->txtareaDescription;
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
                ->with('success', 'Main service has been updated!');
        }
    }

    public function deleteMainService($id)
    {
        try
        {
            $mainService = OtherService::findOrFail($id);

            if ($mainService->delete())
            {
                return redirect()->back()->with('success', 
                    'Main service removed successfully!');
            }

        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }

    }

    public function editSpecialtyServiceVid($id)
    {
        $specialtyServiceVid = SpecialtyServiceVideo::findOrFail($id);
        return view('admin.maintenance.edit-special-service-video', 
            ['specialtyServiceVid' => $specialtyServiceVid]);
    }

    public function updateSpecialtyServiceVid(Request $request, $id)
    {
        $this->validate($request, [
            'txtVideoLink' => 'required'
        ]);
        $specialtyServiceVid = SpecialtyServiceVideo::findOrFail($id);
        $specialtyServiceVid->video = $request->txtVideoLink;
        if ($specialtyServiceVid->save()) {
            return redirect()->back()->with('success', 'The video has been updated!');
        }
    }

    public function editOtherServiceVid($id)
    {
        $otherServiceVid = OtherServiceVideo::findOrFail($id);
        return view('admin.maintenance.edit-other-service-video', 
            ['otherServiceVid' => $otherServiceVid]);
    }

    public function updateOtherServiceVid(Request $request, $id)
    {
        $this->validate($request, [
            'txtVideoLink' => 'required'
        ]);
        $otherServiceVid = OtherServiceVideo::findOrFail($id);
        $otherServiceVid->video = $request->txtVideoLink;
        if ($otherServiceVid->save()) {
            return redirect()->back()->with('success', 'The video has been updated!');
        }
    }

    public function addSpecialtyServiceVideo(Request $request, $id)
    {
        $this->validate($request, [
            'txtVideoLink' => 'required'
        ]);
        $specialtyServiceVid = new SpecialtyServiceVideo;
        $specialtyServiceVid->specialty_service_id = $id;
        $specialtyServiceVid->video = $request->txtVideoLink;
        if ($specialtyServiceVid->save()) {
            return redirect()->back()->with('success', 'The video has been added!');
        }
    }

    public function addOtherServiceVideo(Request $request, $id)
    {
        $this->validate($request, [
            'txtVideoLink' => 'required'
        ]);
        $otherServiceVid = new OtherServiceVideo;
        $otherServiceVid->other_service_id = $id;
        $otherServiceVid->video = $request->txtVideoLink;
        if ($otherServiceVid->save()) {
            return redirect()->back()->with('success', 'The video has been added!');
        }
    }

    public function deleteSpecialtyServiceVid($id)
    {
        $specialtyServiceVid = SpecialtyServiceVideo::findOrFail($id);
        if ($specialtyServiceVid->delete()) {
            return redirect()->back()->with('success', 'The video has been removed!');
        }
    }

    public function deleteOtherServiceVid($id)
    {
        $otherServiceVid = OtherServiceVideo::findOrFail($id);
        if ($otherServiceVid->delete()) {
            return redirect()->back()->with('success', 'The video has been removed!');
        }
    }
}