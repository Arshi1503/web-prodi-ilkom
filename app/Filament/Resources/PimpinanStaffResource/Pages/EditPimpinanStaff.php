<?php

namespace App\Filament\Resources\PimpinanStaffResource\Pages;

use App\Filament\Resources\PimpinanStaffResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPimpinanStaff extends EditRecord
{
    protected static string $resource = PimpinanStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
