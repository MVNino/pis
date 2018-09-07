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
        //$client = DB::select('SELECT * FROM about_table');
        $clinic = Clinic::all();

        return view('admin.maintenance.clinic', ['clinic'=>$clinic]);
    }

    public function updateClinic()
    {
        try
        {
            $id = 1;
            
            $clinic = Intake::find($id);

            $clinic->clinic_contact = $request->input('contact');
            $clinic->clinic_location = $request->input('location');
            $clinic->clinic_hours = $request->input('hours');
            $clinic->clinic_days = $request->input('days');
            $clinic->clinic_email = $request->input('email');

            $clinic->save();
            
            return redirect()->back();
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
}
