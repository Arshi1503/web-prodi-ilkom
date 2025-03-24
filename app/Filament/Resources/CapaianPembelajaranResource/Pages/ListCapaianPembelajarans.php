<?php

namespace App\Filament\Resources\CapaianPembelajaranResource\Pages;

use App\Filament\Resources\CapaianPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCapaianPembelajarans extends ListRecords
{
    protected static string $resource = CapaianPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
