<?php

namespace App\Filament\Resources\KurikulumSemester3Resource\Pages;

use App\Filament\Resources\KurikulumSemester3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumSemester3 extends EditRecord
{
    protected static string $resource = KurikulumSemester3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
