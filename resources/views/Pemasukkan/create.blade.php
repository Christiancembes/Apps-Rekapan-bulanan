@extends('Pemasukkan.layout')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Input Pemasukkan</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('pemasukkans.index')}}">Back</a>
		</div>
	</div>
</div>

@if ($errors->any())
	<div class="alert alert-danger">
		<strong>Whoopss!</strong> Kesalahan Inputan.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<form action="{{ route('pemasukkans.store') }}" method="POST">
	@csrf

	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<div class="form-group">
				<strong>Nama:</strong>
				<input type="text" name="name" class="form-control" placeholder="">
			</div>
		</div>
		<div class="col-xs-12 col-sm-12">
			<div class="form-group">
				<strong>Total:</strong>
				<input type="text" name="total" class="form-control" placeholder="">
			</div>
		</div>
		<div class="col-lg-5">
			<div class="form-group">
				<strong>Tanggal:</strong>
				<div class="input-group date">
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-th"></span>
					</div>
				<input type="text" name="tanggal" class="form-control datepicker" placeholder="">
			</div>
			</div>
			
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>
@endsection