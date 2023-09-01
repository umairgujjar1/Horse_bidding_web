@extends('Admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Aution</h2>
		</div>
		<div class="box-content">



		<form action="{{URL::to('admin-save-add-aution')}}" method="post" enctype="multipart/form-data">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">Title</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="title" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Categorey</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="categorey" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Type</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="type" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="date01">Age</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="age" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="date01">Height</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="height" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="date01">Weight</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="weight" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="date01">Description</label>
				<div class="controls">
					<textarea class="input-xlarge" name="description" required ></textarea> 
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Price</label>
				<div class="controls">
					<input type="number" class="input-xlarge" name="price" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">image</label>
				<div class="controls">
					<input type="file" class="input-xlarge" name="image" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Start Date</label>
				<div class="controls">
					<input type="date" class="input-xlarge" name="start_date" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">End Date</label>
				<div class="controls">
					<input type="date" class="input-xlarge" name="end_date" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Status</label>
				<div class="controls">
					<select class="input-xlarge" name="status" required>
						<option>Active</option>
						<option>Unactive</option>
					</select>
				</div>
			</div>
			
			<div class="control-group">
				<div class="controls">
					<input type="submit" class="input-xlarge btn btn-primary" name="member_name" value="Save" >
				</div>
			</div>
		</form>	
		</div>
	</div><!--/span-->
			
</div><!--/row-->
@endsection
