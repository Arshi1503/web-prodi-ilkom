<?php

namespace App\Filament\Resources\KurikulumSemester8Resource\Pages;

use App\Filament\Resources\KurikulumSemester8Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumSemester8 extends EditRecord
{
    protected static string $resource = KurikulumSemester8Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
