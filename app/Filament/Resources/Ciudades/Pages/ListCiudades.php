<?php

namespace App\Filament\Resources\Ciudades\Pages;

use App\Filament\Resources\Ciudades\CiudadesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCiudades extends ListRecords
{
    protected static string $resource = CiudadesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
