<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $expenses = Expenses::all();
        return view('expense_list', compact('expenses'));
    }
    
    // Show the form for creating a new resource.
    public function create()
    {
        return view('expense_add');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $expense = new Expenses();
        $expense->name = $request->expense_name;
        $expense->person = $request->expense_person_name;
        $expense->amount = $request->expense_amount;
        $expense->date = $request->expense_date;
        $expense->save();
        return redirect()->route('expenses');
    }

    
    // Show the form for editing the specified resource.
    public function edit(Expenses $expenses, $id)
    {
        $expense = Expenses::where('id', $id)->first();
        return view('expense_edit', compact('expense'));
    }
    
    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $expense = Expenses::where('id', $id)->first();
        $expense->name = $request->expense_name;
        $expense->person = $request->expense_person_name;
        $expense->amount = $request->expense_amount;
        $expense->date = $request->expense_date;
        $expense->save();
        return redirect()->route('expenses');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Expenses $expenses)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expenses $expenses)
    {
        //
    }
}
