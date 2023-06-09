<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;
    public $fillable = ['id','nama_pelajaran'];
    public $timestamps = true;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
