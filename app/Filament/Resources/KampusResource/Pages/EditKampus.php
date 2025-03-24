<?php

namespace App\Filament\Resources\KampusResource\Pages;

use App\Filament\Resources\KampusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKampus extends EditRecord
{
    protected static string $resource = KampusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
