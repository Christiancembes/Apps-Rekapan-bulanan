<?php

namespace App\Http\Controllers\pengeluaran;

use App\Http\Controllers\Controller;
use App\Pengeluaran;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $input = $request->all();

        $orderBy = isset($input['order_by']) ? $input['order_by'] : 'tanggal';
        $orderRule = isset($input['order_rule']) ? $input['order_rule'] : 'DESC';
        $limit = isset($input['limit']) ? $input['limit'] : 5;
        //dd($request->all());
        /*$pengeluarans = Pengeluaran::orderBy('tanggal','DESC')->get();*/
        $pengeluarans = \DB::table('pengeluarans')->orderBy($orderBy, $orderRule)->paginate($limit);

        return view('Pengeluaran.index',compact('pengeluarans'))->with('i', (request()->input('page', 1) - 1) * $limit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pengeluaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah_barang' => 'required',
            'total_harga' => 'required',
            'tanggal' => 'required|date',
        ]);

        Pengeluaran::create($request->all());

        return redirect()->route('pengeluarans.index')->with('success', 'Input Pengeluaran Success !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pengeluaran $pengeluaran)
    {
        return view('Pengeluaran.show',compact('pengeluaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengeluaran $pengeluaran)
    {
        return view('Pengeluaran.edit',compact('pengeluaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengeluaran $pengeluaran)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah_barang' => 'required',
            'total_harga' => 'required',
            'tanggal' => 'required|date',
        ]);

        $pengeluaran->update($request->all());

        return redirect()->route('pengeluarans.index')->with('success','Update Pengeluaran Success !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengeluaran $pengeluaran)
    {
        $pengeluaran->delete();

        return redirect()->route('Pengeluaran.index')->with('success','Delete Pengeluaran Success !!!');
    }
}
