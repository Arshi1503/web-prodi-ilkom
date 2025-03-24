<?php

namespace App\Filament\Resources\TestimoniAlumniResource\Pages;

use App\Filament\Resources\TestimoniAlumniResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimoniAlumni extends EditRecord
{
    protected static string $resource = TestimoniAlumniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
