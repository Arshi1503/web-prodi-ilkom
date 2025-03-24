<?php

namespace App\Filament\Resources\TestimoniAlumniResource\Pages;

use App\Filament\Resources\TestimoniAlumniResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimoniAlumnis extends ListRecords
{
    protected static string $resource = TestimoniAlumniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
