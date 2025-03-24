<?php

namespace App\Filament\Resources\KurikulumSemester2Resource\Pages;

use App\Filament\Resources\KurikulumSemester2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKurikulumSemester2 extends ViewRecord
{
    protected static string $resource = KurikulumSemester2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
