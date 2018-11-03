<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use DB;
use App\Patient;
use App\MedicalRecord;
use App\MedicalFileRecord;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listPatients() {
        try
        {
            $patients = DB::
                table('patient_tbl')
                ->select('patient_tbl.*', 'patient_information_tbl.birthday')
                ->join('patient_information_tbl','patient_information_tbl.patient_id','=','patient_tbl.patient_id')
                ->get();

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
            $patient = DB::
                table('patient_tbl')
                ->select('patient_tbl.*', 'patient_information_tbl.birthday')
                ->join('patient_information_tbl','patient_information_tbl.patient_id','=','patient_tbl.patient_id')
                ->where('patient_tbl.patient_id', '=', $request->input('id'))
                ->first();

            $mr = MedicalRecord::
                all()
                ->where('patient_id', '=', $request->input('id'));
            
            $mfr = MedicalFileRecord::
                all();

            return view('admin.transaction.edit-patient', ['patient'=>$patient, 'mr'=>$mr, 'mfr'=>$mfr]);
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


    public function addMedicalFileRecord(Request $request)
    {
        $this->validate($request, [
            'mrid' => 'required',
            'testResultImage' => 'image|nullable|max:10000'
        ]);

        try
        {
            $mfr = new MedicalFileRecord;

            // Handle file upload for file image
            if($request->hasFile('testResultImage')){
                // Get the file's extension
                $fileExtension = $request->file('testResultImage')
                    ->getClientOriginalExtension();
                // Create a filename to store(database)
                $fileImgNameToStore = $request->input('fileName')
                    .'_'.time().'.'.$fileExtension;
                // Upload file to system
                $path = $request->file('testResultImage')
                    ->storeAs('public/images/testResults', $fileImgNameToStore);

                $mfr->file_title = $fileImgNameToStore;
                $mfr->file = $fileExtension;
                $mfr->medical_record_id = $request->input('mrid');
            }

            if($request->hasFile('testResultImage'))
            {
                if ($mfr->save())
                {
                    return redirect()->back()->with('success', 'Medical Record Updated!');
                }
            }
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
