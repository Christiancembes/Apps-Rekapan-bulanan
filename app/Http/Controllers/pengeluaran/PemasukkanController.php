<?php

namespace App\Http\Controllers\pengeluaran;

use App\Http\Controllers\Controller;
use App\Pemasukkan;
use Illuminate\Http\Request;

class PemasukkanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasukkans = Pemasukkan::latest()->paginate(5);

        return view('postss.index', compact('pemasukkans'))->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postss.create');
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
            'name' => 'required',
            'total' => 'required',
        ]);

        Pemasukkan::create($request->all());

        return redirect()->route('pemasukkans.index')->with('success','Input Pemasukkan Success !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pemasukkan  $pemasukkan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemasukkan $pemasukkan)
    {
        return view('postss.show', compact('pemasukkan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pemasukkan  $pemasukkan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemasukkan $pemasukkan)
    {
        return view('postss.edit',compact('pemasukkan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pemasukkan  $pemasukkan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemasukkan $pemasukkan)
    {
        $request->validate([
            'name' => 'required',
            'total' => 'required',
        ]);

        $pemasukkan->update($request->all());

        return redirect()->route('pemasukkans.index')->with('success', 'Update Pemasukkan Success !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pemasukkan  $pemasukkan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemasukkan $pemasukkan)
    {
        $pemasukkan->delete();

        return redirect()->route('postss.index')->with('success','Delete Pemasukkan Success !!!');
    }
}
