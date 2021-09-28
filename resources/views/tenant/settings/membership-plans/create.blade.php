@extends('layouts.tenant.admin')

@section('title', 'Instructors')

@section('content')

<!-- Page-Title -->
<div class="row">
	<div class="col-sm-12">
		<div class="btn-group pull-right m-t-15">
			<button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings</button>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
				<a class="dropdown-item" href="#">Dropdown One</a>
				<a class="dropdown-item" href="#">Dropdown Two</a>
				<a class="dropdown-item" href="#">Dropdown Three</a>
				<a class="dropdown-item" href="#">Dropdown Four</a>
			</div>
		</div>

		<h4 class="page-title">Instructors</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('tenant.dashboard.index') }}">EGYM</a></li>
			<li class="breadcrumb-item"><a href="{{ route('instructors.index') }}">Instructors</a></li>
			<li class="breadcrumb-item active">Create</li>
		</ol>

	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card-box">

			<form action="{{ route('membership-plans.store') }}" method="POST">
				{{ csrf_field() }} 
				@include('tenant.settings.membership-plans._form')
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection