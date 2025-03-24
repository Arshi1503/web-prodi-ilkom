<?php

namespace App\Filament\Resources\SikapCPLResource\Pages;

use App\Filament\Resources\SikapCPLResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSikapCPLS extends ListRecords
{
    protected static string $resource = SikapCPLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
