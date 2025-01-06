@extends ('layouts.app')

@section('title') All Products @endsection

@section('content')
<div class="container">
	<div class="card">

		<!--Card header-->
		<div class="card-header">
			<div class="card-title">
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Products List</h1>
			</div>
			<div class="card-toolbar">
				<input class="form-control w-250px h-40px me-3" type="text"
				id="searchProduct" placeholder="Search Product" />
				<a href="{{ route('add_product') }}" type="button" class="btn btn-primary">Add Product</a>
			</div>
		</div>

		<!--begin::Card body-->
		<div class="card-body">
			<table class="table border gy-4" id="products_table">
				<thead>
					<tr class="fw-bolder text-uppercase">
						<th class="w-100px">S / No.</th>
						<th class="min-w-125px">Name</th>
						<th class="min-w-125px">Type</th>
						<th class="min-w-125px">Colour</th>
						<th class="min-w-125px">Actions</th>
					</tr>
				</thead>
				<tbody class="fw-bold">
					@php $serialNo = 1; @endphp
					@foreach ($products as $product)
					<tr>
						<td>{{ $serialNo++ }}</td>
						<td>{{ $product->name }}</td>
						<td>{{ $product->type }}</td>
						<td>{{ $product->color }}</td>
						<td><a class="btn btn-secondary btn-outline" href="{{ route('edit_product', $product->id) }}">Edit</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
        $('#searchProduct').on('keyup', function() {
            var value = $(this).val().toLowerCase(); // Get the search input value
            $('#products_table tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1); // Show or hide rows
            });
        });
    });
</script>
@endsection