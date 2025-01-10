@extends ('layouts.app')

@section('title') Edit Order @endsection

@section('content')
<div class="container-fluid px-5">
    <div class="card bg-white">

        <!--Card header-->
        <div class="card-header py-3">
            <div class="card-title">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Edit Order Details</h1>
            </div>
        </div>

        <form class="form" method="POST" action="{{ route('update_order', $order->id) }}">
            @csrf;
            <!--Card body-->
            <div class="card-body px-5">
                <div class="row g-4 pb-4 border-bottom">
                    <div class="col-md-6 fv-row d-flex align-items-center">
                        <span class="fw-bold fs-4">Customer Information</span>
                    </div>
                    <div class="col-md-6 fv-row">
                        <select class="form-select form-select-solid" data-placeholder="Please Select Customer"
                            name="customer_id" id="customer_select" data-control="select2">
                            <option value="{{ $customer_s->id }}" selected>{{ $customer_s->name }} - {{ $customer_s->phone }}</option>
                            @foreach($customers as $customer)
                            <option value="{{ $customer->id }}" data-name="{{ $customer->name }}"
                                data-phone="{{ $customer->phone }}" data-address="{{ $customer->address }}">
                                {{ $customer->name }} - {{ $customer->phone }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row g-4 pb-4 mt-2 border-bottom">
                    <span class="fw-bold fs-4">Product Information</span>
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Select Product</label>
                        <select class="form-select form-select-solid" data-placeholder="Please Select Product"
                            name="product_id" aria-label="Select Product" data-control="select2">
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }} - {{ $product->type }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Select Container Size</label>
                        <select class="form-select form-select-solid" data-placeholder="Please Select Container Size"
                            name="container_id" aria-label="Select Container Size" data-control="select2">
                            <option value="{{ $container->id }}">{{ $container->name }}</option>
                            @foreach($containers as $container)
                            <option value="{{ $container->id }}">{{ $container->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Number of Products</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Number of Products"
                            name="no_of_product" value="{{ $order->total_pieces }}" type="number" />
                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Room Number</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Room Number"
                            name="str_room" value="{{ $order->str_room }}" type="text" />
                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Rack Number</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Rack Number"
                            name="str_rack" value="{{ $order->str_rack }}" type="text" />
                    </div>
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Store Location</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Store Location"
                            name="str_location" value="{{ $order->str_location }}" type="text" />
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <span class="fw-bold fs-4">Order Information</span>
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Voucher Number</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Voucher Number"
                            name="order_voucher_no" value="{{ $order->voucher_no }}" type="text" />
                    </div>
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Customer Marka</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Customer Marka"
                            name="customer_marka" value="{{ $order->customer_marka }}" type="text" />
                    </div>
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Store Marka</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Store Marka"
                            name="store_marka" value="{{ $order->store_marka }}" type="text" />
                    </div>
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Order Date</label>
                        <input class="form-control form-control-solid" placeholder="Please Select Order Date"
                            name="order_date" value="{{ $order->date }}" type="date" />
                    </div>
                    <div class="col-md- fv-row">
                        <label class="form-label fw-bold">Description</label>
                        <textarea class="form-control form-control-solid"
                            placeholder="Enter Any Other Information About Order" name="order_description" value="{{ $order->description }}"
                            type="text" rows="3"> </textarea>
                    </div>
                </div>
            </div>

            <!--Card body-->
            <div class="card-footer py-3 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary me-3" onclick="window.history.back()">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection