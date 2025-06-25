<?php

namespace App\Filament\Resources\HousekeepingResource\Pages;

use App\Filament\Resources\HousekeepingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHousekeeping extends EditRecord
{
    protected static string $resource = HousekeepingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
