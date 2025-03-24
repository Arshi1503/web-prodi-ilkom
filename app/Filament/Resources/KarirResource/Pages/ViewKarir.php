<?php

namespace App\Filament\Resources\KarirResource\Pages;

use App\Filament\Resources\KarirResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKarir extends ViewRecord
{
    protected static string $resource = KarirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
