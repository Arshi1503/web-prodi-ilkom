<?php

namespace App\Filament\Resources\KurikulumSemester6Resource\Pages;

use App\Filament\Resources\KurikulumSemester6Resource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKurikulumSemester6 extends ViewRecord
{
    protected static string $resource = KurikulumSemester6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
