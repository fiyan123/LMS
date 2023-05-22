<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Pelajaran;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data_siswas = User::with('kelas.jurusan')->where('role_id',3)->latest()->get();
        return view('data_siswa.index',compact('data_siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelajarans = Pelajaran::all();
        $kelas = Kelas::all();
        return view('data_siswa.create', compact('pelajarans','kelas'));
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
            'pelajaran_id' => 'required',
            'kelas_id' => 'required',
            'nomor_telpon' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|unique:users',
        ]);
        $data = new User();
        $data->name = $request->name;
        $data->pelajaran_id = $request->pelajaran_id;
        $data->kelas_id = $request->kelas_id;
        $data->nomor_telpon = $request->nomor_telpon;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->role_id = 3;
        $data->save();
        return redirect()->route('data_siswa.index')->with('success','Data berhasil di buat!');
    }

    public function show($id)
    {
        $pelajarans = Pelajaran::all();
        $kelas = Kelas::all();
        $data = User::findOrFail($id);
        return view('data_siswa.show', compact('data','pelajarans','kelas'));
    }

    public function edit($id)
    {
        $pelajarans = Pelajaran::all();
        $kelas = Kelas::all();
        $data = User::findOrFail($id);
        return view('data_siswa.edit', compact('data','pelajarans','kelas'));
    }

    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'pelajaran_id' => 'required',
            'kelas_id' => 'required',
            
            
        ]);
        if($data->nomor_telpon != $request->nomor_telpon ){
            $request->validate([
                'nomor_telpon' => 'required|unique:users',
            ]);
        }
        if($data->email != $request->email ){
            $request->validate([
                'email' => 'required|unique:users',
            ]);
        }
        if($data->password != $request->password ){
            $request->validate([
                'password' => 'required|unique:users|string|min:5',
            ]);
        }
        $data->name = $request->name;
        $data->pelajaran_id = $request->pelajaran_id;
        $data->kelas_id = $request->kelas_id;
        $data->nomor_telpon = $request->nomor_telpon;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->update();
        return redirect()->route('data_siswa.index')->with('success','Data berhasil di edit!');
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus']);
    }
}
