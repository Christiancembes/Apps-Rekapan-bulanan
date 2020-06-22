@extends('posts.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pengeluaran</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pengeluarans.create') }}"> Input Pengeluaran</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Total Harga</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pengeluarans as $Pengeluaran)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $Pengeluaran->nama_barang }}</td>
            <td>{{ $Pengeluaran->jumlah_barang }}</td>
            <td>{{ $Pengeluaran->total_harga }}</td>
            <td>
                <form action="{{ route('pengeluarans.destroy',$Pengeluaran->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pengeluarans.show',$Pengeluaran->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pengeluarans.edit',$Pengeluaran->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pengeluarans->links() !!}
      
@endsection