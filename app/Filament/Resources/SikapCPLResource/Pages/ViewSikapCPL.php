<?php

namespace App\Filament\Resources\SikapCPLResource\Pages;

use App\Filament\Resources\SikapCPLResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSikapCPL extends ViewRecord
{
    protected static string $resource = SikapCPLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
