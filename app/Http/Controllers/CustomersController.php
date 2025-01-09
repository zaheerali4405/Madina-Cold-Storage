<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Orders;
use App\Models\Dispatches;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $customers = Customers::all();
        return view('customer_list', compact('customers'));
    }
    
    // Show the form for creating a new resource.
    public function create()
    {
        return view('customer_add');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $customer = new Customers();
        $customer->name = $request->customer_name;
        $customer->phone = $request->customer_phone;
        $customer->address = $request->customer_address;
        $customer->save();
        return redirect()->route('customers');
    }

    
    
    // Show the form for editing the specified resource.
    public function edit(Customers $customers, $id)
    {
        $customer = Customers::where('id', $id)->first();
        return view('customer_edit', compact('customer'));
    }
    
    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $customer = Customers::where('id', $id)->first();
        $customer->name = $request->customer_name;
        $customer->phone = $request->customer_phone;
        $customer->address = $request->customer_address;
        $customer->save();
        return redirect()->route('customers');
    }
    
    // Display the ledger of specified resource.
    public function ledger(Customers $customers, $id)
    {
        // Get the customer along with their orders and dispatches
        $customer = Customers::with(['orders', 'orders.dispatches'])->findOrFail($id);
        return view('customer_ledger', compact('customer'));
    }

    // Remove the specified resource from storage.
    public function destroy(Customers $customers)
    {
        //
    }
}
