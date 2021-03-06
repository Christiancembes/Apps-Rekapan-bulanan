@extends('Pemasukkan.layout')

@section('content')

	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Show Pemasukkan</h2>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="{{route('pemasukkans.index')}}">Back</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Nama:</strong>
				{{ $pemasukkan->name }}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Total:</strong>
				{{ $pemasukkan->total}}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Tanggal:</strong>
				{{ $pemasukkan->tanggal}}
			</div>
		</div>
	</div>
@endsection