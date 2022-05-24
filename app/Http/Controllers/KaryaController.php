<?php

namespace App\Http\Controllers;

use App\Models\karya;
use Illuminate\Http\Request;

class KaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(karya $karya)
    {
        $data = karya::all();
        return view('karya.karya', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karya.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = karya::create([
            'title' => $request->title,
            'pencipta' => $request->pencipta,
            'years' => $request->years,

        ]);
        return redirect('/karya');
    }
    public function edit($id)
    {
        $data = karya::find($id);

        return view('karya.edit', compact('data'));
    }
    public function ganti(request $request, $id)
    {
        $data = karya::find($id)->update([
            'title' => $request->title,
            'pencipta' => $request->pencipta,
            'years' => $request->years,


        ]);

        return redirect('/karya');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, karya $karya)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function destroy(karya $karya)
    {
        //
    }
}
