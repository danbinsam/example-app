<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Housekeeping extends Model
{
    //
    protected $fillable = [
        'id_karyawan',
        'id_tempat',
        'tanggal',
        'sop',
        'kamar_mandi',
        'ruang_kamar',
    ];

    protected $casts = [
        'kamar_mandi' => 'array',
        'ruang_kamar' => 'array',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }

    public function tempat()
    {
        return $this->belongsTo(Tempat::class, 'id_tempat');
    }
}
