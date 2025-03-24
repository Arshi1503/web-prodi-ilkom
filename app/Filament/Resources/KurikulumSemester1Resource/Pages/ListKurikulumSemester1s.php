<?php

namespace App\Filament\Resources\KurikulumSemester1Resource\Pages;

use App\Filament\Resources\KurikulumSemester1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumSemester1s extends ListRecords
{
    protected static string $resource = KurikulumSemester1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
