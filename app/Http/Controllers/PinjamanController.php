<?php

namespace App\Http\Controllers;

use App\Models\pinjaman;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(pinjaman $pinjaman)
    {
        $data = pinjaman::all();
        return view('pinjaman.pinjaman', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pinjaman.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pinjaman = pinjaman::create([
            'id_buku' => $request->id_buku,
            'id_pinjaman' => $request->id_pinjaman,
            'id_jurnal' => $request->id_jurnal,
            'id_karya' => $request->id_karya,
            'denda' => $request->denda,
            'status' => $request->status,
            'tanggal_kembali' => $request->tanggal_kembali,


        ]);
        return redirect('/pinjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function show(pinjaman $pinjaman)
    {
        //
    }
    public function edit($id)
    {
        $data = pinjaman::find($id);

        return view('pinjaman.edit', compact('data'));
    }

    public function ganti(request $request, $id)
    {
        $data = pinjaman::find($id)->update([
            'id_buku' => $request->id_buku,
            'id_pinjaman' => $request->id_pinjaman,
            'id_jurnal' => $request->id_jurnal,
            'id_karya' => $request->id_karya,
            'denda' => $request->denda,
            'status' => $request->status,
            'tanggal_kembali' => $request->tanggal_kembali,


        ]);

        return redirect('/pinjaman');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pinjaman $pinjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(pinjaman $pinjaman)
    {
        //
    }
}
