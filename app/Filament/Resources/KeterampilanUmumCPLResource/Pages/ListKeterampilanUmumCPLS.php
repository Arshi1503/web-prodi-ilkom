<?php

namespace App\Filament\Resources\KeterampilanUmumCPLResource\Pages;

use App\Filament\Resources\KeterampilanUmumCPLResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKeterampilanUmumCPLS extends ListRecords
{
    protected static string $resource = KeterampilanUmumCPLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
