@extends('layouts.tenant.admin')

@section('title', 'Members')

@section('content')

<!-- Page-Title -->
<div class="row">
	<div class="col-sm-12">
		<h4 class="page-title">Members</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('tenant.dashboard.index') }}">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="{{ route('members.index') }}">Members</a></li>
			<li class="breadcrumb-item active">List</li>
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
					@foreach($members as $member)
					<tr>
						<td>{{ $member->number }}</td>
						<td>{{ $member->name() }}</td>
						<td>{{ $member->phone }}</td>
						<td>{{ $member->email }}</td>
						<td>{{ $member->address }}</td>
						<td>{{ $member->created_at }}</td>
						<td>{{ $member->branch->name }}</td>
						<td>
							@if($member->status)
								<span class="label label-table label-success">Active</span>
							@else
								<span class="label label-table label-danger">Inactive</span>
							@endif
						</td>
						<td class="actions">
							<a href="{{ route('members.show', Hashids::encode($member->id)) }}" class="hidden on-editing text-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Details"><i class="fa fa-info"></i></a>
							<a href="{{ route('members.edit', Hashids::encode($member->id)) }}" class="on-default text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
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