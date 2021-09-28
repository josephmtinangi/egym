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
			<li class="breadcrumb-item active">Add</li>
		</ol>

	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card-box">

			<form action="{{ route('members.store') }}" method="POST">
				{{ csrf_field() }} 
				@include('tenant.members._form')
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection