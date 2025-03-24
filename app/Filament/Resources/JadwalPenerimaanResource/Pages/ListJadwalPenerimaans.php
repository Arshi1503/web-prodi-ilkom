<?php

namespace App\Filament\Resources\JadwalPenerimaanResource\Pages;

use App\Filament\Resources\JadwalPenerimaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJadwalPenerimaans extends ListRecords
{
    protected static string $resource = JadwalPenerimaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
