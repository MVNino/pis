<?php

namespace App\Http\Controllers\MAINTENANCE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Clinic;

class ClinicController extends Controller
{
    public function viewClinic()
    {
        $clinics = Clinic::all();
        if ($clinics->count() > 0)
        {
    		$clinicMaxId = Clinic::max('clinic_contact_id');
    		$clinic = Clinic::findOrFail($clinicMaxId);
    		return view('admin.maintenance.clinic', ['clinic' => $clinic]);
        }
        else
        {
	        return view('admin.maintenance.clinic');
    	}
    }

    public function addClinic(Request $request)
    {
        $this->validate($request, [
    		'contact' => 'required|string',
            'location' => 'required|string',
            'open' => 'required|string',
            'close' => 'required|string',
            'days' => 'required|string',
            'email' => 'required|string|email'
        ]);
        
        try
        {
            $clinic = new Clinic;
            $clinic->clinic_contact = $request->input('contact');
            $clinic->clinic_location = $request->input('location');
            $clinic->clinic_open_time = $request->input('open');
            $clinic->clinic_close_time = $request->input('close');
            $clinic->clinic_days = $request->input('days');
            $clinic->clinic_email = $request->input('email');

            $clinic->save();
            
            return redirect()->back()->with('success', 'Clinic Details Updated!');
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
}
