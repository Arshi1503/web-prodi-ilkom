<?php

namespace App\Filament\Resources\Publikasi1Resource\Pages;

use App\Filament\Resources\Publikasi1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPublikasi1 extends ViewRecord
{
    protected static string $resource = Publikasi1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
