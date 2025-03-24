<?php

namespace App\Filament\Resources\Publikasi1Resource\Pages;

use App\Filament\Resources\Publikasi1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPublikasi1s extends ListRecords
{
    protected static string $resource = Publikasi1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
