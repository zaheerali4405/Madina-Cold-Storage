@extends ('layouts.app')

@section('title') All Customer @endsection

@section('content')
<div class="container">
	<div class="card">

		<!--begin::Card header-->
		<div class="card-header">
			<div class="card-title">
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Customers List</h1>
			</div>
			<div class="card-toolbar" >
				<input class="form-control w-250px h-40px me-3" type="text"
				 id="searchInput" placeholder="Search Customer" />
				<a href="{{ route('add_customer') }}" type="button" class="btn btn-primary">Add Customer</a>
			</div>
		</div>

		<!--begin::Card body-->
		<div class="card-body">
			<table class="table border gy-4" id="customers_table">
				<thead>
					<tr class="fw-bolder text-uppercase">
						<th class="w-100px">S / No.</th>
						<th class="min-w-125px">Name</th>
						<th class="min-w-125px">Phone</th>
						<th class="min-w-125px">Address</th>
						<th class="min-w-125px">Actions</th>
					</tr>
				</thead>
				<tbody class="fw-bold">
					@php $serialNo = 1; @endphp
					@foreach($customers as $customer)
					<tr>
						<td>{{ $serialNo++ }}</td>
						<td>{{ $customer->name }}</td>
						<td>{{ $customer->phone }}</td>
						<td>{{ $customer->address }}</td>
						<td>
							<a class="btn btn-secondary btn-outline" href="{{ route('edit_customer', $customer->id) }}">Edit</a>
							<a class="btn btn-secondary btn-outline" href="{{ route('customer_ledger', $customer->id) }}">Ledger</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            var value = $(this).val().toLowerCase(); // Get the search input value
            $('#customers_table tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1); // Show or hide rows
            });
        });
    });
</script>

@endsection