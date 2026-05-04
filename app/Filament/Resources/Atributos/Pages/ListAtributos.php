<?php

namespace App\Filament\Resources\Atributos\Pages;

use App\Filament\Resources\Atributos\AtributosResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAtributos extends ListRecords
{
    protected static string $resource = AtributosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
