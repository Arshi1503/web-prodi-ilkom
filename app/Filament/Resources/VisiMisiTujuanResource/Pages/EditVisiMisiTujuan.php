<?php

namespace App\Filament\Resources\VisiMisiTujuanResource\Pages;

use App\Filament\Resources\VisiMisiTujuanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisiMisiTujuan extends EditRecord
{
    protected static string $resource = VisiMisiTujuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
