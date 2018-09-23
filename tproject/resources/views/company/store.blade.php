@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Store</div>
                @foreach ($errors->all() as $error)
					 <div class="alert alert-danger">
					    {{ $error }}
					  </div>
		        @endforeach
                <div class="card-body">
                   <form action="saveCompany" method="POST" enctype="multipart/form-data" files="true">
						{!! csrf_field() !!}
                   		<div class="form-group">
						    <label for="companyName">Name</label>
						    <input type="text" class="form-control" id="companyName" placeholder="Name" name="companyName">
						</div>
					  	<div class="form-group">
						    <label for="companyEmail">Email address</label>
						    <input type="email" class="form-control" id="companyEmail" placeholder="Enter email" name="companyEmail">
					 	 </div>
					  	<div class="form-group">
						    <label for="companyWebsite">Website</label>
						    <input type="text" class="form-control" id="companyWebsite" placeholder="Website" name="companyWebsite">
						</div>
						<div class="form-group">

						    <label for="companylogo">Logo</label>
						    <input type="file" class="form-control" id="companylogo" name="companylogo">
						    <small id="passwordHelpBlock" class="form-text text-muted">Minimal Dimensions must be 100x100</small>
						</div>



					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
