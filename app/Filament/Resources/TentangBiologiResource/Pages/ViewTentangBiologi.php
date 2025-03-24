<?php

namespace App\Filament\Resources\TentangBiologiResource\Pages;

use App\Filament\Resources\TentangBiologiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTentangBiologi extends ViewRecord
{
    protected static string $resource = TentangBiologiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
