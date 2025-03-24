<?php

namespace App\Filament\Resources\KampusResource\Pages;

use App\Filament\Resources\KampusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKampuses extends ListRecords
{
    protected static string $resource = KampusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
