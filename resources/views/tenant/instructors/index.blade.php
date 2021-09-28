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
						<th>Location</th>
						<th>Status</th>
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
						<td>{{ $instructor->branch->name }}</td>
						<td></td>
						<td class="actions">
							<a href="{{ route('instructors.show', Hashids::encode($instructor->id)) }}" class="hidden on-editing text-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Details"><i class="fa fa-info"></i></a>
							<a href="{{ route('instructors.edit', Hashids::encode($instructor->id)) }}" class="on-default text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default text-danger delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection