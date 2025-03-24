<?php

namespace App\Filament\Resources\KeterampilanUmumCPLResource\Pages;

use App\Filament\Resources\KeterampilanUmumCPLResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKeterampilanUmumCPL extends ViewRecord
{
    protected static string $resource = KeterampilanUmumCPLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
