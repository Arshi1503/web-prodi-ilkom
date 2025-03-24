<?php

namespace App\Filament\Resources\KarirResource\Pages;

use App\Filament\Resources\KarirResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKarir extends EditRecord
{
    protected static string $resource = KarirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
