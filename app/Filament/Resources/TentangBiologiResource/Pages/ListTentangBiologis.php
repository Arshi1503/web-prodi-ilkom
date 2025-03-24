<?php

namespace App\Filament\Resources\TentangBiologiResource\Pages;

use App\Filament\Resources\TentangBiologiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTentangBiologis extends ListRecords
{
    protected static string $resource = TentangBiologiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
