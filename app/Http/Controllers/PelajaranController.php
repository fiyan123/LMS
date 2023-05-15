<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelajarans = Pelajaran::all();
        return view('pelajaran.index',compact('pelajarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_pelajaran' => 'required',
        ]);
        $pelajarans = new Pelajaran();
        $pelajarans->nama_pelajaran = $request->nama_pelajaran;
        $pelajarans->save();
        return redirect()->route('pelajaran.index')->with('success','Data Berhasil Di Tambah');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelajarans = Pelajaran::findOrFail($id);
        return view('pelajaran.show',compact('pelajarans'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelajarans = Pelajaran::findOrFail($id);
        return view('pelajaran.edit',compact('pelajarans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $pelajarans = Pelajaran::findOrFail($id);
        $pelajarans->nama_pelajaran = $request->nama_pelajaran;
        $pelajarans->save();
        return redirect()->route('pelajaran.index')->with('success','Data Berhasil Di Update');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelajarans = Pelajaran::findOrFail($id);
        $pelajarans->delete();
        return redirect()->route('pelajaran.index')->with('success','Data Berhasil Di Update');
    }
}
