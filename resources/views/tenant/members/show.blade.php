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
		<div class="card-box">

			<table class="table table-bordered">
				<tbody>
					<tr><th>Name</th><td>{{ $instructor->name() }}</td></tr>
					<tr><th>Phone</th><td>{{ $instructor->phone }}</td></tr>
					<tr><th>Email</th><td>{{ $instructor->email }}</td></tr>
					<tr><th>Address</th><td>{{ $instructor->address }}</td></tr>
					<tr><th>Status</th><td>{{ $instructor->status }}</td></tr>
					<tr><th>Date Registered</th><td>{{ $instructor->created_at }}</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection