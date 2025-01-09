@extends ('layouts.app')

@section('title') All Expense @endsection

@section('content')
<div class="container">
	<div class="card">

		<!--Card header-->
		<div class="card-header">
			<div class="card-title">
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3">Expenses List</h1>
			</div>
			<div class="card-toolbar">
				<input class="form-control w-250px h-40px me-3" type="text"
				id="searchExpense" placeholder="Search Expense" />
				<a href="{{ route('add_expense') }}" type="button" class="btn btn-primary">Add Expense</a>
			</div>
		</div>

		<!--Card body-->
		<div class="card-body">
			<table class="table border gy-4" id="expenses_table">
				<thead>
					<tr class="fw-bolder text-uppercase">
						<th class="w-100px">S / No.</th>
						<th class="min-w-125px">Name</th>
						<th class="min-w-125px">Amount</th>
						<th class="min-w-125px">Person</th>
						<th class="min-w-125px">Date</th>
						<th class="w-100px">Actions</th>
					</tr>
				</thead>
				<tbody class="fw-bold">
					@php $serialNo = 1; @endphp
					@foreach($expenses as $expense)
					<tr>
						<td>{{ $serialNo++ }}</td>
						<td>{{ $expense->name }}</td>
						<td>{{ $expense->amount }}</td>
						<td>{{ $expense->person }}</td>
						<td>{{ $expense->date }}</td>
						<td>
						<a class="btn btn-secondary btn-outline" href="{{ route('edit_expense', $expense->id) }}">Edit</a>
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
        $('#searchExpense').on('keyup', function() {
            var value = $(this).val().toLowerCase(); // Get the search input value
            $('#expenses_table tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1); // Show or hide rows
            });
        });
    });
</script>
@endsection