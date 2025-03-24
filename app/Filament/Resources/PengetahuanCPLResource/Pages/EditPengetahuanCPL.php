<?php

namespace App\Filament\Resources\PengetahuanCPLResource\Pages;

use App\Filament\Resources\PengetahuanCPLResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengetahuanCPL extends EditRecord
{
    protected static string $resource = PengetahuanCPLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
