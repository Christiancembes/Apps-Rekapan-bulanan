@extends('postss.layout')

@section('content')
	<div class="row">
		<div class="col-log-12 margin-tb">
			<div class="pull-left">
				<h2>Pemasukkan</h2>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('pemasukkans.create') }}">Input Pemasukkan</a>
			</div>
		</div>
	</div>

	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p> {{ $message }}</p>
	</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Total</th>
			<th width="280px">Action</th>
		</tr>
		@foreach ($pemasukkans as $Pemasukkan)
		<tr>
			<td>{{ ++$i }}</td>
			<td>{{ $Pemasukkan->name }}</td>
			<td>{{ $Pemasukkan->total }}</td>
			<td>
				<form action="{{ route('pemasukkans.destroy', $Pemasukkan->id) }}" method="POST">
					<a class="btn btn-info" href="{{ route('pemasukkans.show',$Pemasukkan->id) }}">Show</a>
					<a class="btn btn-info" href="{{ route('pemasukkans.edit',$Pemasukkan->id) }}">Edit</a>

					@csrf
					@method('DELETE')

					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>

	{!! $pemasukkans->links() !!}

@endsection