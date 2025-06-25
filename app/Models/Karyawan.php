<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $fillable = [
        'nama',
        'username',
        'password',
    ];

    public function presensis()
    {
        return $this->hasMany(Presensi::class, 'id_karyawan', 'id');
    }

    public function kebersihans()
    {
        return $this->hasMany(Kebersihan::class, 'id_karyawan', 'id');
    }

    public function housekeepings()
    {
        return $this->hasMany(housekeepings::class, 'id_karyawan', 'id');
    }

    public function setPasswordAttribute($value)
    {
        if (filled($value)) {
            $this->attributes['password'] = \Illuminate\Support\Facades\Hash::make($value);
        }
    }
}
