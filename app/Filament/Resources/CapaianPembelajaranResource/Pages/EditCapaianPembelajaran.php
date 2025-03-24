<?php

namespace App\Filament\Resources\CapaianPembelajaranResource\Pages;

use App\Filament\Resources\CapaianPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCapaianPembelajaran extends EditRecord
{
    protected static string $resource = CapaianPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
