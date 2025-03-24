<?php

namespace App\Filament\Resources\PengetahuanCPLResource\Pages;

use App\Filament\Resources\PengetahuanCPLResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengetahuanCPLS extends ListRecords
{
    protected static string $resource = PengetahuanCPLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
