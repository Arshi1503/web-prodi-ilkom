<?php

namespace App\Filament\Resources\KampusResource\Pages;

use App\Filament\Resources\KampusResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKampus extends ViewRecord
{
    protected static string $resource = KampusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
