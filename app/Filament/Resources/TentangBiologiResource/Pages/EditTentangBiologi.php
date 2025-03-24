<?php

namespace App\Filament\Resources\TentangBiologiResource\Pages;

use App\Filament\Resources\TentangBiologiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTentangBiologi extends EditRecord
{
    protected static string $resource = TentangBiologiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
