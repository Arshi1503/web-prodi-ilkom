<?php

namespace App\Filament\Resources\TracerStudyResource\Pages;

use App\Filament\Resources\TracerStudyResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTracerStudy extends ViewRecord
{
    protected static string $resource = TracerStudyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
