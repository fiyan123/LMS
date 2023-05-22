<?php

namespace App\Models;

use App\Models\Files;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class UploadTugas extends Model
{
    use HasFactory;

    protected $table   = 'upload_tugas';
    public $guarded = ['id'];
    public $timestamps = true;

    public function files()
    {
        return $this->belongsTo(Files::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    
    public function dokumen_file()
{
    if ($this->dokumen_file->storeAs('path/to/save', $this->dokumen_file->getClientOriginalName())) {
        return Storage::path('path/to/save/' . $this->dokumen_file->getClientOriginalName());
    } else {
        return null;
    }
}

    public function deletedokumen_file()
    {
        if ($this->$dokumen_file->storeAs('path/to/save', $this->dokumen_file)) {
            return unlink(storeAs('path/to/save', $this->dokumen_file));
        }
    }
}
