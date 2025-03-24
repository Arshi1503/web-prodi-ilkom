<?php

namespace App\Filament\Resources\KurikulumSemester5Resource\Pages;

use App\Filament\Resources\KurikulumSemester5Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumSemester5s extends ListRecords
{
    protected static string $resource = KurikulumSemester5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
