@extends ('layouts.app')

@section('title') Add Container @endsection

@section('content')
<div class="container">
    <div class="card bg-white">

        <!--Card header-->
        <div class="card-header py-3">
            <div class="card-title">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Add New Container</h1>
            </div>
        </div>
    
        <form class="form" method="POST" action="{{ route('save_container') }}">
            @csrf;
            <!--Card body-->
            <div class="card-body p-5">
                <div class="row g-4">
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Container Name</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Container Name"
                            name="container_name" value="" type="text"/>
                    </div>
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Container Rent</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Container Rent"
                            name="container_rent" value="" type="number"/>
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