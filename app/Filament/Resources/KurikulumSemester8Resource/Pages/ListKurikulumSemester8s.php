<?php

namespace App\Filament\Resources\KurikulumSemester8Resource\Pages;

use App\Filament\Resources\KurikulumSemester8Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumSemester8s extends ListRecords
{
    protected static string $resource = KurikulumSemester8Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
