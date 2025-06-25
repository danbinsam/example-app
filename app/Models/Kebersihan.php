<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kebersihan extends Model
{
    //
    protected $fillable = [
        'id_karyawan',
        'id_tempat',
        'tanggal',
        'catatan',
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
