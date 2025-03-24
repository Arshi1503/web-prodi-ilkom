<?php

namespace App\Filament\Resources\KurikulumSemester6Resource\Pages;

use App\Filament\Resources\KurikulumSemester6Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumSemester6 extends EditRecord
{
    protected static string $resource = KurikulumSemester6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
