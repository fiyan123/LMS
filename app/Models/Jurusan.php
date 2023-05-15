<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jurusan extends Model
{
    use HasFactory;
    
    public $fillable = ['id','nama'];
    public $timestamps = true;


    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}
