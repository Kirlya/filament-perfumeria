<?php

namespace App\Filament\Resources\Provincias\Pages;

use App\Filament\Resources\Provincias\ProvinciasResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProvincias extends EditRecord
{
    protected static string $resource = ProvinciasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
