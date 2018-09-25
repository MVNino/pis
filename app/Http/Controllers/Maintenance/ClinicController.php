<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Clinic;

class ClinicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function viewClinic()
    {
     $clinic = Clinic::
        where('status', '=', 0)
        ->orderBy('clinic_location')
        ->paginate(5);
        
     return view('admin.maintenance.clinic', ['clinic'=>$clinic]);   
     //    $clinics = Clinic::all();
     //    if ($clinics->count() > 0)
     //    {
    	// 	$clinicMaxId = Clinic::max('clinic_contact_id');
    	// 	$clinic = Clinic::findOrFail($clinicMaxId);
    	// 	return view('admin.maintenance.clinic', ['clinic' => $clinic]);
     //    }
     //    else
     //    {
	    //     return view('admin.maintenance.clinic');
    	// }
    }

   public function addClinic(Request $request)
    {
        $this->validate($request, [
            'contact' => 'required|string',
            'location' => 'required|string',
            'days' => 'required',
            'open' => 'required',
            'close' => 'required',
            'fileMapImg' => 'image|required|max:3000',
            'places' => 'nullable',
            'telephone' => 'nullable'
        ]);

        // save contact to database
        $clinic = new Clinic;
        $clinic->clinic_contact = $request->contact;
        $clinic->clinic_location = $request->location;
        $clinic->clinic_days = $request->days;
        $clinic->clinic_open_time = $request->open;
        $clinic->clinic_close_time = $request->close;
        $clinic->clinic_days = $request->days;
        $clinic->clinic_map = $request->input('fileMapImg');
        $clinic->clinic_places = $request->input('places');
        $clinic->clinic_telephone = $request->input('telephone');
        $clinic->status = 0;
        if($request->hasFile('fileMapImg'))
        {
            // Get the file's extension
            $fileExtension = $request->file('fileMapImg')
                ->getClientOriginalExtension();
            // Create a filename to store(database)
            $mapImgNameToStore = $request->title
                .'_'.'MapImg'.'_'.time().'.'.$fileExtension;
            // Upload file to system
            $path = $request->file('fileMapImg')
                ->storeAs('public/images/map', $mapImgNameToStore);
            $clinic->clinic_map = $mapImgNameToStore;
        }
        $clinic->status = 0;
        
        if($clinic->save()){
            return redirect()->back()->with('success', 'Clinic Info added!');
        }
    }

    public function edit($id)
    {
        $clinic = Clinic::findOrFail($id);
        return view('admin.maintenance.edit-clinic', compact('clinic', 'id'));
    }

    public function updateClinic(Request $request, $id)
    {
        $this->validate($request, [
            'contact' => 'required|string',
            'location' => 'required|string',
            'open' => 'required',
            'close' => 'required',
            'days' => 'required',
            'fileMapImg' => 'image|nullable|max:3000',
            'places' => 'nullable',
            'telephone' => 'nullable'
        ]);

        // save clinic to database
        
        $clinic = Clinic::findOrFail($id);
        $clinic->clinic_contact = $request->input('contact');
        $clinic->clinic_location = $request->input('location');
        $clinic->clinic_days = $request->input('days');
        $clinic->clinic_open_time = $request->input('open');
        $clinic->clinic_close_time = $request->input('close');
        $clinic->clinic_days = $request->input('days');
        $clinic->clinic_map = $request->input('fileMapImg');
        if($request->hasFile('fileMapImg')){
            // Get the file's extension
            $fileExtension = $request->file('fileMapImg')
                ->getClientOriginalExtension();
            // Create a filename to store(database)
            $mapImgNameToStore = $request->title
                .'_'.'MapImg'.'_'.time().'.'.$fileExtension;
            // Upload file to system
            $path = $request->file('fileMapImg')
                ->storeAs('public/images/map', $mapImgNameToStore);
            $clinic->clinic_map = $mapImgNameToStore;
        }
        if ($clinic->save())
        {   
                return redirect()->back()->with('success', 'Updated Successfully!');   
        }
    }

    public function deleteClinic($id)
    {
        try
        {
            $clinic = Clinic::find($id);
            $clinic->status = 1;

            if ($clinic->save())
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
