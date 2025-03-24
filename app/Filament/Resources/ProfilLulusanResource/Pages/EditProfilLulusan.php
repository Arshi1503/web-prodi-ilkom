<?php

namespace App\Filament\Resources\ProfilLulusanResource\Pages;

use App\Filament\Resources\ProfilLulusanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfilLulusan extends EditRecord
{
    protected static string $resource = ProfilLulusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
