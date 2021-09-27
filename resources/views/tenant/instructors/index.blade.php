@extends('layouts.tenant.admin')

@section('title', 'Instructors')

@section('content')

<!-- Page-Title -->
<div class="row">
	<div class="col-sm-12">
		<h4 class="page-title">Starter</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Ubold</a></li>
			<li class="breadcrumb-item"><a href="#">Pages</a></li>
			<li class="breadcrumb-item active">Starter</li>
		</ol>

	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card-box table-responsive">

			<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Namba</th>
						<th>Jina</th>
						<th>Simu</th>
						<th>Barua Pepe</th>
						<th>Anuani</th>
						<th>Tarehe ya Kusajiliwa</th>
						<th>Chaguo</th>
					</tr>
				</thead>

				<tbody>
					@foreach($instructors as $instructor)
						<tr>
							<td>{{ $instructor->number }}</td>
							<td>{{ $instructor->name() }}</td>
							<td>{{ $instructor->phone }}</td>
							<td>{{ $instructor->email }}</td>
							<td>{{ $instructor->address }}</td>
							<td>{{ $instructor->created_at }}</td>
							<td></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection