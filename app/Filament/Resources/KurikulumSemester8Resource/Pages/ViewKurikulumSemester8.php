<?php

namespace App\Filament\Resources\KurikulumSemester8Resource\Pages;

use App\Filament\Resources\KurikulumSemester8Resource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKurikulumSemester8 extends ViewRecord
{
    protected static string $resource = KurikulumSemester8Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
