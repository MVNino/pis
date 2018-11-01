<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Notifications\AppointmentApproved;
use App\Appointment;
use App\Patient;

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

    public function listAppointments() 
    {
        // list appointments with the status of '0'
        $appointments = $this->appointment->listAppointments(0);        
        return view('admin.transaction.appointment',
                ['appointments' => $appointments]);
    }

    // Reschedule appointment
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

}
