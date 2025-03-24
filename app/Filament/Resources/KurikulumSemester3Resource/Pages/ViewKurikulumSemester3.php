<?php

namespace App\Filament\Resources\KurikulumSemester3Resource\Pages;

use App\Filament\Resources\KurikulumSemester3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKurikulumSemester3 extends ViewRecord
{
    protected static string $resource = KurikulumSemester3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
