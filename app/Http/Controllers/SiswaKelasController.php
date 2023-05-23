<?php

namespace App\Http\Controllers;

use App\Models\SiswaKelas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('role_id', 3)->where('kelas_id', Auth::user()->kelas_id)->get();

        return view('siswa.kelas.index', compact('data'));

        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaKelas  $siswaKelas
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaKelas $siswaKelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiswaKelas  $siswaKelas
     * @return \Illuminate\Http\Response
     */
    public function edit(SiswaKelas $siswaKelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaKelas  $siswaKelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaKelas $siswaKelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaKelas  $siswaKelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaKelas $siswaKelas)
    {
        //
    }
}
