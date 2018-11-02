<?php

namespace App\Http\Controllers\Transaction;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use Illuminate\Support\Facades\DB;

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

    public function generatePDF(){
        $pdf = PDF::loadView('admin.transaction.generatedReport');
        return $pdf->stream('report.pdf');
    }
}
