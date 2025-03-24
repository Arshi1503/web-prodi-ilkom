<?php

namespace App\Filament\Resources\SasaranKualitasResource\Pages;

use App\Filament\Resources\SasaranKualitasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSasaranKualitas extends EditRecord
{
    protected static string $resource = SasaranKualitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
