<?php

namespace App\Filament\Resources\Modelos\Pages;

use App\Filament\Resources\Modelos\ModelosResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditModelos extends EditRecord
{
    protected static string $resource = ModelosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
