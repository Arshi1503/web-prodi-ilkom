<?php

namespace App\Filament\Resources\VisiMisiTujuanResource\Pages;

use App\Filament\Resources\VisiMisiTujuanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewVisiMisiTujuan extends ViewRecord
{
    protected static string $resource = VisiMisiTujuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
