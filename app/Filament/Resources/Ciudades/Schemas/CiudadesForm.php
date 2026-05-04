<?php

namespace App\Filament\Resources\Ciudades\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CiudadesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
            ]);
    }
}
