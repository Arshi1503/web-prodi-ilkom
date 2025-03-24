<?php

namespace App\Filament\Resources\KurikulumSemester4Resource\Pages;

use App\Filament\Resources\KurikulumSemester4Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumSemester4s extends ListRecords
{
    protected static string $resource = KurikulumSemester4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
