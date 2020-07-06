<?php

namespace App\Http\Controllers\pengeluaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Laporan_controller extends Controller
{
    public function index() 
    {
    	return view('laporan.laporan_index');
    }

    public function cari(Request $request) 
    {
    	$this->validate($request,[
    		'dari'=>'required',
    		'sampai'=>'required'
    	]);

    	$dari = date('Y-m-d',strtotime($request->dari));

    	$orderBy = isset($dari['orderBy']) ? $dari['order_By'] : 'tanggal';
    	$orderRule =isset($dari['orderRule']) ? $dari['order_Rule'] : 'ASC'; 
    	

    	$sampai = date('Y-m-d',strtotime($request->sampai));
    	$orderBy = isset($sampai['orderBy']) ? $sampai['order_By'] : 'tanggal';
    	$orderRule =isset($sampai['orderRule']) ? $sampai['order_Rule'] : 'ASC';
    	

    	$pemasukkans = \DB::table('pemasukkans')->orderBy($orderBy,$orderRule)->whereBetween('tanggal',[$dari,$sampai])->get();

    	$total_pemasukkan = \DB::table('pemasukkans')->orderBy($orderBy,$orderRule)->whereBetween('tanggal',[$dari,$sampai])->sum('total');


    	$pengeluarans = \DB::table('pengeluarans')->orderBy($orderBy,$orderRule)->whereBetween('tanggal',[$dari,$sampai])->get();

    	$total_pengeluaran = \DB::table('pengeluarans')->orderBy($orderBy,$orderRule)->whereBetween('tanggal',[$dari,$sampai])->sum('total_harga');


    	//dd($pemasukkans);

    	return view('laporan.laporan_index',compact('pemasukkans','pengeluarans','total_pemasukkan','total_pengeluaran'));

    }
}
