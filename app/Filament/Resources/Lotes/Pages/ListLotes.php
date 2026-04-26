<?php

namespace App\Filament\Resources\Lotes\Pages;

use App\Filament\Resources\Lotes\LotesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLotes extends ListRecords
{
    protected static string $resource = LotesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
