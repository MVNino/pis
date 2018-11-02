<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

use DB;
use App\Expense;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function expenses()
    {
        try
        {
            $expenses = Expense::
                where('status', '=', 0)
                ->orderBy('expense_date')
                ->paginate(10);

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

    public function report() {
        return view('admin.transaction.report');
    }
}
