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
		<div class="portlet">
			<div class="portlet-heading bg-custom">
				<h3 class="portlet-title">
					#
				</h3>
				<div class="portlet-widgets">
					<a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
					<span class="divider"></span>
					<a data-toggle="collapse" data-parent="#accordion1" href="#bg-primary"><i class="ion-minus-round"></i></a>
					<span class="divider"></span>
					<a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div id="bg-primary" class="panel-collapse collapse show">
				<div class="portlet-body">
					<form action="{{ route('members.store') }}" method="POST">
						{{ csrf_field() }} 
						@include('tenant.members._form')
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection