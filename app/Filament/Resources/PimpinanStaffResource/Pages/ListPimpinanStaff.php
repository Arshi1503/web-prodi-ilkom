<?php

namespace App\Filament\Resources\PimpinanStaffResource\Pages;

use App\Filament\Resources\PimpinanStaffResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPimpinanStaff extends ListRecords
{
    protected static string $resource = PimpinanStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
