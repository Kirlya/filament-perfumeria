<?php

namespace App\Filament\Resources\Modelos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ModelosForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                Toggle::make('activo')
                    ->required(),
                TextInput::make('atributo_id')
                    ->required()
                    ->numeric(),
                TextInput::make('valor')
                    ->required(),
                TextInput::make('producto_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
