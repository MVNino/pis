<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Patient;


class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listPatients() {
        return view('admin.transaction.patient');
    }

    public function editPatients() {
        return view('admin.transaction.edit-patient');

    }

    public function patientMedical() {
        return view('admin.transaction.medical-patient');
    }
}
