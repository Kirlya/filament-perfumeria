<?php

namespace App\Filament\Resources\Subcategorias\Pages;

use App\Filament\Resources\Subcategorias\SubcategoriasResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSubcategorias extends EditRecord
{
    protected static string $resource = SubcategoriasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
