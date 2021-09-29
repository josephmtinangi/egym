@extends('layouts.tenant.admin')

@section('title', 'Instructors')

@section('content')

<!-- Page-Title -->
<div class="row">
	<div class="col-sm-12">
		<h4 class="page-title">Members</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('tenant.dashboard.index') }}">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="{{ route('members.index') }}">Members</a></li>
			<li class="breadcrumb-item active">Details</li>
		</ol>

	</div>
</div>

<div class="row">
	<div class="col-md-6">

		<div class="portlet">
			<div class="portlet-heading bg-success">
				<h3 class="portlet-title">
					Success Heading
				</h3>
				<div class="portlet-widgets">
					<a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
					<span class="divider"></span>
					<a data-toggle="collapse" data-parent="#accordion1" href="#bg-success"><i class="ion-minus-round"></i></a>
					<span class="divider"></span>
					<a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div id="bg-success" class="panel-collapse collapse show">
				<div class="portlet-body">
					
					<table class="table table-bordered">
						<tbody>
							<tr><th>Name</th><td>{{ $member->name() }}</td></tr>
							<tr><th>Gender</th><td>{{ $member->gender }}</td></tr>
							<tr><th>Date of Birth</th><td>{{ $member->date_of_birth }}</td></tr>
							<tr><th>Age</th><td>{{ $member->age() }} years</td></tr>
							<tr><th>Phone</th><td>{{ $member->phone }}</td></tr>
							<tr><th>Email</th><td>{{ $member->email }}</td></tr>
							<tr><th>Address</th><td>{{ $member->address }}</td></tr>
							<tr><th>Status</th>
								<td>
									@if($member->status)
									<span class="label label-table label-success">Active</span>
									@else
									<span class="label label-table label-danger">Inactive</span>
									@endif
								</td>
							</tr>
							<tr><th>Joining Date</th><td>{{ $member->joining_date }}</td></tr>
							<tr><th>Date Registered</th><td>{{ $member->created_at }}</td></tr>
						</tbody>
					</table>
					
				</div>
			</div>
		</div>

	</div>

	<div class="col-md-6">
		<div class="portlet">
			<div class="portlet-heading bg-info">
				<h3 class="portlet-title">
					Plans
				</h3>
				<div class="portlet-widgets">
					<a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
					<span class="divider"></span>
					<a data-toggle="collapse" data-parent="#accordion1" href="#bg-info"><i class="ion-minus-round"></i></a>
					<span class="divider"></span>
					<a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div id="bg-info" class="panel-collapse collapse show">
				<div class="portlet-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Number</th>
								<th>Signup Fee</th>
								<th>Fee</th>
								<th>Name</th>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@foreach($member->plans as $plan)
							<tr>
								<td>{{ $plan->number }}</td>
								<td>{{ $plan->signup_fee }}</td>
								<td>{{ $plan->fee }}</td>
								<td>{{ $plan->name }}</td>
								<td>{{ $plan->pivot->start_date }}</td>
								<td>{{ $plan->pivot->end_date }}</td>
								<td>
									@if($plan->pivot->active)
									<span class="label label-table label-success">Active</span>
									@else
									<span class="label label-table label-danger">Inactive</span>
									@endif										
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</div>

@endsection