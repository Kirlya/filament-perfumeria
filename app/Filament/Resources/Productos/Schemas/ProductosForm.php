<?php

namespace App\Filament\Resources\Productos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProductosForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('codigo')
                    ->required(),
                TextInput::make('nombre')
                    ->required(),
                Textarea::make('descripcion')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('precio')
                    ->required()
                    ->numeric(),
                Toggle::make('activo')
                    ->required(),
                TextInput::make('imagen')
                    ->default(null),
                TextInput::make('marca_id')
                    ->required()
                    ->numeric(),
                TextInput::make('subcategoria_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
