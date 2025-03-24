<?php

namespace App\Filament\Resources\KurikulumSemester2Resource\Pages;

use App\Filament\Resources\KurikulumSemester2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumSemester2s extends ListRecords
{
    protected static string $resource = KurikulumSemester2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
