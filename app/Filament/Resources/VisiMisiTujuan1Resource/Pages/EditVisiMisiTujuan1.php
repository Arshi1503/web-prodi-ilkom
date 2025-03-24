<?php

namespace App\Filament\Resources\VisiMisiTujuan1Resource\Pages;

use App\Filament\Resources\VisiMisiTujuan1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisiMisiTujuan1 extends EditRecord
{
    protected static string $resource = VisiMisiTujuan1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
