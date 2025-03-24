<?php

namespace App\Filament\Resources\KompetensiResource\Pages;

use App\Filament\Resources\KompetensiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKompetensi extends ViewRecord
{
    protected static string $resource = KompetensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
