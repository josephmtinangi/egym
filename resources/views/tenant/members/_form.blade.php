<div class="form-row">
	<div class="form-group col-md-6">
		<label for="branch_id" class="col-form-label">Tawi<span class="text-danger">*</span></label>
		<select name="branch_id" id="branch_id" class="form-control" required="required">
			@foreach($branches as $branch)
				<option value="{{ $branch->id }}">{{ $branch->name }}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-4">
		<label for="first_name" class="col-form-label">Jina la Kwanza<span class="text-danger">*</span></label>
		<input type="text" class="form-control" name="first_name" id="first_name" value="{{ isset($member) ? $member->first_name : old('first_name') }}" required="required" placeholder="Jina la Kwanza">
	</div>
	<div class="form-group col-md-4">
		<label for="middle_name" class="col-form-label">Jina la Kati</label>
		<input type="text" class="form-control" name="middle_name" id="middle_name" value="{{ isset($member) ? $member->middle_name : old('middle_name') }}" placeholder="Jina la Kati">
	</div>
	<div class="form-group col-md-4">
		<label for="last_name" class="col-form-label">Jina la Mwisho<span class="text-danger">*</span></label>
		<input type="text" class="form-control" name="last_name" id="last_name" value="{{ isset($member) ? $member->last_name : old('last_name') }}" required="required" placeholder="Jina la Mwisho">
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-4">
		<label for="first_name" class="col-form-label">Gender<span class="text-danger">*</span></label>
		<div class="radio">
			<label>
				<input type="radio" name="gender" id="gender" value="M" checked="checked">
				Male
			</label>
			<label>
				<input type="radio" name="gender" id="gender" value="F">
				Female
			</label>
		</div>
	</div>
	<div class="form-group col-md-4">
		<label for="date_of_birth" class="col-form-label">Date of birth</label>
		<input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="{{ isset($member) ? $member->date_of_birth : old('date_of_birth') }}" placeholder="Date of birth">
	</div>
	<div class="form-group col-md-4">
		<label for="joining_date" class="col-form-label">Joining Date<span class="text-danger">*</span></label>
		<input type="date" class="form-control" name="joining_date" id="joining_date" value="{{ isset($member) ? $member->joining_date : old('joining_date') }}" required="required" placeholder="Joining Date">
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-6">
		<label for="phone" class="col-form-label">Namba ya Simu<span class="text-danger">*</span></label>
		<div class="input-group mb-2">
			<div class="input-group-prepend">
				<div class="input-group-text">+255</div>
			</div>
			<input type="tel" maxlength="9" class="form-control" name="phone" id="phone" value="{{ isset($member) ? Str::substr($member->phone,4,13) : old('phone') }}" required="required" placeholder="Namba ya Simu">
		</div>		
	</div>
	<div class="form-group col-md-6">
		<label for="email" class="col-form-label">Barua Pepe</label>
		<input type="email" class="form-control" name="email" id="email" value="{{ isset($member) ? $member->email : old('email') }}" placeholder="Barua Pepe">
	</div>
</div>
<div class="form-group">
	<label for="address" class="col-form-label">Anuani</label>
	<input type="text" class="form-control" name="address" id="address" value="{{ isset($member) ? $member->address : old('address') }}" placeholder="Anuani">
</div>
<div class="form-row">
	<div class="form-group col-md-6">
		<label for="membership_plan_id" class="col-form-label">Plan<span class="text-danger">*</span></label>
		<select name="membership_plan_id" id="membership_plan_id" class="form-control" required="required">
			<option value="">-Select-</option>
			@foreach($membershipPlans as $membershipPlan)
				<option value="{{ $membershipPlan->id }}">{{ $membershipPlan->name }} &middot; Tsh {{ $membershipPlan->fee }} &middot; {{ $membershipPlan->number_of_days }} days</option>
			@endforeach
		</select>
	</div>
</div>