<?php

namespace App\Filament\Resources\Subcategorias\Pages;

use App\Filament\Resources\Subcategorias\SubcategoriasResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSubcategorias extends ListRecords
{
    protected static string $resource = SubcategoriasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
