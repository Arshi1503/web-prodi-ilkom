<?php

namespace App\Filament\Resources\KurikulumSemester3Resource\Pages;

use App\Filament\Resources\KurikulumSemester3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumSemester3s extends ListRecords
{
    protected static string $resource = KurikulumSemester3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
