@extends('Pengeluaran.layout')

@section('content')
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Show Pengeluaran</h2>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="{{ route('pengeluarans.index') }}">Kembali</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Nama:</strong>
				{{ $pengeluaran->nama_barang}}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Nama:</strong>
				{{ $pengeluaran->jumlah_barang}}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Nama:</strong>
				{{ $pengeluaran->total_harga}}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Tanggal:</strong>
				{{ $pengeluaran->tanggal }}
			</div>
		</div>
	</div>
@endsection