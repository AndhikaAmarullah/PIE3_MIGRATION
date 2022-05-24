<?php

namespace App\Http\Controllers;

use App\Models\jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(jurnal $jurnal)
    {
        $data = jurnal::all();
        return view('jurnal.jurnal', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurnal.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $admin = jurnal::create([
            'title' => $request->title,
            'pencipta' => $request->pencipta,
            'years' => $request->years,

        ]);
        return redirect('/jurnal');
    }
    public function edit($id)
    {
        $data = jurnal::find($id);

        return view('jurnal.edit', compact('data'));
    }
    public function ganti(request $request, $id)
    {
        $data = jurnal::find($id)->update([
            'title' => $request->title,
            'pencipta' => $request->pencipta,
            'years' => $request->years,


        ]);

        return redirect('/jurnal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function show(jurnal $jurnal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jurnal $jurnal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function destroy(jurnal $jurnal)
    {
        //
    }
}
