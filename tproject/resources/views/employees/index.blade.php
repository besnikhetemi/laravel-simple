@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Company List</div>

                <div class="card-body">
                   <table id="employeeTable" class="display nowrap dataTable dtr-inline collapsed dt-responsive">
					    <thead>
					        <tr>
					            <th>Nr.</th>
					            <th>First Name</th>
					            <th>Last Name</th>
					            <th>Email</th>
					            <th>Phone</th>
					        </tr>
					    </thead>
					    <tbody>
					    	@foreach ($employeelists as $user)
								<tr>
									<td>{{ $user->id }}</td>
									<td>{{ $user->fname }}</td>
									<td>{{ $user->lname }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->phone }}</td>
						        </tr>
							@endforeach
					    </tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
