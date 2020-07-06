<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get('/', function () {
    return view('beranda');
});*/
route::get('/','berandacontroller@index');
route::get('/about','aboutcontroller@index');

// route::get('/inputpemasukkan','inputpemasukkancontroller@index');
// route::get('/inputpengeluaran','inputpengeluarancontroller@index');
route::get('posts/laporan','laporancontroller@index');

Route::get('/login','logincontroller@index');

Route::post('/login','logincontroller@store');


route::get('/logout','logoutcontroller@destroy');

route::get('/register','registercontroller@create');
route::post('/register','registercontroller@store');

route::get('/admin','admincontroller@index');


//Manage Pengeluaran
Route::resource('pengeluarans','pengeluaran\PengeluaranController');

//Manage Pemasukan
Route::resource('pemasukkans', 'pengeluaran\PemasukkanController');

//Laporan Keuangan
Route::get('laporan-keuangan','pengeluaran\Laporan_controller@index');

Route::get('cari-laporan','pengeluaran\Laporan_controller@cari');




