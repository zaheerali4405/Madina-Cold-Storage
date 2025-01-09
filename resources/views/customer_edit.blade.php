@extends ('layouts.app')

@section('title') Edit Customer @endsection

@section('content')
<div class="container">
    <div class="card bg-white">

        <!--Card header-->
        <div class="card-header py-3">
            <div class="card-title">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Edit Customer Details</h1>
            </div>
        </div>
    
        <form class="form" method="POST" action="{{ route('update_customer', $customer->id) }}">
            @csrf;
            <!--Card body-->
            <div class="card-body p-5">
                <div class="row g-4">
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Customer Name</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Customer Name"
                            name="customer_name" value="{{ $customer->name }}" type="text"/>
                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Customer Phone</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Customer Phone"
                            name="customer_phone" value="{{ $customer->phone }}" type="text"/>
                    </div>
    
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Customer Address</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Customer Address"
                            name="customer_address" value="{{ $customer->address }}" type="text"/>
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