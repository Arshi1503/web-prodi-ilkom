<?php

namespace App\Filament\Resources\PersyaratanMasukResource\Pages;

use App\Filament\Resources\PersyaratanMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPersyaratanMasuk extends ViewRecord
{
    protected static string $resource = PersyaratanMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
