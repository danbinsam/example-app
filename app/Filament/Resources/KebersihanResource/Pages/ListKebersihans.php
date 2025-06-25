<?php

namespace App\Filament\Resources\KebersihanResource\Pages;

use App\Filament\Resources\KebersihanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKebersihans extends ListRecords
{
    protected static string $resource = KebersihanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
