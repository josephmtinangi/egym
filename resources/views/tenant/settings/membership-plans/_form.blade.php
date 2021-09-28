<div class="form-row">
	<div class="form-group col-md-6">
		<label for="name" class="col-form-label">Name<span class="text-danger">*</span></label>
		<input type="text" class="form-control" name="name" id="name" value="{{ isset($membershipPlan) ? $membershipPlan->name : old('name') }}" required="required" placeholder="Name">
	</div>
	<div class="form-group col-md-6">
		<label for="number_of_days" class="col-form-label">Number of Days<span class="text-danger">*</span></label>
		<input type="number" class="form-control" name="number_of_days" id="number_of_days" value="{{ isset($membershipPlan) ? $membershipPlan->number_of_days : old('number_of_days') }}" required="required" placeholder="Number of Days">
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-6">
		<label for="signup_fee" class="col-form-label">Sign Up Fee<span class="text-danger">*</span></label>
		<div class="input-group mb-2">
			<div class="input-group-prepend">
				<div class="input-group-text">TSH</div>
			</div>
			<input type="number" step="any" class="form-control" name="signup_fee" id="signup_fee" value="{{ isset($membershipPlan) ? $membershipPlan->signup_fee : old('signup_fee') }}" required="required" placeholder="Sign Up Fee">
		</div>		
	</div>
	<div class="form-group col-md-6">
		<label for="fee" class="col-form-label">Fee</label>
		<div class="input-group mb-2">
			<div class="input-group-prepend">
				<div class="input-group-text">TSH</div>
			</div>
			<input type="number" step=any class="form-control" name="fee" id="fee" value="{{ isset($membershipPlan) ? $membershipPlan->fee : old('fee') }}" required="required" placeholder="Fee">
		</div>
	</div>
</div>
<div class="form-group">
	<label for="address" class="col-form-label">Status</label>
	<div class="radio">
		<label>
			<input type="radio" name="status" id="active" value="1" checked="checked">
			Active
		</label>
		<label>
			<input type="radio" name="status" id="inactive" value="0">
			Inactive
		</label>
	</div>
</div>