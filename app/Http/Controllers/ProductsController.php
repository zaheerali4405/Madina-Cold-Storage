<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $products = Products::all();
        return view('product_list', compact('products'));
    }
    
    // Show the form for creating a new resource.
    public function create()
    {
        return view('product_add');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $product = new Products();
        $product->name = $request->product_name;
        $product->type = $request->product_type;
        $product->color = $request->product_color;
        $product->save();
        return redirect()->route('products');
    }

    
    // Show the form for editing the specified resource.
    public function edit(Products $products, $id)
    {
        $product = Products::where('id', $id)->first();
        return view('product_edit', compact('product'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $product = Products::where('id', $id)->first();
        $product->name = $request->product_name;
        $product->type = $request->product_type;
        $product->color = $request->product_color;
        $product->save();
        return redirect()->route('products');
    }
    
    // Display the specified resource.
    public function show(Products $products)
    {
        //
    }

    // Remove the specified resource from storage.
    public function destroy(Products $products)
    {
        //
    }
}
