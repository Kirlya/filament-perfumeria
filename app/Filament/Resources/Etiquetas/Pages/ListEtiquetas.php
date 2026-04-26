<?php

namespace App\Filament\Resources\Etiquetas\Pages;

use App\Filament\Resources\Etiquetas\EtiquetasResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEtiquetas extends ListRecords
{
    protected static string $resource = EtiquetasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
