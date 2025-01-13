@extends ('layouts.app')

@section('title') All Dispatch @endsection

@section('content')
<div class="container-fluid px-5">
	<div class="card">

		<!--Card header-->
		<div class="card-header">
			<div class="card-title">
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Dispatch List</h1>
			</div>
			<div class="card-toolbar">
				<input class="form-control w-250px h-40px me-3" type="text"
				id="searchDispatch" placeholder="Search Dispatch" />
				<a href="{{ route('add_dispatch') }}" type="button" class="btn btn-primary">Add Dispatch</a>
			</div>
		</div>

		<!--Card body-->
		<div class="card-body">
			<table class="table border gy-4" id="dipatches_table">
				<thead>
					<tr class="fw-bolder text-uppercase">
						<th class="min-w-50px">S / No.</th>
						<th class="min-w-125px">Voucher No.</th>
						<th class="min-w-125px">Customer Name</th>
						<th class="min-w-125px">Product Name</th>
						<th class="min-w-125px">Pieces Dispatched</th>
						<th class="min-w-125px">Disptach Date</th>
						<th class="min-w-125px">Actions</th>
					</tr>
				</thead>
				<tbody class="fw-bold">
					@php $serialNo = 1; @endphp
					@foreach($dispatches as $dispatch)
					<tr>
						<td>{{ $serialNo++ }}</td>
						<td>{{ $dispatch->getOrder->voucher_no }}</td>
						<td>{{ $dispatch->getOrder->getCustomer->name }}</td>
						<td>{{ $dispatch->getOrder->getProduct->name }}</td>
						<td>{{ $dispatch->dispatched_pieces }}</td>
						<td>{{ $dispatch->date }}</td>
						<td colspan="2">
						<button class="btn btn-secondary btn-outline show-details" data-dispatch-id="{{ $dispatch->id }}">Show</button>
							<a class="btn btn-secondary btn-outline" href="{{ route('edit_dispatch', $dispatch->id) }}">Edit</a>
							<a class="btn btn-secondary btn-outline" href="{{ route('print_dispatch_receipt', $dispatch->id) }}"
							target="_blank">Token</a>
							<a class="btn btn-secondary btn-outline" href="{{ route('print_gate_pass', $dispatch->id) }}"
							target="_blank">GP</a>
						</td>
					</tr>

					<!-- Inline hidden details -->
					<tr id="dispatch-details-{{ $dispatch->id }}" class="dispatch-details" style="display:none;">
						<td class="">TOTAL:</td>
						<td class="min-w-125px">{{ $dispatch->calculated_amount }}</td>
						<td>DISCOUNT AMOUNT:</td>
						<th class="min-w-125px">{{ $dispatch->discount_amount }}</td>
						<td>AFTER DISCOUNT:</td>
						<th class="min-w-125px">{{ $dispatch->final_amount }}</td>
						<td class="min-w-125px">RECEIVED AMOUNT : {{ $dispatch->received_amount }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
        $('#searchDispatch').on('keyup', function() {
            var value = $(this).val().toLowerCase(); // Get the search input value
            $('#dipatches_table tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1); // Show or hide rows
            });
        });
    });
</script>

<!-- Script for Show Button to show details of the dispatch -->
<script>
    $(document).ready(function() {
        $('.show-details').click(function() {
            var dispatchId = $(this).data('dispatch-id');
            var detailsRow = $('#dispatch-details-' + dispatchId);
            detailsRow.toggle(); // Toggle visibility of the inline details
        });
    });
</script>
@endsection