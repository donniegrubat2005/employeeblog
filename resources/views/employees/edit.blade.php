@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-3">
			<div class="panel-default">
				<div class="panel-heading">Edit Employees</div>
				<div class="panel-body">
					<form action="/employees/{{ $employee->id }}" method="POST">
						{{method_field('PUT')}}
						{{ csrf_field() }}
						<input type="hidden" name="id" value="{{$employee->id}}"/>
						<div class="form-group">
							<label for="FirstName">First Name</label>
							<input type="text" class="form-control" name="firstname" placeholder="First Name" value=" {{$employee->firstname}}" />
						</div>
						<div class="form-group">
							<label for="LastName">Last Name</label>
							<input type="text" class="form-control" name="lastname" placeholder="Last Name" value=" {{$employee->lastname}}"/>
						</div>
						<div class="form-group">
							<label for="Address">Address</label>
							<textarea name="address" class="form-control"> {{$employee->address}} </textarea>
						</div>
						<input type="submit" class="btn btn-success btn-sm pull-right">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection