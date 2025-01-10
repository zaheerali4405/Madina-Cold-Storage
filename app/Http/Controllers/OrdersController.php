<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Customers;
use App\Models\Products;
use App\Models\Containers;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Pdf;
use Mpdf\Mpdf;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class OrdersController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $orders = Orders::all();
        return view('order_list', compact('orders'));
    }
    
    // Show the form for creating a new resource.
    public function create()
    {
        $products = Products::all();
        $containers = Containers::all();
        $customers = Customers::all();
        return view('order_add', compact('containers', 'products', 'customers'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {   
        $container = Containers::where('id', $request->container_id)->first();
        if ($request->customer_id) { 
            // Use existing customer
            $customer = Customers::find($request->customer_id);
        } 
        else {
            // Create a new customer
            $customer = new Customers();
            $customer->name = $request->customer_name;
            $customer->phone = $request->customer_phone;
            $customer->address = $request->customer_address;
            $customer->save();
        }
        if ($container && $customer->save()) {
            $order = new Orders();
            $order->customer_id = $customer->id;
            $order->product_id = $request->product_id;
            $order->container_id = $request->container_id;
            $order->voucher_no = $request->order_voucher_no;
            $order->customer_marka = $request->customer_marka;
            $order->store_marka = $request->store_marka;
            $order->str_room = $request->str_room;
            $order->str_rack = $request->str_rack;
            $order->str_location = $request->str_location;
            $order->total_pieces = $request->no_of_product;
            $order->balance_pieces = $request->no_of_product;
            $order->total_amount = $request->no_of_product * $container->rent;
            $order->balance_amount = $request->no_of_product * $container->rent;
            $order->date = $request->order_date;
            $order->description = $request->order_description;
            $order->save();
            return redirect()->route('orders');
        }         
    }    

    // Show the form for editing the specified resource.
    public function edit(Orders $orders, $id)
    {   
        $order = Orders::where('id', $id)->first();
        $product = Products::where('id', $order->product_id)->first();
        $container = Containers::where('id', $order->container_id)->first();
        $customer_s = Customers::where('id', $order->customer_id)->first();
        $products = Products::all();
        $containers = Containers::all();
        $customers = Customers::all();
        return view('order_edit', compact('containers', 'products', 'customers', 'container', 'product', 'customer_s', 'order'));
    }
    
    
    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $container = Containers::where('id', $request->container_id)->first();
        if ($container && $request->customer_id) {
            $order = Orders::where('id', $id)->first();
            $order->customer_id = $request->customer_id;
            $order->product_id = $request->product_id;
            $order->container_id = $request->container_id;
            $order->voucher_no = $request->order_voucher_no;
            $order->customer_marka = $request->customer_marka;
            $order->store_marka = $request->store_marka;
            $order->str_room = $request->str_room;
            $order->str_rack = $request->str_rack;
            $order->str_location = $request->str_location;
            $order->total_pieces = $request->no_of_product;
            $order->total_amount = $request->no_of_product * $container->rent;
            $order->date = $request->order_date;
            $order->description = $request->order_description;
            $order->save();
            return redirect()->route('orders');
        }
    }

    // Print Order Receipt in Urdu Language.
    public function print_order_receipt_urdu($id)
    {
        $order = Orders::where('id', $id)->first();
        $tr = new GoogleTranslate('ur'); // Target language is Urdu
        $tr->setSource('en'); // Source language is English
        $tr->setOptions([
            'verify' => false,
        ]);
        $name = $tr->translate('Madina Cold Storage and Ice Factory');
        $location = $tr->translate('1.5KM GANDA SINGH ROAD, KASUR ');
        $receipt_name = $tr->translate('Order Receipt');
        $store_stamp = $tr->translate('Store Stamp');
        $customer_sign = $tr->translate('Customer Signature');
        $translatedData = [
            'واؤچر نمبر' => $order->voucher_no,
            'تاریخ' => $order->created_at->format('d-m-Y'),
            'گاہک کا نام' => $tr->translate($order->getCustomer->name),
            'گاہک کا فون' => $order->getCustomer->phone,
            'گاہک کا پتہ' => $tr->translate($order->getCustomer->address),
            'گاہک مارکہ' => $order->customer_marka,
            'سٹور مارکہ' => $order->store_marka,
            'آئٹم کا نام' => $tr->translate($order->getProduct->name),
            'بیج/راشن' => $tr->translate($order->getProduct->type),
            'بوری/جالی' => $tr->translate($order->getContainer->name),
            'کمرہ نمبر' => $order->str_room,
            'ریک نمبر' => $order->str_rack,
            'لوکیشن' => $tr->translate($order->str_location),
            'تعداد' =>$order->total_pieces,
        ];
        return view('layouts.print_formats.order_receipt_urdu', compact('translatedData', 'name', 'location','receipt_name', 'store_stamp', 'customer_sign'));    
    }

    // Display the specified resource.
    public function show(Orders $orders)
    {
        //
    }


    // Remove the specified resource from storage.
    public function destroy(Orders $orders)
    {
        //
    }
}
