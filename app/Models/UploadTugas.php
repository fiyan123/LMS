<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadTugas extends Model
{
    use HasFactory;

    protected $table   = 'upload_tugas';
    public $guarded = [''];
    public $timestamps = true;

    public function files()
    {
        return $this->belongsTo(Files::class);
    }
}
