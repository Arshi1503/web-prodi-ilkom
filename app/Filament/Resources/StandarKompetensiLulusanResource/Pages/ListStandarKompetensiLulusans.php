<?php

namespace App\Filament\Resources\StandarKompetensiLulusanResource\Pages;

use App\Filament\Resources\StandarKompetensiLulusanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStandarKompetensiLulusans extends ListRecords
{
    protected static string $resource = StandarKompetensiLulusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
