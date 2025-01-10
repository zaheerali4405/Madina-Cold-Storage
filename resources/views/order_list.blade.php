@extends ('layouts.app')

@section('title') All Orders @endsection

@section('content')
<div class="container-fluid px-5">
	<div class="card">

		<!--Card header-->
		<div class="card-header">
			<div class="card-title">
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Orders List</h1>
			</div>
			<div class="card-toolbar">
				<input class="form-control w-250px h-40px me-3" type="text"
				id="searchOrder" placeholder="Search Order" />
				<a href="{{ route('add_order') }}" type="button" class="btn btn-primary">Add Order</a>
			</div>
		</div>

		<!--Card body-->
		<div class="card-body">
			<table class="table gy-4 border" id="orders_table">
				<thead>
					<tr class="fw-bolder text-uppercase">
						<th class="min-w-50px">S / No.</th>
						<th class="min-w-125px">Voucher No.</th>
						<th class="min-w-125px">Customer Name</th>
						<th class="min-w-125px">Product Name</th>
						<th class="min-w-125px">Container</th>
						<th class="min-w-125px">Total Quantity</th>
						<th class="min-w-125px">Total Amount</th>
						<th class="min-w-125px">Date</th>
						<th class="min-w-125px">Actions</th>
					</tr>
				</thead>
				<tbody class="fw-bold">
					@php $serialNo = 1; @endphp
					@foreach($orders as $order)
					<tr>
						<td>{{ $serialNo++ }}</td>
						<td>{{ $order->voucher_no }}</td>
						<td>{{ $order->getCustomer->name }}</td>
						<td>{{ $order->getProduct->name }}</td>
						<td>{{ $order->getContainer->name }}</td>
						<td>{{ $order->total_pieces }}</td>
						<td>{{ $order->total_amount }}</td>
						<td>{{ $order->date }}</td>
						<td>
						<button class="btn btn-secondary btn-outline show-details" data-order-id="{{ $order->id }}">Show</button>
							<a class="btn btn-secondary btn-outline" href="{{ route('edit_order', $order->id) }}">Edit</a>
							<a class="btn btn-secondary btn-outline" href="{{ route('print_order_ur', $order->id) }}"
								target="_blank">Print</a>
						</td>
					</tr>

					<!-- Inline hidden details -->
					<tr id="order-details-{{ $order->id }}" class="order-details" style="display:none;">
						<td>Customer Marka: {{ $order->customer_marka }}</td>
						<td>Store Marka: {{ $order->store_marka }}</td>
						<td>Store Location: {{ $order->str_room}} - {{$order->str_rack}} - {{$order->str_location }}</td>
						<td>Dispatch Quantity: {{ $order->dispatched_pieces }}</td>
						<td>Balance Quantity: {{ $order->balance_pieces }}</td>
						<td>Discount Amount: {{ $order->discount_amount }}</td>
						<td>Received Amount: {{ $order->received_amount }}</td>
						<td>Balance Amount: {{ $order->balance_amount }}</td>
						<td colspan="1">Description: {{ $order->description }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>


<!-- Script for Search the order -->
<script>
    $(document).ready(function() {
        $('#searchOrder').on('keyup', function() {
            var value = $(this).val().toLowerCase(); // Get the search input value
            $('#orders_table tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1); // Show or hide rows
            });
        });
    });
</script>

<!-- Script for Show Button to show details of the order -->
<script>
    $(document).ready(function() {
        $('.show-details').click(function() {
            var orderId = $(this).data('order-id');
            var detailsRow = $('#order-details-' + orderId);
            detailsRow.toggle(); // Toggle visibility of the inline details
        });
    });
</script>
@endsection