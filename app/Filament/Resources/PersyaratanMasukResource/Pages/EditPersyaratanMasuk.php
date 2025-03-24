<?php

namespace App\Filament\Resources\PersyaratanMasukResource\Pages;

use App\Filament\Resources\PersyaratanMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersyaratanMasuk extends EditRecord
{
    protected static string $resource = PersyaratanMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
