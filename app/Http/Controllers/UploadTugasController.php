<?php

namespace App\Http\Controllers;

use App\Models\Files;
use App\Models\UploadTugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UploadTugasController extends Controller
{
   
    public function index()
    {
        $uploadTugas = UploadTugas::all();

        return view('upload_tugas_guru.index', compact('uploadTugas'));
    }

    public function create()
    {
        return view('upload_tugas_guru.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal_upload'  => 'required',
            'tanggal_selesai' => 'required',
            'keterangan'      => 'required',
            // 'file_id'         => 'required',
        ]);
        
        $uploadTugas = new UploadTugas();

        $uploadTugas->user_id         = Auth::user()->id;
        $uploadTugas->file_id;
        $uploadTugas->tanggal_upload  = $request->tanggal_upload;
        $uploadTugas->tanggal_selesai = $request->tanggal_selesai;
        $uploadTugas->keterangan      = $request->keterangan;
        $uploadTugas->status          = $request->status;
        $uploadTugas->save();
                
        if ($request->hasFile('dokumen_file')) {
            foreach ($request->file('dokumen_file') as $dokumen_file) {
                $name = $dokumen_file->getClientOriginalName();
                $dokumen_file->move(public_path().'/file/'.$name);
                $fileNames = $name;
            }
        }
        // dd($uploadTugas);
        
        $files = new Files();

        $files->user_id = Auth::user()->id;
        $files->dokumen_file = json_encode($fileNames);
        $files->save();
        
        return redirect()->route('upload_tugas.index')->with('success', 'Data berhasil ditambah!');

    }

    public function show($id)
    {        
        // $data = Files::join('upload_tugas', 'files.upload_tugas_id', '=', 'upload_tugas.id')
        //     ->select('files.*', 'upload_tugas.id as file_upload')
        //     ->where('files.id', $id)
        //     ->first();
    
        // if ($data) {
        //     $uploadTugas = UploadTugas::where('id', $data->file_upload)->get();
        // }
        // dd($files);
        
        return view('upload_tugas_guru.show', compact('data'));
    }

    public function edit($id)
    {
        $data = UploadTugas::findOrFail($id);

        return view('upload_tugas_guru.edit', compact('data'));
    }

    public function update(Request $request, UploadTugas $uploadTugas)
    {
        //
    }

    public function destroy($id)
    {
        $data = UploadTugas::findOrFail($id);
        $data->delete();
        return redirect()->route('upload_tugas.index')->with('success', 'Data berhasil dihapus!');
    }
}
