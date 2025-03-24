<?php

namespace App\Filament\Resources\KompetensiResource\Pages;

use App\Filament\Resources\KompetensiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKompetensis extends ListRecords
{
    protected static string $resource = KompetensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
