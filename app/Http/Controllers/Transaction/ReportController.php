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
    
    public function listDailyReport(Request $request)
    {
    
        $dateStart = $request->dateStart;
        
        $totalexpenses = Expense::selectRaw('SUM(cost) as totalCost')->where('expense_date', [$dateStart])
                    ->get();
        $expenses = Expense::where('expense_date', [$dateStart])
                    ->get();

        $totalrevenue = OfficialReceipt::selectRaw('SUM(amount_paid) as totalRevenue')->where('or_date', [$dateStart])
                    ->get();
        $grossincome = ($totalexpenses[0]->totalCost + $totalrevenue[0]->totalRevenue);

        return view('admin.transaction.generatedReport', ['expenses'=>$expenses, 'totalexpenses'=>$totalexpenses, 'totalrevenue'=>$totalrevenue, 'dateStart'=>$dateStart, 'grossincome'=>$grossincome]);
    }

    public function listMonthlyReport(Request $request)
    {
        $dateStart = $request->dateStart;

        $totalexpenses = Expense::selectRaw('SUM(cost) as totalCost')->whereMonth('expense_date', [$dateStart])
                    ->get();
        $expenses = Expense::whereMonth('expense_date', $dateStart)
                    ->get();

        $totalrevenue = OfficialReceipt::selectRaw('SUM(amount_paid) as totalRevenue')->whereMonth('or_date', [$dateStart])
                    ->get();
        $grossincome = ($totalexpenses[0]->totalCost + $totalrevenue[0]->totalRevenue);

        return view('admin.transaction.generatedMonthlyReport', ['expenses'=>$expenses, 'totalexpenses'=>$totalexpenses, 'totalrevenue'=>$totalrevenue, 'dateStart'=>$dateStart, 'grossincome'=>$grossincome]);



    }



    public function expenses()
    {
        $expenses = Expense::
            where('status', '=', 0)
            ->orderBy('expense_date')
            ->paginate(5);
        try
        {

            return view('admin.transaction.expenses', ['expenses'=>$expenses]);
        }
        catch (\Exception $e)
        {
            return view('admin.transaction.expenses', ['expenses'=>$expenses])->with('error', $e->getMessage());
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
