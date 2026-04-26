<?php

namespace App\Filament\Resources\Etiquetas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EtiquetasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                Toggle::make('activo')
                    ->required(),
            ]);
    }
}
