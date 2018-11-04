<?php

namespace App\Http\Controllers\Transaction;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use PDF;
use Illuminate\Support\Facades\DB;
use App\Expense;
use App\OfficialReceipt;
use Auth;

class ReportController extends Controller
{
    public $expense;
    public $revenue;

    public function __construct()
    {
        $this->expense = new Expense;
        $this->revenue = new OfficialReceipt;
        $this->middleware('auth');
    }

    public function listReport()
    {
        $expenses = $this->expense->listReport();
        $revenue = $this->revenue->listReport();
        return view('admin.transaction.report', 
            ['expenses' => $expenses, 'revenue' => $revenue]);
    }

    public function rangedReport(Request $request)
    {
        $this->validate($request, [
            'dateStart' => 'required',
            'dateEnd' => 'required'
        ]);
        $dateStart = $request->dateStart;
        $dateEnd = $request->dateEnd;

        $expense = $this->expense->listReport($dateStart, $dateEnd);
        $revenue = $this->revenue->listReport($dateStart, $dateEnd);
        return view('admin.transaction.generatedReport', 
            ['expense' => $expense, 'revenue' => $revenue, 
            'dateStart' => $dateStart, 'dateEnd' => $dateEnd]);

    }

    public function expenses()
    {
        try
        {
            $expenses = Expense::
                where('status', '=', 0)
                ->orderBy('expense_date')
                ->paginate(5);

            return view('admin.transaction.expenses', ['expenses'=>$expenses]);
        }
        catch (\Exception $e)
        {
            return view('admin.transaction.expenses')->with('error', $e->getMessage());
        }
    }

    public function addExpense(Request $request)
    {
        $this->validate($request, [
            'date' => 'required|date',
            'expenses' => 'required|string',
            'amount' => 'required|numeric'

        ]);

        try
        {
            $expense = new Expense;
            $expense->name = $request->input('expenses');
            $expense->cost = $request->input('amount');
            $expense->expense_date = $request->input('date');
            $expense->status = 0;

            if ($expense->save())
            {
                return redirect()->back()->with('success', 'Expense Added!');
            }
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function editExpenses(Request $request, $id)
    {
        try
        {
            $expense = Expense::find($id);
            return view('admin.transaction.edit-expenses', ['expense'=>$expense]);
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
    public function deleteExpense($id)
    {
        try
        {
            $expense = Expense::find($id);
            $expense->status = 1;

            if ($expense->save())
            {
                return redirect()->back()->with('success', 'Expense Removed Successfully!');
            }

        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function updateExpense(Request $request, $id)
    {
        $this->validate($request, [
    		'date' => 'required|date',
            'expenses' => 'required|string',
            'amount' => 'required|numeric'
        ]);

        try
        {
            $expense = Expense::find($id);

            $expense->name = $request->input('expenses');
            $expense->cost = $request->input('amount');
            $expense->expense_date = $request->input('date');

            if ($expense->save())
            {
                return redirect()->back()->with('success', 'Expense Record Updated!');
            }
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function report() {
        return view('admin.transaction.report');
    }

    public function generatePDF(){
        $pdf = PDF::loadView('admin.transaction.generatedReport');
        return $pdf->stream('report.pdf');
    }
}
