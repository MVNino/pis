<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function expenses() {
        return view('admin.transaction.expenses');
    }

    public function editExpenses() {
        return view('admin.transaction.edit-expenses');
    }

    public function report() {
        return view('admin.transaction.report');
    }
}
