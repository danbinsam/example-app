<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    //
    protected $fillable = [
        'nama',
    ];

    public function kebersihans()
    {
        return $this->hasMany(Kebersihan::class, 'id_tempat', 'id');
    }

    public function housekeepings()
    {
        return $this->hasMany(housekeepings::class, 'id_tempat', 'id');
    }
}
