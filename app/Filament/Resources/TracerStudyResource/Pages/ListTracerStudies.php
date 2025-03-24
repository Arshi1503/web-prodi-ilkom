<?php

namespace App\Filament\Resources\TracerStudyResource\Pages;

use App\Filament\Resources\TracerStudyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTracerStudies extends ListRecords
{
    protected static string $resource = TracerStudyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
