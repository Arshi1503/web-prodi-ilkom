<?php

namespace App\Filament\Resources\TracerStudyResource\Pages;

use App\Filament\Resources\TracerStudyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTracerStudy extends EditRecord
{
    protected static string $resource = TracerStudyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
