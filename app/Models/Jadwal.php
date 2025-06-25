<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //
    protected $fillable = [
        'nama',
        'datang',
        'pulang',
    ];

    public function presensi()
    {
        return $this->hasMany(Presensi::class, 'id_jadwal', 'id');
    }
}
