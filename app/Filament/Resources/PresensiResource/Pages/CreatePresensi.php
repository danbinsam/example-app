<?php

namespace App\Filament\Resources\PresensiResource\Pages;

use App\Filament\Resources\PresensiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

use App\Models\Jadwal;

class CreatePresensi extends CreateRecord
{
    protected static string $resource = PresensiResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
{
    $jadwal = Jadwal::find($data['id_jadwal']);
    if ($jadwal && isset($data['datang'])) {
        // Bandingkan waktu datang presensi dengan waktu datang jadwal
        $data['status'] = ($data['datang'] <= $jadwal->datang) ? 'hadir' : 'terlambat';
    }
    return $data;
}
}
