<?php

namespace App\Filament\Resources\Publikasi1Resource\Pages;

use App\Filament\Resources\Publikasi1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublikasi1 extends EditRecord
{
    protected static string $resource = Publikasi1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
