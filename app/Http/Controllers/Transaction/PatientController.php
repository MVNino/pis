<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

use DB;
use App\Patient;
use App\MedicalRecord;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listPatients() {
        try
        {
            $patients = Patient::
                all();

            $medicalRecords = MedicalRecord::
                all();

            return view('admin.transaction.patient', ['patients'=>$patients, 'medicalRecords'=>$medicalRecords]);
        }
        catch (\Exception $e)
        {
            return view('admin.transaction.patient')->with('error', $e->getMessage());
        }
    }

    public function editRecord(Request $request) {

        $this->validate($request, [
    		'patient' => 'required',
            'record_id' => 'required'
        ]);

        try
        {
            $patient_id = $request->input('patient');
            $medical_record_id = $request->input('record_id');
            
            $patient = Patient::
                find($patient_id);

            $mrSelected = MedicalRecord::
                find($medical_record_id);

            $mrAll = MedicalRecord::
                all()
                ->where('medical_record_id', '=', $medical_record_id);

            return view('admin.transaction.edit-patient', ['patient'=>$patient, 'mrSelected'=>$mrSelected, 'mrAll'=>$mrAll]);
        }
        catch (\Exception $e)
        {
            return view('admin.transaction.edit-patient')->with('error', $e->getMessage());
        }
    }

    public function updatePatient(Request $request, $id)
    {
        try
        {
            $patient = Patient::
                find($id);
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
