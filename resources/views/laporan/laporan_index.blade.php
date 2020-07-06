<!DOCTYPE html>
<html>
<head>
	<title>Laporan Keuangan</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">


	<!-- link datepicker -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>

	<form action="{{ url('cari-laporan') }}" method="get">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
					<strong>Dari:</strong>
					<div class="input-group date">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
						<input type="text" name="dari" class="form-control datepicker" placeholder="" autocomplete="off">
					</div>
				</div>
			</div>

			<div class="col-lg-5">
				<div class="form-group">
					<strong>Sampai:</strong>
					<div class="input-group date">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
						<input type="text" name="sampai" class="form-control datepicker" placeholder="" autocomplete="off">
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Cari Data</button>
			</div>
		</div>
	</form>


	@if(isset($pemasukkans))
	<div class="row">
		<div class="col-md-12">

			<div class="card shadow">
				<div class="card-header border-0">
					<h3 class="mb-0">Data Pemasukan</h3>
				</div>
				<div class="table-responsive">
					<table id="table-pemasukan" class="table align-items-center table-flush">
						<thead class="thead-light">
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama</th>
								<th scope="col">Total</th>
								<th scope="col">Tanggal</th>
							</tr>
						</thead>
						<tbody>
							@foreach($pemasukkans as $e=>$ps)
							<tr>
								<td>{{ $e+1 }}</td>
								<td>{{ $ps->name }}</td>
								<td>Rp. {{ number_format($ps->total,0) }}</td>
								<td>{{ date('d M Y', strtotime($ps->tanggal)) }}</td>
							</tr>
							@endforeach
							<tr>
								<td></td>
								<td>Total</td>
								<td>Rp. {{ number_format($total_pemasukkan,0) }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	@endif

	

	@if(isset($pengeluarans))
	<div class="row">
		<div class="col-md-12">

			<div class="card shadow">
				<div class="card-header border-0">
					<h3 class="mb-0">Data Pengeluaran</h3>
				</div>
				<div class="table-responsive">
					<table id="table-pengeluaran" class="table align-items-center table-flush">
						<thead class="thead-light">
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama Barang</th>
								<th scope="col">Jumlah Barang</th>
								<th scope="col">Total Harga</th>
								<th scope="col">Tanggal</th>
							</tr>
						</thead>
						<tbody>
							@foreach($pengeluarans as $e=>$pl)
							<tr>
								<td>{{ $e+1 }}</td>
								<td>{{ $pl->nama_barang }}</td>
								<td>{{ $pl->jumlah_barang }}</td>
								<td>Rp. {{ number_format($pl->total_harga,0) }}</td>
								<td>{{ date('d M Y', strtotime($pl->tanggal)) }}</td>
							</tr>
							@endforeach
							<tr>
								<td></td>
								<td></td>
								<td>Total</td>
								<td>Rp. {{ number_format($total_pengeluaran,0) }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	@endif




	<!-- javascript datetime -->
	<script type="text/javascript">
		$('.date').datepicker({
			format: 'yyyy-mm-dd'
		});
	</script>

</body>
</html>