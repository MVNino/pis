<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SpecialtyService;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function billing() 
    {
        $specialServices = SpecialtyService::all();
        return view('admin.transaction.billing', 
            ['specialServices' => $specialServices]);
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
