<?php

namespace App\Filament\Resources\KeterampilanUmumCPLResource\Pages;

use App\Filament\Resources\KeterampilanUmumCPLResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKeterampilanUmumCPL extends EditRecord
{
    protected static string $resource = KeterampilanUmumCPLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
