<?php

namespace App\Filament\Resources\JadwalPenerimaanResource\Pages;

use App\Filament\Resources\JadwalPenerimaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJadwalPenerimaan extends ViewRecord
{
    protected static string $resource = JadwalPenerimaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
