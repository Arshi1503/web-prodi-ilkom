<?php

namespace App\Filament\Resources\VisiMisiTujuan1Resource\Pages;

use App\Filament\Resources\VisiMisiTujuan1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisiMisiTujuan1s extends ListRecords
{
    protected static string $resource = VisiMisiTujuan1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
