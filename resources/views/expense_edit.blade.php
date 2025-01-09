@extends ('layouts.app')

@section('title') Edit Expense @endsection

@section('content')
<div class="container">
    <div class="card bg-white">

        <!--Card header-->
        <div class="card-header py-3">
            <div class="card-title">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Edit Expense Details</h1>
            </div>
        </div>
    
        <form class="form" method="POST" action="{{ route('update_expense', $expense->id) }}">
            @csrf;
            <!--Card body-->
            <div class="card-body p-5">
                <div class="row g-4">
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Expense Name</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Expense Name"
                            name="expense_name" value="{{ $expense->name }}" type="text"/>
                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Person Name</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Person Name"
                            name="expense_person_name" value="{{ $expense->person }}" type="text"/>
                    </div>
    
                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Expense Amount</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Expense Amount"
                            name="expense_amount" value="{{ $expense->amount }}" type="number"/>
                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Expense Date</label>
                        <input class="form-control form-control-solid" placeholder="Plaese Select Expense Date"
                            name="expense_date" value="{{ $expense->date }}" type="date"/>
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