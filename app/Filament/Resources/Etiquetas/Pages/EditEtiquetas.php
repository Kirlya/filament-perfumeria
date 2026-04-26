<?php

namespace App\Filament\Resources\Etiquetas\Pages;

use App\Filament\Resources\Etiquetas\EtiquetasResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEtiquetas extends EditRecord
{
    protected static string $resource = EtiquetasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
