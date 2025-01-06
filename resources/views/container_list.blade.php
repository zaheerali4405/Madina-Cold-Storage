@extends ('layouts.app')

@section('title') All Container @endsection

@section('content')
<div class="container">
	<div class="card">

		<!--Card header-->
		<div class="card-header">
			<div class="card-title">
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Containers List</h1>
			</div>
			<div class="card-toolbar">
				<input class="form-control w-250px h-40px me-3" type="text"
				id="searchContainer" placeholder="Search Container" />
				<a href="{{ route('add_container') }}" type="button" class="btn btn-primary">Add Container</a>
			</div>
		</div>

		<!--Card body-->
		<div class="card-body">
			<table class="table gy-4 border"  id="containers_table">
				<thead>
					<tr class="fw-bolder text-uppercase">
						<th class="w-50px">S / No.</th>
						<th class="min-w-125px">Name</th>
						<th class="min-w-125px">Rent</th>
						<th class="min-w-125px">Actions</th>
					</tr>
				</thead>
				<tbody class="fw-bold">
					@php $serialNo = 1; @endphp
					@foreach($containers as $container)
					<tr>
						<td>{{ $serialNo++ }}</td>
						<td>{{ $container->name }}</td>
						<td>{{ $container->rent }}</td>
						<td><a class="btn btn-secondary btn-outline" href="{{ route('edit_container', $container->id) }}">Edit</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
        $('#searchContainer').on('keyup', function() {
            var value = $(this).val().toLowerCase(); // Get the search input value
            $('#containers_table tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1); // Show or hide rows
            });
        });
    });
</script>

@endsection