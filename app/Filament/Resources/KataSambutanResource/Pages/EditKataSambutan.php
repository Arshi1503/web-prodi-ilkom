<?php

namespace App\Filament\Resources\KataSambutanResource\Pages;

use App\Filament\Resources\KataSambutanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKataSambutan extends EditRecord
{
    protected static string $resource = KataSambutanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
