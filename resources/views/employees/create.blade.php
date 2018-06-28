@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-3">
			<div class="panel-default">
				<div class="panel-heading">Create Employees</div>
				<div class="panel-body">
					<form action="/employees" method="POST">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="FirstName">First Name</label>
							<span style="color: red" class="pull-right">{{ $errors->first('firstname') }}</span>
							<input type="text" class="form-control" name="firstname" placeholder="First Name"/>

						</div>
						<div class="form-group">
							<label for="LastName">Last Name</label>
							<span style="color: red" class="pull-right">{{ $errors->first('lastname') }}</span>
							<input type="text" class="form-control" name="lastname" placeholder="Last Name"/>
						</div>
						<div class="form-group">
							<label for="Address">Address</label>
							<span style="color: red" class="pull-right">{{ $errors->first('address') }}</span>
							<textarea name="address" class="form-control"></textarea>
						</div>
						<input type="submit" class="btn btn-success btn-sm pull-right">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
