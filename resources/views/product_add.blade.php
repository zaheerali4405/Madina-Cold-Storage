@extends ('layouts.app')

@section('title') Add Product @endsection

@section('content')
<div class="container">
    <div class="card bg-white">

        <!--Card header-->
        <div class="card-header py-3">
            <div class="card-title">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Add New Product</h1>
            </div>
        </div>
    
        <form class="form" method= "POST" action="{{ route('save_product') }}">
            @csrf;
            <!--Card body-->
            <div class="card-body p-5">
                <div class="row g-4">
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Product Name</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Product Name"
                            name="product_name" value="" type="text"/>
                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Product Type</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Product Type"
                            name="product_type" value="" type="text"/>
                    </div>
    
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Product Color</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Product Color"
                            name="product_color" value="" type="text"/>
                    </div>
                </div>
            </div>
    
            <!--Card Footer-->
            <div class="card-footer py-3 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary me-3" onclick="window.history.back()">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection