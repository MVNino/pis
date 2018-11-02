<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;
use App\SpecialtyService;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function billing($id = NULL) 
    {
        if ($id == NULL) {
            $specialServices = SpecialtyService::all();
            return view('admin.transaction.billing', 
                ['specialServices' => $specialServices]);
        } else {
            $patient = Patient::findOrFail($id);
            $specialServices = SpecialtyService::all();
            return view('admin.transaction.patient-billing', 
                ['specialServices' => $specialServices, 
                'patient' => $patient]);
        }
    }

    public function availService(Request $request)
    {
        return $request;
    }

    public function receipt() {
        return view('admin.transaction.receipt');
    }

    public function balance() {
        return view('admin.transaction.balance');
    }
}
