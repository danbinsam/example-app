<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    //
    protected $fillable = [
        'id_karyawan',
        'id_jadwal',
        'tanggal',
        'datang',
        'pulang',
        'foto_datang',
        'foto_pulang',
        'foto_bukti',
        'status'
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
}
