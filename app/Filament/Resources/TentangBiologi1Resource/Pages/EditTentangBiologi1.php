<?php

namespace App\Filament\Resources\TentangBiologi1Resource\Pages;

use App\Filament\Resources\TentangBiologi1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTentangBiologi1 extends EditRecord
{
    protected static string $resource = TentangBiologi1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
