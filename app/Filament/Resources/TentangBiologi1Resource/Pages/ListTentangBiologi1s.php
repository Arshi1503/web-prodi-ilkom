<?php

namespace App\Filament\Resources\TentangBiologi1Resource\Pages;

use App\Filament\Resources\TentangBiologi1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTentangBiologi1s extends ListRecords
{
    protected static string $resource = TentangBiologi1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
