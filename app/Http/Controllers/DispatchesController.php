<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Dispatches;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Pdf;
use Mpdf\Mpdf;


class DispatchesController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $dispatches = Dispatches::with('getOrder.getCustomer', 'getOrder.getProduct', 'getOrder.getContainer')->get();
        return view('dispatch_list', compact('dispatches'));
    }
    
    // Show the form for creating a new resource.
    public function create()
    {
        $orders = Orders::all();
        return view('dispatch_add', compact('orders'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $order = Orders::where('id', $request->order_id)->first();
        if ($order->balance_pieces >= $request->dispatched_pieces) {
            $dispatch = new Dispatches();
            $dispatch->order_id = $request->order_id;
            $dispatch->dispatched_pieces = $request->dispatched_pieces;
            $dispatch->calculated_amount = $request->calculated_amount; 
            $dispatch->discount_amount = $request->discount_amount; 
            $dispatch->final_amount = $request->final_amount; 
            $dispatch->received_amount = $request->received_amount;
            $dispatch->date = $request->dispatch_date;
            $dispatch->save();
            
            if ($dispatch->save()) {
                $order->dispatched_pieces = $order->dispatched_pieces + $request->dispatched_pieces;
                $order->balance_pieces = $order->balance_pieces - $request->dispatched_pieces;
                $order->discount_amount = $order->discount_amount + $request->discount_amount;
                $order->received_amount = $order->received_amount + $request->received_amount;
                $order->balance_amount = $order->balance_amount - ($request->received_amount + $request->discount_amount) ;
                $order->save();
            }
        }
        else {
            return redirect()->route('add_dispatch');
        }
        return redirect()->route('dispatches');
    }


    // Show the form for editing the specified resource.
    public function edit(Dispatches $dispatches, $id)
    {
        $dispatch = Dispatches::where('id', $id)->first();
        return view('dispatch_edit', compact('dispatch'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $order = Orders::where('id', $request->order_id)->first();
        $dispatch = Dispatches::where('id', $id)->first();
        $old_pieces = $dispatch->dispatched_pieces;
        $old_discount_amount = $dispatch->discount_amount;
        $old_received_amount = $dispatch->received_amount;
        if ($order->balance_pieces + $old_pieces >= $request->dispatched_pieces) {
            $dispatch->dispatched_pieces = $request->dispatched_pieces;
            $dispatch->calculated_amount = $request->calculated_amount;
            $dispatch->discount_amount = $request->discount_amount;
            $dispatch->final_amount = $request->final_amount;
            $dispatch->received_amount = $request->received_amount;
            $dispatch->date = $request->dispatch_date;
            $dispatch->save();

            if ($dispatch->save()) {
                $order->dispatched_pieces = ($order->dispatched_pieces - $old_pieces) + $request->dispatched_pieces;
                $order->balance_pieces = ($order->balance_pieces + $old_pieces) - $request->dispatched_pieces;
                $order->discount_amount = ($order->discount_amount - $old_discount_amount) + $request->discount_amount;
                $order->received_amount = ($order->received_amount - $old_received_amount) + $request->received_amount;
                $order->balance_amount = ($order->balance_amount + $old_received_amount + $old_received_amount) - ($request->received_amount + $request->discount_amount);
                $order->save();
            }
        } else{
            return redirect()->route('add_dispatch');
        }
        return redirect()->route('dispatches');
    }

    // Print Dispatch Receipt in urdu Language.
    public function print_dispatch_receipt_urdu($id)
    {
        $dispatch = Dispatches::where('id', $id)->first();
        $tr = new GoogleTranslate('ur'); // Target language is Urdu
        $tr->setSource('en'); // Source language is English
        $tr->setOptions([
            'verify' => false,
        ]);
        $name = $tr->translate('Madina Cold Storage and Ice Factory');
        $location = $tr->translate('1.5KM GANDA SINGH ROAD, KASUR ');
        $receipt_name = $tr->translate('Nikasi ki Receipt');
        $store_stamp = $tr->translate('Store Stamp');
        $customer_sign = $tr->translate('Customer Signature');
        $translatedData = [
            'وقت' => $dispatch->created_at->format('h:i'),
            'تاریخ' => $dispatch->created_at->format('d-m-Y'),
            'گاہک کا نام' => $tr->translate($dispatch->getOrder->getCustomer->name),
            'گاہک مارکہ' => $dispatch->getOrder->customer_marka,
            'سٹور مارکہ' => $dispatch->getOrder->store_marka,
            'آئٹم کا نام' => $tr->translate($dispatch->getOrder->getProduct->name),
            'بیج/راشن' => $tr->translate($dispatch->getOrder->getProduct->type),
            'بوری/جالی' => $tr->translate($dispatch->getOrder->getContainer->name),
            'واؤچر نمبر' => $dispatch->getOrder->voucher_no,
            'تعداد' =>$dispatch->dispatched_pieces,
        ];
        return view('layouts.print_formats.dispatch_receipt_urdu', compact('translatedData', 'name', 'location','receipt_name', 'store_stamp', 'customer_sign'));
    }
    
    // Print Gate Pass in Urdu Language.
    public function print_gate_pass_urdu($id)
    {
        $dispatch = Dispatches::where('id', $id)->first();
        $tr = new GoogleTranslate('ur'); // Target language is Urdu
        $tr->setSource('en'); // Source language is English
        $tr->setOptions([
            'verify' => false,
        ]);
        $name = $tr->translate('Madina Cold Storage and Ice Factory');
        $location = $tr->translate('1.5KM GANDA SINGH ROAD, KASUR ');
        $receipt_name = $tr->translate('Gate Pass');
        $store_stamp = $tr->translate('Store Stamp');
        $customer_sign = $tr->translate('Customer Signature');
        $translatedData = [
            'وقت' => $dispatch->created_at->format('h:i'),
            'تاریخ' => $dispatch->created_at->format('d-m-Y'),
            'گاہک کا نام' => $tr->translate($dispatch->getOrder->getCustomer->name),
            'گاہک مارکہ' => $dispatch->getOrder->customer_marka,
            'سٹور مارکہ' => $dispatch->getOrder->store_marka,
            'آئٹم کا نام' => $tr->translate($dispatch->getOrder->getProduct->name),
            'بیج/راشن' => $tr->translate($dispatch->getOrder->getProduct->type),
            'بوری/جالی' => $tr->translate($dispatch->getOrder->getContainer->name),
            'واؤچر نمبر' => $dispatch->getOrder->voucher_no,
            'تعداد' =>$dispatch->dispatched_pieces,
        ];
        return view('layouts.print_formats.gate_pass_urdu', compact('translatedData', 'name', 'location','receipt_name', 'store_stamp', 'customer_sign'));
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Dispatches $dispatches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dispatches $dispatches)
    {
        //
    }
}