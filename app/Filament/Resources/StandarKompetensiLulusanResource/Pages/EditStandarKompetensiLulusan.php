<?php

namespace App\Filament\Resources\StandarKompetensiLulusanResource\Pages;

use App\Filament\Resources\StandarKompetensiLulusanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStandarKompetensiLulusan extends EditRecord
{
    protected static string $resource = StandarKompetensiLulusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
