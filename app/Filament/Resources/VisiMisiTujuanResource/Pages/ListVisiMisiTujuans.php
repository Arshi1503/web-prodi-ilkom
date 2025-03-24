<?php

namespace App\Filament\Resources\VisiMisiTujuanResource\Pages;

use App\Filament\Resources\VisiMisiTujuanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisiMisiTujuans extends ListRecords
{
    protected static string $resource = VisiMisiTujuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
