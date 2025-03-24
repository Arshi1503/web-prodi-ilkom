<?php

namespace App\Filament\Resources\JadwalPenerimaanResource\Pages;

use App\Filament\Resources\JadwalPenerimaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalPenerimaan extends EditRecord
{
    protected static string $resource = JadwalPenerimaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
