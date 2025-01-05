@extends ('layouts.app')

@section('title') Dashboard @endsection

@section('content')
<div class="container-fluid px-5">
	<div class="card">
		<!--begin::Card body-->
		<div class="card-body pt-0">
			<div class="row">
				<div class="py-3 d-flex align-items-center justify-content-center fw-bolder fs-3">ALL DETAILS</div>
				<div class="col-md-3 card bg-white text-center py-2">
					<div class="fs-1 fw-bolder py-3">Quantity</div>
					<div class="fs-2"><span class="fw-bold">Total: </span><span class="">{{ $totalPieces }}</span></div>
					<div class="fs-2"><span class="fw-bold">Dispatched: </span><span class="">{{ $totalPieces -
							$balancePieces}}</span></div>
					<div class="fs-2"><span class="fw-bold">Remaining: </span><span class="">{{ $balancePieces }}</span>
					</div>
				</div>
				<div class="col-md-3 card bg-white text-center py-2">
					<div class="fs-1 fw-bolder py-3">Earning</div>
					<div class="fs-2"><span class="fw-bold">Total: </span><span class="">{{ $totalAmount }}</span></div>
					<div class="fs-2"><span class="fw-bold">Received: </span><span class="">{{ $totalAmount -
							$balanceAmount}}</span></div>
					<div class="fs-2"><span class="fw-bold">Balance: </span><span class="">{{ $balanceAmount }}</span>
					</div>
				</div>
				<div class="col-md-3 card bg-white text-center py-2">
					<div class="fs-1 fw-bolder py-3">Expenses</div>
					<div class="fs-2"><span class="fw-bold">Total: </span><span class="">{{ $totalExpenses }}</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="py-3 d-flex align-items-center justify-content-center fw-bolder fs-3">CONTAINER DETAILS
				</div>
				@foreach($containersPieces as $container)
				<div class="col-md-3 card bg-white text-center py-2">
					<div class="fs-1 fw-bolder py-3">{{ $container->name }}</div>
					<div class="fs-2"><span class="fw-bold">Total: </span><span class="">{{ $container->total_pieces_sum
							?? 0 }}</span></div>
					<div class="fs-2"><span class="fw-bold">Remaining: </span><span class="">{{
							$container->balance_pieces_sum ?? 0 }}</span></div>
				</div>
				@endforeach
			</div>
			<div class="row">
				<div class="py-3 d-flex align-items-center justify-content-center fw-bolder fs-3">PRODUCT DETAILS</div>
				@foreach($productsPieces as $product)
				<div class="col-md-3 card bg-white text-center py-2">
					<div class="fs-1 fw-bolder py-3">{{ $product->name }}</div>
					<div class="fs-2"><span class="fw-bold">Total: </span><span class="">{{ $product->total_pieces_sum
							?? 0 }}</span></div>
					<div class="fs-2"><span class="fw-bold">Remaining: </span><span class="">{{
							$product->balance_pieces_sum ?? 0 }}</span></div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection