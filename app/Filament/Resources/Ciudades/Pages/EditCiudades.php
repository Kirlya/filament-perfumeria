<?php

namespace App\Filament\Resources\Ciudades\Pages;

use App\Filament\Resources\Ciudades\CiudadesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCiudades extends EditRecord
{
    protected static string $resource = CiudadesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
