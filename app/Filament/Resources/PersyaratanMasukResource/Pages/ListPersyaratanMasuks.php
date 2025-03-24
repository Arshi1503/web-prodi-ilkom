<?php

namespace App\Filament\Resources\PersyaratanMasukResource\Pages;

use App\Filament\Resources\PersyaratanMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersyaratanMasuks extends ListRecords
{
    protected static string $resource = PersyaratanMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
