@extends('template')
@section('contentWebsite')
	<div class="panel-heading">
		<strong>Login</strong>
	</div>
	
	@if(\Session::has('alert'))
		<div class="alert alert-danger">
			<div>{{Session::get('alert')}}</div>
		</div>
	@endif

	@if(\Session::has('alert-success'))
		<div class="alert alert-success">
			<div>{{Session::get('alert-success')}}</div>
		</div>
	@endif

	<form action="{{ url('/login') }}" method="post">
		{{ csrf_field() }}
			<div class="form-group">
				<label form="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>

			<div class="form-group">
				<label for="alamat">Password:</label>
				<input type="Password" class="form-control" id="password" name="password">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-md btn-primary">Login</button>
				<a href="{{url('register')}}" class="btn btn-md btn-warning">Register</a>
			</div>
	</form>

	@endsection