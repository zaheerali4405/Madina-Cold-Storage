@extends ('layouts.app')

@section('title') Add Order @endsection

@section('content')
<div class="container-fluid px-5">
    <div class="card bg-white">

        <!--Card header-->
        <div class="card-header py-3">
            <div class="card-title">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Add New Order</h1>
            </div>
        </div>

        <form class="form" method="POST" action="{{ route('save_order') }}">
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
                            <option value="" selected>Please Select Customer</option>
                            @foreach($customers as $customer)
                            <option value="{{ $customer->id }}" data-name="{{ $customer->name }}"
                                data-phone="{{ $customer->phone }}" data-address="{{ $customer->address }}">
                                {{ $customer->name }} - {{ $customer->phone }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 fv-row">
                        <label class="form-label fw-bold">Customer Name</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Customer Name"
                            name="customer_name" value="" type="text" />
                    </div>

                    <div class="col-md-4 fv-row">
                        <label class="form-label fw-bold">Customer Phone</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Customer Phone"
                            name="customer_phone" value="" type="text" />
                    </div>

                    <div class="col-md-4 fv-row">
                        <label class="form-label fw-bold">Customer Address</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Customer Address"
                            name="customer_address" value="" type="text" />
                    </div>
                </div>
                <div class="row g-4 pb-4 mt-2 border-bottom">
                    <span class="fw-bold fs-4">Product Information</span>
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Select Product</label>
                        <select class="form-select form-select-solid" data-placeholder="Please Select Product"
                            name="product_id" aria-label="Select Product" data-control="select2">
                            <option value="">Select Product</option>
                            @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }} - {{ $product->type }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Select Container Size</label>
                        <select class="form-select form-select-solid" data-placeholder="Please Select Container Size"
                            name="container_id" aria-label="Select Container Size" data-control="select2">
                            <option value="">Select Container Size</option>
                            @foreach($containers as $container)
                            <option value="{{ $container->id }}">{{ $container->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Number of Products</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Number of Products"
                            name="no_of_product" value="" type="number" />
                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Room Number</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Room Number"
                            name="str_room" value="" type="text" />
                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Rack Number</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Rack Number"
                            name="str_rack" value="" type="text" />
                    </div>
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Store Location</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Store Location"
                            name="str_location" value="" type="text" />
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <span class="fw-bold fs-4">Order Information</span>
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Voucher Number</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Voucher Number"
                            name="order_voucher_no" value="" type="text" />
                    </div>
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Order Date</label>
                        <input class="form-control form-control-solid" placeholder="Please Select Order Date"
                            name="order_date" value="" type="date" />
                    </div>
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Customer Marka</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Customer Marka"
                            name="customer_marka" value="" type="text" />
                    </div>
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Store Marka</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Store Marka"
                            name="store_marka" value="" type="text" />
                    </div>
                    <div class="fv-row">
                        <label class="form-label fw-bold">Description</label>
                        <textarea class="form-control form-control-solid"
                            placeholder="Enter Any Other Information About Order" name="order_description" value=""
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

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script>
    document.addEventListener('DOMContentLoaded', function () {
        $('#customer_select').on('select2:select', function (e) {
            const selectedOption = e.params.data.element;
            const customerName = selectedOption.getAttribute('data-name') || '';
            const customerPhone = selectedOption.getAttribute('data-phone') || '';
            const customerAddress = selectedOption.getAttribute('data-address') || '';

            // Update input fields
            const nameField = document.querySelector('input[name="customer_name"]');
            const phoneField = document.querySelector('input[name="customer_phone"]');
            const addressField = document.querySelector('input[name="customer_address"]');

            nameField.value = customerName;
            phoneField.value = customerPhone;
            addressField.value = customerAddress;

            // Make fields read-only
            nameField.setAttribute('readonly', true);
            phoneField.setAttribute('readonly', true);
            addressField.setAttribute('readonly', true);
        });

        // Optional: Reset fields to editable if "Select Customer" is chosen
        $('#customer_select').on('select2:clear', function () {
            const fields = document.querySelectorAll('input[name="customer_name"], input[name="customer_phone"], input[name="customer_address"]');
            fields.forEach(field => {
                field.value = '';
                field.removeAttribute('readonly');
            });
        });
    });
</script>
@endsection