<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tempat;

class TempatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Tempat::create(['nama' => 'Kamar 01']);
        Tempat::create(['nama' => 'Kamar 02']);
        Tempat::create(['nama' => 'Kamar 03']);
        Tempat::create(['nama' => 'Kamar 04']);
        Tempat::create(['nama' => 'Kamar 05']);
    }
}
