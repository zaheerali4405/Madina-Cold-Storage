@extends ('layouts.app')

@section('title') Ledger Customer @endsection

@section('content')
<div class="container-fluid px-5">
	<div class="card mb-5">
		<!--Card body-->
		<div class="card-body px-0">
            <table class="table gy-4 border">
				<thead>
					<tr class="fw-bold text-uppercase">
						<th class="min-w-50px">S / No.</th>
						<th class="min-w-125px">Voucher No.</th>
						<th class="min-w-125px">Customer Name</th>
						<th class="min-w-125px">Product Name</th>
						<th class="min-w-125px">Container</th>
						<th class="min-w-125px">Total Quantity</th>
						<th class="min-w-125px">Balance Quantity</th>
						<th class="min-w-125px">Total Amount</th>
						<th class="min-w-125px">Balance Amount</th>
						<th class="min-w-125px">Date</th>
					</tr>
				</thead>
				<tbody>
					@php $serialNo = 1; @endphp
					@foreach($customer->orders as $order)
					<tr>
						<td>{{ $serialNo++ }}</td>
						<td>{{ $order->voucher_no }}</td>
						<td>{{ $order->getCustomer->name }}</td>
						<td>{{ $order->getProduct->name }}</td>
						<td>{{ $order->getContainer->name }}</td>
						<td>{{ $order->total_pieces }}</td>
						<td>{{ $order->balance_pieces }}</td>
						<td>{{ $order->total_amount }}</td>
						<td>{{ $order->balance_amount }}</td>
						<td>{{ $order->date }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<div class="card">
		<!--Card body-->
		<div class="card-body px-0">
        <table class="table gy-4 border">
				<thead>
					<tr class="fw-bold text-uppercase">
						<th class="w-50px">S / No.</th>
						<th class="min-w-125px">Voucher No.</th>
						<th class="min-w-125px">Customer Name</th>
						<th class="min-w-125px">Product Name</th>
						<th class="min-w-125px">Quantity</th>
						<th class="min-w-125px">Gross</th>
						<th class="min-w-125px">Discount</th>
						<th class="min-w-125px">Net Amount</th>
						<th class="min-w-125px">Received</th>
						<th class="min-w-125px">Date</th>
					</tr>
				</thead>
				<tbody>
					@php $serialNo = 1; @endphp
                    @foreach ($customer->orders as $order)
					@foreach($order->dispatches as $dispatch)
					<tr>
                        <td>{{ $serialNo++ }}</td>
						<td>{{ $dispatch->getOrder->voucher_no }}</td>
						<td>{{ $dispatch->getOrder->getCustomer->name }}</td>
						<td>{{ $dispatch->getOrder->getProduct->name }}</td>
						<td>{{ $dispatch->dispatched_pieces }}</td>
						<td>{{ $dispatch->calculated_amount }}</td>
						<td>{{ $dispatch->discount_amount }}</td>
						<td>{{ $dispatch->final_amount }}</td>
						<td>{{ $dispatch->received_amount }}</td>
						<td>{{ $dispatch->date }}</td>
					</tr>
					@endforeach
                    @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>


@endsection