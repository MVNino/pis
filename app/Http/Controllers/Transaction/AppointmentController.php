<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function appointment() {
        return view('admin.transaction.appointment');
    }

    public function approvedAppointment() {
        return view('admin.transaction.approved-appointment');
    }

}
