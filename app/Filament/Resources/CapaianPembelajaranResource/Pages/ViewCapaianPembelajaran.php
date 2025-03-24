<?php

namespace App\Filament\Resources\CapaianPembelajaranResource\Pages;

use App\Filament\Resources\CapaianPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCapaianPembelajaran extends ViewRecord
{
    protected static string $resource = CapaianPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
