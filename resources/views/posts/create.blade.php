@extends('posts.layout')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Input Pengeluaran</h2>

		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('pengeluarans.index')}}">Back</a>
		</div>
	</div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('pengeluarans.store') }}" method="POST">
	@csrf

	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<div class="form-group">
				<strong>Nama Barang:</strong>
				<input type="text" name="nama_barang" class="form-control" placeholder="">
			</div>
		</div>
		<div class="col-xs-12 col-sm-12">
			<div class="form-group">
				<strong>Jumlah Barang:</strong>
				<input type="text" name="jumlah_barang" class="form-control" placeholder="">
			</div>
		</div>
		<div class="col-xs-12 col-sm-12">
			<div class="form-group">
				<strong>Total Harga:</strong>
				<input type="text" name="total_harga" class="form-control" placeholder="">
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>
@endsection