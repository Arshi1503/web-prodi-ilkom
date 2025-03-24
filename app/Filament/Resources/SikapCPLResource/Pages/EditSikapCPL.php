<?php

namespace App\Filament\Resources\SikapCPLResource\Pages;

use App\Filament\Resources\SikapCPLResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSikapCPL extends EditRecord
{
    protected static string $resource = SikapCPLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
