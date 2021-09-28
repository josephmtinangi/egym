<div class="form-row">
	<div class="form-group col-md-6">
		<label for="branch" class="col-form-label">Tawi<span class="text-danger">*</span></label>
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
		<input type="text" class="form-control" name="first_name" id="first_name" value="{{ isset($instructor) ? $instructor->first_name : old('first_name') }}" required="required" placeholder="Jina la Kwanza">
	</div>
	<div class="form-group col-md-4">
		<label for="middle_name" class="col-form-label">Jina la Kati</label>
		<input type="text" class="form-control" name="middle_name" id="middle_name" value="{{ isset($instructor) ? $instructor->middle_name : old('middle_name') }}" placeholder="Jina la Kati">
	</div>
	<div class="form-group col-md-4">
		<label for="last_name" class="col-form-label">Jina la Mwisho<span class="text-danger">*</span></label>
		<input type="text" class="form-control" name="last_name" id="last_name" value="{{ isset($instructor) ? $instructor->last_name : old('last_name') }}" required="required" placeholder="Jina la Mwisho">
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-6">
		<label for="phone" class="col-form-label">Namba ya Simu<span class="text-danger">*</span></label>
		<div class="input-group mb-2">
			<div class="input-group-prepend">
				<div class="input-group-text">+255</div>
			</div>
			<input type="tel" maxlength="9" class="form-control" name="phone" id="phone" value="{{ isset($instructor) ? Str::substr($instructor->phone,4,13) : old('phone') }}" required="required" placeholder="Namba ya Simu">
		</div>		
	</div>
	<div class="form-group col-md-6">
		<label for="email" class="col-form-label">Barua Pepe</label>
		<input type="email" class="form-control" id="email" value="{{ isset($instructor) ? $instructor->email : old('email') }}" placeholder="Barua Pepe">
	</div>
</div>
<div class="form-group">
	<label for="address" class="col-form-label">Anuani</label>
	<input type="text" class="form-control" name="address" id="address" value="{{ isset($instructor) ? $instructor->address : old('address') }}" placeholder="Anuani">
</div>