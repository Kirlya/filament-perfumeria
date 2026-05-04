<?php

namespace App\Filament\Resources\Cps\Pages;

use App\Filament\Resources\Cps\CpsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCps extends EditRecord
{
    protected static string $resource = CpsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
