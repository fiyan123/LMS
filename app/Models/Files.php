<?php

namespace App\Models;

use App\Models\UploadTugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Files extends Model
{
    use HasFactory;

    // protected $table   = 'files';
    public $guarded = ['id'];
    public $timestamps = true;

    public function UploadTugas()
    {
        return $this->hasMany(UploadTugas::class, 'upload_tugas_id');
    }


}
