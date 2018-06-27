@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
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
								<td><a href="/employees/{{ $employee->id }}/edit" class="btn btn-success btn-sm">
								Edit</a></td>
								<td>
									<form action="employees/{{ $employee->id }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="btn btn-danger btn-sm">Delete</button>
									</form>
								</td>


							</tr>

						</tbody>
						@endforeach
					</table>
				</div>
				<div class="panel-footer">
					<div class="pull-left">
						<a href="/employees/create" class="btn btn-success btn-sm">Create</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection