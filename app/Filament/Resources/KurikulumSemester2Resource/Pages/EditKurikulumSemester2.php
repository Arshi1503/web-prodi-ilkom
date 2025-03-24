<?php

namespace App\Filament\Resources\KurikulumSemester2Resource\Pages;

use App\Filament\Resources\KurikulumSemester2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumSemester2 extends EditRecord
{
    protected static string $resource = KurikulumSemester2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
