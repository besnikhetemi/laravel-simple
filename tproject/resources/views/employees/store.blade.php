@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Employees</div>
                @foreach ($errors->all() as $error)
					 <div class="alert alert-danger">
					    {{ $error }}
					  </div>
		        @endforeach
                <div class="card-body">
                   <form action="saveEmplyees" method="POST">
						{!! csrf_field() !!}
                   		<div class="form-group">
						    <label for="fname">First Name</label>
						    <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
						</div>
						<div class="form-group">
						    <label for="lname">Last Name</label>
						    <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
						</div>
					  	<div class="form-group">
						    <label for="companyEmail">Email address</label>
						    <input type="email" class="form-control" id="email" placeholder="Email address" name="email">
					 	 </div>
					  	<div class="form-group">
						    <label for="phone">Phone</label>
						    <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
						</div>

					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
