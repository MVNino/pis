<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function billing() {
        return view('admin.transaction.billing');
    }

    public function receipt() {
        return view('admin.transaction.receipt');
    }

    public function balance() {
        return view('admin.transaction.balance');
    }
}
