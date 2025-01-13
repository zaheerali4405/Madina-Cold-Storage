@extends ('layouts.app')

@section('title') Edit Dispatch @endsection

@section('content')
<div class="container-fluid px-5">
    <div class="card bg-white">

        <!--Card header-->
        <div class="card-header py-3">
            <div class="card-title">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Add New Dispatch</h1>
            </div>
        </div>

        <form class="form" method="POST" action="{{ route('update_dispatch', $dispatch->id) }}">
            @csrf
            <!--Card body-->
            <div class="card-body p-5">
                <div class="row g-4">

                    <div class="col-md-4 fv-row">
                        <label class="form-label fw-bold">Voucher Number</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Number" name=""
                            value="{{$dispatch->getOrder->voucher_no}}" type="number" readonly />
                    </div>
                    <div class="col-md-4 fv-row">
                        <label class="form-label fw-bold">Balance Quantity</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Number" name=""
                            id="order-balance-pieces" value="{{$dispatch->getOrder->balance_pieces}}" type="number"
                            readonly />
                    </div>
                    <div class="col-md-4 fv-row">
                        <label class="form-label fw-bold">Balance Amount</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Number" name=""
                            id="order-balance-amount" value="{{$dispatch->getOrder->balance_amount}}" type="number"
                            readonly />
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">No. of Dispatch pieces</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Number"
                            name="dispatched_pieces" id="dispatch-pieces" value="{{ $dispatch->dispatched_pieces }}"
                            type="number" />
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">Calculated Amount</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Calculated Amount"
                            name="calculated_amount" id="calculated-amount" value="" type="number" readonly />
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">Discount Amount</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Discount Amount"
                            name="discount_amount" id="discount-amount" value="{{ $dispatch->discount_amount }}"
                            type="number" />
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">Final Amount</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter final Amount"
                            name="final_amount" id="final-amount" value="" type="number" readonly />
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">Received Amount</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Received Amount"
                            name="received_amount" id="received-amount" value="{{ $dispatch->received_amount }}"
                            type="number" />
                    </div>
                    <!-- <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">Balance Amount</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Received Amount"
                            name="balance_amount" id="balance-amount" value="" type="number" readonly />
                    </div> -->

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Dispatch Date</label>
                        <input class="form-control form-control-solid" placeholder="Plaese Select Dispatch Date"
                            name="dispatch_date" value="{{ $dispatch->date }}" type="date" />
                    </div>
                    <input name="order_id" value="{{$dispatch->getOrder->id}}" hidden />
                    <input id="containerRent" value="{{$dispatch->getOrder->getContainer->rent}}" hidden />
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


<!-- Script for updating fields -->

<script>
    $(document).ready(function () {

        // When the user enters a value in Dispatch Pieces
        $('#dispatch-pieces').on('input', function () {
            const containerRent = $('#containerRent').val() || 0; // get the container rent
            const dispatchPieces = $(this).val() || 0; // Get the dispatch pieces entered by the user
            const calculatedAmount = containerRent * dispatchPieces; // Find Calculated amount
            $('#calculated-amount').val(calculatedAmount); // Update the calculated amount
        });

        // When the user enters a value in Discount Amount
        $('#discount-amount').on('input', function () {
            const discountAmount = $(this).val() || 0; // Get the discount amount entered by the user
            const calculatedAmount = parseFloat($('#calculated-amount').val()) || 0; // Get the calculated amount
            const finalAmount = calculatedAmount - discountAmount; // Calculate Final amount
            $('#final-amount').val(finalAmount); // Update the final amount
        });

        // When the user enters a value in Received Amount
        // $('#received-amount').on('input', function () {
        //     const receivedAmount = $(this).val() || 0; // Get the received amount entered by the user
        //     const finalAmount = parseFloat($('#final-amount').val()) || 0; // Get the final amount
        //     const balanceAmount = finalAmount - receivedAmount; // Calculate balance amount
        //     $('#balance-amount').val(balanceAmount); // Update the balance amount
        // });
    });

</script>

@endsection