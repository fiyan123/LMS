<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusans = Jurusan::latest()->get();
        return view('jurusan.index',compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // $validate  = $request->validate([
    //     'nama' => 'required'
    // ]);
    $request->validate([
        'nama' => 'item title',
        'price' => 10
    ]);
        $jurusans = new Jurusan();
        $jurusans->nama = $request->nama;
        $jurusans->save();
        return redirect()->route('jurusan.index')->with('success','Data berhasil di buat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jurusans = Jurusan::findOrFail($id);
        return view('jurusan.show',compact('jurusans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusans = Jurusan::findOrFail($id);
        return view('jurusan.edit',compact('jurusans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate  = $request->validate([
            'nama' => 'required'
        ]);
        $jurusans = Jurusan::findOrFail($id);
        $jurusans->nama = $request->nama;
        $jurusans->save();
        return redirect()->route('jurusan.index')->with('success','Data Berhasil DI Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusans = Jurusan::findOrFail($id);
        $jurusans->delete();
        return redirect()->route('jurusan.index')->with('success','Data Berhasil di Hapus');
    }
}
