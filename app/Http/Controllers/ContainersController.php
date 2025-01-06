<?php

namespace App\Http\Controllers;

use App\Models\Containers;
use App\Models\Orders;
use App\Models\Dispatches;
use Illuminate\Http\Request;

class ContainersController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $containers = Containers::all();
        return view('container_list', compact('containers'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('container_add');
    }
    
    //Store a newly created resource in storage.
    public function store(Request $request)
    {
        $container = new Containers();
        $container->name = $request->container_name;
        $container->rent = $request->container_rent;
        $container->save();
        return redirect()->route('containers');
    }

    
    // Show the form for editing the specified resource.
    public function edit(Containers $containers, $id)
    {
        $container = Containers::where('id', $id)->first();
        return view('container_edit', compact('container'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $container = Containers::where('id', $id)->first();
        $container->name = $request->container_name;
        $container->rent = $request->container_rent;
        $container->save();
        if ($container->save()) {
            $orders = Orders::where('container_id', $id)->get();
            foreach ($orders as $order) {
                $calculated_total = $container->rent * $order->total_pieces;
                $order->total_amount = $calculated_total;
                if ($order->received_amount == 0) {
                    $order->balance_amount = $calculated_total;
                } else {
                    $order->balance_amount = $calculated_total - $order->received_amount;
                }
                $order->save();

                if ($order->save()) {
                    $dispatches = Dispatches::where('order_id', $order->id)->get();
                    foreach ($dispatches as $dispatch) {
                        $calculated_dispatch = $container->rent * $dispatch->dispatched_pieces;
                        $dispatch->calculated_amount = $calculated_dispatch;
                        $dispatch->final_amount = $calculated_dispatch - $dispatch->discount_amount;
                        $dispatch->save();
                    }
                }
            }
        }
        return redirect()->route('containers');
    }
    
    // Display the specified resource.
    
    public function show(Containers $containers)
    {
        //
    }

    // Remove the specified resource from storage.
    public function destroy(Containers $containers)
    {
        //
    }
}
