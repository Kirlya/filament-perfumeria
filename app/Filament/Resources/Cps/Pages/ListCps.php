<?php

namespace App\Filament\Resources\Cps\Pages;

use App\Filament\Resources\Cps\CpsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCps extends ListRecords
{
    protected static string $resource = CpsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
