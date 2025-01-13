@extends ('layouts.app')

@section('title') Add Dispatch @endsection

@section('content')
<div class="container-fluid px-5">
    <div class="card bg-white">

        <!--Card header-->
        <div class="card-header py-3">
            <div class="card-title">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Add New Dispatch</h1>
            </div>
        </div>

        <form class="form" method= "POST" action="{{ route('save_dispatch') }}">
            @csrf
            <!--Card body-->
            <div class="card-body p-5">
                <div class="row g-4">

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Search Voucher Number</label>
                        <select class="form-select form-select-solid" data-placeholder="Please Search Voucher"
                            name="order_id" aria-label="Search Voucher" data-control="select2" id="voucher-select">
                            <option value="">Search Voucher</option>
                            @foreach($orders as $order)
                            <option value="{{ $order->id }}" data-balance-pieces="{{ $order->balance_pieces }}"
                                data-balance-amount="{{ $order->balance_amount }}" data-container-rent="{{ $order->getContainer->rent }}">
                                {{ $order->voucher_no }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">Balance Quantity</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Number"
                            name="" id="order-balance-pieces" value="" type="number" readonly/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">Balance Amount</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Number"
                            name="" id="order-balance-amount" value="" type="number" readonly/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">No. of Dispatch pieces</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Number"
                            name="dispatched_pieces" id="dispatch-pieces" value="" type="number" />
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">Calculated Amount</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Calculated Amount"
                            name="calculated_amount" id="calculated-amount" value="" type="number" readonly/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">Discount Amount</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Discount Amount"
                            name="discount_amount" id="discount-amount" value="" type="number" />
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">Final Amount</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter final Amount"
                            name="final_amount" id="final-amount" value="" type="number" readonly/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">Received Amount</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Received Amount"
                            name="received_amount" id="received-amount" value="" type="number" />
                    </div>
                    <!-- <div class="col-md-3 fv-row">
                        <label class="form-label fw-bold">Balance Amount</label>
                        <input class="form-control form-control-solid" placeholder="Please Enter Received Amount"
                            name="balance_amount" id="balance-amount" value="" type="number" readonly/>
                    </div> -->

                    <div class="col-md-6 fv-row">
                        <label class="form-label fw-bold">Dispatch Date</label>
                        <input class="form-control form-control-solid" placeholder="Plaese Select Dispatch Date"
                            name="dispatch_date" value="" type="date" />
                    </div>
                </div>
            </div>

            <!--Card footer-->
            <div class="card-footer py-3 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary me-3" onclick="window.history.back()">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>


<!-- Script for updating fields -->

<script>
    $(document).ready(function() {
    let containerRent = 0; // Variable to store the container rent

    // When a voucher is selected
    $('#voucher-select').on('change', function() {
        const selectedOption = $(this).find(':selected');

        const balancePieces = selectedOption.data('balance-pieces');
        const balanceAmount = selectedOption.data('balance-amount');
        containerRent = selectedOption.data('container-rent') || 0; // Update containerRent value
        
        // Update the input fields
        $('#order-balance-pieces').val(balancePieces || '');
        $('#order-balance-amount').val(balanceAmount || '');
        // $('#dispatch-pieces').val(balancePieces || '');
        $('#calculated-amount').val(''); // Clear calculated amount when voucher changes
    });

    // When the user enters a value in Dispatch Pieces
    $('#dispatch-pieces').on('input', function() {
        const dispatchPieces = $(this).val() || 0; // Get the dispatch pieces entered by the user
        const calculatedAmount = containerRent * dispatchPieces; // Find Calculated amount
        $('#calculated-amount').val(calculatedAmount); // Update the calculated amount
    });

    // When the user enters a value in Discount Amount
    $('#discount-amount').on('input', function() {
        const discountAmount = $(this).val() || 0; // Get the discount amount entered by the user
        const calculatedAmount = parseFloat($('#calculated-amount').val()) || 0; // Get the calculated amount
        const finalAmount = calculatedAmount - discountAmount; // Calculate Final amount
        $('#final-amount').val(finalAmount); // Update the final amount
    });
    
    // When the user enters a value in Received Amount
    $('#received-amount').on('input', function() {
        const receivedAmount = $(this).val() || 0; // Get the received amount entered by the user
        const finalAmount = parseFloat($('#final-amount').val()) || 0; // Get the final amount
        const balanceAmount = finalAmount - receivedAmount; // Calculate balance amount
        $('#balance-amount').val(balanceAmount); // Update the balance amount
    });
});

</script>



@endsection