@extends('layouts.tenant.app')

@section('title', 'Login')

@section('content')

<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact">
	<br><br>
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<p>Login</p>
		</div>

		<div class="row">

			<div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
				
			</div>

			<div class="col-lg-4 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
				<form action="/login" method="post" role="form" class="php-email-form">
					{{ csrf_field() }}
					<div class="form-group mt-3">
						<label for="phone">Phone</label>
						<input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" required>
					</div>
					<div class="form-group mt-3">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
					</div>
					@if(session()->has('errorMessage'))
						<div class="my-3">
							<div class="error-message">{{ session()->get('errorMessage') }}</div>
						</div>		            
					@endif
					<div class="text-center"><button type="submit">Login</button></div>
				</form>
			</div>

		</div>

	</div>
</section><!-- End Contact Us Section -->

@endsection