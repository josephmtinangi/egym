@extends('layouts.tenant.admin')

@section('title', 'Rates')

@section('content')

<!-- Page-Title -->
<div class="row">
	<div class="col-sm-12">
		<h4 class="page-title">Rates</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">EGYM</a></li>
			<li class="breadcrumb-item"><a href="#">Rates</a></li>
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
						<th>Name</th>
						<th>Number of Days</th>
						<th>Sign Up fee</th>
						<th>Fee</th>
						<th>Status</th>
						<th>Date Created</th>
						<th>Options</th>
					</tr>
				</thead>

				<tbody>
					@foreach($membershipPlans as $membershipPlan)
					<tr>
						<td>{{ $membershipPlan->name }}</td>
						<td>{{ $membershipPlan->number_of_days }}</td>
						<td>{{ $membershipPlan->signup_fee }}</td>
						<td>{{ $membershipPlan->fee }}</td>
						<td>
							@if($membershipPlan->status)
								<span class="label label-table label-success">Active</span>
							@else
								<span class="label label-table label-danger">Inactive</span>
							@endif
						</td>
						<td>{{ $membershipPlan->created_at }}</td>
						<td class="actions">
							<a href="{{ route('membership-plans.show', Hashids::encode($membershipPlan->id)) }}" class="hidden on-editing text-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Details"><i class="fa fa-info"></i></a>
							<a href="{{ route('membership-plans.edit', Hashids::encode($membershipPlan->id)) }}" class="on-default text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
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