<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Jurusan;
use App\Models\Angkatan;
use App\Models\UploadTugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


class UploadTugasController extends Controller
{
   
    public function index()
    {
        $uploadTugas = UploadTugas::join('jurusans','upload_tugas.jurusan_id', '=', 'jurusans.id')
                    ->join('angkatans', 'upload_tugas.angkatan_id', '=', 'angkatans.id')
                    ->select('upload_tugas.*', 'jurusans.nama as nama_jurusan', 'angkatans.angkatan as tahun_angkatan')
                    ->get();

        return view('upload_tugas_guru.index', compact('uploadTugas'));
    }

    public function create()
    {
        $kelass = Kelas::all();
        $jurusans = Jurusan::all();
        $angkatans = Angkatan::all();

        return view('upload_tugas_guru.create',compact('jurusans','kelass','angkatans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal_upload'  => 'required',
            'tanggal_selesai' => 'required',
            'keterangan'      => 'required',
            'jurusan_id'      => 'required',
            'kelas_id'        => 'required',
            'angkatan_id'     => 'required',
            'dokumen_file'     => 'required',
        ]);
        
        // if ($request->hasFile('dokumen_file')) {
        //     foreach ($request->file('dokumen_file') as $dokumen_files) {
        //         $name = $dokumen_files->getClientOriginalName();
        //         $dokumen_files->move(public_path().$name);
        //         $data = $name;
        //     }
        // }
        // $files = $request->file('files');

        // if ($request->hasFile('files')) {
        //     foreach ($files as $file) {
        //         $fileName = $file->getClientOriginalName();
        //         $file->storeAs('path/to/save', $fileName); // Menggunakan file system Laravel untuk menyimpan file
        //     }
        
        // $files = new Files();
        // $files->user_id = Auth::user()->id;
        
        // $files->save();
        
        
        $uploadTugas = new UploadTugas();

        if ($request->hasFile('dokumen_file')) {
            $files = $request->file('dokumen_file');
            foreach ($files as $file) {
                $fileName = $file->getClientOriginalName();
                $file->storeAs('path/to/save', $fileName);// Menggunakan file system Laravel untuk menyimpan file
                $data[] = $fileName;
            }
        }

        $uploadTugas->user_id         = Auth::user()->id;
        $uploadTugas->dokumen_file    = json_encode($data);
        $uploadTugas->angkatan_id     = $request->angkatan_id;
        $uploadTugas->kelas_id        = $request->kelas_id;
        $uploadTugas->jurusan_id      = $request->jurusan_id;
        $uploadTugas->tanggal_upload = $request->tanggal_upload;
        $uploadTugas->tanggal_selesai = $request->tanggal_selesai;
        $uploadTugas->keterangan      = $request->keterangan;
        $uploadTugas->status          = "Selesai";
        $uploadTugas->save();
                
        return redirect()->route('upload_tugas.index')->with('success', 'Data berhasil ditambah!');

    }
    
//     public function dokumen_file()
// {
//     if ($this->dokumen_file->storeAs('path/to/save', $this->dokumen_file->getClientOriginalName())) {
//         return Storage::path('path/to/save/' . $this->dokumen_file->getClientOriginalName());
//     } else {
//         return null;
//     }
// }

//     public function deletedokumen_file()
//     {
//         if ($this->$dokumen_file->storeAs('path/to/save', $this->dokumen_file)) {
//             return unlink(storeAs('path/to/save', $this->dokumen_file));
//         }
//     }

    public function show($id)
    {        
        $data = UploadTugas::join('jurusans', 'upload_tugas.jurusan_id', '=', 'jurusans.id')
            ->join('angkatans', 'upload_tugas.angkatan_id', '=', 'angkatans.id')
            ->select('upload_tugas.*', 'jurusans.nama as nama_jurusan', 'angkatans.angkatan as tahun_angkatan')
            ->findOrFail($id);

        return view('upload_tugas_guru.show', compact('data'));
    }
        
    public function downloadFILE($id){
        $filelink = UploadTugas::find($id);
        return response()->download(storage_path('app/' . $filelink->dokumen_file));
    }

    public function edit($id)
    {
        $data      = UploadTugas::findOrFail($id);
        $kelass    = Kelas::all();
        $jurusans  = Jurusan::all();
        $angkatans = Angkatan::all();

        return view('upload_tugas_guru.edit', compact('data','kelass','jurusans','angkatans'));
    }

   public function update(Request $request, $id)
    {
        // Validasi input data
        $validated = $request->validate([
            'tanggal_upload'  => 'required',
            'tanggal_selesai' => 'required',
            'keterangan'      => 'required',
            'jurusan_id'      => 'required',
            'kelas_id'        => 'required',
            'angkatan_id'     => 'required',
        ]);
        
        // Cari data upload tugas yang akan diubah
        $uploadTugas = UploadTugas::findOrFail($id);

        // Cek apakah ada perubahan pada input file
        if ($request->hasFile('dokumen_file')) {
            $files = $request->file('dokumen_file');
            $data = [];

            // Lakukan proses penggantian file jika ada perubahan
            foreach ($files as $file) {
                $fileName = $file->getClientOriginalName();
                $file->storeAs('path/to/save', $fileName); // Menggunakan file system Laravel untuk menyimpan file
                $data[] = $fileName;
            }

            // Update dokumen_file jika ada perubahan pada file
            $uploadTugas->dokumen_file = json_encode($data);
        }

        // Update data lainnya
        $uploadTugas->user_id         = Auth::user()->id;   
        $uploadTugas->angkatan_id     = $request->angkatan_id;
        $uploadTugas->kelas_id        = $request->kelas_id;
        $uploadTugas->jurusan_id      = $request->jurusan_id;
        $uploadTugas->tanggal_upload  = $request->tanggal_upload;
        $uploadTugas->tanggal_selesai = $request->tanggal_selesai;
        $uploadTugas->keterangan      = $request->keterangan;
        
        // Simpan perubahan pada data
        $uploadTugas->save();

        // Redirect atau kembali ke halaman yang sesuai
        return redirect()->route('upload_tugas.index')->with('success', 'Data berhasil diperbarui.');
    }


   public function destroy($id)
    {
        $uploadTugas = UploadTugas::find($id);
        
        if (!$uploadTugas) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        
        $uploadTugas->delete();
        
        return redirect()->route('upload_tugas.index')->with('success', 'Data berhasil dihapus.');
    }
}
