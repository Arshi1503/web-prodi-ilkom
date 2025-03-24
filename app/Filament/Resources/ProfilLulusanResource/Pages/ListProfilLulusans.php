<?php

namespace App\Filament\Resources\ProfilLulusanResource\Pages;

use App\Filament\Resources\ProfilLulusanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfilLulusans extends ListRecords
{
    protected static string $resource = ProfilLulusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
