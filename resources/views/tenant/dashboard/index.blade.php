@extends('layouts.tenant.admin')

@section('title', 'Dashboard')

@section('content')

<!-- Page-Title -->
<div class="row">
	<div class="col-sm-12">

		<h4 class="page-title">Dashboard</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">EGYM</a></li>
			<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
			<li class="breadcrumb-item active">Summary</li>
		</ol>

	</div>
</div>

<div class="row">
	<div class="col-md-6 col-lg-6 col-xl-3">
		<div class="widget-bg-color-icon card-box">
			<div class="bg-icon bg-info pull-left">
				<i class="md md-attach-money text-white"></i>
			</div>
			<div class="text-right">
				<h3 class="text-dark"><span class="counter">31,570</span></h3>
				<p class="text-muted mb-0">Total Revenue</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="col-md-6 col-lg-6 col-xl-3">
		<div class="widget-bg-color-icon card-box">
			<div class="bg-icon bg-pink pull-left">
				<i class="md md-add-shopping-cart text-white"></i>
			</div>
			<div class="text-right">
				<h3 class="text-dark"><span class="counter">280</span></h3>
				<p class="text-muted mb-0">Today's Sales</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="col-md-6 col-lg-6 col-xl-3">
		<div class="widget-bg-color-icon card-box">
			<div class="bg-icon bg-purple pull-left">
				<i class="md md-equalizer text-white"></i>
			</div>
			<div class="text-right">
				<h3 class="text-dark"><span class="counter">0.16</span>%</h3>
				<p class="text-muted mb-0">Conversion</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="col-md-6 col-lg-6 col-xl-3">
		<div class="widget-bg-color-icon card-box">
			<div class="bg-icon bg-success pull-left">
				<i class="md md-remove-red-eye text-white"></i>
			</div>
			<div class="text-right">
				<h3 class="text-dark"><span class="counter">64,570</span></h3>
				<p class="text-muted mb-0">Today's Visits</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

@endsection