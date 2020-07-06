<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasukkan extends Model
{
	// field yang bisa di input
    protected $fillable = [
    	'id',
    	'name',
    	'total',
    	'tanggal',
    ];

    
}
