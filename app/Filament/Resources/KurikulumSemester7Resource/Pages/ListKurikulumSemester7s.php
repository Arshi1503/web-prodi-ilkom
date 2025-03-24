<?php

namespace App\Filament\Resources\KurikulumSemester7Resource\Pages;

use App\Filament\Resources\KurikulumSemester7Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumSemester7s extends ListRecords
{
    protected static string $resource = KurikulumSemester7Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
