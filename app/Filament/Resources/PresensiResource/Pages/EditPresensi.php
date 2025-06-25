<?php

namespace App\Filament\Resources\PresensiResource\Pages;

use App\Filament\Resources\PresensiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

use App\Models\Jadwal;

class EditPresensi extends EditRecord
{
    protected static string $resource = PresensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
{
    $jadwal = Jadwal::find($data['id_jadwal']);
    if ($jadwal && isset($data['datang'])) {
        $data['status'] = ($data['datang'] <= $jadwal->datang) ? 'hadir' : 'terlambat';
    }
    return $data;
}
}
