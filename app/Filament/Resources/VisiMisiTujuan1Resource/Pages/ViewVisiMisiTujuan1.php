<?php

namespace App\Filament\Resources\VisiMisiTujuan1Resource\Pages;

use App\Filament\Resources\VisiMisiTujuan1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewVisiMisiTujuan1 extends ViewRecord
{
    protected static string $resource = VisiMisiTujuan1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
