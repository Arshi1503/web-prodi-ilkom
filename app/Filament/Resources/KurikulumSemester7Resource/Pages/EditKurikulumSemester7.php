<?php

namespace App\Filament\Resources\KurikulumSemester7Resource\Pages;

use App\Filament\Resources\KurikulumSemester7Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumSemester7 extends EditRecord
{
    protected static string $resource = KurikulumSemester7Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
