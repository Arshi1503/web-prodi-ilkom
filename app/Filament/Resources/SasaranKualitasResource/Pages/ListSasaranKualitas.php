<?php

namespace App\Filament\Resources\SasaranKualitasResource\Pages;

use App\Filament\Resources\SasaranKualitasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSasaranKualitas extends ListRecords
{
    protected static string $resource = SasaranKualitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
