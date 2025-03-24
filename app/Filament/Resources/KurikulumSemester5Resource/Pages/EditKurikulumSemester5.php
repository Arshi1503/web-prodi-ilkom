<?php

namespace App\Filament\Resources\KurikulumSemester5Resource\Pages;

use App\Filament\Resources\KurikulumSemester5Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumSemester5 extends EditRecord
{
    protected static string $resource = KurikulumSemester5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
