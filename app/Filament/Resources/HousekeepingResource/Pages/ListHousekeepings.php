<?php

namespace App\Filament\Resources\HousekeepingResource\Pages;

use App\Filament\Resources\HousekeepingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHousekeepings extends ListRecords
{
    protected static string $resource = HousekeepingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
