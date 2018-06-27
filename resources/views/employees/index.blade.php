@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-3">
	<div class="panel-default">
		<div class="panel-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>First Name</th>
						<th>Last Name</th> 
						<th>Address</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				@foreach($employees as $employee)
				<tbody>
					<tr>

						<td>{{$employee->firstname}}</td>
						<td>{{$employee->lastname}}</td>
						<td>{{$employee->address}}</td>
						<td><a href="/employees/{{$employee->id}}/edit">Edit</a></td>
						<td>Delete</td>


					</tr>

				</tbody>
				@endforeach
			</table>
		</div>
		<div class="panel-footer">
			<div class="pull-right">
				<a href="/employees/create" class="btn btn-success">Create</a>
			</div>
		</div>
	</div>
</div>
@endsection