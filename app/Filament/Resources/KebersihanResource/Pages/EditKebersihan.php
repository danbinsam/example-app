<?php

namespace App\Filament\Resources\KebersihanResource\Pages;

use App\Filament\Resources\KebersihanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKebersihan extends EditRecord
{
    protected static string $resource = KebersihanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
