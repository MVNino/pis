<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewDashboard()
    {        // list appointments with the status of '0'
        $appointment = new Appointment;
        $appointments = $appointment->listAppointments(0);        
        return view('admin.transaction.appointment',
                ['appointments' => $appointments]);
    }
}
