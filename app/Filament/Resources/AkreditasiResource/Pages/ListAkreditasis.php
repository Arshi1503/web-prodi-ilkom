<?php

namespace App\Filament\Resources\AkreditasiResource\Pages;

use App\Filament\Resources\AkreditasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAkreditasis extends ListRecords
{
    protected static string $resource = AkreditasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
