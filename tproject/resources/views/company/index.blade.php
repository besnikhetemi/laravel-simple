@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Company List</div>

                <div class="card-body">
                   <table id="companyTable" class="display nowrap dataTable dtr-inline collapsed">
					    <thead>
					        <tr>
					            <th>Nr.</th>
					            <th>Name</th>
					            <th>Email</th>
					            <th>Website</th>
					            <th>Logo</th>
					        </tr>
					    </thead>
					    <tbody>
					    	@foreach ($companieslists as $user)
								<tr>
									<td>{{ $user->id }}</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->website }}</td>
									<td>{{ $user->logo }}</td>
						        </tr>
							@endforeach
							
					    </tbody>
					</table>
					<div class="text-center">
						{{ $companieslists->links() }}
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
