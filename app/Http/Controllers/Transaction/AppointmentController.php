<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Notifications\AppointmentApproved;
use App\Notifications\AppointmentRescheduled;
use App\Appointment;
use App\Patient;
use App\Clinic;


class AppointmentController extends Controller
{
    public $appointment;

    public function __construct()
    {
        $this->appointment = new Appointment;
        $this->middleware('auth', ['except' => ['scheduleAppointment']]);
    }

    public function scheduleAppointment(Request $request)
    {
        return $request;
    }

    public function location()
    {
        $location_list = DB::table('clinic_contact_tbl')
                       ->groupBy('clinic_location')
                       ->get();
       
        return view('guest.index', ['location_list'=>$location_list]);
    }

    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('clinic_contact_tbl')
              ->where($select, $value)
              ->groupBy($dependent)
              ->get();
        $output = '<option value="">Select '.ucfirst($dependent).'</option>';

        foreach($data as $row)
        {
            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
        echo $output;
    }

    public function listAppointments() 
    {
        // list appointments with the status of '0'
        $appointments = $this->appointment->listAppointments(0);        
        return view('admin.transaction.appointment',
                ['appointments' => $appointments]);
    }

    public function rescheduleAppointment(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 2;
        if ($appointment->save()) {
            \Notification::route('mail', $appointment->patient->email)
                ->notify(new AppointmentRescheduled());
            return redirect()->back()->with('success', 'The appointment has been rescheduled!');
        }
    }

    public function approveAppointment(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 1;
        if ($appointment->save()) {
            \Notification::route('mail', $appointment->patient->email)
                ->notify(new AppointmentApproved());
            return redirect()->back()->with('success', 'The appointment has been approved!');
        }
    }

    public function listApprovedAppointments() 
    {
        // list appointments with the status of '1'
        $appointments = $this->appointment->listAppointments(1);
        return view('admin.transaction.approved-appointment', 
            ['appointments' => $appointments]);
    }

    public function addAnotherAppointment(Request $request)
    {
        $this->validate($request, [
            'patientId' => 'required',
            'appointmentDate' => 'required',
            'appointmentTime' => 'required'
        ]);
        $patient = Patient::findOrFail($request->patientId);
        $newPatient = new Patient;
        $newPatient->fname = $patient->fname;
        $newPatient->mname = $patient->mname;
        $newPatient->lname = $patient->lname;
        $newPatient->contact_no = $patient->contact_no;
        $newPatient->email = $patient->email;
        if($newPatient->save()) {
            $appointment = new Appointment;
            // $appointment->doctor_id = auth()->user()->id;
            $appointment->time = $request->appointmentTime;
            $appointment->day = 2;
            $appointment->appointment_date = $request->appointmentDate;
            $appointment->status = 1;
            $latestPatientId = Patient::max('patient_id');
            $appointment->patient_id = $latestPatientId;
            if($appointment->save()) {
                return redirect()->back()->with('success', 
                    'Another appointment has been added!');
            }
        }
    }
}
