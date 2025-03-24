<?php

namespace App\Filament\Resources\StandarKompetensiLulusanResource\Pages;

use App\Filament\Resources\StandarKompetensiLulusanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStandarKompetensiLulusan extends ViewRecord
{
    protected static string $resource = StandarKompetensiLulusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
