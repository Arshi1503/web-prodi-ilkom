<?php

namespace App\Filament\Resources\PengetahuanCPLResource\Pages;

use App\Filament\Resources\PengetahuanCPLResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPengetahuanCPL extends ViewRecord
{
    protected static string $resource = PengetahuanCPLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
