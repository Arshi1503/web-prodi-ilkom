<?php

namespace App\Filament\Resources\KurikulumSemester1Resource\Pages;

use App\Filament\Resources\KurikulumSemester1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumSemester1 extends EditRecord
{
    protected static string $resource = KurikulumSemester1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
