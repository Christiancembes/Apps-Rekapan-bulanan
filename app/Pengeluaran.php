<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $fillable = [
    	'id','nama_barang', 'jumlah_barang', 'total_harga'
    ];
}
