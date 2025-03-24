<?php

namespace App\Filament\Resources\KurikulumSemester1Resource\Pages;

use App\Filament\Resources\KurikulumSemester1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKurikulumSemester1 extends ViewRecord
{
    protected static string $resource = KurikulumSemester1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
