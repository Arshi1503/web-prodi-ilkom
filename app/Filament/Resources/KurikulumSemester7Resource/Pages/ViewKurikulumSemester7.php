<?php

namespace App\Filament\Resources\KurikulumSemester7Resource\Pages;

use App\Filament\Resources\KurikulumSemester7Resource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKurikulumSemester7 extends ViewRecord
{
    protected static string $resource = KurikulumSemester7Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
