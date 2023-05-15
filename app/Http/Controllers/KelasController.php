<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelass = Kelas::with('jurusan')->latest()->get();
        return view('kelas.index',compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusans = Jurusan::all();
        return view('kelas.create',compact('jurusans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'angkatan' => 'required',
            'jurusan_id' => 'required',
            'nama_kelas' => 'required',
        ]);
        $kelass = new Kelas();
        $kelass->angkatan = $request->angkatan;
        $kelass->jurusan_id = $request->jurusan_id;
        $kelass->nama_Kelas = $request->nama_kelas;
        $kelass->save();
        return redirect()->route('kelas.index')->with('success','Data Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelass = Kelas::findOrFail($id);
        return view('kelas.show',compact('kelass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelass = Kelas::findOrFail($id);
        $jurusans = Jurusan::all();
        return view('kelas.edit',compact('kelass','jurusans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'angkatan' => 'required',
            'jurusan_id' => 'required',
            'nama_kelas' => 'required',
        ]);
        $kelass = Kelas::findOrFail($id);
        $kelass->angkatan = $request->angkatan;
        $kelass->jurusan_id = $request->jurusan_id;
        $kelass->nama_kelas = $request->nama_kelas;
        $kelass->save();
        return redirect()->route('kelas.index')->with('success','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelass = Kelas::findOrFail($id);
        $kelass->delete();
        return redirect()->route('kelas.index')->with('success','Data Berhasil Di Hapus');
    }
}
