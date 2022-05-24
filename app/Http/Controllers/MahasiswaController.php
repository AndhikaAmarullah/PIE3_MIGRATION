<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(mahasiswa $mahasiswa)
    {
        $data = mahasiswa::all();
        return view('mahasiswa.mahasiswa', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = mahasiswa::create([
            'nama_lengkap' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'no_telpon' => $request->no_telpon,
            'gender' => $request->gender,


        ]);
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    //public function edit(mahasiswa $mahasiswa)
   // {
        
        //$data = mahasiswa::find($mahasiswa);
       // return view('edit', compact('data'));
    
    //}
    
 
    public function edit($id)
    {
        $data = mahasiswa::find($id);

        return view('mahasiswa.edit', compact('data'));
    }

    public function ganti(request $request, $id)
    {
        $data = mahasiswa::find($id)->update([
            'nama_lengkap' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'no_telpon' => $request->no_telpon,
            'gender' => $request->gender,

        ]);

        return redirect('/mahasiswa');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    
    public function delete(Request $request, mahasiswa $id)
    {
        //membuat pemilihan apakah mau menghapus atau tidak
        $id->delete();
        return redirect('/mahasiswa')->with('success', 'Data Berhasil Dihapus');
    }

    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }
}
