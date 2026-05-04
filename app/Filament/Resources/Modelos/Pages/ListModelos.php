<?php

namespace App\Filament\Resources\Modelos\Pages;

use App\Filament\Resources\Modelos\ModelosResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListModelos extends ListRecords
{
    protected static string $resource = ModelosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
