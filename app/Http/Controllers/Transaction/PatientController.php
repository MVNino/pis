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

    public function editRecord(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);

        try
        {
            $patient = Patient::
                find($request->input('id'));

            $mr = MedicalRecord::
                all()
                ->where('patient_id', '=', $request->input('id'));

            return view('admin.transaction.edit-patient', ['patient'=>$patient, 'mr'=>$mr]);
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updatePatient(Request $request, $id)
    {
        $this->validate($request, [
    		'lastName' => 'required',
            'firstName' => 'required',
            'middleName' => 'required',
            'contactNumber' => 'required'
        ]);

        try
        {
            $patient = Patient::find($id);

            $patient->lname = $request->input('lastName');
            $patient->fname = $request->input('firstName');
            $patient->mname = $request->input('middleName');
            $patient->contact_no = $request->input('contactNumber');
            $patient->save();

            if ($patient->save())
            {
                return redirect()->back()->with('success', 'Patient Record Updated!');
            }
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateMedical(Request $request, $id)
    {
        $this->validate($request, [
            'height' => 'required',
            'weight' => 'required',
            'temperature' => 'required',
            'procedure' => 'required'
        ]);

        try
        {
            $mr = MedicalRecord::
                find($id);

            $mr->height = $request->input('height');
            $mr->weight = $request->input('weight');
            $mr->temperature = $request->input('temperature');
            $mr->med_hist_procedure = $request->input('procedure');

            if ($mr->save())
            {
                return redirect()->back()->with('success', 'Medical Record Updated!');
            }
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
