<?php

namespace App\Filament\Resources\KurikulumSemester6Resource\Pages;

use App\Filament\Resources\KurikulumSemester6Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumSemester6s extends ListRecords
{
    protected static string $resource = KurikulumSemester6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
