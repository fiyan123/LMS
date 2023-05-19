<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;

    protected $table   = 'files';
    public $guarded = [''];
    public $timestamps = true;

    public function UploadTugas()
    {
        return $this->hasMany(UploadTugas::class, 'upload_tugas_id');
    }


}
