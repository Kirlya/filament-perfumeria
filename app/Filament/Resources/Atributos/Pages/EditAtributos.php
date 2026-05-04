<?php

namespace App\Filament\Resources\Atributos\Pages;

use App\Filament\Resources\Atributos\AtributosResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAtributos extends EditRecord
{
    protected static string $resource = AtributosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
