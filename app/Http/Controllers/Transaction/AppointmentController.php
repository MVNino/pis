<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Appointment;
use App\Patient;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function appointment() 
    {
        $appointment = DB::table('appointment_tbl')
                    ->join('patient_tbl', 'appointment_tbl.patient_id', '=', 'patient_tbl.patient_id')
                    ->selectRaw('CONCAT(lname,", ",fname, " ", mname) as full_name, contact_no, email, DATE_FORMAT(appointment_date, "%M %d %Y")as appointment_date, DATE_FORMAT(time, "%h:%i %p") as time')
                    ->get();
        
        return view('admin.transaction.appointment',
                ['appointments' => $appointment]);
    }

    public function approvedAppointment() {
        return view('admin.transaction.approved-appointment');
    }

}
