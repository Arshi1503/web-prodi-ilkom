<?php

namespace App\Filament\Resources\KeterampilanKhususCPLResource\Pages;

use App\Filament\Resources\KeterampilanKhususCPLResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKeterampilanKhususCPL extends EditRecord
{
    protected static string $resource = KeterampilanKhususCPLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
