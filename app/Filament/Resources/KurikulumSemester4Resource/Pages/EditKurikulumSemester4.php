<?php

namespace App\Filament\Resources\KurikulumSemester4Resource\Pages;

use App\Filament\Resources\KurikulumSemester4Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumSemester4 extends EditRecord
{
    protected static string $resource = KurikulumSemester4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
