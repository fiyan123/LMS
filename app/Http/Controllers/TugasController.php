<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\UploadTugas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function index()
    {
       $tugass = UploadTugas::join('jurusans','upload_tugas.jurusan_id', '=', 'jurusans.id')
                ->join('angkatans', 'upload_tugas.angkatan_id', '=', 'angkatans.id')
                ->select('upload_tugas.*', 'jurusans.nama as nama_jurusan', 'angkatans.angkatan as tahun_angkatan')
                ->orderBy('id','DESC')
                ->get();

        return view('siswa.tugas.index', compact('tugass'));

    }
    // public function indo()
    // {
    //     $detail_tugas = Tugas::all();
    //     return view('siswa.tugas.detail_tugas',compact('detail_tugas'));
    // }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
         $data = UploadTugas::join('jurusans', 'upload_tugas.jurusan_id', '=', 'jurusans.id')
            ->join('angkatans', 'upload_tugas.angkatan_id', '=', 'angkatans.id')
            ->select('upload_tugas.*', 'jurusans.nama as nama_jurusan', 'angkatans.angkatan as tahun_angkatan')
            ->findOrFail($id);

        return view('siswa.tugas.detail_tugas', compact('data'));
    }

    public function edit(Tugas $tugas)
    {
        //
    }

    public function update(Request $request, Tugas $tugas)
    {
        //
    }

    public function destroy(Tugas $tugas)
    {
        //
    }
}
