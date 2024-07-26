<?php

namespace App\Http\Controllers;

use App\Models\expense;
use Illuminate\Http\Request;
use App\Models\inventory;
use App\Models\income;

use function Laravel\Prompts\alert;

class InventoryController extends Controller
{
    public function inventory_index()
    {
        return view('inventory.simpleInventory');
    }
    public function addincome_index()
    {
        return view('inventory.addIncome');
    }
    public function addincome_store(Request $request)
    {
        // dd($request->all());
        // exit;
        $incomeData = new income;
        $incomeData->date = $request->date;
        $incomeData->amound = $request->amound;
        $incomeData->discripition = $request->discripition;
        $incomeData->paymenttype = $request->paymenttype;
        $incomeData->incomesource = $request->incomesource;

        $incomeData->save();
        return back()->with('status', 'income Add Successfully');
    }
    public function addexpense_index()
    {
        return view('inventory.addExpense');
    }
    public function overview_index()
    {
        $income = income::sum('amound');
        $expense = expense::sum('ex_amound');
        $balance = $income - $expense;
        return view('inventory.viewInvetory', compact('income', 'expense', 'balance'));
    }

    public function addexpense_store(Request $request)
    {
        // dd($request->all());
        // exit;
        $incomeData = new expense();
        $incomeData->date = $request->date;
        $incomeData->ex_amound = $request->amound;
        $incomeData->discripition = $request->discripition;
        $incomeData->paymenttype = $request->paymenttype;
        $incomeData->expensesource = $request->incomesource;

        $incomeData->save();
        return back()->with('status', 'income Add Successfully');
    }
    public function viewDetails()
    {
        $income = income::all();
        $expense = expense::all();
        return view('inventory.viewDetails', compact('income', 'expense'));
    }
    public function delete_expense($id)
    {
        $expense = expense::find($id);
        $income = expense::find($id);
        if ($expense) {
            // Delete the user
            $expense->delete();
            return back()->with('status', 'expense delete successfully');
        } else {
            return back()->with('status', 'expense Not found successfully');
        }
    }
    public function delete_income($id)
    {
        $income = income::find($id);
        if ($income) {
            $income->delete();
            return back()->with('status', 'Income delete successfully');
        } else {
            return back()->with('status', 'income Not found successfully');
        }
    }
}
