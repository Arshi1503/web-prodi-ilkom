<?php

namespace App\Filament\Resources\KurikulumSemester5Resource\Pages;

use App\Filament\Resources\KurikulumSemester5Resource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKurikulumSemester5 extends ViewRecord
{
    protected static string $resource = KurikulumSemester5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
